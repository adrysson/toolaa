<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TestesResultados Controller
 *
 * @property \App\Model\Table\TestesResultadosTable $TestesResultados
 *
 * @method \App\Model\Entity\TestesResultado[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TestesResultadosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $testesResultados = $this->paginate($this->TestesResultados);

        $this->set(compact('testesResultados'));
    }

    /**
     * View method
     *
     * @param string|null $id Testes Resultado id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $testesResultado = $this->TestesResultados->get($id, [
            'contain' => []
        ]);

        $this->set('testesResultado', $testesResultado);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $testesResultado = $this->TestesResultados->newEntity();
        if ($this->request->is('post')) {
            $testesResultado = $this->TestesResultados->patchEntity($testesResultado, $this->request->getData());
            if ($this->TestesResultados->save($testesResultado)) {
                $this->Flash->success(__('The testes resultado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The testes resultado could not be saved. Please, try again.'));
        }
        $this->set(compact('testesResultado'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Testes Resultado id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $testesResultado = $this->TestesResultados->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $testesResultado = $this->TestesResultados->patchEntity($testesResultado, $this->request->getData());
            if ($this->TestesResultados->save($testesResultado)) {
                $this->Flash->success(__('The testes resultado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The testes resultado could not be saved. Please, try again.'));
        }
        $this->set(compact('testesResultado'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Testes Resultado id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $testesResultado = $this->TestesResultados->get($id);
        if ($this->TestesResultados->delete($testesResultado)) {
            $this->Flash->success(__('The testes resultado has been deleted.'));
        } else {
            $this->Flash->error(__('The testes resultado could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
