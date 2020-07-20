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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $employee->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $employee->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Employees'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="employees form content">
            <?= $this->Form->create($employee) ?>
            <fieldset>
                <legend><?= __('Edit Employee') ?></legend>
                <?php
                    echo $this->Form->control('employee_code');
                    echo $this->Form->control('password');
                    echo $this->Form->control('area_id', ['options' => $areas, 'empty' => true]);
                    echo $this->Form->control('kengen_group_cd');
                    echo $this->Form->control('level');
                    echo $this->Form->control('status');
                    echo $this->Form->control('company_id', ['options' => $companies, 'empty' => true]);
                    echo $this->Form->control('company_section_id', ['options' => $companySections, 'empty' => true]);
                    echo $this->Form->control('family_name');
                    echo $this->Form->control('first_name');
                    echo $this->Form->control('family_name_kana');
                    echo $this->Form->control('first_name_kana');
                    echo $this->Form->control('birthday', ['empty' => true]);
                    echo $this->Form->control('gender');
                    echo $this->Form->control('health_insurance');
                    echo $this->Form->control('welfare_pension');
                    echo $this->Form->control('spouse');
                    echo $this->Form->control('zipcode');
                    echo $this->Form->control('address');
                    echo $this->Form->control('tel');
                    echo $this->Form->control('email');
                    echo $this->Form->control('avatar');
                    echo $this->Form->control('day_off_setting_id', ['options' => $dayOffSettings, 'empty' => true]);
                    echo $this->Form->control('total_hour_off');
                    echo $this->Form->control('total_day_off');
                    echo $this->Form->control('mobile_tel');
                    echo $this->Form->control('join_date', ['empty' => true]);
                    echo $this->Form->control('dispach_join_date', ['empty' => true]);
                    echo $this->Form->control('last_work_date', ['empty' => true]);
                    echo $this->Form->control('leaving_date', ['empty' => true]);
                    echo $this->Form->control('employeement_status');
                    echo $this->Form->control('hourly_wage');
                    echo $this->Form->control('base_salary');
                    echo $this->Form->control('memo');
                    echo $this->Form->control('login_failed_count');
                    echo $this->Form->control('last_login_exec', ['empty' => true]);
                    echo $this->Form->control('deleted_at');
                    echo $this->Form->control('created_at');
                    echo $this->Form->control('updated_at');
                    echo $this->Form->control('total_dayoff');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
