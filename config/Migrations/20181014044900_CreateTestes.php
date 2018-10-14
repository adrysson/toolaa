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
        $table = $this->table('testes');
        $table->addColumn('artigo_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('ferramenta_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('usuario_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => 'CURRENT_TIMESTAMP',
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => 'CURRENT_TIMESTAMP',
            'null' => false,
        ]);
        $table->addForeignKey('artigo_id', 'artigos', 'id', [
            'delete'=> 'CASCADE',
            'constraint' => 'fk_testes_artigos'
        ]);
        $table->addForeignKey('ferramenta_id', 'ferramentas', 'id', [
            'delete'=> 'CASCADE',
            'constraint' => 'fk_testes_ferramentas'
        ]);
        $table->addForeignKey('usuario_id', 'usuarios', 'id', [
            'delete'=> 'CASCADE',
            'constraint' => 'fk_testes_usuarios'
        ]);
        $table->create();
    }
}
