<?php
use Migrations\AbstractMigration;

class CreateTestes extends AbstractMigration
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
        $this->table('testes')
        ->addColumn('lista_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ])
        ->addColumn('conteudo', 'text', [
            'default' => null,
            'null' => false,
        ])
        ->addColumn('tipo_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ])
        ->addColumn('resultado_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ])
        ->addColumn('user_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ])
        ->addColumn('created', 'datetime', [
            'default' => 'CURRENT_TIMESTAMP',
            'null' => false,
        ])
        ->addColumn('modified', 'datetime', [
            'default' => 'CURRENT_TIMESTAMP',
            'null' => false,
        ])
        ->addForeignKey('lista_id', 'testes_listas', 'id', [
            'delete'=> 'CASCADE',
            'constraint' => 'fk_testes_listas'
        ])
        ->addForeignKey('tipo_id', 'testes_tipos', 'id', [
            'delete'=> 'CASCADE',
            'constraint' => 'fk_testes_tipos'
        ])
        ->addForeignKey('resultado_id', 'testes_resultados', 'id', [
            'delete'=> 'CASCADE',
            'constraint' => 'fk_testes_resultados'
        ])
        ->addForeignKey('user_id', 'users', 'id', [
            'delete'=> 'CASCADE',
            'constraint' => 'fk_testes_users'
        ])
        ->create();
    }
}
