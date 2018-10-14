<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TestesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TestesTable Test Case
 */
class TestesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TestesTable
     */
    public $Testes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.testes',
        'app.artigos',
        'app.ferramentas',
        'app.usuarios'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Testes') ? [] : ['className' => TestesTable::class];
        $this->Testes = TableRegistry::getTableLocator()->get('Testes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Testes);

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
