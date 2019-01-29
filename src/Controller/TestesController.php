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

    public function enviar()
    {
        $testis = $this->Testes->newEntity();
        if ($this->request->is('post')) {
            $testis = $this->Testes->patchEntity($testis, $this->request->getData());
            if ($this->Testes->save($testis)) {
                $this->Flash->success(__('The testis has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            debug($this->request->getData());
            debug($testis->errors());
            $this->Flash->error(__('The testis could not be saved. Please, try again.'));
            die();
        }
        $artigos = $this->Testes->Artigos->find('list', ['limit' => 200]);
        $ferramentas = $this->Testes->Ferramentas->find('list', ['limit' => 200]);
        $usuarios = $this->Testes->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('testis', 'artigos', 'ferramentas', 'usuarios'));
    }
}
