<?php

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
            "password" => "1234abcd",
            "created_at" => new DateTime(),
            "updated_at" => new DateTime(),
        ]);
    }
}
