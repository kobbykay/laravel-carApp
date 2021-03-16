<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // dummy data for product for testing purposes
        DB::table('products')->insert([
            [
                'pname'=>'Hyuandai Santafe',
                "price"=>"30000",
                "description"=>"2021 Hyundai Santa Fe's New Powertrains Detailed, Including a Hybrid. Not only does the mid-size SUV benefit from a new look and features, its engines are more powerful and efficient than before.",
                "category"=>"4x4",
                "gallery"=>"https://cars.usnews.com/static/images/Auto/izmo/i159423563/2020_hyundai_santa_fe_angularfront.jpg"
            ],
            [
                'pname'=>'Hyandai Elantra',
                "price"=>"13000",
                "description"=>"The sixth-generation Hyundai Elantra, introduced in 2016 as a 2017 model, gets a significant makeover for 2019 — it now has snappier styling and a richer content list. The changes see it take some significant steps in the right direction, and it was no slouch before.",
                "category"=>"Saloon",
                "gallery"=>"https://smartcdn.prod.postmedia.digital/driving/images?url=http://smartcdn.prod.postmedia.digital/driving/wp-content/uploads/2019/03/myelantra12.jpg&w=800&h=520"
            ],
            [
                'pname'=>'Hnada CRV',
                "price"=>"50000",
                "description"=>"The Honda CR-V is a compact crossover SUV manufactured by Japanese automaker Honda since 1995 and introduced in the North American market in 1997. It uses the Honda Civic platform with an SUV body design. The CR-V is Honda's mid-range utility vehicle, slotting between the smaller Honda HR-V and the larger North American market Honda Pilot. Honda states CR-V stands for Comfortable Runabout Vehicle.",
                "category"=>"SUV 4x4",
                "gallery"=>"https://upload.wikimedia.org/wikipedia/commons/c/c3/2018_Honda_CR-V_%28RW_MY18%29_%2BSport_2WD_wagon_%282018-10-22%29_01.jpg"
            ],
            [
                'pname'=>'Toyota Corolla',
                "price"=>"21000",
                "description"=>"The Chevrolet Camaro isn't the only car celebrating its 50th birthday this year—notwithstanding its eight-year hiatus in the early '00s. The 2017 Toyota Corolla also celebrates its golden anniversary. The legendary compact sedan is doing so with some minor nips and tucks and a new 50th anniversary trim package.",
                "category"=>"Saloon",
                "gallery"=>"https://www.motortrend.com/uploads/sites/5/2016/03/2017-Toyota-Corolla-50th-Anniversary-Special-Edition-front-side-view.jpg?fit=around%7C875:492"
             ]
        ]);
    }
}
