<?php

namespace App\Dailos\Repositories;


use App\Dailos\Entities\Attachment;

class AttachmentRepository
{
    protected $attachment;

    public function __construct(Attachment $attachment)
    {
        $this->attachment = $attachment;
    }

}