<?php

use Phinx\Migration\AbstractMigration;

class CreateCompanySections extends AbstractMigration
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
        $table = $this->table('company_sections',[
            'signed' => false
        ]);
        $table->addColumn('company_id', 'integer', [
            'signed' => false,
            'null' => true
        ]);
        $table->addColumn('name', 'string', [
            'limit' => 255,
            'null' => true
        ]);
        $table->addColumn('area_id', 'integer', [
            'signed' => false,
            'null' => true
        ]);
        $table->addColumn('locale', 'string', [
            'limit' => 255,
            'null' => true
        ]);
        $table->addColumn('parent_id', 'integer', [
            'signed' => false,
            'null' => true
        ]);
        $table->addColumn('section_type', 'integer', [
            'signed' => false,
            'null' => true
        ]);
        $table->addColumn('responsible_employee_id', 'integer', [
            'signed' => false,
            'null' => true
        ]);
        $table->addColumn('section_code', 'string', [
            'limit' => 50,
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
        $table->addColumn('memo', 'text', [
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
