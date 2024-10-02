<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            [
                'product_name' => 'AMARON Battery 12V 35Ah GO 38B20R',
                'category' => 'batteries',
                'price' => 16.70,
                'image_path' => 'Images/AAM-GO-00038B20R.png',
                'is_best_seller' => true
            ],
            [
                'product_name' => 'AMARON Battery 12V 38Ah FLO 42B20R',
                'category' => 'batteries',
                'price' => 16.70,
                'old_price' => 20.50,
                'image_path' => 'Images/AAM-FL-00042B20R.png',
                'is_best_seller' => true
            ],
            [
                'product_name' => 'EXIDE BATTERY 12V 35Ah MF 38B20L',
                'category' => 'batteries',
                'price' => 16.70,
                'image_path' => 'Images/autopartsstore.lk-ULTRA-MF-55B24.png',
                'is_best_seller' => false
            ],
            [
                'product_name' => 'EXIDE BATTERY 12V 35Ah POWER MF 38B20L',
                'category' => 'batteries',
                'price' => 16.70,
                'image_path' => 'Images/POWER-MF-95D31-2.png',
                'is_best_seller' => false
            ],
            [
                'product_name' => 'EXIDE BATTERY 12V 65Ah POWER MFS65R',
                'category' => 'batteries',
                'price' => 16.70,
                'image_path' => 'Images/POWER-MF-MFS65.png',
                'is_best_seller' => false
            ],
            [
                'product_name' => '185/65R15 SP TOURING 1 DUNLOP(JAPAN)',
                'category' => 'tires',
                'price' => 16.70,
                'image_path' => 'Images/2798f713721ea10f42b998c39060be60.png',
                'is_best_seller' => true
            ],
            [
                'product_name' => '155/65R14 EC203 DUNLOP(JAPAN)',
                'category' => 'tires',
                'price' => 16.70,
                'old_price' => 20.50,
                'image_path' => 'Images/DUN15565R14EC203.png',
                'is_best_seller' => false,
                'discount' => 20
            ],
            [
                'product_name' => '175/70R14 SP TOURING R1 DUNLOP(JAPAN)',
                'category' => 'tires',
                'price' => 16.70,
                'image_path' => 'Images/DUN17570R14SPT1.png',
                'is_best_seller' => false
            ],
            [
                'product_name' => '195/60R16 SPLM705 DUNLOP(JAPAN)',
                'category' => 'tires',
                'price' => 16.70,
                'image_path' => 'Images/d4b73a74b1ac5e60858a62b236d69822.png',
                'is_best_seller' => true
            ],
            [
                'product_name' => '185/70R13 MAP3 (TAIWAN)',
                'category' => 'tires',
                'price' => 16.70,
                'image_path' => 'Images/MX17570R14MAP3.png',
                'is_best_seller' => false
            ],
            [
                'product_name' => '225/55R16 HP5 (TAIWAN)',
                'category' => 'tires',
                'price' => 16.70,
                'image_path' => 'Images/4071eeec91896ea064c2298d7f32e865.png',
                'is_best_seller' => false
            ],
            [
                'product_name' => '225/50R18 HPM3 (TAIWAN)',
                'category' => 'tires',
                'price' => 16.70,
                'old_price' => 20.50,
                'image_path' => 'Images/MX22550ZR18HP-M3.png',
                'is_best_seller' => false,
                'discount' => 20
            ],
        ]);
    }
}
