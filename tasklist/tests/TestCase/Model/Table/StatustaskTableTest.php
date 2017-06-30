<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StatustaskTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StatustaskTable Test Case
 */
class StatustaskTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StatustaskTable
     */
    public $Statustask;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.statustask',
        'app.task'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Statustask') ? [] : ['className' => StatustaskTable::class];
        $this->Statustask = TableRegistry::get('Statustask', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Statustask);

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
