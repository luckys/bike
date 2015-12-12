<?php

use App\Dailos\Entities\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    public function run(){
        $this->insert(['Custom', 'Scooter', 'Motorbike'], Category::TYPE_MOTORBIKE);
        $this->insert(['Road', 'MTB', 'EBike'], Category::TYPE_BIKE);
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