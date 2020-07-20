<?php

use Phinx\Migration\AbstractMigration;

class UpdateEmployee26022020 extends AbstractMigration
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
        $table = $this->table('employees');
        $table->removeColumn('residence_zipcode');
        $table->removeColumn('residence_address');
        $table->removeColumn('contact_zipcode');
        $table->removeColumn('contact_address');
        $table->removeColumn('contact_tel');
        $table->removeColumn('contact_relationship');
        $table->removeColumn('leaving_process_date');
        $table->removeColumn('after_leaving_zipcode');
        $table->removeColumn('after_leaving_address');
        $table->removeColumn('mobile1_tel');
        $table->removeColumn('mobile1_carrier');
        $table->removeColumn('mobile2_tel');
        $table->removeColumn('mobile2_carrier');
        $table->removeColumn('seconded_flag');
        $table->removeColumn('seconded_date');
        $table->removeColumn('occupation');
        $table->removeColumn('job_rating');
        $table->removeColumn('job_grade');
        $table->update();
    }
}
