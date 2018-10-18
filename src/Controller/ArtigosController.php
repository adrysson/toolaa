<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Artigos Controller
 *
 * @property \App\Model\Table\ArtigosTable $Artigos
 *
 * @method \App\Model\Entity\Artigo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ArtigosController extends AppController
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
            'contain' => 'Categorias',
            'limit' => 5,
            'order' => ['Artigos.id' => 'desc']
        ];
        $artigos = $this->paginate($this->Artigos);

        $this->set(compact('artigos'));
    }

    /**
     * View method
     *
     * @param string|null $id Artigo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $artigo = $this->Artigos->get($id, [
            'contain' => ['Categorias', 'Testes' => ['Ferramentas', 'Usuarios']]
        ]);

        $this->set('artigo', $artigo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $artigo = $this->Artigos->newEntity();
        if ($this->request->is('post')) {
            $artigo = $this->Artigos->patchEntity($artigo, $this->request->getData());
            if ($this->Artigos->save($artigo)) {
                $this->Flash->success(__('O artigo foi salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Devido a um erro o artigo não foi salvo. Tente novamente.'));
        }
        $categorias = $this->Artigos->Categorias->find('list', ['limit' => 200, 'keyField' => 'id', 'valueField' => 'nome', 'order'=>['nome' => 'asc']]);
        $this->set(compact('artigo', 'categorias'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Artigo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $artigo = $this->Artigos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $artigo = $this->Artigos->patchEntity($artigo, $this->request->getData());
            if ($this->Artigos->save($artigo)) {
                $this->Flash->success(__('O artigo foi salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Devido a um erro o artigo não foi salvo. Tente novamente.'));
        }
        $categorias = $this->Artigos->Categorias->find('list', ['limit' => 200, 'keyField' => 'id', 'valueField' => 'nome', 'order'=>['nome' => 'asc']]);
        $this->set(compact('artigo', 'categorias'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Artigo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $artigo = $this->Artigos->get($id);
        if ($this->Artigos->delete($artigo)) {
            $this->Flash->success(__('O artigo foi apagado com sucesso.'));
        } else {
            $this->Flash->error(__('Devido a um erro o artigo não foi apagado. Tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
