<?php
use Migrations\AbstractMigration;

class CreateUsuariosPerfis extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('usuarios_perfis');
        $table->addColumn('nome', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => false,
        ]);
        $table->addIndex('nome', ['unique' => true]);
        $table->create();
    }
}
