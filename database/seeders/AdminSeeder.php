<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('admins')->insert([
            "last_name"=> "Rahimi",
            "image_url"=>"Admin/mahtab.jpg",
            "user_id"=>1,
            "bio"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Id voluptas praesentium magni laudantium similique ipsam natus aspernatur, a pariatur sint, accusamus perspiciatis officia laborum totam itaque animi reprehenderit quod quo.",

        ]);
        
    }
}
