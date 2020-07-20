<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmployeesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmployeesTable Test Case
 */
class EmployeesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EmployeesTable
     */
    protected $Employees;

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
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Employees') ? [] : ['className' => EmployeesTable::class];
        $this->Employees = TableRegistry::getTableLocator()->get('Employees', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Employees);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
