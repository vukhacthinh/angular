<?php

use Phinx\Migration\AbstractMigration;

class CreateTrDeclareTotal extends AbstractMigration
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
        $table = $this->table('tr_declare_totals',[
            'signed' =>false
        ]);
        $table->addColumn('employee_id','integer',[
            'limit' => 11,
            'signed' => false,
            'null' => true
        ]);
        $table->addColumn('working_day','integer',[
            'null' => true
        ]);
        $table->addColumn('holiday_work_day','integer',[
            'null' => true
        ]);
        $table->addColumn('number_of_absence_day','integer',[
            'null' => true
        ]);
        $table->addColumn('special_holiday','integer',[
            'null' => true
        ]);
        $table->addColumn('business_day','integer',[
            'null' => true
        ]);
        $table->addColumn('training_days','integer',[
            'null' => true
        ]);
        $table->addColumn('number_of_day_off_work','integer',[
            'null' => true
        ]);
        $table->addColumn('transfer_days','integer',[
            'null' => true
        ]);
        $table->addColumn('number_of_holidays','integer',[
            'null' => true
        ]);
        $table->addColumn('overtime_hours','integer',[
            'null' => true
        ]);
        $table->addColumn('late_night_overtime_hours','integer',[
            'null' => true
        ]);
        $table->addColumn('holiday_work_hours','integer',[
            'null' => true
        ]);
        $table->addColumn('recording_of_late','integer',[
            'null' => true
        ]);
        $table->addColumn('early_departure_time','integer',[
            'null' => true
        ]);

        $table->addColumn('created_user_id','integer',[
            'null' => true,
            'signed' =>false
        ]);
        $table->addColumn('modified_user_id','integer',[
            'null' => true,
            'signed' =>false
        ]);
        $table->addColumn('deleted_at', 'timestamp', [
            'null' => true,
        ]);
        $table->addTimestamps();
        $table->create();
    }
}
