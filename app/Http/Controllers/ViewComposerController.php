<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ViewComposer;

class ViewComposerController extends Controller
{
    public function everySingleView(){
        return View('view_composer.index');
    }

    public function createNewOne(){
        return View('view_composer.create');
    }
}
