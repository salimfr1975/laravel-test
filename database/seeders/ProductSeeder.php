<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;



class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'LG Mobile',
                'price'=>'10000',
                'description'=>'Great Mobile',
                'category'=>'mobile',
                'gallary'=>'https://pic.clubic.com/v1/images/1776751/raw',
            ],
            [
                'name'=>'Samsung Mobile',
                'price'=>'15000',
                'description'=>'Great Mobile',
                'category'=>'mobile',
                'gallary'=>'https://m.media-amazon.com/images/I/71Qqc78WkqL._AC_SL1500_.jpg',
            ],
            [
                'name'=>'LG TV',
                'price'=>'10000',
                'description'=>'Great Mobile',
                'category'=>'mobile',
                'gallary'=>'https://pic.clubic.com/v1/images/1776751/raw',
            ],
            [
                'name'=>'Samsung Mobile',
                'price'=>'10000',
                'description'=>'Great Mobile',
                'category'=>'mobile',
                'gallary'=>'https://m.media-amazon.com/images/I/71Qqc78WkqL._AC_SL1500_.jpg',
            ],
            [
                'name'=>'Samsung Tv',
                'price'=>'10000',
                'description'=>'Great Mobile',
                'category'=>'mobile',
                'gallary'=>'https://pic.clubic.com/v1/images/1776751/raw',
            ],
        ]);
    }
}
