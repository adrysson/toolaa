<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Subtestes Controller
 *
 * @property \App\Model\Table\SubtestesTable $Subtestes
 *
 * @method \App\Model\Entity\subteste[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SubtestesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Tipos', 'Testes', 'Resultados']
        ];
        $subtestes = $this->paginate($this->Subtestes);

        $this->set(compact('subtestes'));
    }

    /**
     * View method
     *
     * @param string|null $id subteste id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $subteste = $this->Subtestes->get($id, [
            'contain' => ['Tipos', 'Testes', 'Resultados']
        ]);

        $this->set('subteste', $subteste);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $subteste = $this->Subtestes->newEntity();
        if ($this->request->is('post')) {
            $subteste = $this->Subtestes->patchEntity($subteste, $this->request->getData());
            if ($this->Subtestes->save($subteste)) {
                $this->Flash->success(__('The subteste has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The subteste could not be saved. Please, try again.'));
        }
        $tipos = $this->Subtestes->Tipos->find('list', ['limit' => 200]);
        $testes = $this->Subtestes->Testes->find('list', ['limit' => 200]);
        $resultados = $this->Subtestes->Resultados->find('list', ['limit' => 200]);
        $this->set(compact('subteste', 'tipos', 'testes', 'resultados'));
    }

    /**
     * Edit method
     *
     * @param string|null $id subteste id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $subteste = $this->Subtestes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $subteste = $this->Subtestes->patchEntity($subteste, $this->request->getData());
            if ($this->Subtestes->save($subteste)) {
                $this->Flash->success(__('The subteste has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The subteste could not be saved. Please, try again.'));
        }
        $tipos = $this->Subtestes->Tipos->find('list', ['limit' => 200]);
        $testes = $this->Subtestes->Testes->find('list', ['limit' => 200]);
        $resultados = $this->Subtestes->Resultados->find('list', ['limit' => 200]);
        $this->set(compact('subteste', 'tipos', 'testes', 'resultados'));
    }

    /**
     * Delete method
     *
     * @param string|null $id subteste id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $subteste = $this->Subtestes->get($id);
        if ($this->Subtestes->delete($subteste)) {
            $this->Flash->success(__('The subteste has been deleted.'));
        } else {
            $this->Flash->error(__('The subteste could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
