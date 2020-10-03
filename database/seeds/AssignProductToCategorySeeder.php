<?php

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Arr;
class AssignProductToCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::pluck('id')->toArray();
        Product::chunk(15,function($product) use ($categories){
            foreach ($product as $product) {
                $product->categories()->sync([Arr::random($categories)]);
            }
        });
    }
}
