<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productRecords = [
            [
                'id'=>1,'name'=>'Blue Jacket','price'=>5000,'description'=>'This product is a Blue Jacket','photo'=>'product1.jpg'
            ],

            [
                'id'=>2,'name'=>'Red Jacket','price'=>30000,'description'=>'This product is a Red Jacket','photo'=>'product2.jpg'
            ],

            [
                'id'=>3,'name'=>'Black Jacket','price'=>2000,'description'=>'This product is a Black Jacket','photo'=>'product3.jpg'
            ],

            [
                'id'=>4,'name'=>'Velvet Jacket','price'=>1000,'description'=>'This product is a Velvet Jacket','photo'=>'product4.jpg'
            ],
        ];

        Product::insert($productRecords);
    }
}
