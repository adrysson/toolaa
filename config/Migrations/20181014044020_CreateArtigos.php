<?php
use Migrations\AbstractMigration;

class CreateArtigos extends AbstractMigration
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
        $table = $this->table('artigos');
        $table->addColumn('nome', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('categoria_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addForeignKey('categoria_id', 'artigos_categorias', 'id', [
            'delete'=> 'CASCADE',
            'constraint' => 'fk_artigos_categorias'
        ]);
        $table->create();
    }
}
