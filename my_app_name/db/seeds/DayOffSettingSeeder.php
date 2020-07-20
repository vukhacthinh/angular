<?php


use Phinx\Seed\AbstractSeed;

class DayOffSettingSeeder extends AbstractSeed
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
        $data=[
            [
                'work_per_week' => 5,
                'join_date_earn' => 5,
                'six_month' => 5,
                'one_year' => 11,
                'two_year' => 12,
                'three_year' => 14,
                'four_year' => 16,
                'five_year' => 18,
                'six_year' => 20,
            ],
            [
                'work_per_week' => 4,
                'join_date_earn' => 3,
                'six_month' => 4,
                'one_year' => 8,
                'two_year' => 9,
                'three_year' => 10,
                'four_year' => 12,
                'five_year' => 13,
                'six_year' => 15,
            ],
            [
                'work_per_week' => 3,
                'join_date_earn' => 2,
                'six_month' => 3,
                'one_year' => 6,
                'two_year' => 6,
                'three_year' => 8,
                'four_year' => 9,
                'five_year' => 10,
                'six_year' => 11,
            ],
            [
                'work_per_week' => 2,
                'join_date_earn' => 1,
                'six_month' => 2,
                'one_year' => 4,
                'two_year' => 4,
                'three_year' => 5,
                'four_year' => 6,
                'five_year' => 6,
                'six_year' => 7,
            ],
            [
                'work_per_week' => 1,
                'join_date_earn' => 0,
                'six_month' => 1,
                'one_year' => 2,
                'two_year' => 2,
                'three_year' => 2,
                'four_year' => 3,
                'five_year' => 3,
                'six_year' => 3,
            ],
        ];
        $table=$this->table('day_off_settings');
        $table->truncate();
        $table->insert($data)->save();
    }
}
