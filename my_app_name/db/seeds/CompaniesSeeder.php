<?php


use Phinx\Seed\AbstractSeed;

class CompaniesSeeder extends AbstractSeed
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
                'id'=>1,
                'payment_employee_id'=>1,
                'apply_employee_id'=>1,
                'name'=>'Pioneer Soft',
                'name_kana'=>'パイオニアソフト',
                'representative'=>'森永 洋昭',
                'tel'=>'092-512-0005',
                'fax'=>'092-512-0042',
                'url'=>'https://www.psnet.co.jp/',
                'zipcode' => '8150031',
                'address' => '福岡県福岡市南区清水4丁目22番16号 PSビル',
                'business_category' => '',
                'limit_housing_allowance' =>'0',
                'wage_payment_date' =>'10',
                'when_holiday' => '2',
                'health_insurance' =>'01130012',
            ]
        ];
        $table=$this->table('companies');
        $table->truncate();
        $table->insert($data)->save();

    }
}
