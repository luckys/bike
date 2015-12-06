<?php

use App\Dailos\Entities\Brand;
use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    public function run(){
        $this->insert(['Honda', 'BMW', 'Kawasaki', 'Suzuki' , 'Yamaha', 'Kymco', 'Peugeot'],Brand::TYPE_MOTORBIKE);
        $this->insert(['Ghost' , 'Hercules'], Brand::TYPE_BIKE);
    }

    private function insert($brands, $type){
        foreach($brands as $brand) {
            DB::table('brands')->insert([
                'name' => $brand,
                'type' => $type,
            ]);
        }

    }
}