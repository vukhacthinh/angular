<?php

use Phinx\Migration\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;
class CreateNotices extends AbstractMigration
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
        $table = $this->table('notices',[
           'signed' => false
        ]);
        $table->addColumn('title','string',[
            'limit' => 300,
            'null' => true
        ]);
        $table->addColumn('content','text',[
            'null' => true
        ]);
        $table->addColumn('is_display','boolean',[
            'null' => true
        ]);
        $table->addColumn('display_date_from','date',[
            'null' => true
        ]);
        $table->addColumn('display_date_to','date',[
            'null' => true
        ]);
        $table->addColumn('order_no','integer',[
            'limit' => MysqlAdapter::INT_SMALL,
            'signed' => false,
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
