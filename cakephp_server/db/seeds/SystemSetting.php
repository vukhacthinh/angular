<?php


use Phinx\Seed\AbstractSeed;

class SystemSetting extends AbstractSeed
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
                'function_division' => 1,
                'system_code' => 'list_data_cnt',
                'system_name' => '一覧の表示件数',
                'system_value' => '5',
                'description' => '一覧の表示件数',
                'type' => 'int',
                'context' => ''
            ],
            [
                'function_division' => 1,
                'system_code' => 'notice_limit',
                'system_name' => 'お知らせの表示件数',
                'system_value' => '10',
                'description' => 'お知らせの表示件数',
                'type' => 'int',
                'context' => ''
            ],
            [
                'function_division' => 1,
                'system_code' => 'psj_interbale',
                'system_name' => 'インターバレ制度',
                'system_value' => '7',
                'description' => '勤務終了時間から翌日の勤務開始時間までの基準設定時間でアラーム表示されるようインターバル制度に対応できていること。',
                'type' => 'int',
                'context' => ''
            ],
            [
                'function_division' => 2,
                'system_code' => 'night_time_start',
                'system_name' => '残業計算の開始時間前提',
                'system_value' => '22:00',
                'description' => '残業計算の開始時間前提',
                'type' => 'time',
                'context' => ''
            ],
            [
                'function_division' => 2,
                'system_code' => 'night_time_end',
                'system_name' => '残業計算の終了時間前提',
                'system_value' => '05:00',
                'description' => '残業計算の終了時間前提',
                'type' => 'time',
                'context' => ''
            ],
            [
                'function_division' => 5,
                'system_code' => 'login_failed_count',
                'system_name' => 'ログイン失敗回数',
                'system_value' => '5',
                'description' => 'ログイン失敗時にアカウントを使用不可とする回数。設定値までは使用可能。',
                'type' => 'int',
                'context' => ''
            ],
            [
                'function_division' => 5,
                'system_code' => 'login_lock_hour',
                'system_name' => 'ログイン禁止時間',
                'system_value' => '12',
                'description' => 'ログイン失敗時に使用できない時間。',
                'type' => 'int',
                'context' => ''
            ],
            [
                'function_division' => 6,
                'system_code' => 'psj_36_1_day',
                'system_name' => 'kintai',
                'system_value' => '4',
                'description' => 'Thoi gian lam them gio toi da',
                'type' => 'number',
                'context' => ''
            ],
            [
                'function_division' => 6,
                'system_code' => 'psj_36_1_month',
                'system_name' => 'kintai',
                'system_value' => '45',
                'description' => 'Thoi gian lam them gio toi da',
                'type' => 'number',
                'context' => ''
            ],
            [
                'function_division' => 6,
                'system_code' => 'psj_36_1_month_over_max_count',
                'system_name' => 'kintai',
                'system_value' => '6',
                'description' => 'Thoi gian lam them gio toi da',
                'type' => 'number',
                'context' => ''
            ],
            [
                'function_division' => 6,
                'system_code' => 'psj_36_1_year',
                'system_name' => 'kintai',
                'system_value' => '360',
                'description' => 'Thoi gian lam them gio toi da',
                'type' => 'number',
                'context' => ''
            ],
            [
                'function_division' => 6,
                'system_code' => 'psj_36_1_month_alert',
                'system_name' => 'kintai',
                'system_value' => '40',
                'description' => 'Thoi gian lam them gio toi da',
                'type' => 'number',
                'context' => ''
            ],
            [
                'function_division' => 6,
                'system_code' => 'psj_36_1_year_alert',
                'system_name' => 'kintai',
                'system_value' => '300',
                'description' => 'Thoi gian lam them gio toi da',
                'type' => 'number',
                'context' => ''
            ],
            [
                'function_division' => 6,
                'system_code' => 'psj_36_allow',
                'system_name' => 'kintai',
                'system_value' => '1',
                'description' => 'Thoi gian lam them gio toi da',
                'type' => 'checkbox',
                'context' => ''
            ],
            [
                'function_division' => 6,
                'system_code' => 'psj_36_1_month_special',
                'system_name' => 'kintai',
                'system_value' => '100',
                'description' => 'Thoi gian lam them gio toi da',
                'type' => 'number',
                'context' => ''
            ],
            [
                'function_division' => 6,
                'system_code' => 'psj_36_1_month_special_avg',
                'system_name' => 'kintai',
                'system_value' => '80',
                'description' => 'Thoi gian lam them gio toi da',
                'type' => 'number',
                'context' => ''
            ],
            [
                'function_division' => 6,
                'system_code' => 'psj_36_1_year_special',
                'system_name' => 'kintai',
                'system_value' => '720',
                'description' => 'Thoi gian lam them gio toi da',
                'type' => 'number',
                'context' => ''
            ],
            [
                'function_division' => 6,
                'system_code' => 'psj_36_1_month_alert_special',
                'system_name' => 'kintai',
                'system_value' => '70',
                'description' => 'Thoi gian lam them gio toi da',
                'type' => 'number',
                'context' => ''
            ],
            [
                'function_division' => 6,
                'system_code' => 'psj_36_1_year_alert_special',
                'system_name' => 'kintai',
                'system_value' => '600',
                'description' => 'Thoi gian lam them gio toi da',
                'type' => 'number',
                'context' => ''
            ],
            [
                'function_division' => 6,
                'system_code' => 'psj_36_allow_special',
                'system_name' => 'kintai',
                'system_value' => '1',
                'description' => 'Thoi gian lam them gio toi da',
                'type' => 'number',
                'context' => ''
            ],
            [
                'function_division' => 6,
                'system_code' => 'psj_36_is_special',
                'system_name' => 'kintai',
                'system_value' => '1',
                'description' => 'Thoi gian lam them gio toi da',
                'type' => 'number',
                'context' => ''
            ],
            [
                'function_division' => 7,
                'system_code' => 'time_zone',
                'system_name' => 'タイムゾーン',
                'system_value' => 'Asia/Tokyo',
                'description' => 'タイムゾーン',
                'type' => 'select',
                'context' => 'Asia/Tokyo,Asia/Ho_Chi_Minh'
            ],
            [
                'function_division' => 7,
                'system_code' => 'language',
                'system_name' => 'システムの言語',
                'system_value' => 'ja_JP',
                'description' => 'システムの言語',
                'type' => 'select',
                'context' => 'ja_JP,en_US,vi_VN'
            ],
            [
                'function_division' => 7,
                'system_code' => 'total_hour_off',
                'system_name' => '有休休暇時間数の最大',
                'system_value' => '40',
                'description' => '有休休暇時間数の最大',
                'type' => 'int',
                'context' => ''
            ],
            [
                'function_division' => 7,
                'system_code' => 'money_suffix',
                'system_name' => 'システムの通貨',
                'system_value' => '円',
                'description' => 'システムの通貨',
                'type' => 'text',
                'context' => ''
            ],[
                'function_division' => 7,
                'system_code' => 'expired_day_off',
                'system_name' => '休日付与有効時間(年数)',
                'system_value' => '3',
                'description' => '休日付与有効時間(年数)',
                'type' => 'int',
                'context' => ''
            ],
            [
                'function_division' => 7,
                'system_code' => 'check360',
                'system_name' => 'Check rule 360',
                'system_value' => '0',
                'description' => 'Check rule 360',
                'type' => 'checkbox',
                'context' => ''
            ],
            [
                'function_division' => 9,
                'system_code' => 'start_working_year',
                'system_name' => '決算日',
                'system_value' => '01-01',
                'description' => '決算日',
                'type' => 'date',
                'context' => ''
            ],
            [
                'function_division' => 9,
                'system_code' => 'hours_of_working_day',
                'system_name' => '毎日勤務時間数',
                'system_value' => '8',
                'description' => '毎日勤務時間数',
                'type' => 'number',
                'context' => ''
            ],
            [
                'function_division' => 2,
                'system_code' => 'interval',
                'system_name' => 'インタバルの時間帯',
                'system_value' => '11',
                'description' => 'インタバルの時間帯',
                'type' => 'number',
                'context' => ''
            ],
            [
                'function_division' => 7,
                'system_code' => 'remain_time_declare_ot',
                'system_name' => 'Thời gian còn lại khai báo OT',
                'system_value' => '7',
                'description' => 'Thời gian còn lại khai báo OT',
                'type' => 'number',
                'context' => 'Thời gian còn lại khai báo OT'
            ]
        ];

        $table = $this->table('system_settings');
        $table->truncate();
        $table->insert($data)->save();
    }
}
