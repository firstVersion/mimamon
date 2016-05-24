<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CompanyStatusTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CompanyStatusTable Test Case
 */
class CompanyStatusTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CompanyStatusTable
     */
    public $CompanyStatus;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.company_status',
        'app.users',
        'app.requests',
        'app.user_status',
        'app.companies',
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
        $config = TableRegistry::exists('CompanyStatus') ? [] : ['className' => 'App\Model\Table\CompanyStatusTable'];
        $this->CompanyStatus = TableRegistry::get('CompanyStatus', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CompanyStatus);

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
