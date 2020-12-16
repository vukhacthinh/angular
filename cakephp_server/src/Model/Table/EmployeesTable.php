<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Constant;

/**
 * Employees Model
 *
 * @property \App\Model\Table\AreasTable&\Cake\ORM\Association\BelongsTo $Areas
 * @property \App\Model\Table\CompaniesTable&\Cake\ORM\Association\BelongsTo $Companies
 * @property \App\Model\Table\CompanySectionsTable&\Cake\ORM\Association\BelongsTo $CompanySections
 * @property \App\Model\Table\DayOffSettingsTable&\Cake\ORM\Association\BelongsTo $DayOffSettings
 * @property \App\Model\Table\CheckinCheckoutsTable&\Cake\ORM\Association\HasMany $CheckinCheckouts
 * @property \App\Model\Table\EmployeeDayOffHistoriesTable&\Cake\ORM\Association\HasMany $EmployeeDayOffHistories
 * @property \App\Model\Table\EmployeeDayOffTransfersTable&\Cake\ORM\Association\HasMany $EmployeeDayOffTransfers
 * @property \App\Model\Table\EmployeeDayoffsTable&\Cake\ORM\Association\HasMany $EmployeeDayoffs
 * @property \App\Model\Table\EmployeeEarnDayOffsTable&\Cake\ORM\Association\HasMany $EmployeeEarnDayOffs
 * @property \App\Model\Table\EmployeeHistoriesTable&\Cake\ORM\Association\HasMany $EmployeeHistories
 * @property \App\Model\Table\EmployeeOvertimesTable&\Cake\ORM\Association\HasMany $EmployeeOvertimes
 * @property \App\Model\Table\EmployeeSupportsTable&\Cake\ORM\Association\HasMany $EmployeeSupports
 * @property \App\Model\Table\EmployeeTimetablesTable&\Cake\ORM\Association\HasMany $EmployeeTimetables
 * @property \App\Model\Table\EmployeeTodokesTable&\Cake\ORM\Association\HasMany $EmployeeTodokes
 * @property \App\Model\Table\GroupConfirmDetailsTable&\Cake\ORM\Association\HasMany $GroupConfirmDetails
 * @property \App\Model\Table\OverTimesTable&\Cake\ORM\Association\HasMany $OverTimes
 * @property \App\Model\Table\ProjectMembersTable&\Cake\ORM\Association\HasMany $ProjectMembers
 * @property \App\Model\Table\ProjectTimesheetsTable&\Cake\ORM\Association\HasMany $ProjectTimesheets
 * @property \App\Model\Table\TrDeclareDetailsTable&\Cake\ORM\Association\HasMany $TrDeclareDetails
 * @property \App\Model\Table\TrDeclareExtsTable&\Cake\ORM\Association\HasMany $TrDeclareExts
 * @property \App\Model\Table\TrDeclareTotalsTable&\Cake\ORM\Association\HasMany $TrDeclareTotals
 * @property \App\Model\Table\TrDeclaresTable&\Cake\ORM\Association\HasMany $TrDeclares
 *
 * @method \App\Model\Entity\Employee newEmptyEntity()
 * @method \App\Model\Entity\Employee newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Employee[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Employee get($primaryKey, $options = [])
 * @method \App\Model\Entity\Employee findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Employee patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Employee[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Employee|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Employee saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Employee[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Employee[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Employee[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Employee[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EmployeesTable extends BaseTable
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('employees');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

//        $this->belongsTo('Areas', [
//            'foreignKey' => 'area_id',
//        ]);
//        $this->belongsTo('Companies', [
//            'foreignKey' => 'company_id',
//        ]);
//        $this->belongsTo('CompanySections', [
//            'foreignKey' => 'company_section_id',
//        ]);
//        $this->belongsTo('DayOffSettings', [
//            'foreignKey' => 'day_off_setting_id',
//        ]);
//        $this->hasMany('CheckinCheckouts', [
//            'foreignKey' => 'employee_id',
//        ]);
//        $this->hasMany('EmployeeDayOffHistories', [
//            'foreignKey' => 'employee_id',
//        ]);
//        $this->hasMany('EmployeeDayOffTransfers', [
//            'foreignKey' => 'employee_id',
//        ]);
//        $this->hasMany('EmployeeDayoffs', [
//            'foreignKey' => 'employee_id',
//        ]);
//        $this->hasMany('EmployeeEarnDayOffs', [
//            'foreignKey' => 'employee_id',
//        ]);
//        $this->hasMany('EmployeeHistories', [
//            'foreignKey' => 'employee_id',
//        ]);
//        $this->hasMany('EmployeeOvertimes', [
//            'foreignKey' => 'employee_id',
//        ]);
//        $this->hasMany('EmployeeSupports', [
//            'foreignKey' => 'employee_id',
//        ]);
//        $this->hasMany('EmployeeTimetables', [
//            'foreignKey' => 'employee_id',
//        ]);
//        $this->hasMany('EmployeeTodokes', [
//            'foreignKey' => 'employee_id',
//        ]);
//        $this->hasMany('GroupConfirmDetails', [
//            'foreignKey' => 'employee_id',
//        ]);
//        $this->hasMany('OverTimes', [
//            'foreignKey' => 'employee_id',
//        ]);
//        $this->hasMany('ProjectMembers', [
//            'foreignKey' => 'employee_id',
//        ]);
//        $this->hasMany('ProjectTimesheets', [
//            'foreignKey' => 'employee_id',
//        ]);
//        $this->hasMany('TrDeclareDetails', [
//            'foreignKey' => 'employee_id',
//        ]);
//        $this->hasMany('TrDeclareExts', [
//            'foreignKey' => 'employee_id',
//        ]);
//        $this->hasMany('TrDeclareTotals', [
//            'foreignKey' => 'employee_id',
//        ]);
//        $this->hasMany('TrDeclares', [
//            'foreignKey' => 'employee_id',
//        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->nonNegativeInteger('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('employee_code')
            ->maxLength('employee_code', 30)
            ->allowEmptyString('employee_code');

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->allowEmptyString('password');

        $validator
            ->scalar('kengen_group_cd')
            ->maxLength('kengen_group_cd', 10)
            ->allowEmptyString('kengen_group_cd');

        $validator
            ->allowEmptyString('level');

        $validator
            ->allowEmptyString('status');

        $validator
            ->scalar('family_name')
            ->maxLength('family_name', 255)
            ->allowEmptyString('family_name');

        $validator
            ->scalar('first_name')
            ->maxLength('first_name', 255)
            ->allowEmptyString('first_name');

        $validator
            ->scalar('family_name_kana')
            ->maxLength('family_name_kana', 255)
            ->allowEmptyString('family_name_kana');

        $validator
            ->scalar('first_name_kana')
            ->maxLength('first_name_kana', 255)
            ->allowEmptyString('first_name_kana');

        $validator
            ->date('birthday')
            ->allowEmptyDate('birthday');

        $validator
            ->integer('gender')
            ->allowEmptyString('gender');

        $validator
            ->scalar('health_insurance')
            ->maxLength('health_insurance', 50)
            ->allowEmptyString('health_insurance');

        $validator
            ->scalar('welfare_pension')
            ->maxLength('welfare_pension', 50)
            ->allowEmptyString('welfare_pension');

        $validator
            ->nonNegativeInteger('spouse')
            ->allowEmptyString('spouse');

        $validator
            ->scalar('zipcode')
            ->maxLength('zipcode', 10)
            ->allowEmptyString('zipcode');

        $validator
            ->scalar('address')
            ->maxLength('address', 255)
            ->allowEmptyString('address');

        $validator
            ->scalar('tel')
            ->maxLength('tel', 50)
            ->allowEmptyString('tel');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('avatar')
            ->maxLength('avatar', 255)
            ->allowEmptyString('avatar');

        $validator
            ->numeric('total_hour_off')
            ->greaterThanOrEqual('total_hour_off', 0)
            ->allowEmptyString('total_hour_off');

        $validator
            ->numeric('total_day_off')
            ->greaterThanOrEqual('total_day_off', 0)
            ->allowEmptyString('total_day_off');

        $validator
            ->scalar('mobile_tel')
            ->maxLength('mobile_tel', 50)
            ->allowEmptyString('mobile_tel');

        $validator
            ->date('join_date')
            ->allowEmptyDate('join_date');

        $validator
            ->date('dispach_join_date')
            ->allowEmptyDate('dispach_join_date');

        $validator
            ->date('last_work_date')
            ->allowEmptyDate('last_work_date');

        $validator
            ->date('leaving_date')
            ->allowEmptyDate('leaving_date');

        $validator
            ->allowEmptyString('employeement_status');

        $validator
            ->integer('hourly_wage')
            ->allowEmptyString('hourly_wage');

        $validator
            ->integer('base_salary')
            ->allowEmptyString('base_salary');

        $validator
            ->scalar('memo')
            ->allowEmptyString('memo');

        $validator
            ->nonNegativeInteger('login_failed_count')
            ->allowEmptyString('login_failed_count');

        $validator
            ->dateTime('last_login_exec')
            ->allowEmptyDateTime('last_login_exec');

        $validator
            ->dateTime('deleted_at')
            ->allowEmptyDateTime('deleted_at');

        $validator
            ->dateTime('created_at')
            ->notEmptyDateTime('created_at');

        $validator
            ->dateTime('updated_at')
            ->allowEmptyDateTime('updated_at');

        $validator
            ->nonNegativeInteger('total_dayoff')
            ->allowEmptyString('total_dayoff');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
//        $rules->add($rules->existsIn(['area_id'], 'Areas'));
//        $rules->add($rules->existsIn(['company_id'], 'Companies'));
//        $rules->add($rules->existsIn(['company_section_id'], 'CompanySections'));
//        $rules->add($rules->existsIn(['day_off_setting_id'], 'DayOffSettings'));

        return $rules;
    }
    public function getByLoginName($login_name){
        $conditions = [];
        $login_status = [];
        foreach (Constant::$cst_employee['login'] as $key => $value) {
            $login_status[] = $key;
        }
        if(count($login_status) > 0){
            $conditions[] = ['status in ' => $login_status];
        }
        $conditions[] = ['employee_code' => $login_name];
        $query = $this->find()
            ->select(['id', 'employee_code', 'password', 'login_failed_count', 'last_login_exec'])
            ->where($conditions);
        return $query->first();
    }
}
