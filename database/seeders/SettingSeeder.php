<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'key' => 'LIMIT_KIRIM_PER_HARI',
                'value' => "6",
            ],
        ];

        foreach ($datas as $data) {
            Setting::create($data);
        }
    }
}
