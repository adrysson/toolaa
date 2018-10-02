<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Testes Controller
 *
 * @property \App\Model\Table\TestesTable $Testes
 *
 * @method \App\Model\Entity\Testis[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TestesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['TestesListas', 'TestesTipos', 'TestesResultados', 'Users']
        ];
        $testes = $this->paginate($this->Testes);

        $this->set(compact('testes'));
    }

    /**
     * View method
     *
     * @param string|null $id Testis id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $testis = $this->Testes->get($id, [
            'contain' => ['TestesListas', 'TestesTipos', 'TestesResultados', 'Users']
        ]);

        $this->set('testis', $testis);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $testis = $this->Testes->newEntity();
        if ($this->request->is('post')) {
            $testis = $this->Testes->patchEntity($testis, $this->request->getData());
            if ($this->Testes->save($testis)) {
                $this->Flash->success(__('The testis has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The testis could not be saved. Please, try again.'));
        }
        $testesListas = $this->Testes->TestesListas->find('list', ['limit' => 200]);
        $testesTipos = $this->Testes->TestesTipos->find('list', ['limit' => 200]);
        $testesResultados = $this->Testes->TestesResultados->find('list', ['limit' => 200]);
        $users = $this->Testes->Users->find('list', ['limit' => 200]);
        $this->set(compact('testis', 'testesListas', 'testesTipos', 'testesResultados', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Testis id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $testis = $this->Testes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $testis = $this->Testes->patchEntity($testis, $this->request->getData());
            if ($this->Testes->save($testis)) {
                $this->Flash->success(__('The testis has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The testis could not be saved. Please, try again.'));
        }
        $testesListas = $this->Testes->TestesListas->find('list', ['limit' => 200]);
        $testesTipos = $this->Testes->TestesTipos->find('list', ['limit' => 200]);
        $testesResultados = $this->Testes->TestesResultados->find('list', ['limit' => 200]);
        $users = $this->Testes->Users->find('list', ['limit' => 200]);
        $this->set(compact('testis', 'testesListas', 'testesTipos', 'testesResultados', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Testis id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $testis = $this->Testes->get($id);
        if ($this->Testes->delete($testis)) {
            $this->Flash->success(__('The testis has been deleted.'));
        } else {
            $this->Flash->error(__('The testis could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
