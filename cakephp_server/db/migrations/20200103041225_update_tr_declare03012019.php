<?php

use Phinx\Migration\AbstractMigration;

class UpdateTrDeclare03012019 extends AbstractMigration
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
        $table = $this->table('tr_declares');
        $table->removeColumn('is_all_day');
        $table->removeColumn('is_valid');
        $table->removeColumn('work_type');
        $table->removeColumn('customer');
        $table->removeColumn('project');
        $table->removeColumn('add_pc');
        $table->removeColumn('last_update_pc');
        $table->removeColumn('full_time_from');
        $table->removeColumn('full_time_to');
        $table->save();
    }
}
