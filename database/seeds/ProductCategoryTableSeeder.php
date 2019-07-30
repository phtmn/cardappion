<?php

use Illuminate\Database\Seeder;

class ProductCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_categories')->insert(
            [
                ['name'=>'Bebidas','icon'=> 'beer'],
                ['name'=>'Pizzas','icon'=>'pizza'],
                ['name'=>'Gelados','icon'=>'ice-cream'],
                ['name'=>'FastFood'],
                ['name'=>'Chinesa','icon'=>''],
                ['name'=>'Japonesa'],
                ['name'=>'Refeição'],
                ['name'=>'Sucos','icon'=>'water'],
                ['name'=>'Natural'],
                ['name'=>'Vegana'],
                ['name'=>'Low Carb'],
                ['name'=>'Outra'],
            ]
        );
    }
}
