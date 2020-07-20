<?php

use Phinx\Migration\AbstractMigration;

class CreateEmployees extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    addCustomColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Any other destructive changes will result in an error when trying to
     * rollback the migration.
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $table = $this->table('employees', [
            'signed' => false
        ])
            ->addColumn('employee_code', 'string', [
                'null' => true,
                'limit' => 30,
            ])
            ->addColumn('password', 'string', [
                'null' => true,
                'limit' => 255,
            ])
            ->addColumn('area_id', 'integer', [
                'null' => true,
                'signed' => false
            ])
            ->addColumn('kengen_group_cd', 'string', [
                'null' => true,
                'limit' => 10,
            ])
            ->addColumn('fix_month', 'date', [
                'null' => true,
            ])
            ->addColumn('status', 'integer', [
                'null' => true,
                'default' => '0',
                'limit' => \Phinx\Db\Adapter\MysqlAdapter::INT_TINY
            ])
            ->addColumn('company_id', 'integer', [
                'signed' => false,
                'null' => true,
            ])
            ->addColumn('company_section_id', 'integer', [
                'signed' => false,
                'null' => true,
            ])
            ->addColumn('seconded_destination', 'string', [
                'null' => true,
                'limit' => 255,
            ])
            ->addColumn('family_name', 'string', [
                'null' => true,
                'limit' => 255,
            ])
            ->addColumn('first_name', 'string', [
                'null' => true,
                'limit' => 255,
            ])
            ->addColumn('family_name_kana', 'string', [
                'null' => true,
                'limit' => 255,
            ])
            ->addColumn('first_name_kana', 'string', [
                'null' => true,
                'limit' => 255,
            ])
            ->addColumn('birthday', 'date', [
                'null' => true,
            ])
            ->addColumn('gender', 'integer', [
                'null' => true,
            ])
            ->addColumn('health_insurance', 'string', [
                'null' => true,
                'limit' => 50,
            ])
            ->addColumn('welfare_pension', 'string', [
                'null' => true,
                'limit' => 50,
            ])
            ->addColumn('spouse', 'integer', [
                'signed' => false,
                'null' => true,
                'default' => '0',
            ])
            ->addColumn('zipcode', 'string', [
                'null' => true,
                'limit' => 10,
            ])
            ->addColumn('address', 'string', [
                'null' => true,
                'limit' => 255,
            ])
            ->addColumn('tel', 'string', [
                'null' => true,
                'limit' => 50,
            ])
            ->addColumn('mobile_tel', 'string', [
                'null' => true,
                'limit' => 50,
            ])
            ->addColumn('residence_zipcode', 'string', [
                'null' => true,
                'limit' => 10,
            ])
            ->addColumn('residence_address', 'string', [
                'null' => true,
                'limit' => 255,
            ])
            ->addColumn('contact_zipcode', 'string', [
                'null' => true,
                'limit' => 10,
            ])
            ->addColumn('contact_address', 'string', [
                'null' => true,
                'limit' => 255,
            ])
            ->addColumn('contact_tel', 'string', [
                'null' => true,
                'limit' => 50,
            ])
            ->addColumn('contact_relationship', 'string', [
                'null' => true,
                'limit' => 50,
            ])
            ->addColumn('leaving_process_date', 'date', [
                'null' => true,
            ])
            ->addColumn('after_leaving_zipcode', 'string', [
                'null' => true,
                'limit' => 10,
            ])
            ->addColumn('after_leaving_address', 'string', [
                'null' => true,
                'limit' => 255,
            ])
            ->addColumn('mobile1_tel', 'string', [
                'null' => true,
                'limit' => 50,
            ])
            ->addColumn('mobile1_carrier', 'string', [
                'null' => true,
                'limit' => 50,
            ])
            ->addColumn('mobile2_tel', 'string', [
                'null' => true,
                'limit' => 50,
            ])
            ->addColumn('mobile2_carrier', 'string', [
                'null' => true,
                'limit' => 50,
            ])
            ->addColumn('join_date', 'date', [
                'null' => true,
            ])
            ->addColumn('dispach_join_date', 'date', [
                'null' => true,
            ])
            ->addColumn('last_work_date', 'date', [
                'null' => true,
            ])
            ->addColumn('leaving_date', 'date', [
                'null' => true,
            ])
            ->addColumn('join_month', 'string', [
                'null' => true,
                'limit' => 50,
            ])
            ->addColumn('leaving_month', 'string', [
                'null' => true,
                'limit' => 50,
            ])
            ->addColumn('employeement_status', 'integer', [
                'null' => true,
                'limit' => \Phinx\Db\Adapter\MysqlAdapter::INT_TINY,
            ])
            ->addColumn('seconded_flag', 'integer', [
                'null' => true,
                'default' => '0',
                'limit' => \Phinx\Db\Adapter\MysqlAdapter::INT_TINY
            ])
            ->addColumn('seconded_date', 'date', [
                'null' => true,
            ])
            ->addColumn('occupation', 'string', [
                'null' => true,
                'limit' => 50,
            ])
            ->addColumn('job_rating', 'string', [
                'null' => true,
                'limit' => 50,
            ])
            ->addColumn('job_grade', 'string', [
                'null' => true,
                'limit' => 50,
            ])
            ->addColumn('hourly_wage', 'integer', [
                'null' => true,
            ])
            ->addColumn('base_salary', 'integer', [
                'null' => true,
            ])
            ->addColumn('memo', 'text', [
                'null' => true,
            ])
            ->addColumn('login_failed_count', 'integer', [
                'signed' => false,
                'null' => true,
                'default' => '0',
            ])
            ->addColumn('last_login_exec', 'datetime', [
                'null' => true,
            ]);
        $table->addColumn('deleted_at', 'timestamp', [
            'null' => true,

        ]);
        $table->addTimestamps();
        $table->create();
    }
}
