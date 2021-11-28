<?php

namespace Database\Seeders;

use App\Models\Product;
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
        $products = [
            [
                'name' => 'დათა თუთაშხია',  
                'details' => 'საცავშია',  
                'description' => 'წიგნში აღწერილია აბრაგის ცხოვრება',  
                'brand' => 'გამომცემლობა ნაკადული',  
                'price' => 12,  
                'shipping_cost' => 5,  
                'image_path' => 'rame.jpg',  
            ],
            [
                'name' => 'აფთრები',  
                'details' => 'საცავშია',  
                'description' => 'წიგნზე გადაღებული მხ. ფილმი მონანიება',  
                'brand' => 'გამომცემლობა საუნჯე',  
                'price' => 16,  
                'shipping_cost' => 4,  
                'image_path' => 'sadme.jpg',  
            ],
        ];

        foreach($products as $key => $value)
        {
            Product::create($value);
        }
    }
}
