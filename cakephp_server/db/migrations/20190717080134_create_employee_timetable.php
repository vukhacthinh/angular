<?php

use Phinx\Migration\AbstractMigration;

class CreateEmployeeTimetable extends AbstractMigration
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
        $table = $this->table('employee_timetables',[
            'signed' => false
        ]);
        $table->addColumn('employee_id', 'integer', [
            'signed' => false,
            'null' => true
        ]);
        $table->addColumn('mo', 'string', [
            'limit' => 255,
            'null' => true
        ]);
        $table->addColumn('tu', 'string', [
            'limit' => 255,
            'null' => true
        ]);
        $table->addColumn('we', 'string', [
            'limit' => 255,
            'null' => true
        ]);
        $table->addColumn('th', 'string', [
            'limit' => 255,
            'null' => true
        ]);
        $table->addColumn('fr', 'string', [
            'limit' => 255,
            'null' => true
        ]);
        $table->addColumn('sa', 'string', [
            'limit' => 255,
            'null' => true
        ]);
        $table->addColumn('su', 'string', [
            'limit' => 255,
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
