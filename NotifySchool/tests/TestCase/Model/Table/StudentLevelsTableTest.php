<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StudentLevelsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StudentLevelsTable Test Case
 */
class StudentLevelsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StudentLevelsTable
     */
    public $StudentLevels;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.student_levels',
        'app.levels',
        'app.schools',
        'app.levels_users',
        'app.users',
        'app.scores',
        'app.students',
        'app.tutors',
        'app.school_years',
        'app.schedules'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('StudentLevels') ? [] : ['className' => StudentLevelsTable::class];
        $this->StudentLevels = TableRegistry::get('StudentLevels', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StudentLevels);

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
