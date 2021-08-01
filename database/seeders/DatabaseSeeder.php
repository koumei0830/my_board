<?php

namespace Database\Seeders;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table("comments")->insert([
            "title" => "2021/07/15",
            "name" =>"wakana",
            "body" => "7月半分終わるの早い",
            "date_on" => Carbon::now(),
        ]);
        DB::table("comments")->insert([
            "title" => "Laravel",
            "name" =>"wakana",
            "body" => "ララちゃんむずかしい",
            "date_on" => Carbon::now(),
        ]);
        DB::table("comments")->insert([
            "title" => "2021/07/16",
            "name" =>"wakana",
            "body" => "今日は金曜日だよ",
            "date_on" => Carbon::now(),
        ]);
    }
}
