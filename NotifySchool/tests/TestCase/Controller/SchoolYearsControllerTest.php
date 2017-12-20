<?php
namespace App\Test\TestCase\Controller;

use App\Controller\SchoolYearsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\SchoolYearsController Test Case
 */
class SchoolYearsControllerTest extends IntegrationTestCase
{

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
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
