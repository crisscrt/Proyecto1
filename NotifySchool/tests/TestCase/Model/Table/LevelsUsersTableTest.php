<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LevelsUsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LevelsUsersTable Test Case
 */
class LevelsUsersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LevelsUsersTable
     */
    public $LevelsUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.levels_users',
        'app.users',
        'app.schools',
        'app.levels',
        'app.schedules',
        'app.scores',
        'app.students',
        'app.student_levels',
        'app.tutors',
        'app.school_years'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('LevelsUsers') ? [] : ['className' => LevelsUsersTable::class];
        $this->LevelsUsers = TableRegistry::get('LevelsUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LevelsUsers);

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
