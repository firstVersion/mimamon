<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UserStatusFixture
 *
 */
class UserStatusFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'user_status';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'user_id' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => '-1', 'comment' => '', 'precision' => null, 'fixed' => null],
        'company_id' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => '-1', 'comment' => '', 'precision' => null, 'fixed' => null],
        'usertag_id' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'checked' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null, 'fixed' => null],
        'updated_date' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'created_date' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'user_id' => 'Lorem ipsum dolor sit amet',
            'company_id' => 'Lorem ipsum dolor sit amet',
            'usertag_id' => 'Lorem ipsum dolor sit amet',
            'checked' => 'Lorem ipsum dolor sit amet',
            'updated_date' => 1464120151,
            'created_date' => 1464120151
        ],
    ];
}
