<?php

use Phinx\Migration\AbstractMigration;

class CreateCompany extends AbstractMigration
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
        $table = $this->table('companies',[
            'signed' => false
        ]);
        $table->addColumn('payment_employee_id', 'integer', [
            'null' => true,
            'signed' => false
        ]);
        $table->addColumn('apply_employee_id', 'integer', [
            'null' => true,
            'signed' => false
        ]);
        $table->addColumn('name', 'string', [
            'limit' => 255,
            'null' => true
        ]);
        $table->addColumn('name_kana', 'string', [
            'limit' => 255,
            'null' => true
        ]);
        $table->addColumn('representative', 'string', [
            'limit' => 255,
            'null' => true
        ]);
        $table->addColumn('tel', 'string', [
            'limit' => 20,
            'null' => true
        ]);
        $table->addColumn('fax', 'string', [
            'limit' => 20,
            'null' => true
        ]);
        $table->addColumn('url', 'text', [
            'null' => true
        ]);
        $table->addColumn('zipcode', 'string', [
            'limit' => 20,
            'null' => true
        ]);
        $table->addColumn('address', 'string', [
            'limit' => 255,
            'null' => true
        ]);
        $table->addColumn('business_category', 'string', [
            'limit' => 20,
            'null' => true
        ]);
        $table->addColumn('limit_housing_allowance', 'integer', [
            'null' => true,
            'signed' => false
        ]);
        $table->addColumn('wage_payment_date', 'integer', [
            'null' => true,
            'signed' => false
        ]);
        $table->addColumn('when_holiday', 'string', [
            'limit' => 20,
            'null' => true
        ]);
        $table->addColumn('health_insurance', 'string', [
            'limit' => 20,
            'null' => true
        ]);
        $table->addColumn('health_insurance_symbol', 'string', [
            'limit' => 10,
            'null' => true
        ]);
        $table->addColumn('memo', 'text', [
            'null' => true
        ]);
        $table->addColumn('index_code', 'string', [
            'limit' => 10,
            'null' => true
        ]);
        $table->addColumn('invoice_charge', 'string', [
            'limit' => 255,
            'null' => true
        ]);
        $table->addColumn('kyokaikenpo_no', 'string', [
            'limit' => 10,
            'null' => true
        ]);
        $table->addColumn('start_date', 'date', [
            'null' => true
        ]);
        $table->addColumn('end_date', 'date', [
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
