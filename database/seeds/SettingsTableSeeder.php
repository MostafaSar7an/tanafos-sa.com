<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('settings')->delete();

        $data = [
            ['key' => 'current_session', 'value' => '2024-2025'],
            ['key' => 'school_title', 'value' => 'TS'],
            ['key' => 'school_name', 'value' => 'نظام تنافس السعودي'],
            ['key' => 'end_first_term', 'value' => '01-5-2024'],
            ['key' => 'end_second_term', 'value' => '01-12-2024'],
            ['key' => 'phone', 'value' => '+966 50 544 3529'],
            ['key' => 'address', 'value' => 'السعودية'],
            ['key' => 'school_email', 'value' => 'support@tanafos-sa.com'],
            ['key' => 'logo', 'value' => '1.jpg'],
        ];

        DB::table('settings')->insert($data);
    }
}
