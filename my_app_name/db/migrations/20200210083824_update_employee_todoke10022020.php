<?php

use Phinx\Migration\AbstractMigration;

class UpdateEmployeeTodoke10022020 extends AbstractMigration
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
        $table->removeColumn('value');
        $table->addColumn('day','float',[
            'signed' => false,
            'null' => true,
            'after' =>'work_date'
        ]);
        $table->addColumn('minute','integer',[
            'signed' => false,
            'null' => true,
            'limit' => 11,
            'after' =>'day'
        ]);
        $table->update();
    }
}
