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
            'contain' => ['Artigos', 'Ferramentas', 'Usuarios'],
            'limit' => 5,
            'order' => ['id' => 'desc']
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
        $teste = $this->Testes->get($id, [
            'contain' => ['Artigos', 'Ferramentas', 'Usuarios', 'Subtestes' => ['Tipos', 'Resultados']]
        ]);

        $this->set('teste', $teste);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $teste = $this->Testes->newEntity();
        if ($this->request->is('post')) {
            $teste = $this->Testes->patchEntity($teste, $this->request->getData(), ['associated' => ['Artigos' => ['associated' => 'Categorias'], 'Ferramentas', 'Subtestes']]);
            if ($this->Testes->save($teste)) {
                $this->Flash->success(__('O teste foi salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Devido a um erro não foi possível salvar o teste. Tente novamente.'));
        }
        $artigos = $this->Testes->Artigos->find('list', ['limit' => 200, 'keyField' => 'id', 'valueField' => 'titulo', 'order' => ['titulo' => 'asc']]);
        $ferramentas = $this->Testes->Ferramentas->find('list', ['limit' => 200, 'keyField' => 'id', 'valueField' => 'nome', 'order' => ['nome' => 'asc']]);
        $usuarios = $this->Testes->Usuarios->find('list', ['limit' => 200, 'keyField' => 'id', 'valueField' => 'nome', 'order' => ['nome' => 'asc']]);
        $resultados = $this->Testes->Subtestes->Resultados->find('list', ['limit' => 200, 'keyField' => 'id', 'valueField' => 'nome', 'order' => ['nome' => 'asc']]);
        $categorias = $this->Testes->Artigos->Categorias->find('list', ['limit' => 200, 'keyField' => 'id', 'valueField' => 'nome', 'order'=>['nome' => 'asc']]);
        $this->set(compact('teste', 'artigos', 'ferramentas', 'usuarios', 'resultados', 'categorias'));
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
        $teste = $this->Testes->get($id, [
            'contain' => ['Subtestes']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $teste = $this->Testes->patchEntity($teste, $this->request->getData());
            if ($this->Testes->save($teste)) {
                $this->Flash->success(__('O teste foi salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Devido a um erro não foi possível salvar o teste. Tente novamente.'));
        }
        $artigos = $this->Testes->Artigos->find('list', ['limit' => 200, 'keyField' => 'id', 'valueField' => 'titulo', 'order' => ['titulo' => 'asc']]);
        $ferramentas = $this->Testes->Ferramentas->find('list', ['limit' => 200, 'keyField' => 'id', 'valueField' => 'nome', 'order' => ['nome' => 'asc']]);
        $usuarios = $this->Testes->Usuarios->find('list', ['limit' => 200, 'keyField' => 'id', 'valueField' => 'nome', 'order' => ['nome' => 'asc']]);
        $resultados = $this->Testes->Subtestes->Resultados->find('list', ['limit' => 200, 'keyField' => 'id', 'valueField' => 'nome', 'order' => ['nome' => 'asc']]);
        $this->set(compact('teste', 'artigos', 'ferramentas', 'usuarios', 'resultados'));
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
        $teste = $this->Testes->get($id);
        if ($this->Testes->delete($teste)) {
            $this->Flash->success(__('O teste foi apagado com sucesso.'));
        } else {
            $this->Flash->error(__('Devido a um erro não foi possível salvar o teste. Tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
