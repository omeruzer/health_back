<?php

namespace Database\Seeders;

use App\Models\AdvertImage;
use App\Models\ServiceImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images=[
            'https://www.fsmsaglik.com/wp-content/uploads/2020/06/delta-hospital-kucukyali-v2.jpg',
            'https://medicinehospital.com.tr/resimler/images/galeri/g_buyuk_94342195.jpg',
            'https://mavihospital.com/wp-content/uploads/dogumhane-1.png',
            'https://www.academichospital.com.tr/images/uploads/6897257452388academic-hospital-on-cekim-son-hal.jpg'
        ];

        for ($i=0; $i <100 ; $i++) {
            ServiceImage::create([
                'service_id'=>$i+1,
                'img'=>$images[0]
            ]);
            ServiceImage::create([
                'service_id'=>$i+1,
                'img'=>$images[1]
            ]);
            ServiceImage::create([
                'service_id'=>$i+1,
                'img'=>$images[2]
            ]);
            ServiceImage::create([
                'service_id'=>$i+1,
                'img'=>$images[3]
            ]);
        }
    }
}
