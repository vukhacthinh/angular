<?php


use Phinx\Seed\AbstractSeed;

class ShiftTimeTableSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'shift_name' => 'Gio hanh chinh chuan',
                'shift_code' => 'HC',
                'start_day' => '2018-01-01 00:00:00',
                'end_day' => '2050-12-31 00:00:00',
                'on_duty_time' => '09:00',
                'off_duty_time' => '18:00',
                'comment' => ''
            ],
            [
                'id' => 2,
                'shift_name' => 'Gio mua he',
                'shift_code' => 'HEHC',
                'start_day' => '2018-01-01 00:00:00',
                'end_day' => '2050-12-31 00:00:00',
                'on_duty_time' => '08:00',
                'off_duty_time' => '17:00',
                'comment' => ''
            ],
        ];

        $table = $this->table('shift_timetables');
        $table->truncate();
        $table->insert($data)->save();
    }
}
