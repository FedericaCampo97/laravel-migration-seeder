<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (range(1, 20) as $index) {

            DB::table('trains')->insert([
                'agency' => Str::random(10),
                'starts' => Str::random(10),
                'arrivals' => Str::random(10),
                'hour_start' => Carbon::now(),
                'hour_arrivals' => Carbon::now(),
                'code_train' => $index . 387563,
                'number_ carriages' => 12,
                'in_time' => 1,
                'deleted' => 0,
            ],);
        }
    }
}
