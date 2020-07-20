<?php

use Phinx\Migration\AbstractMigration;

class UpdateProject24032020 extends AbstractMigration
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
        $table = $this->table('projects');
        $table->addColumn('leader_id','integer',
            [
               'signed' => false,
               'limit' => 11,
               'null' => true,
                'after'=> 'name_short'
            ]);
        $table->addColumn('leader_name','string',
            [
                'limit' => 100,
                'null' => true,
                'after'=> 'leader_id'
            ]);
        $table->addColumn('leader_code','string',
            [
                'limit' => 100,
                'null' => true,
                'after'=> 'leader_name'
            ]);
        $table->addColumn('cost','decimal',
            [
                'null' => true,
                'after'=> 'url',
                'precision'=>14,
                'scale'=>2
            ]);
        $table->addColumn('target','decimal',
            [
                'null' => true,
                'after'=> 'cost',
                'precision'=>14,
                'scale'=>2
            ]);
        $table->update();
    }
}
