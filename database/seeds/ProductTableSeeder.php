<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'https://kbimages1-a.akamaihd.net/9b641bf6-ae44-4c1e-aa2b-e57ca746eb82/1200/1200/False/the-richest-man-in-babylon-31.jpg',
            'title'  => 'Richest man in Babylon',
            'description'  => 'Some quick example text to build on the card title and make up the bulk of the cards content',
            'price'  => 5000,
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://kbimages1-a.akamaihd.net/9b641bf6-ae44-4c1e-aa2b-e57ca746eb82/1200/1200/False/the-richest-man-in-babylon-31.jpg',
            'title'  => 'Richest man in Babylon',
            'description'  => 'Some quick example text to build on the card title and make up the bulk of the cards content',
            'price'  => 5000,
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://kbimages1-a.akamaihd.net/9b641bf6-ae44-4c1e-aa2b-e57ca746eb82/1200/1200/False/the-richest-man-in-babylon-31.jpg',
            'title'  => 'Richest man in Babylon',
            'description'  => 'Some quick example text to build on the card title and make up the bulk of the cards content',
            'price'  => 5000,
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://kbimages1-a.akamaihd.net/9b641bf6-ae44-4c1e-aa2b-e57ca746eb82/1200/1200/False/the-richest-man-in-babylon-31.jpg',
            'title'  => 'Richest man in Babylon',
            'description'  => 'Some quick example text to build on the card title and make up the bulk of the cards content',
            'price'  => 5000,
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://kbimages1-a.akamaihd.net/9b641bf6-ae44-4c1e-aa2b-e57ca746eb82/1200/1200/False/the-richest-man-in-babylon-31.jpg',
            'title'  => 'Richest man in Babylon',
            'description'  => 'Some quick example text to build on the card title and make up the bulk of the cards content',
            'price'  => 5000,
        ]);
        $product->save();
    }
}