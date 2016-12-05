<?php

namespace App\Repositories;

use App\Models\Attachment;

class AttachmentRepository
{
    protected $attachment;

    public function __construct(Attachment $attachment)
    {
        $this->attachment = $attachment;
    }
    
    public function create($vehicleid, $name, $type)
    {
        Attachment::create([
            'vehicle_id' => $vehicleid,
            'name' => $name,
            'url' => $name,
            'type' => $type,
            'position' => 0
        ]);
    }

    public function getList($vehicleid, $type)
    {
        return $this->attachment->type($type)->where('vehicle_id', $vehicleid)->get();
    }

    public function delete($id)
    {
        $attachment = Attachment::findOrFail($id);
        $attachment->delete();
    }

}