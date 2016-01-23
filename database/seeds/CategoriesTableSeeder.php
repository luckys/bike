<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    public function run(){
        $this->insert(['Custom', 'Scooter', 'Trail'], Category::TYPE_MOTORBIKE);
        $this->insert(['Road', 'MTB', 'City', 'Treking', 'E-Bike'], Category::TYPE_BIKE);
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