<?php

use Phinx\Db\Adapter\MysqlAdapter;
use Phinx\Migration\AbstractMigration;

class CreateItem extends AbstractMigration
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
        $table = $this->table('m_items',[
            'signed' =>false
        ]);
        $table->addColumn('item_group_cd', 'string', [
            'null' => true,
            'limit' => 25,
        ]);
        $table->addColumn('item_cd', 'string', [
            'null' => true,
            'limit' => 20,
        ]);
        $table->addColumn('item_name', 'text', [
            'null' => true,
        ]);
        $table->addColumn('item_kana', 'text', [
            'null' => true,
        ]);
        $table->addColumn('item_ryaku', 'text', [
            'null' => true,
        ]);
        $table->addColumn('item_kbn_1', 'string', [
            'null' => true,
            'limit' => 100,
        ]);
        $table->addColumn('item_kbn_2', 'string', [
            'null' => true,
            'limit' => 100,
        ]);
        $table->addColumn('item_kbn_3', 'string', [
            'null' => true,
            'limit' => 100,
        ]);
        $table->addColumn('item_kbn_4', 'string', [
            'null' => true,
            'limit' => 100,
        ]);
        $table->addColumn('item_kbn_5', 'string', [
            'null' => true,
            'limit' => 100,
        ]);
        $table->addColumn('item_num_1', 'string', [
            'null' => true,
            'limit' => 100,
        ]);
        $table->addColumn('item_num_2', 'string', [
            'null' => true,
            'limit' => 100,
        ]);
        $table->addColumn('item_num_3', 'string', [
            'null' => true,
            'limit' => 100,
        ]);
        $table->addColumn('item_num_4', 'string', [
            'null' => true,
            'limit' => 100,
        ]);
        $table->addColumn('item_num_5', 'string', [
            'null' => true,
            'limit' => 100,
        ]);
        $table->addColumn('item_text_1', 'text', [
            'null' => true,
        ]);
        $table->addColumn('order_no', 'integer', [
            'null' => true,
            'limit' => MysqlAdapter::INT_REGULAR,
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
