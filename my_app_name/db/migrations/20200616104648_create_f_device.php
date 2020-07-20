<?php

use Phinx\Migration\AbstractMigration;

class CreateFDevice extends AbstractMigration
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
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $table = $this->table('finger_devices',[
            'signed' => false
        ]);
        $table->addColumn('ip', 'string', [
            'limit' => 255,
            'null' => true
        ]);
        $table->addColumn('port', 'string', [
            'limit' => 10,
            'null' => true
        ]);
        $table->addColumn('name', 'string', [
            'limit' => 255,
            'null' => true
        ]);
        $table->addColumn('last_update', 'biginteger', [
            'limit' => 20,
            'null' => true
        ]);


        $table->addColumn('created_user_id','integer',[
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
