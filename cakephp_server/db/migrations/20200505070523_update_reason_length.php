<?php

use Phinx\Migration\AbstractMigration;

class UpdateReasonLength extends AbstractMigration
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
        $table = $this->table('employee_day_off_transfers');
        $table->changeColumn('reason','string',[
            'limit' => 500,
            'null'=>true
        ]);
        $table->update();
        $table = $this->table('employee_day_off_histories');
        $table->changeColumn('reason','string',[
            'limit' => 500,
            'null'=>true
        ]);
        $table->update();
        $table = $this->table('employee_todokes');
        $table->changeColumn('reason','string',[
            'limit' => 500,
            'null'=>true
        ]);
        $table->update();
        $table = $this->table('judgement_histories');
        $table->changeColumn('user_create_comment','string',[
            'limit' => 500,
            'null'=>true
        ]);
        $table->changeColumn('user_confirm_comment','string',[
            'limit' => 500,
            'null'=>true
        ]);
        $table->update();
    }
}
