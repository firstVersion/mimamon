<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MimamonsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MimamonsTable Test Case
 */
class MimamonsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MimamonsTable
     */
    public $Mimamons;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mimamons',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Mimamons') ? [] : ['className' => 'App\Model\Table\MimamonsTable'];
        $this->Mimamons = TableRegistry::get('Mimamons', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Mimamons);

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
