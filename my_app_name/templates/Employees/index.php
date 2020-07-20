<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employee[]|\Cake\Collection\CollectionInterface $employees
 */
?>
<div class="employees index content">
    <?= $this->Html->link(__('New Employee'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Employees') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('employee_code') ?></th>
                    <th><?= $this->Paginator->sort('password') ?></th>
                    <th><?= $this->Paginator->sort('area_id') ?></th>
                    <th><?= $this->Paginator->sort('kengen_group_cd') ?></th>
                    <th><?= $this->Paginator->sort('level') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('company_id') ?></th>
                    <th><?= $this->Paginator->sort('company_section_id') ?></th>
                    <th><?= $this->Paginator->sort('family_name') ?></th>
                    <th><?= $this->Paginator->sort('first_name') ?></th>
                    <th><?= $this->Paginator->sort('family_name_kana') ?></th>
                    <th><?= $this->Paginator->sort('first_name_kana') ?></th>
                    <th><?= $this->Paginator->sort('birthday') ?></th>
                    <th><?= $this->Paginator->sort('gender') ?></th>
                    <th><?= $this->Paginator->sort('health_insurance') ?></th>
                    <th><?= $this->Paginator->sort('welfare_pension') ?></th>
                    <th><?= $this->Paginator->sort('spouse') ?></th>
                    <th><?= $this->Paginator->sort('zipcode') ?></th>
                    <th><?= $this->Paginator->sort('address') ?></th>
                    <th><?= $this->Paginator->sort('tel') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('avatar') ?></th>
                    <th><?= $this->Paginator->sort('day_off_setting_id') ?></th>
                    <th><?= $this->Paginator->sort('total_hour_off') ?></th>
                    <th><?= $this->Paginator->sort('total_day_off') ?></th>
                    <th><?= $this->Paginator->sort('mobile_tel') ?></th>
                    <th><?= $this->Paginator->sort('join_date') ?></th>
                    <th><?= $this->Paginator->sort('dispach_join_date') ?></th>
                    <th><?= $this->Paginator->sort('last_work_date') ?></th>
                    <th><?= $this->Paginator->sort('leaving_date') ?></th>
                    <th><?= $this->Paginator->sort('employeement_status') ?></th>
                    <th><?= $this->Paginator->sort('hourly_wage') ?></th>
                    <th><?= $this->Paginator->sort('base_salary') ?></th>
                    <th><?= $this->Paginator->sort('login_failed_count') ?></th>
                    <th><?= $this->Paginator->sort('last_login_exec') ?></th>
                    <th><?= $this->Paginator->sort('deleted_at') ?></th>
                    <th><?= $this->Paginator->sort('created_at') ?></th>
                    <th><?= $this->Paginator->sort('updated_at') ?></th>
                    <th><?= $this->Paginator->sort('total_dayoff') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($employees as $employee): ?>
                <tr>
                    <td><?= $this->Number->format($employee->id) ?></td>
                    <td><?= h($employee->employee_code) ?></td>
                    <td><?= h($employee->password) ?></td>
                    <td><?= $employee->has('area') ? $this->Html->link($employee->area->name, ['controller' => 'Areas', 'action' => 'view', $employee->area->id]) : '' ?></td>
                    <td><?= h($employee->kengen_group_cd) ?></td>
                    <td><?= $this->Number->format($employee->level) ?></td>
                    <td><?= $this->Number->format($employee->status) ?></td>
                    <td><?= $employee->has('company') ? $this->Html->link($employee->company->name, ['controller' => 'Companies', 'action' => 'view', $employee->company->id]) : '' ?></td>
                    <td><?= $employee->has('company_section') ? $this->Html->link($employee->company_section->name, ['controller' => 'CompanySections', 'action' => 'view', $employee->company_section->id]) : '' ?></td>
                    <td><?= h($employee->family_name) ?></td>
                    <td><?= h($employee->first_name) ?></td>
                    <td><?= h($employee->family_name_kana) ?></td>
                    <td><?= h($employee->first_name_kana) ?></td>
                    <td><?= h($employee->birthday) ?></td>
                    <td><?= $this->Number->format($employee->gender) ?></td>
                    <td><?= h($employee->health_insurance) ?></td>
                    <td><?= h($employee->welfare_pension) ?></td>
                    <td><?= $this->Number->format($employee->spouse) ?></td>
                    <td><?= h($employee->zipcode) ?></td>
                    <td><?= h($employee->address) ?></td>
                    <td><?= h($employee->tel) ?></td>
                    <td><?= h($employee->email) ?></td>
                    <td><?= h($employee->avatar) ?></td>
                    <td><?= $employee->has('day_off_setting') ? $this->Html->link($employee->day_off_setting->id, ['controller' => 'DayOffSettings', 'action' => 'view', $employee->day_off_setting->id]) : '' ?></td>
                    <td><?= $this->Number->format($employee->total_hour_off) ?></td>
                    <td><?= $this->Number->format($employee->total_day_off) ?></td>
                    <td><?= h($employee->mobile_tel) ?></td>
                    <td><?= h($employee->join_date) ?></td>
                    <td><?= h($employee->dispach_join_date) ?></td>
                    <td><?= h($employee->last_work_date) ?></td>
                    <td><?= h($employee->leaving_date) ?></td>
                    <td><?= $this->Number->format($employee->employeement_status) ?></td>
                    <td><?= $this->Number->format($employee->hourly_wage) ?></td>
                    <td><?= $this->Number->format($employee->base_salary) ?></td>
                    <td><?= $this->Number->format($employee->login_failed_count) ?></td>
                    <td><?= h($employee->last_login_exec) ?></td>
                    <td><?= h($employee->deleted_at) ?></td>
                    <td><?= h($employee->created_at) ?></td>
                    <td><?= h($employee->updated_at) ?></td>
                    <td><?= $this->Number->format($employee->total_dayoff) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $employee->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $employee->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $employee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employee->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
