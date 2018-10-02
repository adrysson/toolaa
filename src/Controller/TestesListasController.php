<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TestesListas Controller
 *
 * @property \App\Model\Table\TestesListasTable $TestesListas
 *
 * @method \App\Model\Entity\TestesLista[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TestesListasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Artigos', 'Ferramentas', 'Users']
        ];
        $testesListas = $this->paginate($this->TestesListas);

        $this->set(compact('testesListas'));
    }

    /**
     * View method
     *
     * @param string|null $id Testes Lista id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $testesLista = $this->TestesListas->get($id, [
            'contain' => ['Artigos', 'Ferramentas', 'Users']
        ]);

        $this->set('testesLista', $testesLista);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $testesLista = $this->TestesListas->newEntity();
        if ($this->request->is('post')) {
            $testesLista = $this->TestesListas->patchEntity($testesLista, $this->request->getData());
            if ($this->TestesListas->save($testesLista)) {
                $this->Flash->success(__('The testes lista has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The testes lista could not be saved. Please, try again.'));
        }
        $artigos = $this->TestesListas->Artigos->find('list', ['limit' => 200]);
        $ferramentas = $this->TestesListas->Ferramentas->find('list', ['limit' => 200]);
        $users = $this->TestesListas->Users->find('list', ['limit' => 200]);
        $this->set(compact('testesLista', 'artigos', 'ferramentas', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Testes Lista id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $testesLista = $this->TestesListas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $testesLista = $this->TestesListas->patchEntity($testesLista, $this->request->getData());
            if ($this->TestesListas->save($testesLista)) {
                $this->Flash->success(__('The testes lista has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The testes lista could not be saved. Please, try again.'));
        }
        $artigos = $this->TestesListas->Artigos->find('list', ['limit' => 200]);
        $ferramentas = $this->TestesListas->Ferramentas->find('list', ['limit' => 200]);
        $users = $this->TestesListas->Users->find('list', ['limit' => 200]);
        $this->set(compact('testesLista', 'artigos', 'ferramentas', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Testes Lista id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $testesLista = $this->TestesListas->get($id);
        if ($this->TestesListas->delete($testesLista)) {
            $this->Flash->success(__('The testes lista has been deleted.'));
        } else {
            $this->Flash->error(__('The testes lista could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
