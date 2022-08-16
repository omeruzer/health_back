<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Category::create([
            'title'=>'Category_1',
            'slug'=>Str::slug('Category_1'),
            'icon'=>'fa fa-heart',
            'parent_id'=>null
        ]);

        Category::create([
            'title'=>'Category_2',
            'slug'=>Str::slug('Category_2'),
            'icon'=>'fa fa-heart',
            'parent_id'=>null
        ]);

        Category::create([
            'title'=>'Category_3',
            'slug'=>Str::slug('Category_3'),
            'icon'=>'fa fa-heart',
            'parent_id'=>null
        ]);

        Category::create([
            'title'=>'Category_4',
            'slug'=>Str::slug('Category_4'),
            'icon'=>'fa fa-heart',
            'parent_id'=>null
        ]);
        Category::create([
            'title'=>'Category_5',
            'slug'=>Str::slug('Category_5'),
            'icon'=>'fa fa-heart',
            'parent_id'=>null
        ]);

        Category::create([
            'title'=>'Category_6',
            'slug'=>Str::slug('Category_6'),
            'icon'=>'fa fa-heart',
            'parent_id'=>null
        ]);

        Category::create([
            'title'=>'Category_7',
            'slug'=>Str::slug('Category_7'),
            'icon'=>'fa fa-heart',
            'parent_id'=>null
        ]);
        Category::create([
            'title'=>'Category_8',
            'slug'=>Str::slug('Category_8'),
            'icon'=>'fa fa-heart',
            'parent_id'=>null
        ]);

        for ($i=0; $i <30 ; $i++) {
            $faker = \Faker\Factory::create();
            $title =$faker->sentence(2);
            Category::create([
                'title'=>$title,
                'slug'=>Str::slug($title),
                'parent_id'=>rand(1,9)
            ]);
        }
    }
}
