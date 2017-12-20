<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TutorsFixture
 *
 */
class TutorsFixture extends TestFixture
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
        'level_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'schoolyear_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'estado' => ['type' => 'smallinteger', 'length' => 5, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'created' => ['type' => 'date', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'modified' => ['type' => 'date', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        '_indexes' => [
            'r_tut_usu_fk' => ['type' => 'index', 'columns' => ['user_id'], 'length' => []],
            'r_tut_niv_fk' => ['type' => 'index', 'columns' => ['level_id'], 'length' => []],
            'r_tut_anl_fk' => ['type' => 'index', 'columns' => ['schoolyear_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'tutors_pk' => ['type' => 'unique', 'columns' => ['id'], 'length' => []],
            'fk_tutors_r_tut_anl_school_y' => ['type' => 'foreign', 'columns' => ['schoolyear_id'], 'references' => ['school_years', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_tutors_r_tut_niv_levels' => ['type' => 'foreign', 'columns' => ['level_id'], 'references' => ['levels', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_tutors_r_tut_usu_users' => ['type' => 'foreign', 'columns' => ['user_id'], 'references' => ['users', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'level_id' => 1,
            'schoolyear_id' => 1,
            'estado' => 1,
            'created' => '2017-12-20',
            'modified' => '2017-12-20'
        ],
    ];
}
