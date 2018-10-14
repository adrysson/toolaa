<?php
namespace App\Controller\Api\V1;

use App\Controller\AppController;

/**
 * Artigos Controller
 *
 * @property \App\Model\Table\ArtigosTable $Artigos
 *
 * @method \App\Model\Entity\Artigo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ArtigosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Categorias']
        ];
        $artigos = $this->paginate($this->Artigos);

        $this->set([
            'artigos'  => $artigos,
            '_serialize' => 'artigos',
        ]);
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
            'contain' => ['Categorias', 'Testes']
        ]);

        $this->set([
            'artigo'  => $artigo,
            '_serialize' => 'artigo',
        ]);
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
            $artigo = $this->Artigos->patchEntity($artigo, $this->request->getData(), ['associated' => 'Categorias']);
            if ($artigo_salvo = $this->Artigos->save($artigo)) {
                $this->set([
                    'artigo' => $artigo_salvo,
                    '_serialize' => 'artigo'
                ]);
            }else{
                $this->response = $this->response->withStatus(422);
                $this->set([
                    'errors' => $artigo->errors(),
                    '_serialize' => 'errors'
                ]);
            }
        }
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
        $artigo = $this->Artigos->get($id);
        if ($this->request->is(['patch', 'put'])) {
            $artigo = $this->Artigos->patchEntity($artigo, $this->request->getData(), ['associated' => 'Categorias']);
            if ($artigo_salvo = $this->Artigos->save($artigo)) {
                $this->set([
                    'artigo' => $artigo_salvo,
                    '_serialize' => 'artigo'
                ]);
            }else{
                $this->response = $this->response->withStatus(422);
                $this->set([
                    'errors' => $artigo->errors(),
                    '_serialize' => 'errors'
                ]);
            }
        }
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
        $apagado = $this->Artigos->delete($artigo);
        $this->set([
            'artigo' => $artigo,
            'apagado' => $apagado,
            '_serialize' => ['artigo', 'apagado']
        ]);
    }
}
