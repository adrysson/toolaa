<?php
namespace App\Controller\Api\V1;

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

        $this->set([
            'ferramentas'  => $ferramentas,
            '_serialize' => 'ferramentas',
        ]);
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
            'contain' => ['Testes']
        ]);

        $this->set([
            'ferramenta'  => $ferramenta,
            '_serialize' => 'ferramenta',
        ]);
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
            if ($ferramenta_salvo = $this->Ferramentas->save($ferramenta)) {
                $this->set([
                    'ferramenta' => $ferramenta_salvo,
                    '_serialize' => 'ferramenta'
                ]);
            }else{
                $this->response = $this->response->withStatus(422);
                $this->set([
                    'errors' => $ferramenta->errors(),
                    '_serialize' => 'errors'
                ]);
            }
        }
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
        $ferramenta = $this->Ferramentas->get($id);
        if ($this->request->is(['patch', 'put'])) {
            $ferramenta = $this->Ferramentas->patchEntity($ferramenta, $this->request->getData());
            if ($ferramenta_salvo = $this->Ferramentas->save($ferramenta)) {
                $this->set([
                    'ferramenta' => $ferramenta_salvo,
                    '_serialize' => 'ferramenta'
                ]);
            }else{
                $this->response = $this->response->withStatus(422);
                $this->set([
                    'errors' => $ferramenta->errors(),
                    '_serialize' => 'errors'
                ]);
            }
        }
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
        $apagado = $this->Ferramentas->delete($ferramenta);
        $this->set([
            'ferramenta' => $ferramenta,
            'apagado' => $apagado,
            '_serialize' => ['ferramenta', 'apagado']
        ]);
    }
}
