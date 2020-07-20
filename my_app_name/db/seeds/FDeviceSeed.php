<?php
use Migrations\AbstractSeed;

/**
 * Areas seed.
 */
class FDeviceSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'ip' => '118.70.175.221',
                'name' => 'Cua ra vao',
                'port' => '14370',
                'last_update' => 0,
            ],
        ];
        $table = $this->table('finger_devices');
        $table->truncate();
        $table->insert($data)->save();
    }
}
