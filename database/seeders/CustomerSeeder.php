<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table("customers")->insert([
                "name" => "Customer " . $i,
                "product_id" => $i + 1,
                "date" => date("Y-m-d H:i:s"),
                "date_time" => date("Y-m-d H:i:s"),
                "amount" => rand(1, 100),
                "tax" => rand(1, 100),
                "piece" => rand(1, 100),
                "time" => date("H:i:s"),
            ]);
        }
    }
}