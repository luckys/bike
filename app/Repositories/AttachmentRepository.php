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

}