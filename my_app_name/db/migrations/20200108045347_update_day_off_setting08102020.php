<?php

use Phinx\Migration\AbstractMigration;

class UpdateDayOffSetting08102020 extends AbstractMigration
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
        $table = $this->table('day_off_settings');
        $table->renameColumn('one_year_6_month','one_year');
        $table->renameColumn('two_year_6_month','two_year');
        $table->renameColumn('three_year_6_month','three_year');
        $table->renameColumn('four_year_6_month','four_year');
        $table->renameColumn('five_year_6_month','five_year');
        $table->renameColumn('six_year_6_month','six_year');
        $table->addColumn('join_date_earn','integer',[
           'after' =>'work_per_week',
           'null' =>true,
           'signed' => false
        ]);
        $table->update();
    }
}
