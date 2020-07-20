<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employee $employee
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Employee'), ['action' => 'edit', $employee->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Employee'), ['action' => 'delete', $employee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employee->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Employees'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Employee'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="employees view content">
            <h3><?= h($employee->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Employee Code') ?></th>
                    <td><?= h($employee->employee_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Password') ?></th>
                    <td><?= h($employee->password) ?></td>
                </tr>
                <tr>
                    <th><?= __('Area') ?></th>
                    <td><?= $employee->has('area') ? $this->Html->link($employee->area->name, ['controller' => 'Areas', 'action' => 'view', $employee->area->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Kengen Group Cd') ?></th>
                    <td><?= h($employee->kengen_group_cd) ?></td>
                </tr>
                <tr>
                    <th><?= __('Company') ?></th>
                    <td><?= $employee->has('company') ? $this->Html->link($employee->company->name, ['controller' => 'Companies', 'action' => 'view', $employee->company->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Company Section') ?></th>
                    <td><?= $employee->has('company_section') ? $this->Html->link($employee->company_section->name, ['controller' => 'CompanySections', 'action' => 'view', $employee->company_section->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Family Name') ?></th>
                    <td><?= h($employee->family_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('First Name') ?></th>
                    <td><?= h($employee->first_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Family Name Kana') ?></th>
                    <td><?= h($employee->family_name_kana) ?></td>
                </tr>
                <tr>
                    <th><?= __('First Name Kana') ?></th>
                    <td><?= h($employee->first_name_kana) ?></td>
                </tr>
                <tr>
                    <th><?= __('Health Insurance') ?></th>
                    <td><?= h($employee->health_insurance) ?></td>
                </tr>
                <tr>
                    <th><?= __('Welfare Pension') ?></th>
                    <td><?= h($employee->welfare_pension) ?></td>
                </tr>
                <tr>
                    <th><?= __('Zipcode') ?></th>
                    <td><?= h($employee->zipcode) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address') ?></th>
                    <td><?= h($employee->address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tel') ?></th>
                    <td><?= h($employee->tel) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($employee->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Avatar') ?></th>
                    <td><?= h($employee->avatar) ?></td>
                </tr>
                <tr>
                    <th><?= __('Day Off Setting') ?></th>
                    <td><?= $employee->has('day_off_setting') ? $this->Html->link($employee->day_off_setting->id, ['controller' => 'DayOffSettings', 'action' => 'view', $employee->day_off_setting->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Mobile Tel') ?></th>
                    <td><?= h($employee->mobile_tel) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($employee->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Level') ?></th>
                    <td><?= $this->Number->format($employee->level) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $this->Number->format($employee->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gender') ?></th>
                    <td><?= $this->Number->format($employee->gender) ?></td>
                </tr>
                <tr>
                    <th><?= __('Spouse') ?></th>
                    <td><?= $this->Number->format($employee->spouse) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total Hour Off') ?></th>
                    <td><?= $this->Number->format($employee->total_hour_off) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total Day Off') ?></th>
                    <td><?= $this->Number->format($employee->total_day_off) ?></td>
                </tr>
                <tr>
                    <th><?= __('Employeement Status') ?></th>
                    <td><?= $this->Number->format($employee->employeement_status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hourly Wage') ?></th>
                    <td><?= $this->Number->format($employee->hourly_wage) ?></td>
                </tr>
                <tr>
                    <th><?= __('Base Salary') ?></th>
                    <td><?= $this->Number->format($employee->base_salary) ?></td>
                </tr>
                <tr>
                    <th><?= __('Login Failed Count') ?></th>
                    <td><?= $this->Number->format($employee->login_failed_count) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total Dayoff') ?></th>
                    <td><?= $this->Number->format($employee->total_dayoff) ?></td>
                </tr>
                <tr>
                    <th><?= __('Birthday') ?></th>
                    <td><?= h($employee->birthday) ?></td>
                </tr>
                <tr>
                    <th><?= __('Join Date') ?></th>
                    <td><?= h($employee->join_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dispach Join Date') ?></th>
                    <td><?= h($employee->dispach_join_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Work Date') ?></th>
                    <td><?= h($employee->last_work_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Leaving Date') ?></th>
                    <td><?= h($employee->leaving_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Login Exec') ?></th>
                    <td><?= h($employee->last_login_exec) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted At') ?></th>
                    <td><?= h($employee->deleted_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($employee->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated At') ?></th>
                    <td><?= h($employee->updated_at) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Memo') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($employee->memo)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Checkin Checkouts') ?></h4>
                <?php if (!empty($employee->checkin_checkouts)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Employee Id') ?></th>
                            <th><?= __('Work Date') ?></th>
                            <th><?= __('Check In') ?></th>
                            <th><?= __('Check Out') ?></th>
                            <th><?= __('Work Location Id') ?></th>
                            <th><?= __('Note') ?></th>
                            <th><?= __('Created User Id') ?></th>
                            <th><?= __('Modified User Id') ?></th>
                            <th><?= __('Deleted At') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Updated At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($employee->checkin_checkouts as $checkinCheckouts) : ?>
                        <tr>
                            <td><?= h($checkinCheckouts->id) ?></td>
                            <td><?= h($checkinCheckouts->employee_id) ?></td>
                            <td><?= h($checkinCheckouts->work_date) ?></td>
                            <td><?= h($checkinCheckouts->check_in) ?></td>
                            <td><?= h($checkinCheckouts->check_out) ?></td>
                            <td><?= h($checkinCheckouts->work_location_id) ?></td>
                            <td><?= h($checkinCheckouts->note) ?></td>
                            <td><?= h($checkinCheckouts->created_user_id) ?></td>
                            <td><?= h($checkinCheckouts->modified_user_id) ?></td>
                            <td><?= h($checkinCheckouts->deleted_at) ?></td>
                            <td><?= h($checkinCheckouts->created_at) ?></td>
                            <td><?= h($checkinCheckouts->updated_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'CheckinCheckouts', 'action' => 'view', $checkinCheckouts->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'CheckinCheckouts', 'action' => 'edit', $checkinCheckouts->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'CheckinCheckouts', 'action' => 'delete', $checkinCheckouts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $checkinCheckouts->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Employee Day Off Histories') ?></h4>
                <?php if (!empty($employee->employee_day_off_histories)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Employee Id') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Value') ?></th>
                            <th><?= __('Reason') ?></th>
                            <th><?= __('Created User Id') ?></th>
                            <th><?= __('Modified User Id') ?></th>
                            <th><?= __('Deleted At') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Updated At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($employee->employee_day_off_histories as $employeeDayOffHistories) : ?>
                        <tr>
                            <td><?= h($employeeDayOffHistories->id) ?></td>
                            <td><?= h($employeeDayOffHistories->employee_id) ?></td>
                            <td><?= h($employeeDayOffHistories->date) ?></td>
                            <td><?= h($employeeDayOffHistories->value) ?></td>
                            <td><?= h($employeeDayOffHistories->reason) ?></td>
                            <td><?= h($employeeDayOffHistories->created_user_id) ?></td>
                            <td><?= h($employeeDayOffHistories->modified_user_id) ?></td>
                            <td><?= h($employeeDayOffHistories->deleted_at) ?></td>
                            <td><?= h($employeeDayOffHistories->created_at) ?></td>
                            <td><?= h($employeeDayOffHistories->updated_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'EmployeeDayOffHistories', 'action' => 'view', $employeeDayOffHistories->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'EmployeeDayOffHistories', 'action' => 'edit', $employeeDayOffHistories->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'EmployeeDayOffHistories', 'action' => 'delete', $employeeDayOffHistories->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employeeDayOffHistories->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Employee Day Off Transfers') ?></h4>
                <?php if (!empty($employee->employee_day_off_transfers)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Todoke Kubun Code') ?></th>
                            <th><?= __('Application Code') ?></th>
                            <th><?= __('Type') ?></th>
                            <th><?= __('Employee Id') ?></th>
                            <th><?= __('Work Date') ?></th>
                            <th><?= __('Off Date') ?></th>
                            <th><?= __('Value') ?></th>
                            <th><?= __('Reason') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Approve Id') ?></th>
                            <th><?= __('Created User Id') ?></th>
                            <th><?= __('Modified User Id') ?></th>
                            <th><?= __('Deleted At') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Updated At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($employee->employee_day_off_transfers as $employeeDayOffTransfers) : ?>
                        <tr>
                            <td><?= h($employeeDayOffTransfers->id) ?></td>
                            <td><?= h($employeeDayOffTransfers->todoke_kubun_code) ?></td>
                            <td><?= h($employeeDayOffTransfers->application_code) ?></td>
                            <td><?= h($employeeDayOffTransfers->type) ?></td>
                            <td><?= h($employeeDayOffTransfers->employee_id) ?></td>
                            <td><?= h($employeeDayOffTransfers->work_date) ?></td>
                            <td><?= h($employeeDayOffTransfers->off_date) ?></td>
                            <td><?= h($employeeDayOffTransfers->value) ?></td>
                            <td><?= h($employeeDayOffTransfers->reason) ?></td>
                            <td><?= h($employeeDayOffTransfers->status) ?></td>
                            <td><?= h($employeeDayOffTransfers->approve_id) ?></td>
                            <td><?= h($employeeDayOffTransfers->created_user_id) ?></td>
                            <td><?= h($employeeDayOffTransfers->modified_user_id) ?></td>
                            <td><?= h($employeeDayOffTransfers->deleted_at) ?></td>
                            <td><?= h($employeeDayOffTransfers->created_at) ?></td>
                            <td><?= h($employeeDayOffTransfers->updated_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'EmployeeDayOffTransfers', 'action' => 'view', $employeeDayOffTransfers->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'EmployeeDayOffTransfers', 'action' => 'edit', $employeeDayOffTransfers->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'EmployeeDayOffTransfers', 'action' => 'delete', $employeeDayOffTransfers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employeeDayOffTransfers->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Employee Dayoffs') ?></h4>
                <?php if (!empty($employee->employee_dayoffs)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Employee Id') ?></th>
                            <th><?= __('Total Dayoff') ?></th>
                            <th><?= __('Year') ?></th>
                            <th><?= __('Year Dayoff') ?></th>
                            <th><?= __('Used Dayoff') ?></th>
                            <th><?= __('Ot Dayoff Morning') ?></th>
                            <th><?= __('Ot Dayoff Afternoon') ?></th>
                            <th><?= __('Created User Id') ?></th>
                            <th><?= __('Modified User Id') ?></th>
                            <th><?= __('Deleted At') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Updated At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($employee->employee_dayoffs as $employeeDayoffs) : ?>
                        <tr>
                            <td><?= h($employeeDayoffs->id) ?></td>
                            <td><?= h($employeeDayoffs->employee_id) ?></td>
                            <td><?= h($employeeDayoffs->total_dayoff) ?></td>
                            <td><?= h($employeeDayoffs->year) ?></td>
                            <td><?= h($employeeDayoffs->year_dayoff) ?></td>
                            <td><?= h($employeeDayoffs->used_dayoff) ?></td>
                            <td><?= h($employeeDayoffs->ot_dayoff_morning) ?></td>
                            <td><?= h($employeeDayoffs->ot_dayoff_afternoon) ?></td>
                            <td><?= h($employeeDayoffs->created_user_id) ?></td>
                            <td><?= h($employeeDayoffs->modified_user_id) ?></td>
                            <td><?= h($employeeDayoffs->deleted_at) ?></td>
                            <td><?= h($employeeDayoffs->created_at) ?></td>
                            <td><?= h($employeeDayoffs->updated_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'EmployeeDayoffs', 'action' => 'view', $employeeDayoffs->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'EmployeeDayoffs', 'action' => 'edit', $employeeDayoffs->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'EmployeeDayoffs', 'action' => 'delete', $employeeDayoffs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employeeDayoffs->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Employee Earn Day Offs') ?></h4>
                <?php if (!empty($employee->employee_earn_day_offs)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Employee Id') ?></th>
                            <th><?= __('Year') ?></th>
                            <th><?= __('Date Earn') ?></th>
                            <th><?= __('Reason') ?></th>
                            <th><?= __('Day Off Earn') ?></th>
                            <th><?= __('Remain Day Off') ?></th>
                            <th><?= __('Deadline') ?></th>
                            <th><?= __('Approve Id') ?></th>
                            <th><?= __('Created User Id') ?></th>
                            <th><?= __('Modified User Id') ?></th>
                            <th><?= __('Deleted At') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Updated At') ?></th>
                            <th><?= __('Added Type') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($employee->employee_earn_day_offs as $employeeEarnDayOffs) : ?>
                        <tr>
                            <td><?= h($employeeEarnDayOffs->id) ?></td>
                            <td><?= h($employeeEarnDayOffs->employee_id) ?></td>
                            <td><?= h($employeeEarnDayOffs->year) ?></td>
                            <td><?= h($employeeEarnDayOffs->date_earn) ?></td>
                            <td><?= h($employeeEarnDayOffs->reason) ?></td>
                            <td><?= h($employeeEarnDayOffs->day_off_earn) ?></td>
                            <td><?= h($employeeEarnDayOffs->remain_day_off) ?></td>
                            <td><?= h($employeeEarnDayOffs->deadline) ?></td>
                            <td><?= h($employeeEarnDayOffs->approve_id) ?></td>
                            <td><?= h($employeeEarnDayOffs->created_user_id) ?></td>
                            <td><?= h($employeeEarnDayOffs->modified_user_id) ?></td>
                            <td><?= h($employeeEarnDayOffs->deleted_at) ?></td>
                            <td><?= h($employeeEarnDayOffs->created_at) ?></td>
                            <td><?= h($employeeEarnDayOffs->updated_at) ?></td>
                            <td><?= h($employeeEarnDayOffs->added_type) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'EmployeeEarnDayOffs', 'action' => 'view', $employeeEarnDayOffs->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'EmployeeEarnDayOffs', 'action' => 'edit', $employeeEarnDayOffs->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'EmployeeEarnDayOffs', 'action' => 'delete', $employeeEarnDayOffs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employeeEarnDayOffs->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Employee Histories') ?></h4>
                <?php if (!empty($employee->employee_histories)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Employee Id') ?></th>
                            <th><?= __('Edit Item') ?></th>
                            <th><?= __('Memo') ?></th>
                            <th><?= __('Created User Id') ?></th>
                            <th><?= __('Modified User Id') ?></th>
                            <th><?= __('Deleted At') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Updated At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($employee->employee_histories as $employeeHistories) : ?>
                        <tr>
                            <td><?= h($employeeHistories->id) ?></td>
                            <td><?= h($employeeHistories->employee_id) ?></td>
                            <td><?= h($employeeHistories->edit_item) ?></td>
                            <td><?= h($employeeHistories->memo) ?></td>
                            <td><?= h($employeeHistories->created_user_id) ?></td>
                            <td><?= h($employeeHistories->modified_user_id) ?></td>
                            <td><?= h($employeeHistories->deleted_at) ?></td>
                            <td><?= h($employeeHistories->created_at) ?></td>
                            <td><?= h($employeeHistories->updated_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'EmployeeHistories', 'action' => 'view', $employeeHistories->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'EmployeeHistories', 'action' => 'edit', $employeeHistories->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'EmployeeHistories', 'action' => 'delete', $employeeHistories->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employeeHistories->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Employee Overtimes') ?></h4>
                <?php if (!empty($employee->employee_overtimes)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Ot Code') ?></th>
                            <th><?= __('Alert Level') ?></th>
                            <th><?= __('Work Date') ?></th>
                            <th><?= __('Start Time') ?></th>
                            <th><?= __('End Time') ?></th>
                            <th><?= __('Minutes') ?></th>
                            <th><?= __('User Confirm Id') ?></th>
                            <th><?= __('Employee Id') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Created User Id') ?></th>
                            <th><?= __('Modified User Id') ?></th>
                            <th><?= __('Deleted At') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Updated At') ?></th>
                            <th><?= __('Application Code') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($employee->employee_overtimes as $employeeOvertimes) : ?>
                        <tr>
                            <td><?= h($employeeOvertimes->id) ?></td>
                            <td><?= h($employeeOvertimes->ot_code) ?></td>
                            <td><?= h($employeeOvertimes->alert_level) ?></td>
                            <td><?= h($employeeOvertimes->work_date) ?></td>
                            <td><?= h($employeeOvertimes->start_time) ?></td>
                            <td><?= h($employeeOvertimes->end_time) ?></td>
                            <td><?= h($employeeOvertimes->minutes) ?></td>
                            <td><?= h($employeeOvertimes->user_confirm_id) ?></td>
                            <td><?= h($employeeOvertimes->employee_id) ?></td>
                            <td><?= h($employeeOvertimes->status) ?></td>
                            <td><?= h($employeeOvertimes->created_user_id) ?></td>
                            <td><?= h($employeeOvertimes->modified_user_id) ?></td>
                            <td><?= h($employeeOvertimes->deleted_at) ?></td>
                            <td><?= h($employeeOvertimes->created_at) ?></td>
                            <td><?= h($employeeOvertimes->updated_at) ?></td>
                            <td><?= h($employeeOvertimes->application_code) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'EmployeeOvertimes', 'action' => 'view', $employeeOvertimes->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'EmployeeOvertimes', 'action' => 'edit', $employeeOvertimes->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'EmployeeOvertimes', 'action' => 'delete', $employeeOvertimes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employeeOvertimes->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Employee Supports') ?></h4>
                <?php if (!empty($employee->employee_supports)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Employee Id') ?></th>
                            <th><?= __('Relation') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Name Kana') ?></th>
                            <th><?= __('Gender') ?></th>
                            <th><?= __('Birthday') ?></th>
                            <th><?= __('Created User Id') ?></th>
                            <th><?= __('Modified User Id') ?></th>
                            <th><?= __('Deleted At') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Updated At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($employee->employee_supports as $employeeSupports) : ?>
                        <tr>
                            <td><?= h($employeeSupports->id) ?></td>
                            <td><?= h($employeeSupports->employee_id) ?></td>
                            <td><?= h($employeeSupports->relation) ?></td>
                            <td><?= h($employeeSupports->name) ?></td>
                            <td><?= h($employeeSupports->name_kana) ?></td>
                            <td><?= h($employeeSupports->gender) ?></td>
                            <td><?= h($employeeSupports->birthday) ?></td>
                            <td><?= h($employeeSupports->created_user_id) ?></td>
                            <td><?= h($employeeSupports->modified_user_id) ?></td>
                            <td><?= h($employeeSupports->deleted_at) ?></td>
                            <td><?= h($employeeSupports->created_at) ?></td>
                            <td><?= h($employeeSupports->updated_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'EmployeeSupports', 'action' => 'view', $employeeSupports->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'EmployeeSupports', 'action' => 'edit', $employeeSupports->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'EmployeeSupports', 'action' => 'delete', $employeeSupports->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employeeSupports->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Employee Timetables') ?></h4>
                <?php if (!empty($employee->employee_timetables)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Employee Id') ?></th>
                            <th><?= __('Mo') ?></th>
                            <th><?= __('Tu') ?></th>
                            <th><?= __('We') ?></th>
                            <th><?= __('Th') ?></th>
                            <th><?= __('Fr') ?></th>
                            <th><?= __('Sa') ?></th>
                            <th><?= __('Su') ?></th>
                            <th><?= __('Created User Id') ?></th>
                            <th><?= __('Modified User Id') ?></th>
                            <th><?= __('Deleted At') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Updated At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($employee->employee_timetables as $employeeTimetables) : ?>
                        <tr>
                            <td><?= h($employeeTimetables->id) ?></td>
                            <td><?= h($employeeTimetables->employee_id) ?></td>
                            <td><?= h($employeeTimetables->mo) ?></td>
                            <td><?= h($employeeTimetables->tu) ?></td>
                            <td><?= h($employeeTimetables->we) ?></td>
                            <td><?= h($employeeTimetables->th) ?></td>
                            <td><?= h($employeeTimetables->fr) ?></td>
                            <td><?= h($employeeTimetables->sa) ?></td>
                            <td><?= h($employeeTimetables->su) ?></td>
                            <td><?= h($employeeTimetables->created_user_id) ?></td>
                            <td><?= h($employeeTimetables->modified_user_id) ?></td>
                            <td><?= h($employeeTimetables->deleted_at) ?></td>
                            <td><?= h($employeeTimetables->created_at) ?></td>
                            <td><?= h($employeeTimetables->updated_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'EmployeeTimetables', 'action' => 'view', $employeeTimetables->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'EmployeeTimetables', 'action' => 'edit', $employeeTimetables->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'EmployeeTimetables', 'action' => 'delete', $employeeTimetables->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employeeTimetables->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Employee Todokes') ?></h4>
                <?php if (!empty($employee->employee_todokes)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Todoke Kubun Code') ?></th>
                            <th><?= __('Time From') ?></th>
                            <th><?= __('Time To') ?></th>
                            <th><?= __('Employee Id') ?></th>
                            <th><?= __('Day') ?></th>
                            <th><?= __('Type') ?></th>
                            <th><?= __('Minute') ?></th>
                            <th><?= __('Reason') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Approve Id') ?></th>
                            <th><?= __('Created User Id') ?></th>
                            <th><?= __('Modified User Id') ?></th>
                            <th><?= __('Deleted At') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Updated At') ?></th>
                            <th><?= __('Application Code') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($employee->employee_todokes as $employeeTodokes) : ?>
                        <tr>
                            <td><?= h($employeeTodokes->id) ?></td>
                            <td><?= h($employeeTodokes->todoke_kubun_code) ?></td>
                            <td><?= h($employeeTodokes->time_from) ?></td>
                            <td><?= h($employeeTodokes->time_to) ?></td>
                            <td><?= h($employeeTodokes->employee_id) ?></td>
                            <td><?= h($employeeTodokes->day) ?></td>
                            <td><?= h($employeeTodokes->type) ?></td>
                            <td><?= h($employeeTodokes->minute) ?></td>
                            <td><?= h($employeeTodokes->reason) ?></td>
                            <td><?= h($employeeTodokes->status) ?></td>
                            <td><?= h($employeeTodokes->approve_id) ?></td>
                            <td><?= h($employeeTodokes->created_user_id) ?></td>
                            <td><?= h($employeeTodokes->modified_user_id) ?></td>
                            <td><?= h($employeeTodokes->deleted_at) ?></td>
                            <td><?= h($employeeTodokes->created_at) ?></td>
                            <td><?= h($employeeTodokes->updated_at) ?></td>
                            <td><?= h($employeeTodokes->application_code) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'EmployeeTodokes', 'action' => 'view', $employeeTodokes->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'EmployeeTodokes', 'action' => 'edit', $employeeTodokes->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'EmployeeTodokes', 'action' => 'delete', $employeeTodokes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employeeTodokes->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Group Confirm Details') ?></h4>
                <?php if (!empty($employee->group_confirm_details)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Group Confirm Id') ?></th>
                            <th><?= __('Employee Id') ?></th>
                            <th><?= __('Created User Id') ?></th>
                            <th><?= __('Modified User Id') ?></th>
                            <th><?= __('Deleted At') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Updated At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($employee->group_confirm_details as $groupConfirmDetails) : ?>
                        <tr>
                            <td><?= h($groupConfirmDetails->id) ?></td>
                            <td><?= h($groupConfirmDetails->group_confirm_id) ?></td>
                            <td><?= h($groupConfirmDetails->employee_id) ?></td>
                            <td><?= h($groupConfirmDetails->created_user_id) ?></td>
                            <td><?= h($groupConfirmDetails->modified_user_id) ?></td>
                            <td><?= h($groupConfirmDetails->deleted_at) ?></td>
                            <td><?= h($groupConfirmDetails->created_at) ?></td>
                            <td><?= h($groupConfirmDetails->updated_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'GroupConfirmDetails', 'action' => 'view', $groupConfirmDetails->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'GroupConfirmDetails', 'action' => 'edit', $groupConfirmDetails->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'GroupConfirmDetails', 'action' => 'delete', $groupConfirmDetails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $groupConfirmDetails->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Over Times') ?></h4>
                <?php if (!empty($employee->over_times)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Ot Id') ?></th>
                            <th><?= __('Work Date') ?></th>
                            <th><?= __('Start Time') ?></th>
                            <th><?= __('End Time') ?></th>
                            <th><?= __('Actual Start Time') ?></th>
                            <th><?= __('Actual End Time') ?></th>
                            <th><?= __('Hour') ?></th>
                            <th><?= __('User Confirm Id') ?></th>
                            <th><?= __('Employee Id') ?></th>
                            <th><?= __('Project Id') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Created User Id') ?></th>
                            <th><?= __('Modified User Id') ?></th>
                            <th><?= __('Deleted At') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Updated At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($employee->over_times as $overTimes) : ?>
                        <tr>
                            <td><?= h($overTimes->id) ?></td>
                            <td><?= h($overTimes->ot_id) ?></td>
                            <td><?= h($overTimes->work_date) ?></td>
                            <td><?= h($overTimes->start_time) ?></td>
                            <td><?= h($overTimes->end_time) ?></td>
                            <td><?= h($overTimes->actual_start_time) ?></td>
                            <td><?= h($overTimes->actual_end_time) ?></td>
                            <td><?= h($overTimes->hour) ?></td>
                            <td><?= h($overTimes->user_confirm_id) ?></td>
                            <td><?= h($overTimes->employee_id) ?></td>
                            <td><?= h($overTimes->project_id) ?></td>
                            <td><?= h($overTimes->status) ?></td>
                            <td><?= h($overTimes->created_user_id) ?></td>
                            <td><?= h($overTimes->modified_user_id) ?></td>
                            <td><?= h($overTimes->deleted_at) ?></td>
                            <td><?= h($overTimes->created_at) ?></td>
                            <td><?= h($overTimes->updated_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'OverTimes', 'action' => 'view', $overTimes->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'OverTimes', 'action' => 'edit', $overTimes->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'OverTimes', 'action' => 'delete', $overTimes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $overTimes->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Project Members') ?></h4>
                <?php if (!empty($employee->project_members)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Employee Id') ?></th>
                            <th><?= __('Project Id') ?></th>
                            <th><?= __('Employee Code') ?></th>
                            <th><?= __('Employee Fullname') ?></th>
                            <th><?= __('Salary') ?></th>
                            <th><?= __('Created User Id') ?></th>
                            <th><?= __('Modified User Id') ?></th>
                            <th><?= __('Deleted At') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Updated At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($employee->project_members as $projectMembers) : ?>
                        <tr>
                            <td><?= h($projectMembers->id) ?></td>
                            <td><?= h($projectMembers->employee_id) ?></td>
                            <td><?= h($projectMembers->project_id) ?></td>
                            <td><?= h($projectMembers->employee_code) ?></td>
                            <td><?= h($projectMembers->employee_fullname) ?></td>
                            <td><?= h($projectMembers->salary) ?></td>
                            <td><?= h($projectMembers->created_user_id) ?></td>
                            <td><?= h($projectMembers->modified_user_id) ?></td>
                            <td><?= h($projectMembers->deleted_at) ?></td>
                            <td><?= h($projectMembers->created_at) ?></td>
                            <td><?= h($projectMembers->updated_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ProjectMembers', 'action' => 'view', $projectMembers->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ProjectMembers', 'action' => 'edit', $projectMembers->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProjectMembers', 'action' => 'delete', $projectMembers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projectMembers->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Project Timesheets') ?></h4>
                <?php if (!empty($employee->project_timesheets)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Employee Id') ?></th>
                            <th><?= __('Project Id') ?></th>
                            <th><?= __('Work Date') ?></th>
                            <th><?= __('Hour') ?></th>
                            <th><?= __('Note') ?></th>
                            <th><?= __('Approve Id') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Created User Id') ?></th>
                            <th><?= __('Modified User Id') ?></th>
                            <th><?= __('Deleted At') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Updated At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($employee->project_timesheets as $projectTimesheets) : ?>
                        <tr>
                            <td><?= h($projectTimesheets->id) ?></td>
                            <td><?= h($projectTimesheets->employee_id) ?></td>
                            <td><?= h($projectTimesheets->project_id) ?></td>
                            <td><?= h($projectTimesheets->work_date) ?></td>
                            <td><?= h($projectTimesheets->hour) ?></td>
                            <td><?= h($projectTimesheets->note) ?></td>
                            <td><?= h($projectTimesheets->approve_id) ?></td>
                            <td><?= h($projectTimesheets->status) ?></td>
                            <td><?= h($projectTimesheets->created_user_id) ?></td>
                            <td><?= h($projectTimesheets->modified_user_id) ?></td>
                            <td><?= h($projectTimesheets->deleted_at) ?></td>
                            <td><?= h($projectTimesheets->created_at) ?></td>
                            <td><?= h($projectTimesheets->updated_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ProjectTimesheets', 'action' => 'view', $projectTimesheets->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ProjectTimesheets', 'action' => 'edit', $projectTimesheets->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProjectTimesheets', 'action' => 'delete', $projectTimesheets->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projectTimesheets->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Tr Declare Details') ?></h4>
                <?php if (!empty($employee->tr_declare_details)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Tr Declare Id') ?></th>
                            <th><?= __('Project Id') ?></th>
                            <th><?= __('Project Code') ?></th>
                            <th><?= __('Employee Id') ?></th>
                            <th><?= __('Working Date') ?></th>
                            <th><?= __('Hours') ?></th>
                            <th><?= __('Created User Id') ?></th>
                            <th><?= __('Modified User Id') ?></th>
                            <th><?= __('Deleted At') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Updated At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($employee->tr_declare_details as $trDeclareDetails) : ?>
                        <tr>
                            <td><?= h($trDeclareDetails->id) ?></td>
                            <td><?= h($trDeclareDetails->tr_declare_id) ?></td>
                            <td><?= h($trDeclareDetails->project_id) ?></td>
                            <td><?= h($trDeclareDetails->project_code) ?></td>
                            <td><?= h($trDeclareDetails->employee_id) ?></td>
                            <td><?= h($trDeclareDetails->working_date) ?></td>
                            <td><?= h($trDeclareDetails->hours) ?></td>
                            <td><?= h($trDeclareDetails->created_user_id) ?></td>
                            <td><?= h($trDeclareDetails->modified_user_id) ?></td>
                            <td><?= h($trDeclareDetails->deleted_at) ?></td>
                            <td><?= h($trDeclareDetails->created_at) ?></td>
                            <td><?= h($trDeclareDetails->updated_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'TrDeclareDetails', 'action' => 'view', $trDeclareDetails->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'TrDeclareDetails', 'action' => 'edit', $trDeclareDetails->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'TrDeclareDetails', 'action' => 'delete', $trDeclareDetails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trDeclareDetails->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Tr Declare Exts') ?></h4>
                <?php if (!empty($employee->tr_declare_exts)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Tr Declare Id') ?></th>
                            <th><?= __('Todoke Kubun Code') ?></th>
                            <th><?= __('Hours') ?></th>
                            <th><?= __('Employee Id') ?></th>
                            <th><?= __('Work Date') ?></th>
                            <th><?= __('Created User Id') ?></th>
                            <th><?= __('Modified User Id') ?></th>
                            <th><?= __('Deleted At') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Updated At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($employee->tr_declare_exts as $trDeclareExts) : ?>
                        <tr>
                            <td><?= h($trDeclareExts->id) ?></td>
                            <td><?= h($trDeclareExts->tr_declare_id) ?></td>
                            <td><?= h($trDeclareExts->todoke_kubun_code) ?></td>
                            <td><?= h($trDeclareExts->hours) ?></td>
                            <td><?= h($trDeclareExts->employee_id) ?></td>
                            <td><?= h($trDeclareExts->work_date) ?></td>
                            <td><?= h($trDeclareExts->created_user_id) ?></td>
                            <td><?= h($trDeclareExts->modified_user_id) ?></td>
                            <td><?= h($trDeclareExts->deleted_at) ?></td>
                            <td><?= h($trDeclareExts->created_at) ?></td>
                            <td><?= h($trDeclareExts->updated_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'TrDeclareExts', 'action' => 'view', $trDeclareExts->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'TrDeclareExts', 'action' => 'edit', $trDeclareExts->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'TrDeclareExts', 'action' => 'delete', $trDeclareExts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trDeclareExts->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Tr Declare Totals') ?></h4>
                <?php if (!empty($employee->tr_declare_totals)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Employee Id') ?></th>
                            <th><?= __('Working Day') ?></th>
                            <th><?= __('Holiday Work Day') ?></th>
                            <th><?= __('Number Of Absence Day') ?></th>
                            <th><?= __('Special Holiday') ?></th>
                            <th><?= __('Business Day') ?></th>
                            <th><?= __('Training Days') ?></th>
                            <th><?= __('Number Of Day Off Work') ?></th>
                            <th><?= __('Transfer Days') ?></th>
                            <th><?= __('Number Of Holidays') ?></th>
                            <th><?= __('Overtime Hours') ?></th>
                            <th><?= __('Late Night Overtime Hours') ?></th>
                            <th><?= __('Holiday Work Hours') ?></th>
                            <th><?= __('Recording Of Late') ?></th>
                            <th><?= __('Early Departure Time') ?></th>
                            <th><?= __('Created User Id') ?></th>
                            <th><?= __('Modified User Id') ?></th>
                            <th><?= __('Deleted At') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Updated At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($employee->tr_declare_totals as $trDeclareTotals) : ?>
                        <tr>
                            <td><?= h($trDeclareTotals->id) ?></td>
                            <td><?= h($trDeclareTotals->employee_id) ?></td>
                            <td><?= h($trDeclareTotals->working_day) ?></td>
                            <td><?= h($trDeclareTotals->holiday_work_day) ?></td>
                            <td><?= h($trDeclareTotals->number_of_absence_day) ?></td>
                            <td><?= h($trDeclareTotals->special_holiday) ?></td>
                            <td><?= h($trDeclareTotals->business_day) ?></td>
                            <td><?= h($trDeclareTotals->training_days) ?></td>
                            <td><?= h($trDeclareTotals->number_of_day_off_work) ?></td>
                            <td><?= h($trDeclareTotals->transfer_days) ?></td>
                            <td><?= h($trDeclareTotals->number_of_holidays) ?></td>
                            <td><?= h($trDeclareTotals->overtime_hours) ?></td>
                            <td><?= h($trDeclareTotals->late_night_overtime_hours) ?></td>
                            <td><?= h($trDeclareTotals->holiday_work_hours) ?></td>
                            <td><?= h($trDeclareTotals->recording_of_late) ?></td>
                            <td><?= h($trDeclareTotals->early_departure_time) ?></td>
                            <td><?= h($trDeclareTotals->created_user_id) ?></td>
                            <td><?= h($trDeclareTotals->modified_user_id) ?></td>
                            <td><?= h($trDeclareTotals->deleted_at) ?></td>
                            <td><?= h($trDeclareTotals->created_at) ?></td>
                            <td><?= h($trDeclareTotals->updated_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'TrDeclareTotals', 'action' => 'view', $trDeclareTotals->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'TrDeclareTotals', 'action' => 'edit', $trDeclareTotals->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'TrDeclareTotals', 'action' => 'delete', $trDeclareTotals->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trDeclareTotals->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Tr Declares') ?></h4>
                <?php if (!empty($employee->tr_declares)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Employee Id') ?></th>
                            <th><?= __('Work Date') ?></th>
                            <th><?= __('From Time') ?></th>
                            <th><?= __('To Time') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Approve Id') ?></th>
                            <th><?= __('Refuse Id') ?></th>
                            <th><?= __('Work Type Detail') ?></th>
                            <th><?= __('Work Location Id') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Last Update Pc') ?></th>
                            <th><?= __('Created User Id') ?></th>
                            <th><?= __('Modified User Id') ?></th>
                            <th><?= __('Deleted At') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Updated At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($employee->tr_declares as $trDeclares) : ?>
                        <tr>
                            <td><?= h($trDeclares->id) ?></td>
                            <td><?= h($trDeclares->employee_id) ?></td>
                            <td><?= h($trDeclares->work_date) ?></td>
                            <td><?= h($trDeclares->from_time) ?></td>
                            <td><?= h($trDeclares->to_time) ?></td>
                            <td><?= h($trDeclares->status) ?></td>
                            <td><?= h($trDeclares->approve_id) ?></td>
                            <td><?= h($trDeclares->refuse_id) ?></td>
                            <td><?= h($trDeclares->work_type_detail) ?></td>
                            <td><?= h($trDeclares->work_location_id) ?></td>
                            <td><?= h($trDeclares->description) ?></td>
                            <td><?= h($trDeclares->last_update_pc) ?></td>
                            <td><?= h($trDeclares->created_user_id) ?></td>
                            <td><?= h($trDeclares->modified_user_id) ?></td>
                            <td><?= h($trDeclares->deleted_at) ?></td>
                            <td><?= h($trDeclares->created_at) ?></td>
                            <td><?= h($trDeclares->updated_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'TrDeclares', 'action' => 'view', $trDeclares->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'TrDeclares', 'action' => 'edit', $trDeclares->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'TrDeclares', 'action' => 'delete', $trDeclares->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trDeclares->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
