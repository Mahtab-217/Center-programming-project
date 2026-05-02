<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $students=[
            [
                "last_name"=>"Ahmadi",
                "user_id"=>2,
                "image_url"=>"Admin/something.jpg",
                "phone_numbe"=>"0798675647",
                "tazkira_no"=>"1400234564738",
            ],
            [
                "last_name"=>"Rezaie",
                "user_id"=>3,
                "image_url"=>"Admin/something.jpg",
                "phone_numbe"=>"0798678399",
                "tazkira_no"=>"14002388938",
            ],
            
            
        ];
        DB::table('students')->insert($students);
    }
}
