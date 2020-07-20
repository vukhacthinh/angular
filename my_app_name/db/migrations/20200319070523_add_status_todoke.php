<?php

use Phinx\Migration\AbstractMigration;

class AddStatusTodoke extends AbstractMigration
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
        $table = $this->table('employee_todokes');
        $table->removeColumn('work_date')
            ->removeColumn('approve_id')
            ->removeColumn('approve_date');
        $table->addColumn('status','integer',[
            'signed' => false,
            'null' => true,
            'limit' => \Phinx\Db\Adapter\MysqlAdapter::INT_TINY,
            'after' => 'reason'
        ]);
        $table->update();

        $table = $this->table('employee_overtimes');
        $table->removeColumn('project_id');
        $table->addColumn('status','integer',[
            'signed' => false,
            'null' => true,
            'limit' => \Phinx\Db\Adapter\MysqlAdapter::INT_TINY,
            'after' => 'employee_id'
        ]);
        $table->update();
    }
}