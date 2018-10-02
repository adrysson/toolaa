<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TestesTipos Controller
 *
 * @property \App\Model\Table\TestesTiposTable $TestesTipos
 *
 * @method \App\Model\Entity\TestesTipo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TestesTiposController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $testesTipos = $this->paginate($this->TestesTipos);

        $this->set(compact('testesTipos'));
    }

    /**
     * View method
     *
     * @param string|null $id Testes Tipo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $testesTipo = $this->TestesTipos->get($id, [
            'contain' => []
        ]);

        $this->set('testesTipo', $testesTipo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $testesTipo = $this->TestesTipos->newEntity();
        if ($this->request->is('post')) {
            $testesTipo = $this->TestesTipos->patchEntity($testesTipo, $this->request->getData());
            if ($this->TestesTipos->save($testesTipo)) {
                $this->Flash->success(__('The testes tipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The testes tipo could not be saved. Please, try again.'));
        }
        $this->set(compact('testesTipo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Testes Tipo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $testesTipo = $this->TestesTipos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $testesTipo = $this->TestesTipos->patchEntity($testesTipo, $this->request->getData());
            if ($this->TestesTipos->save($testesTipo)) {
                $this->Flash->success(__('The testes tipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The testes tipo could not be saved. Please, try again.'));
        }
        $this->set(compact('testesTipo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Testes Tipo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $testesTipo = $this->TestesTipos->get($id);
        if ($this->TestesTipos->delete($testesTipo)) {
            $this->Flash->success(__('The testes tipo has been deleted.'));
        } else {
            $this->Flash->error(__('The testes tipo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
