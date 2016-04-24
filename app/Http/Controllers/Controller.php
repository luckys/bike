<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function setDefaultNameValue(Request $request){
        $name = $request->get('name');
        $request->merge(['name' => [
            'es' => $name['es'],
            'en' => empty($name['en']) ? $name['es'] : $name['en'],
            'de' => empty($name['de']) ? $name['es'] : $name['de']
        ]]);
    }
}
