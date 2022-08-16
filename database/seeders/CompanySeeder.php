<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i=0; $i <20 ; $i++) {

            $faker = \Faker\Factory::create();
            $name = $faker->sentence(2);
            Company::create([
                'user_id'=>rand(1,50),
                'logo'=> 'https://www.logodesign.net/logo/eye-and-house-5806ld.png',
                'name'=> $name,
                'slug'=> Str::slug($name),
                'desc'=> $faker->sentence(20),
                'address'=> $faker->address(),
                'phone'=> $faker->phoneNumber(),
                'country_id'=> 217,
                'city_id'=> rand(1,80),
            ]);
        }
    }
}
