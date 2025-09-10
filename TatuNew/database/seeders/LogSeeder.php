<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class LogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('daily_logs')->insert([
            'log_date' => '2023-10-01',
            'status' => 'pending',
            'name' => 'John Doe',
            'note' => 'Initial log entry for testing purposes',
            'description' => 'Daily log entry for October 1, 2023',
        ]);
    }
}
