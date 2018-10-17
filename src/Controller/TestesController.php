<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Testes Controller
 *
 * @property \App\Model\Table\TestesTable $Testes
 *
 * @method \App\Model\Entity\Testis[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TestesController extends AppController
{

    public function beforeRender(Event $event)
    {
        parent::beforeRender($event);
        $this->viewBuilder()->setHelpers(['Materialize.Form']);
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Artigos', 'Ferramentas', 'Usuarios']
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
            'contain' => ['Artigos', 'Ferramentas', 'Usuarios', 'Subtestes']
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
        $artigos = $this->Testes->Artigos->find('list', ['limit' => 200]);
        $ferramentas = $this->Testes->Ferramentas->find('list', ['limit' => 200]);
        $usuarios = $this->Testes->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('testis', 'artigos', 'ferramentas', 'usuarios'));
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
        $artigos = $this->Testes->Artigos->find('list', ['limit' => 200]);
        $ferramentas = $this->Testes->Ferramentas->find('list', ['limit' => 200]);
        $usuarios = $this->Testes->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('testis', 'artigos', 'ferramentas', 'usuarios'));
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