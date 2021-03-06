<?php

use Phinx\Migration\AbstractMigration;

class CreateShiftTimeable extends AbstractMigration
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
        $table = $this->table('shift_timetables',[
            'signed' =>false
        ]);
        $table->addColumn('shift_name','string',[
            'limit' => 250,
            'null' => true
        ]);
        $table->addColumn('shift_code','string',[
            'limit' => 250,
            'null' => true
        ]);
        $table->addColumn('start_day','date',[
            'null' => true
        ]);
        $table->addColumn('end_day','date',[
            'null' => true
        ]);
        $table->addColumn('on_duty_time','string',[
            'limit' => 50,
            'null' => true
        ]);
        $table->addColumn('off_duty_time','string',[
            'limit' => 50,
            'null' => true
        ]);
        $table->addColumn('comment','string',[
            'limit' => 250,
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
