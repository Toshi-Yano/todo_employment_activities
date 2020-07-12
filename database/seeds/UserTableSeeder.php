<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            "name" => "山田　太郎",
            "email" => "aaa@gmail.com", 
            "password" => bcrypt("1234abcd"),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);
        DB::table("users")->insert([
            "name" => "木村　太郎",
            "email" => "bbb@gmail.com", 
            "password" => bcrypt("1234abcd"),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);
    }
}
