<?php

namespace Database\Seeders;

use App\Models\Advert;
use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 100; $i++) {
            $faker = \Faker\Factory::create();
            $title=$faker->sentence(2);
            Service::create([
                'company_id'=>rand(1,20),
                'title'=>$title,
                'slug'=>Str::slug($title),
                'desc'=>$faker->sentence(20),
                'category_id'=>rand(4,18),
                'price'=>rand(1500,15000),
                'accomodation'=>rand(1,0),
                'vehicle'=>rand(1,0),
                'road_toll'=>rand(1,0),
                'food'=>rand(1,0),
            ]);

        }
    }
}
