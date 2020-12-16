<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Employee Entity
 *
 * @property int $id
 * @property string|null $employee_code
 * @property string|null $password
 * @property int|null $area_id
 * @property string|null $kengen_group_cd
 * @property int|null $level
 * @property int|null $status
 * @property int|null $company_id
 * @property int|null $company_section_id
 * @property string|null $family_name
 * @property string|null $first_name
 * @property string|null $family_name_kana
 * @property string|null $first_name_kana
 * @property \Cake\I18n\FrozenDate|null $birthday
 * @property int|null $gender
 * @property string|null $health_insurance
 * @property string|null $welfare_pension
 * @property int|null $spouse
 * @property string|null $zipcode
 * @property string|null $address
 * @property string|null $tel
 * @property string|null $email
 * @property string|null $avatar
 * @property int|null $day_off_setting_id
 * @property float|null $total_hour_off
 * @property float|null $total_day_off
 * @property string|null $mobile_tel
 * @property \Cake\I18n\FrozenDate|null $join_date
 * @property \Cake\I18n\FrozenDate|null $dispach_join_date
 * @property \Cake\I18n\FrozenDate|null $last_work_date
 * @property \Cake\I18n\FrozenDate|null $leaving_date
 * @property int|null $employeement_status
 * @property int|null $hourly_wage
 * @property int|null $base_salary
 * @property string|null $memo
 * @property int|null $login_failed_count
 * @property \Cake\I18n\FrozenTime|null $last_login_exec
 * @property \Cake\I18n\FrozenTime|null $deleted_at
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime|null $updated_at
 * @property int|null $total_dayoff
 *
// * @property \App\Model\Entity\Area $area
// * @property \App\Model\Entity\Company $company
// * @property \App\Model\Entity\CompanySection $company_section
// * @property \App\Model\Entity\DayOffSetting $day_off_setting
// * @property \App\Model\Entity\CheckinCheckout[] $checkin_checkouts
// * @property \App\Model\Entity\EmployeeDayOffHistory[] $employee_day_off_histories
// * @property \App\Model\Entity\EmployeeDayOffTransfer[] $employee_day_off_transfers
// * @property \App\Model\Entity\EmployeeDayoff[] $employee_dayoffs
// * @property \App\Model\Entity\EmployeeEarnDayOff[] $employee_earn_day_offs
// * @property \App\Model\Entity\EmployeeHistory[] $employee_histories
// * @property \App\Model\Entity\EmployeeOvertime[] $employee_overtimes
// * @property \App\Model\Entity\EmployeeSupport[] $employee_supports
// * @property \App\Model\Entity\EmployeeTimetable[] $employee_timetables
// * @property \App\Model\Entity\EmployeeTodoke[] $employee_todokes
// * @property \App\Model\Entity\GroupConfirmDetail[] $group_confirm_details
// * @property \App\Model\Entity\OverTime[] $over_times
// * @property \App\Model\Entity\ProjectMember[] $project_members
// * @property \App\Model\Entity\ProjectTimesheet[] $project_timesheets
// * @property \App\Model\Entity\TrDeclareDetail[] $tr_declare_details
// * @property \App\Model\Entity\TrDeclareExt[] $tr_declare_exts
// * @property \App\Model\Entity\TrDeclareTotal[] $tr_declare_totals
// * @property \App\Model\Entity\TrDeclare[] $tr_declares
 */
class EmployeePost extends BaseEntity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
     '*'=>true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
//        'password',
    ];
}
