<?php


use Phinx\Seed\AbstractSeed;
use Cake\Auth\DefaultPasswordHasher;
class EmployeeSeeder extends AbstractSeed
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
                'employee_code' => 'admin',
                'password' => (new DefaultPasswordHasher())->hash('12345678'),
                'area_id' => 1,
                'kengen_group_cd' => 'admin',
                'status' => 1,
                'company_id' => 1,
                'company_section_id' => 1,
                'family_name' => 'admin',
                'first_name' => 'admin',
                'family_name_kana' => 'アメリカ',
                'first_name_kana' => 'アメリカ',
                'birthday' => null,
                'gender' => 1,
                'base_salary' =>20000,
                'level' => 4
            ],
            [
                'employee_code' => 'v10001',
                'password' => (new DefaultPasswordHasher())->hash('12345678'),
                'area_id' => 1,
                'kengen_group_cd' => 'user',
                'status' => 2,
                'company_id' => 1,
                'company_section_id' => 3,
                'family_name' => 'DM',
                'first_name' => 'tâm',
                'family_name_kana' => 'day la ho',
                'first_name_kana' => 'day la ten',
                'birthday' => null,
                'gender' => 0,
                'base_salary' =>17000,
                'level' => 3
            ],
            [
                'employee_code' => 'v10002',
                'password' => (new DefaultPasswordHasher())->hash('12345678'),
                'area_id' => 1,
                'kengen_group_cd' => 'user',
                'status' => 1,
                'company_id' => 1,
                'company_section_id' => 3,
                'family_name' => 'nguyễn',
                'first_name' => 'thắng',
                'family_name_kana' => 'day la ho',
                'first_name_kana' => 'day la ten',
                'birthday' => null,
                'gender' => 0,
                'base_salary' =>16000,
                'level' => 3
            ],
            [
                'employee_code' => 'v10003',
                'password' => (new DefaultPasswordHasher())->hash('12345678'),
                'area_id' => 1,
                'kengen_group_cd' => 'user',
                'status' => 1,
                'company_id' => 1,
                'company_section_id' => 3,
                'family_name' => 'mai',
                'first_name' => 'minh',
                'family_name_kana' => 'day la ho',
                'first_name_kana' => 'day la ten',
                'birthday' => null,
                'gender' => 0,
                'base_salary' =>14000,
                'level' => 2
            ],
            [
                'employee_code' => 'v10004',
                'password' => (new DefaultPasswordHasher())->hash('12345678'),
                'area_id' => 1,
                'kengen_group_cd' => 'user',
                'status' => 1,
                'company_id' => 1,
                'company_section_id' => 3,
                'family_name' => 'nguyen',
                'first_name' => 'trinh',
                'family_name_kana' => 'day la ho',
                'first_name_kana' => 'day la ten',
                'birthday' => null,
                'gender' => 0,
                'base_salary' =>12000,
                'level' => 1
            ],
            [
                'employee_code' => 'v10005',
                'password' => (new DefaultPasswordHasher())->hash('12345678'),
                'area_id' => 1,
                'kengen_group_cd' => 'user',
                'status' => 1,
                'company_id' => 1,
                'company_section_id' => 3,
                'family_name' => 'trinh',
                'first_name' => 'minh',
                'family_name_kana' => 'day la ho',
                'first_name_kana' => 'day la ten',
                'birthday' => null,
                'gender' => 0,
                'base_salary' =>11000,
                'level' => 1
            ],
            [
                'employee_code' => 'v10006',
                'password' => (new DefaultPasswordHasher())->hash('12345678'),
                'area_id' => 1,
                'kengen_group_cd' => 'user',
                'status' => 2,
                'company_id' => 1,
                'company_section_id' => 3,
                'family_name' => 'dinh',
                'first_name' => 'ha',
                'family_name_kana' => 'day la ho',
                'first_name_kana' => 'day la ten',
                'birthday' => null,
                'gender' => 0,
                'base_salary' =>10000,
                'level' => 1
            ],
            [
                'employee_code' => 'v10007',
                'password' => (new DefaultPasswordHasher())->hash('12345678'),
                'area_id' => 1,
                'kengen_group_cd' => 'user',
                'status' => 1,
                'company_id' => 1,
                'company_section_id' => 3,
                'family_name' => 'đặng',
                'first_name' => 'tuấn',
                'family_name_kana' => 'day la ho',
                'first_name_kana' => 'day la ten',
                'birthday' => null,
                'gender' => 0,
                'base_salary' =>19000,
                'level' => 1
            ],
            [
                'employee_code' => 'v10008',
                'password' => (new DefaultPasswordHasher())->hash('12345678'),
                'area_id' => 1,
                'kengen_group_cd' => 'user',
                'status' => 1,
                'company_id' => 1,
                'company_section_id' => 3,
                'family_name' => 'pham',
                'first_name' => 'long',
                'family_name_kana' => 'day la ho',
                'first_name_kana' => 'day la ten',
                'birthday' => null,
                'gender' => 0,
                'base_salary' =>21000,
                'level' => 1
            ],
            [
                'employee_code' => 'v10009',
                'password' => (new DefaultPasswordHasher())->hash('12345678'),
                'area_id' => 1,
                'kengen_group_cd' => 'user',
                'status' => 1,
                'company_id' => 1,
                'company_section_id' => 3,
                'family_name' => 'nguyen',
                'first_name' => 'dan',
                'family_name_kana' => 'day la ho',
                'first_name_kana' => 'day la ten',
                'birthday' => null,
                'gender' => 0,
                'base_salary' =>30000,
                'level' => 1
            ],
            [
                'employee_code' => 'v10010',
                'password' => (new DefaultPasswordHasher())->hash('12345678'),
                'area_id' => 1,
                'kengen_group_cd' => 'user',
                'status' => 1,
                'company_id' => 1,
                'company_section_id' => 3,
                'family_name' => 'mai',
                'first_name' => 'tùng',
                'family_name_kana' => 'day la ho',
                'first_name_kana' => 'day la ten',
                'birthday' => null,
                'gender' => 1,
                'base_salary' =>12000,
                'level' => 1
            ],
            [
                'employee_code' => 'v10011',
                'password' => (new DefaultPasswordHasher())->hash('12345678'),
                'area_id' => 1,
                'kengen_group_cd' => 'user',
                'status' => 1,
                'company_id' => 1,
                'company_section_id' => 3,
                'family_name' => 'nguyễn',
                'first_name' => 'hưng',
                'family_name_kana' => 'họ tieng nhat',
                'first_name_kana' => 'ten tieng nhat',
                'birthday' => '2019-08-01 00:00:00',
                'gender' => 0,
                'base_salary' =>9000,
                'level' => 1
            ],
            [
                'employee_code' => 'v10020',
                'password' => (new DefaultPasswordHasher())->hash('12345678'),
                'area_id' => 4,
                'kengen_group_cd' => 'user',
                'status' => 1,
                'company_id' => 1,
                'company_section_id' => 3,
                'family_name' => 'vũ khắc',
                'first_name' => 'thịnh',
                'family_name_kana' => 'day la ho',
                'first_name_kana' => 'day la ten',
                'birthday' => null,
                'gender' => 0,
                'base_salary' =>8000,
                'level' => 1
            ],
        ];
        $table = $this->table('employees');
        $table->truncate();
        $table->insert($data)->save();
    }
}
