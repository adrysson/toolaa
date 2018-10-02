<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ferramentas Controller
 *
 * @property \App\Model\Table\FerramentasTable $Ferramentas
 *
 * @method \App\Model\Entity\Ferramenta[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FerramentasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $ferramentas = $this->paginate($this->Ferramentas);

        $this->set(compact('ferramentas'));
    }

    /**
     * View method
     *
     * @param string|null $id Ferramenta id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ferramenta = $this->Ferramentas->get($id, [
            'contain' => ['TestesListas']
        ]);

        $this->set('ferramenta', $ferramenta);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ferramenta = $this->Ferramentas->newEntity();
        if ($this->request->is('post')) {
            $ferramenta = $this->Ferramentas->patchEntity($ferramenta, $this->request->getData());
            if ($this->Ferramentas->save($ferramenta)) {
                $this->Flash->success(__('The ferramenta has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ferramenta could not be saved. Please, try again.'));
        }
        $this->set(compact('ferramenta'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ferramenta id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ferramenta = $this->Ferramentas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ferramenta = $this->Ferramentas->patchEntity($ferramenta, $this->request->getData());
            if ($this->Ferramentas->save($ferramenta)) {
                $this->Flash->success(__('The ferramenta has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ferramenta could not be saved. Please, try again.'));
        }
        $this->set(compact('ferramenta'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ferramenta id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ferramenta = $this->Ferramentas->get($id);
        if ($this->Ferramentas->delete($ferramenta)) {
            $this->Flash->success(__('The ferramenta has been deleted.'));
        } else {
            $this->Flash->error(__('The ferramenta could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
