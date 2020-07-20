<?php

use Phinx\Migration\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;
class CreateTrDeclare extends AbstractMigration
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
        $table = $this->table('tr_declares',[
            'signed' =>false
        ]);
        $table->addColumn('employee_id','integer',[
            'limit' => 11,
            'signed' => false,
            'null' => true
        ]);
        $table->addColumn('is_all_day','integer',[
            'limit' => MysqlAdapter::INT_TINY,
            'signed' => false,
            'null' => true
        ]);
        $table->addColumn('work_date','string',[
            'limit' => 50,
            'null' => true
        ]);
        $table->addColumn('from_time','string',[
            'limit' => 50,
            'null' => true
        ]);
        $table->addColumn('to_time','string',[
            'limit' => 50,
            'null' => true
        ]);
        $table->addColumn('status','boolean',[
            'limit' => MysqlAdapter::INT_SMALL,
            'null' => true
        ]);
        $table->addColumn('approve_id','integer',[
            'limit' => 11,
            'signed' => false,
            'null' => true
        ]);
        $table->addColumn('refuse_id','integer',[
            'limit' => 11,
            'signed' => false,
            'null' => true
        ]);
        $table->addColumn('is_valid','integer',[
            'limit' => MysqlAdapter::INT_TINY,
            'null' => true
        ]);
        $table->addColumn('work_type_detail','string',[
            'limit' => 10,
            'null' => true
        ]);
        $table->addColumn('work_type','string',[
            'limit' => 10,
            'null' => true
        ]);
        $table->addColumn('work_location_id','integer',[
            'limit' => 11,
            'signed' => false,
            'null' => true
        ]);
        $table->addColumn('customer','string',[
            'limit' => 10,
            'null' => true
        ]);
        $table->addColumn('project','integer',[
            'limit' => 11,
            'null' => true
        ]);
        $table->addColumn('description','string',[
            'limit' => 250,
            'null' => true
        ]);
        $table->addColumn('add_pc','string',[
            'limit' => 250,
            'null' => true
        ]);
        $table->addColumn('last_update_pc','string',[
            'limit' => 250,
            'null' => true
        ]);
        $table->addColumn('full_time_from','datetime',[
            'null' => true
        ]);
        $table->addColumn('full_time_to','datetime',[
            'null' => true
        ]);



        $table->addColumn('created_user_id','integer',[
            'null' =>true,
            'signed' =>false
        ]);
        $table->addColumn('modified_user_id','integer',[
            'null' =>true,
            'signed' =>false
        ]);
        $table->addColumn('deleted_at', 'timestamp', [
            'null' => true,
        ]);
        $table->addTimestamps();
        $table->create();
    }
}
