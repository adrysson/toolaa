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
        $data = [
            'id'        => 1,
            'username'  => 'toolaroot',
            'password'  => (new DefaultPasswordHasher())->hash('toola123'),
            'nome'      => 'Root',
            'admin'     => 1,
        ];
        $this->table('users')->insert($data)->saveData();
    }

    public function down()
    {
        $this->execute('DELETE FROM users');
    }
}
