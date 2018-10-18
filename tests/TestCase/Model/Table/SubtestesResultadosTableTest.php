<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SubtestesResultadosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SubtestesResultadosTable Test Case
 */
class SubtestesResultadosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SubtestesResultadosTable
     */
    public $SubtestesResultados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.subtestes_resultados'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('SubtestesResultados') ? [] : ['className' => SubtestesResultadosTable::class];
        $this->SubtestesResultados = TableRegistry::getTableLocator()->get('SubtestesResultados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SubtestesResultados);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
