<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SubtestesFixture
 *
 */
class SubtestesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'tipo_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'teste_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'resultado_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'conteudo' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_subtestes_tipos' => ['type' => 'index', 'columns' => ['tipo_id'], 'length' => []],
            'fk_subtestes_testes' => ['type' => 'index', 'columns' => ['teste_id'], 'length' => []],
            'fk_subtestes_resultados' => ['type' => 'index', 'columns' => ['resultado_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_subtestes_resultados' => ['type' => 'foreign', 'columns' => ['resultado_id'], 'references' => ['subtestes_resultados', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
            'fk_subtestes_testes' => ['type' => 'foreign', 'columns' => ['teste_id'], 'references' => ['testes', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
            'fk_subtestes_tipos' => ['type' => 'foreign', 'columns' => ['tipo_id'], 'references' => ['subtestes_tipos', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
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
                'tipo_id' => 1,
                'teste_id' => 1,
                'resultado_id' => 1,
                'conteudo' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
            ],
        ];
        parent::init();
    }
}
