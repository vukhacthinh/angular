<?php

use Phinx\Migration\AbstractMigration;

class UpdateJudgementHistories extends AbstractMigration
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
        $table = $this->table('judgement_histories');
        $table->addColumn('user_create_comment','string',[
            'null'=>true,
            'limit'=> 255,
            'default' => null,
            'after' => 'application_original_employee_id'
        ]);
        $table->addColumn('user_confirm_comment','string',[
            'null'=>true,
            'limit'=> 255,
            'default' => null,
            'after' => 'user_create_comment'
        ]);
        $table->update();

        $table = $this->table('judgements');
        $table->removeColumn('comment');
        $table->update();

        $table = $this->table('employee_overtimes');
        $table->removeColumn('reason');
        $table->update();
    }
}
