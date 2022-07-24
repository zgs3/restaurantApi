<?php

namespace Database\Seeders;

use App\Models\Dish;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dish = new Dish();
        $dish->name = 'Salad';
        $dish->price = '6.5';
        $dish->image_link = 'https://www.readersdigest.ca/wp-content/uploads/2016/05/cesalad.jpg';
        $dish->restaurant_id = 1;
        $dish->save();

        $dish = new Dish();
        $dish->name = 'Steak';
        $dish->price = '13.99';
        $dish->image_link = 'https://bbqchiefs.com/wp-content/uploads/2019/04/Ribeye-Steak-Garlic-Butter.jpg';
        $dish->restaurant_id = 2;
        $dish->save();

        $dish = new Dish();
        $dish->name = 'Soup';
        $dish->price = '13.99';
        $dish->image_link = 'https://www.jenniferpowter.com/wp-content/uploads/2016/10/AdobeStock_62286357.jpeg';
        $dish->restaurant_id = 1;
        $dish->save();
    }
}
