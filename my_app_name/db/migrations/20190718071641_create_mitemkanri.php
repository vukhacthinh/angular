<?php

use Phinx\Migration\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;

class CreateMitemkanri extends AbstractMigration
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
        $table  = $this->table('m_item_kanris', [
            'signed' => false
        ]);
        $table->addColumn('group_cd', 'string', [
            'null' => false,
            'limit' => 25,
        ]);
        $table->addColumn('name', 'text', [
            'null' => true,
        ]);
        $table->addColumn('kana', 'text', [
            'null' => true,
        ]);
        $table->addColumn('ryaku', 'text', [
            'null' => true,
        ]);
        $table->addColumn('function_division', 'integer', [
            'null' => true,
            'limit' => MysqlAdapter::INT_REGULAR,
        ]);
        $table->addColumn('kbn_1', 'string', [
            'null' => true,
            'limit' => 100,
        ]);
        $table->addColumn('kbn_2', 'string', [
            'null' => true,
            'limit' => 100,
        ]);
        $table->addColumn('kbn_3', 'string', [
            'null' => true,
            'limit' => 100,
        ]);
        $table->addColumn('kbn_4', 'string', [
            'null' => true,
            'limit' => 100,
        ]);
        $table->addColumn('kbn_5', 'string', [
            'null' => true,
            'limit' => 100,
        ]);
        $table->addColumn('label1', 'string', [
            'null' => true,
            'limit' => 30,
        ]);
        $table->addColumn('label2', 'string', [
            'null' => true,
            'limit' => 30,
        ]);
        $table->addColumn('label3', 'string', [
            'null' => true,
            'limit' => 30,
        ]);
        $table->addColumn('label4', 'string', [
            'null' => true,
            'limit' => 30,
        ]);
        $table->addColumn('label5', 'string', [
            'limit' => 30,
        ]);
        $table->addColumn('text_label_1', 'string', [
            'null' => true,
            'limit' => 30,
        ]);
        $table->addColumn('order_no', 'integer', [
            'null' => true,
            'limit' => MysqlAdapter::INT_TINY,
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
