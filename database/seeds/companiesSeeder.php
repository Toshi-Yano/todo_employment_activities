<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class companiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("companies")->insert([
            "company_name" => "AAA株式会社",
            "company_note" => "第一志望", 
            "created_at" => new DateTime(),
            "updated_at" => new DateTime(),
            "route_id" => 1,
            "user_id" => 1,
            "situation_id" => 1,
        ]);
        DB::table("companies")->insert([
            "company_name" => "BBB株式会社",
            "company_note" => "第二志望", 
            "created_at" => new DateTime(),
            "updated_at" => new DateTime(),
            "route_id" => 2,
            "user_id" => 1,
            "situation_id" => 1,
        ]);
        DB::table("companies")->insert([
            "company_name" => "CCC株式会社",
            "company_note" => "第三志望",
            "created_at" => new DateTime(),
            "updated_at" => new DateTime(),
            "route_id" => 3,
            "user_id" => 1,
            "situation_id" => 2,
        ]);
        DB::table("companies")->insert([
            "company_name" => "DDD株式会社",
            "company_note" => "第一志望", 
            "created_at" => new DateTime(),
            "updated_at" => new DateTime(),
            "route_id" => 1,
            "user_id" => 2,
            "situation_id" => 1,
        ]);
        DB::table("companies")->insert([
            "company_name" => "EEE株式会社",
            "company_note" => "第二志望",
            "created_at" => new DateTime(),
            "updated_at" => new DateTime(),
            "route_id" => 2,
            "user_id" => 2,
            "situation_id" => 1,
        ]);
    }
}
