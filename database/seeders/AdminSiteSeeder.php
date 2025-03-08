<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AdminSite;


class AdminSiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $defaultData = config('admin_site');

        foreach ($defaultData as $key => $value) {
            AdminSite::firstOrCreate(
                ['key' => $key], // 根據 key 判斷是否存在
                ['value' => $value] // 插入 value
            );
        }
    }
}
