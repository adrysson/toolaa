<?php
namespace App\Controller\V1;

use App\Controller\Api\AppController;

/**
 * Artigos Controller
 *
 * @property \App\Model\Table\ArtigosTable $Artigos
 *
 * @method \App\Model\Entity\Artigo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ArtigosController extends AppController
{

    public function beforeFilter(\Cake\Event\Event $event)
    {
        $this->Crud->listener('relatedModels')->relatedModels('Categorias', 'index');
    }

    public function view($id) {
        $this->Crud->on('beforeFind', function (\Cake\Event\Event $event) {
            $event->subject->query->contain(['Categorias', 'Testes' => 'Subtestes']);
        });

        return $this->Crud->execute();
    }

}
