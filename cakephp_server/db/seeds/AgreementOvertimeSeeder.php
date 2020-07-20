<?php


use Phinx\Seed\AbstractSeed;

class AgreementOvertimeSeeder extends AbstractSeed
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
              'type' => 1,
              'one_week' => 15,
              'two_week' => 27,
              'four_week' => 43,
              'one_month' => 45,
              'two_month' => 81,
              'three_month' => 120,
              'one_year' => 360,
              'is_active' => 1,
          ]
        ];
        $table = $this->table('kyoutei_overtimes');
        $table->truncate();
        $table->insert($data)->save();
    }
}
