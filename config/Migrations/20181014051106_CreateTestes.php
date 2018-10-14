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
        $table->addColumn('tipo_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('bloco_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('resultado_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('conteudo', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addForeignKey('tipo_id', 'testes_tipos', 'id', [
            'delete'=> 'CASCADE',
            'constraint' => 'fk_testes_tipos'
        ]);
        $table->addForeignKey('bloco_id', 'testes_blocos', 'id', [
            'delete'=> 'CASCADE',
            'constraint' => 'fk_testes_blocos'
        ]);
        $table->addForeignKey('resultado_id', 'testes_resultados', 'id', [
            'delete'=> 'CASCADE',
            'constraint' => 'fk_testes_resultados'
        ]);
        $table->create();
    }
}
