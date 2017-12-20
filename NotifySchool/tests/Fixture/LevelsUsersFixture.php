<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LevelsUsersFixture
 *
 */
class LevelsUsersFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'user_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'schedule_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'school_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'estado' => ['type' => 'smallinteger', 'length' => 5, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'created' => ['type' => 'date', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'modified' => ['type' => 'date', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        '_indexes' => [
            'r_usn_usu_fk' => ['type' => 'index', 'columns' => ['user_id'], 'length' => []],
            'r_usn_hro_fk' => ['type' => 'index', 'columns' => ['schedule_id'], 'length' => []],
            'r_usn_anl_fk' => ['type' => 'index', 'columns' => ['school_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'levels_users_pk' => ['type' => 'unique', 'columns' => ['id'], 'length' => []],
            'fk_levels_u_r_usn_anl_school_y' => ['type' => 'foreign', 'columns' => ['school_id'], 'references' => ['school_years', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_levels_u_r_usn_hro_schedule' => ['type' => 'foreign', 'columns' => ['schedule_id'], 'references' => ['schedules', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_levels_u_r_usn_usu_users' => ['type' => 'foreign', 'columns' => ['user_id'], 'references' => ['users', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'user_id' => 1,
            'schedule_id' => 1,
            'school_id' => 1,
            'estado' => 1,
            'created' => '2017-12-20',
            'modified' => '2017-12-20'
        ],
    ];
}
