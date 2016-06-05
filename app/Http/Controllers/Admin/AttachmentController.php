<?php

namespace App\Http\Controllers\Admin;

use App\Models\Attachment;
use App\Repositories\AttachmentRepository;
use \Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class AttachmentController extends Controller
{
    protected $attachmentRepository;

    public function __construct(AttachmentRepository $attachmentRepository)
    {
        $this->attachmentRepository = $attachmentRepository;
    }

    public function create(Request $request){
        $data = explode(',', $request->input('base64image'));
        $id = $request->input('id');
        if(isset($data[1])){
            $filename = '/vehicle_img/'.$id. '_'. time()  . ".png";
            Image::make(base64_decode($data[1]))
                ->resize(config('bike.image-size'),config('bike.image-size'))
                ->save(public_path() . $filename);
            $this->attachmentRepository->create($id, $filename, Attachment::TYPE_IMAGE);
            return $filename;
        }
        abort(404);
    }

    public function delete($id)
    {
        $this->attachmentRepository->delete($id);
        return back();
    }
}
