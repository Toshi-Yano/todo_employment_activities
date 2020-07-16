<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InterviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("interviews")->insert([
            "schedule" => Carbon::now()->addDay(1),
            "interview_note" => "履歴書持参",
            "user_id" => 1,
            "company_id" => 1,
            "stage_id" => 1,
            "created_at" => new DateTime(),
            "updated_at" => new DateTime(),
        ]);
        DB::table("interviews")->insert([
            "schedule" => Carbon::now()->addDay(2),
            "interview_note" => "履歴書持参",
            "user_id" => 1,
            "company_id" => 1,
            "stage_id" => 2,
            "created_at" => new DateTime(),
            "updated_at" => new DateTime(),
        ]);
        DB::table("interviews")->insert([
            "schedule" => Carbon::now()->addDay(3),
            "interview_note" => "履歴書持参",
            "user_id" => 1,
            "company_id" => 1,
            "stage_id" => 3,
            "created_at" => new DateTime(),
            "updated_at" => new DateTime(),
        ]);
        DB::table("interviews")->insert([
            "schedule" => Carbon::now()->addDay(4),
            "interview_note" => "履歴書持参",
            "user_id" => 1,
            "company_id" => 1,
            "stage_id" => 5,
            "created_at" => new DateTime(),
            "updated_at" => new DateTime(),
        ]);
        DB::table("interviews")->insert([
            "schedule" => Carbon::now()->addDay(2),
            "interview_note" => "履歴書持参",
            "user_id" => 1,
            "company_id" => 2,
            "stage_id" => 2,
            "created_at" => new DateTime(),
            "updated_at" => new DateTime(),
        ]);
        DB::table("interviews")->insert([
            "schedule" => Carbon::now()->addDay(3),
            "interview_note" => "履歴書持参",
            "user_id" => 1,
            "company_id" => 3,
            "stage_id" => 3,
            "created_at" => new DateTime(),
            "updated_at" => new DateTime(),
        ]);
        DB::table("interviews")->insert([
            "schedule" => Carbon::now()->addDay(1),
            "interview_note" => "履歴書持参",
            "user_id" => 2,
            "company_id" => 4,
            "stage_id" => 1,
            "created_at" => new DateTime(),
            "updated_at" => new DateTime(),
        ]);
        DB::table("interviews")->insert([
            "schedule" => Carbon::now()->addDay(2),
            "interview_note" => "履歴書持参",
            "user_id" => 2,
            "company_id" => 5,
            "stage_id" => 2,
            "created_at" => new DateTime(),
            "updated_at" => new DateTime(),
        ]);
    }
}
