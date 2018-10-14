<?php
use Migrations\AbstractMigration;
use Cake\Auth\DefaultPasswordHasher;

class InsertUserRoot extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function up()
    {
        $grupo = [
            'id'        => 1,
            'nome'      => utf8_decode('Administração Toolaa')
        ];

        $perfis = [
            [
                'id'    => 1,
                'nome'  => 'Administrador'
            ],
            [
                'id'    => 2,
                'nome'  => 'Professor'
            ],
            [
                'id'    => 3,
                'nome'  => 'Pesquisador'
            ],
        ];

        $usuario = [
            'id'        => 1,
            'nome'      => 'Boss',
            'email'     => 'dev@toolaa.com.br',
            'senha'     => (new DefaultPasswordHasher())->hash('toolaadev123'),
            'grupo_id'  => 1,
            'perfil_id' => 1,
        ];

        $this->table('grupos')->insert($grupo)->saveData();
        $this->table('usuarios_perfis')->insert($perfis)->save();
        $this->table('usuarios')->insert($usuario)->saveData();
    }

    public function down()
    {
        $this->execute('DELETE FROM grupos');
        $this->execute('DELETE FROM usuarios_perfis');
        $this->execute('DELETE FROM usuarios');
    }
}
