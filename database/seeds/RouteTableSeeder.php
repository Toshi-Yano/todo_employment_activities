<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RouteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("routes")->insert([
            "body" => "リクナビ",
            "created_at" => new DateTime(),
            "updated_at" => new DateTime(),
        ]);
        DB::table("routes")->insert([
            "body" => "マイナビ",
            "created_at" => new DateTime(),
            "updated_at" => new DateTime(),
        ]);
        DB::table("routes")->insert([
            "body" => "Wantedly",
            "created_at" => new DateTime(),
            "updated_at" => new DateTime(),
        ]);
    }
}
