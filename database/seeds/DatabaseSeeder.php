<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(StageTableSeeder::class);
        $this->call(RouteTableSeeder::class);
        $this->call(companiesSeeder::class);
        $this->call(InterviewTableSeeder::class);
    }
}
