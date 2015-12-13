<?php

use App\Dailos\Entities\Information;
use App\Dailos\Entities\Vehicle;
use Illuminate\Database\Seeder;

class InformationsTableSeeder extends Seeder
{
    public function run()
    {
        $this->insert('picture', null, Information::FIELDTYPE_IMAGE);
        $this->insert('displacement', Vehicle::TYPE_MOTORBIKE, Information::FIELDTYPE_INPUT);
        $this->insert('brake', null, Information::FIELDTYPE_INPUT);
        $this->insert('wheels', Vehicle::TYPE_BIKE, Information::FIELDTYPE_INPUT);
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