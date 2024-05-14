<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table("products")->insert([
                "title" => Str::random(10),
                "description" => "This is a description",
                "status" => true,
                "amount" => $i,
                "date_time" => "2024-05-14",
                "remember_token" => Str::random(10),
            ]);
        }
    }
}
