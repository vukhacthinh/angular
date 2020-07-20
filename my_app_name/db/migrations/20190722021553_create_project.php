<?php

use Phinx\Migration\AbstractMigration;

class CreateProject extends AbstractMigration
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
        $table = $this->table('projects',[
            'signed' => false
        ]);
        $table->addColumn('name', 'string', [
            'null' => true,
            'limit' => 50
        ]);
        $table->addColumn('name_kana', 'string', [
            'null' => true,
            'limit' => 50
        ]);
        $table->addColumn('name_short', 'string', [
            'null' => true,
            'limit' => 50
        ]);
        $table->addColumn('customer_charge', 'string', [
            'null' => true,
            'limit' => 50
        ]);
        $table->addColumn('tel', 'string', [
            'null' => true,
            'limit' => 50
        ]);
        $table->addColumn('fax', 'string', [
            'null' => true,
            'limit' => 50
        ]);
        $table->addColumn('url', 'string', [
            'null' => true,
            'limit' => 255
        ]);
        $table->addColumn('memo', 'string', [
            'null' => true,
            'limit' => 200
        ]);
        $table->addColumn('code', 'string', [
            'null' => true,
            'limit' => 20
        ]);
        $table->addColumn('client_code', 'string', [
            'null' => true,
            'limit' => 10
        ]);
        $table->addColumn('expiration_date_from', 'date', [
            'null' => true
        ]);
        $table->addColumn('expiration_date_to', 'date', [
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
