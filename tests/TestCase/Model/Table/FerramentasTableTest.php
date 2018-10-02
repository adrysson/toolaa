<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FerramentasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FerramentasTable Test Case
 */
class FerramentasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FerramentasTable
     */
    public $Ferramentas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ferramentas',
        'app.testes_listas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Ferramentas') ? [] : ['className' => FerramentasTable::class];
        $this->Ferramentas = TableRegistry::getTableLocator()->get('Ferramentas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Ferramentas);

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
