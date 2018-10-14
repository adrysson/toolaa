<?php
use Migrations\AbstractMigration;

class CreateSubtestes extends AbstractMigration
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
        $table = $this->table('subtestes');
        $table->addColumn('tipo_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('teste_id', 'integer', [
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
        $table->addForeignKey('tipo_id', 'subtestes_tipos', 'id', [
            'delete'=> 'CASCADE',
            'constraint' => 'fk_subtestes_tipos'
        ]);
        $table->addForeignKey('teste_id', 'testes', 'id', [
            'delete'=> 'CASCADE',
            'constraint' => 'fk_subtestes_testes'
        ]);
        $table->addForeignKey('resultado_id', 'subtestes_resultados', 'id', [
            'delete'=> 'CASCADE',
            'constraint' => 'fk_subtestes_resultados'
        ]);
        $table->create();
    }
}
