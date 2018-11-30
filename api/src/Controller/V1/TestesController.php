<?php
namespace App\Controller\V1;

use App\Controller\V1\AppController;

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
            'contain' => ['Artigos', 'Ferramentas', 'Usuarios']
        ];
        $testes = $this->paginate($this->Testes);

        $this->set([
            'testes'  => $testes,
            '_serialize' => 'testes',
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Testis id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
     public function view($id) {
         $this->Crud->on('beforeFind', function (\Cake\Event\Event $event) {
             $event->subject->query->contain(['Artigos', 'Ferramentas', 'Usuarios', 'Subtestes']);
         });

         return $this->Crud->execute();
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
            $teste = $this->Testes->patchEntity($teste, $this->request->getData(), ['associated' => ['Subtestes', 'Ferramentas', 'Artigos' => ['associated' => 'Categorias']]]);
            if ($teste_salvo = $this->Testes->save($teste)) {
                $this->set([
                    'teste' => $teste_salvo,
                    '_serialize' => 'teste'
                ]);
            }else{
                $this->response = $this->response->withStatus(422);
                $this->set([
                    'errors' => $teste->errors(),
                    '_serialize' => 'errors'
                ]);
            }
        }
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
        $teste = $this->Testes->get($id);
        if ($this->request->is(['patch', 'put'])) {
            $teste = $this->Testes->patchEntity($teste, $this->request->getData(), ['associated' => 'Subtestes']);
            if ($teste_salvo = $this->Testes->save($teste)) {
                $this->set([
                    'teste' => $teste_salvo,
                    '_serialize' => 'teste'
                ]);
            }else{
                $this->response = $this->response->withStatus(422);
                $this->set([
                    'errors' => $teste->errors(),
                    '_serialize' => 'errors'
                ]);
            }
        }
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
        $this->request->allowMethod(['delete']);
        $teste = $this->Testes->get($id);
        $apagado = $this->Testes->delete($teste);
        $this->set([
            'teste' => $teste,
            'apagado' => $apagado,
            '_serialize' => ['teste', 'apagado']
        ]);
    }
}
