<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $restaurant = new Restaurant();
        $restaurant->title = 'YumYum';
        $restaurant->city = 'Vilnius';
        $restaurant->adress = 'Centro g. 1';
        $restaurant->work_hours = '24/7';
        $restaurant->save();

        $restaurant = new Restaurant();
        $restaurant->title = 'Chill\'n\'Grill';
        $restaurant->city = 'Kaunas';
        $restaurant->adress = 'Nemuno g. 1';
        $restaurant->work_hours = '12-24';
        $restaurant->save();
    }
}
