<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SchoolYearsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SchoolYearsTable Test Case
 */
class SchoolYearsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SchoolYearsTable
     */
    public $SchoolYears;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.school_years',
        'app.schools',
        'app.levels',
        'app.schedules',
        'app.levels_users',
        'app.users',
        'app.scores',
        'app.students',
        'app.student_levels',
        'app.tutors'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SchoolYears') ? [] : ['className' => SchoolYearsTable::class];
        $this->SchoolYears = TableRegistry::get('SchoolYears', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SchoolYears);

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
