<?php
use Migrations\AbstractMigration;

class CreateTestesListas extends AbstractMigration
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
        $this->table('testes_listas')
        ->addColumn('artigo_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ])
        ->addColumn('ferramenta_id', 'integer', [
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
        ->addForeignKey('artigo_id', 'artigos', 'id', [
            'delete'=> 'CASCADE',
            'constraint' => 'fk_testes_listas_artigos'
        ])
        ->addForeignKey('ferramenta_id', 'ferramentas', 'id', [
            'delete'=> 'CASCADE',
            'constraint' => 'fk_testes_listas_ferramentas'
        ])
        ->addForeignKey('user_id', 'users', 'id', [
            'delete'=> 'CASCADE',
            'constraint' => 'fk_testes_listas_users'
        ])
        ->create();
    }
}
