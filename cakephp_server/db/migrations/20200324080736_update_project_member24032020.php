<?php

use Phinx\Migration\AbstractMigration;

class UpdateProjectMember24032020 extends AbstractMigration
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
        $table = $this->table('project_members');
        $table->addColumn('employee_code','string',
            [
                'limit' => 100,
                'null' => true,
                'after'=> 'salary'
            ]);
        $table->addColumn('employee_fullname','string',
            [
                'limit' => 100,
                'null' => true,
                'after'=> 'employee_code'
            ]);
        $table->removeColumn('project_role');
        $table->changeColumn('salary','decimal',
            [
                'null' => true,
                'after'=> 'employee_fullname',
                'precision'=>14,
                'scale'=>2
            ]);
        $table->update();
    }
}
