<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Str;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,10) as $index){
            $stream = array('Computer', 'Electronic', 'Civil', 'Mechanical', 'Chemical');
            DB::table('students')->insert([
                'name'=>$faker->name,
                'stream'=>$stream[rand(0,4)],
               
            ]);
            
    }
}
}