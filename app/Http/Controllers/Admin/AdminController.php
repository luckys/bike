<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.2/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;

/**
 * Class AdminController
 * @package App\Http\Controllers
 */
class AdminController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        return view('admin.index');
    }
}