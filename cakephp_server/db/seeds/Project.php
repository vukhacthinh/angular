<?php


use Phinx\Seed\AbstractSeed;

class Project extends AbstractSeed
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
                'name' => 'TOMASAC',
                'name_kana' => '戸政町',
                'name_short' => 'TOMASAC',
                'customer_charge' => 'ANH HUNG',
                'tel' => '0915434646',
                'fax' => '12456456',
                'url' => 'http://localhost:29677/AWCYO15002/Do',
                'memo' => 'KHONG CO GI GHI CHU',
                'code' => 'AWCYO',
                'client_code' => 'T006',
                'expiration_date_from' => null,
                'expiration_date_to' => null
            ],
            [
                'name' => 'PROJECT AC',
                'name_kana' => '戸政町AC',
                'name_short' => 'projectAC',
                'customer_charge' => 'ANH HUNG',
                'tel' => '0915434646',
                'fax' => '12456456',
                'url' => 'http://localhost:29677/AWRKO15002/Do',
                'memo' => 'KHONG CO GI GHI CHU',
                'code' => 'AWRKO',
                'client_code' => 'T006',
                'expiration_date_from' => null,
                'expiration_date_to' => null
            ],
            [
                'name' => '総務',
                'name_kana' => 'ソウム',
                'name_short' => '総務',
                'customer_charge' => 'ANH MINH',
                'tel' => '+84937917030',
                'fax' => '12456456',
                'url' => 'psnet.asia',
                'memo' => 'KHONG CO GI GHI CHU',
                'code' => 'AWRKO',
                'client_code' => 'T009',
                'expiration_date_from' => null,
                'expiration_date_to' => null
            ],
            [
                'name' => '会計',
                'name_kana' => 'ｶｲｹ',
                'name_short' => 'Account',
                'customer_charge' => 'ANH MINH',
                'tel' => '+84937917030',
                'fax' => '12456456',
                'url' => 'psnet.asia',
                'memo' => 'KHONG CO GI GHI CHU',
                'code' => 'AWRKO',
                'client_code' => 'T009',
                'expiration_date_from' => null,
                'expiration_date_to' => null
            ],
        ];
        $table = $this->table('projects');
        $table->truncate();
        $table->insert($data)->save();
    }
}
