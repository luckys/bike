<?php

use App\Dailos\Entities\Vehicle;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    public function run(){
        $this->insert(['Custom', 'Scooter', 'Trail'], Vehicle::TYPE_MOTORBIKE);
        $this->insert(['Road', 'MTB', 'City', 'Treking', 'E-Bike'], Vehicle::TYPE_BIKE);
    }

    private function insert($categories, $type)
    {
        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name' => $category,
                'type' => $type,
            ]);
        }

    }
}