<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $teachers=[
            [
                "last_name"=>"Ebrahemi",
                "degree_of_education"=>"bachelor",
                "phone_number"=>"0987798767",
                "image_url"=>"Teachers/something.jpg",
                "bio"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Id voluptas praesentium magni laudantium similique ipsam natus aspernatur, a pariatur sint, accusamus perspiciatis officia laborum totam itaque animi reprehenderit quod quo.",
                "user_id"=>4,
                ],
            [
                "last_name"=>"Sharifi",
                "degree_of_education"=>"bachelor",
                "phone_number"=>"09878382967",
                "image_url"=>"Teachers/something.jpg",
                "bio"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Id voluptas praesentium magni laudantium similique ipsam natus aspernatur, a pariatur sint, accusamus perspiciatis officia laborum totam itaque animi reprehenderit quod quo.",
                "user_id"=>5,
                ],
        ];
        DB::table('teachers')->insert($teachers);
    }
}
