<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserStatusTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserStatusTable Test Case
 */
class UserStatusTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UserStatusTable
     */
    public $UserStatus;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.user_status',
        'app.users',
        'app.company_status',
        'app.companies',
        'app.requests',
        'app.usertags'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('UserStatus') ? [] : ['className' => 'App\Model\Table\UserStatusTable'];
        $this->UserStatus = TableRegistry::get('UserStatus', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserStatus);

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
