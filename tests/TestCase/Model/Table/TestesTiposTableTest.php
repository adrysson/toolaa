<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TestesTiposTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TestesTiposTable Test Case
 */
class TestesTiposTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TestesTiposTable
     */
    public $TestesTipos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.testes_tipos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TestesTipos') ? [] : ['className' => TestesTiposTable::class];
        $this->TestesTipos = TableRegistry::getTableLocator()->get('TestesTipos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TestesTipos);

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
