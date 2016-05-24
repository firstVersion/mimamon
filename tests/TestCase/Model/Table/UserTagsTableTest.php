<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserTagsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserTagsTable Test Case
 */
class UserTagsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UserTagsTable
     */
    public $UserTags;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.user_tags'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('UserTags') ? [] : ['className' => 'App\Model\Table\UserTagsTable'];
        $this->UserTags = TableRegistry::get('UserTags', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserTags);

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
