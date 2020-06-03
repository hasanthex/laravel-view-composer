<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ViewComposer;

class CommonController extends Controller
{
    public function index(){
        $data = ViewComposer::orderBy('name')->get();
        return View('common_view.index', compact('data') );
    }

    public function post(){
        $data = ViewComposer::orderBy('name')->get();
        return View('common_view.create', compact('data'));
    }

}
