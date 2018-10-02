<?php
use Migrations\AbstractMigration;

class CreateFerramentas extends AbstractMigration
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
        $this->table('ferramentas')
        ->addColumn('nome', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ])
        ->create();
    }
}
