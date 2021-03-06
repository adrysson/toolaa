<?php
use Migrations\AbstractMigration;

class CreateSubtestesTipos extends AbstractMigration
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
        $table = $this->table('subtestes_tipos');
        $table->addColumn('nome', 'string', [
            'default' => null,
            'limit' => 50,
            'null' => false,
        ]);
        $table->addIndex('nome', ['unique' => true]);
        $table->create();
    }
}
