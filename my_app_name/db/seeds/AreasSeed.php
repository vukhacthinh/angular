<?php
use Migrations\AbstractSeed;

/**
 * Areas seed.
 */
class AreasSeed extends AbstractSeed
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
                'shift_time_id' => 1,
                'name' => 'PSV HA NOI',
                'code' => 'PSV_HN',
                'night_time' => '22:00',
                'mo' => '09:00-18:00',
                'tu' => '09:00-18:00',
                'we' => '09:00-18:00',
                'th' => '09:00-18:00',
                'fr' => '09:00-18:00',
                'sa' => '',
                'su' => ''
            ],
            [
                'shift_time_id' => 1,
                'name' => 'PSJ FUKUOKA',
                'code' => 'PSJ_FUKUOKA',
                'night_time' => '23:00',
                'mo' => '10:00-19:00',
                'tu' => '10:00-19:00',
                'we' => '10:00-19:00',
                'th' => '10:00-19:00',
                'fr' => '10:00-19:00',
                'sa' => '10:00-12:00',
                'su' => ''
            ],
            [
                'shift_time_id' => 1,
                'name' => 'PSL LAO',
                'code' => 'PSL_VIENGCHAN',
                'night_time' => '23:00',
                'mo' => '9:00-19:00',
                'tu' => '9:00-19:00',
                'we' => '9:00-19:00',
                'th' => '9:00-19:00',
                'fr' => '9:00-19:00',
                'sa' => '9:00-12:00',
                'su' => ''
            ],
            [
                'shift_time_id' => 1,
                'name' => 'PSA AMERICA',
                'code' => 'PSA_NEWYORK',
                'night_time' => '23:00',
                'mo' => '9:00-19:00',
                'tu' => '9:00-19:00',
                'we' => '9:00-19:00',
                'th' => '9:00-19:00',
                'fr' => '9:00-19:00',
                'sa' => '9:00-12:00',
                'su' => ''
            ],
        ];
        $table = $this->table('areas');
        $table->truncate();
        $table->insert($data)->save();
    }
}
