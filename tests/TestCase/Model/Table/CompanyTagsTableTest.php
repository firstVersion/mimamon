<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CompanyTagsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CompanyTagsTable Test Case
 */
class CompanyTagsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CompanyTagsTable
     */
    public $CompanyTags;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.company_tags'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CompanyTags') ? [] : ['className' => 'App\Model\Table\CompanyTagsTable'];
        $this->CompanyTags = TableRegistry::get('CompanyTags', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CompanyTags);

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
