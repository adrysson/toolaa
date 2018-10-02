<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TestesResultadosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TestesResultadosTable Test Case
 */
class TestesResultadosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TestesResultadosTable
     */
    public $TestesResultados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.testes_resultados'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TestesResultados') ? [] : ['className' => TestesResultadosTable::class];
        $this->TestesResultados = TableRegistry::getTableLocator()->get('TestesResultados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TestesResultados);

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
