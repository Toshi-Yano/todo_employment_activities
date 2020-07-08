<?php

use Illuminate\Database\Seeder;

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
        ]);
        DB::table("companies")->insert([
            "company_name" => "BBB株式会社",
            "company_note" => "第二志望", 
            "created_at" => new DateTime(),
            "updated_at" => new DateTime(),
        ]);
        DB::table("companies")->insert([
            "company_name" => "CCC株式会社",
            "company_note" => "第三志望",
            "created_at" => new DateTime(),
            "updated_at" => new DateTime(),
        ]);
    }
}
