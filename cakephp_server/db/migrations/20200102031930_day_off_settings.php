<?php

use Phinx\Migration\AbstractMigration;

class DayOffSettings extends AbstractMigration
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
        $table = $this->table('day_off_settings', [
            'signed' => false
        ]);
        $table->addColumn('work_per_week', 'integer', [
            'null' => true,
            'signed' =>false
        ]);
        $table->addColumn('six_month', 'integer', [
            'null' => true,
            'signed' =>false
        ]);
        $table->addColumn('one_year_6_month', 'integer', [
            'null' => true,
            'signed' =>false
        ]);
        $table->addColumn('two_year_6_month', 'integer', [
            'null' => true,
            'signed' =>false
        ]);
        $table->addColumn('three_year_6_month', 'integer', [
            'null' => true,
            'signed' =>false
        ]);
        $table->addColumn('four_year_6_month', 'integer', [
            'null' => true,
            'signed' =>false
        ]);
        $table->addColumn('five_year_6_month', 'integer', [
            'null' => true,
            'signed' =>false
        ]);
        $table->addColumn('six_year_6_month', 'integer', [
            'null' => true,
            'signed' =>false
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
