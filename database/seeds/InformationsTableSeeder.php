<?php

use App\Models\Information;
use App\Models\Category;
use Illuminate\Database\Seeder;

class InformationsTableSeeder extends Seeder
{
    public function run()
    {
        $this->insert('picture', null, Information::FIELDTYPE_IMAGE);
        $this->insert('displacement', Category::TYPE_MOTORBIKE, Information::FIELDTYPE_INPUT);
        $this->insert('brake', null, Information::FIELDTYPE_INPUT);
        $this->insert('wheels', Category::TYPE_BIKE, Information::FIELDTYPE_INPUT);
    }

    private function insert($name, $type, $fieldtype)
    {
        DB::table('informations')->insert([
            'name' => $name,
            'type' => $type,
            'type' => $fieldtype,
        ]);
    }
}