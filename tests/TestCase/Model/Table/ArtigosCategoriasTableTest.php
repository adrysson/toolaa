<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ArtigosCategoriasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ArtigosCategoriasTable Test Case
 */
class ArtigosCategoriasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ArtigosCategoriasTable
     */
    public $ArtigosCategorias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.artigos_categorias'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ArtigosCategorias') ? [] : ['className' => ArtigosCategoriasTable::class];
        $this->ArtigosCategorias = TableRegistry::getTableLocator()->get('ArtigosCategorias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ArtigosCategorias);

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
