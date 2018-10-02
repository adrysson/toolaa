<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TestesFixture
 *
 */
class TestesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'lista_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'conteudo' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'tipo_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'resultado_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_testes_listas' => ['type' => 'index', 'columns' => ['lista_id'], 'length' => []],
            'fk_testes_tipos' => ['type' => 'index', 'columns' => ['tipo_id'], 'length' => []],
            'fk_testes_resultados' => ['type' => 'index', 'columns' => ['resultado_id'], 'length' => []],
            'fk_testes_users' => ['type' => 'index', 'columns' => ['user_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_testes_listas' => ['type' => 'foreign', 'columns' => ['lista_id'], 'references' => ['testes_listas', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
            'fk_testes_resultados' => ['type' => 'foreign', 'columns' => ['resultado_id'], 'references' => ['testes_resultados', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
            'fk_testes_tipos' => ['type' => 'foreign', 'columns' => ['tipo_id'], 'references' => ['testes_tipos', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
            'fk_testes_users' => ['type' => 'foreign', 'columns' => ['user_id'], 'references' => ['users', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
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
                'lista_id' => 1,
                'conteudo' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'tipo_id' => 1,
                'resultado_id' => 1,
                'user_id' => 1,
                'created' => '2018-10-02 16:26:52',
                'modified' => '2018-10-02 16:26:52'
            ],
        ];
        parent::init();
    }
}
