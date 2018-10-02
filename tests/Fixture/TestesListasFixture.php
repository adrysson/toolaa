<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TestesListasFixture
 *
 */
class TestesListasFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'artigo_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'ferramenta_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_testes_listas_artigos' => ['type' => 'index', 'columns' => ['artigo_id'], 'length' => []],
            'fk_testes_listas_ferramentas' => ['type' => 'index', 'columns' => ['ferramenta_id'], 'length' => []],
            'fk_testes_listas_users' => ['type' => 'index', 'columns' => ['user_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_testes_listas_artigos' => ['type' => 'foreign', 'columns' => ['artigo_id'], 'references' => ['artigos', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
            'fk_testes_listas_ferramentas' => ['type' => 'foreign', 'columns' => ['ferramenta_id'], 'references' => ['ferramentas', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
            'fk_testes_listas_users' => ['type' => 'foreign', 'columns' => ['user_id'], 'references' => ['users', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'artigo_id' => 1,
                'ferramenta_id' => 1,
                'user_id' => 1,
                'created' => '2018-10-02 16:27:06',
                'modified' => '2018-10-02 16:27:06'
            ],
        ];
        parent::init();
    }
}
