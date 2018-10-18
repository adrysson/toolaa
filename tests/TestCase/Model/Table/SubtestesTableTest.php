<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SubtestesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SubtestesTable Test Case
 */
class SubtestesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SubtestesTable
     */
    public $Subtestes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.subtestes',
        'app.subtestes_tipos',
        'app.testes',
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
        $config = TableRegistry::getTableLocator()->exists('Subtestes') ? [] : ['className' => SubtestesTable::class];
        $this->Subtestes = TableRegistry::getTableLocator()->get('Subtestes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Subtestes);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
