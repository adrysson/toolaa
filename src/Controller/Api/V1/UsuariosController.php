<?php
namespace App\Controller\Api\V1;

use App\Controller\AppController;

/**
 * Usuarios Controller
 *
 * @property \App\Model\Table\UsuariosTable $Usuarios
 *
 * @method \App\Model\Entity\Usuario[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsuariosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Grupos', 'Perfis']
        ];
        $usuarios = $this->paginate($this->Usuarios);

        $this->set([
            'usuarios'  => $usuarios,
            '_serialize' => 'usuarios',
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Usuario id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usuario = $this->Usuarios->get($id, [
            'contain' => ['Grupos', 'Perfis', 'Testes']
        ]);

        $this->set([
            'usuario'  => $usuario,
            '_serialize' => 'usuario',
        ]);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usuario = $this->Usuarios->newEntity();
        if ($this->request->is('post')) {
            $usuario = $this->Usuarios->patchEntity($usuario, $this->request->getData());
            if ($usuario_salvo = $this->Usuarios->save($usuario)) {
                $this->set([
                    'usuario' => $usuario_salvo,
                    '_serialize' => 'usuario'
                ]);
            }else{
                $this->response = $this->response->withStatus(422);
                $this->set([
                    'errors' => $usuario->errors(),
                    '_serialize' => 'errors'
                ]);
            }
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id Usuario id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usuario = $this->Usuarios->get($id);
        if ($this->request->is(['patch', 'put'])) {
            $usuario = $this->Usuarios->patchEntity($usuario, $this->request->getData());
            if ($usuario_salvo = $this->Usuarios->save($usuario)) {
                $this->set([
                    'usuario' => $usuario_salvo,
                    '_serialize' => 'usuario'
                ]);
            }else{
                $this->response = $this->response->withStatus(422);
                $this->set([
                    'errors' => $usuario->errors(),
                    '_serialize' => 'errors'
                ]);
            }
        }
    }

    /**
     * Delete method
     *
     * @param string|null $id Usuario id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['delete']);
        $usuario = $this->Usuarios->get($id);
        $apagado = $this->Usuarios->delete($usuario);
        $this->set([
            'usuario' => $usuario,
            'apagado' => $apagado,
            '_serialize' => ['usuario', 'apagado']
        ]);
    }
}
