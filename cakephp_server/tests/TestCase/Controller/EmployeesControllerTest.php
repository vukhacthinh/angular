<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\EmployeesController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\EmployeesController Test Case
 *
 * @uses \App\Controller\EmployeesController
 */
class EmployeesControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Employees',
        'app.Areas',
        'app.Companies',
        'app.CompanySections',
        'app.DayOffSettings',
        'app.CheckinCheckouts',
        'app.EmployeeDayOffHistories',
        'app.EmployeeDayOffTransfers',
        'app.EmployeeDayoffs',
        'app.EmployeeEarnDayOffs',
        'app.EmployeeHistories',
        'app.EmployeeOvertimes',
        'app.EmployeeSupports',
        'app.EmployeeTimetables',
        'app.EmployeeTodokes',
        'app.GroupConfirmDetails',
        'app.OverTimes',
        'app.ProjectMembers',
        'app.ProjectTimesheets',
        'app.TrDeclareDetails',
        'app.TrDeclareExts',
        'app.TrDeclareTotals',
        'app.TrDeclares',
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
