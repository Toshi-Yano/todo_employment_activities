<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("stages")->insert([
            "body" => "書類選考",
            "created_at" => new DateTime(),
            "updated_at" => new DateTime(),
        ]);
        DB::table("stages")->insert([
            "body" => "一次面接",
            "created_at" => new DateTime(),
            "updated_at" => new DateTime(),
        ]);
        DB::table("stages")->insert([
            "body" => "二次面接",
            "created_at" => new DateTime(),
            "updated_at" => new DateTime(),
        ]);
        DB::table("stages")->insert([
            "body" => "三次面接",
            "created_at" => new DateTime(),
            "updated_at" => new DateTime(),
        ]);
        DB::table("stages")->insert([
            "body" => "最終面接",
            "created_at" => new DateTime(),
            "updated_at" => new DateTime(),
        ]);
    }
}
