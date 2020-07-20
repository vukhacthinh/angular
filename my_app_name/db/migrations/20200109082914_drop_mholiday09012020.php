<?php

use Phinx\Migration\AbstractMigration;

class DropMholiday09012020 extends AbstractMigration
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
        if($this->hasTable('m_holidays')){
            $this->table('m_holidays')->drop()->update();
        }
        $table = $this->table('m_holidays',[
            'signed' =>false
        ]);
        $table->addColumn('holiday','date',[
            'null' => true
        ]);
        $table->addColumn('type','boolean',[
            'null' => true,
            'signed' => false
        ]);
        $table->addColumn('name','string',[
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('area_id','integer',[
            'null' => true,
            'signed' => false
        ]);
        $table->addColumn('description','string',[
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('color','string',[
            'limit' => 10,
            'null' => true,
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
