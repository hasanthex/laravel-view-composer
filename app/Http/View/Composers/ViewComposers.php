<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\ViewComposer;
class ViewComposers{

    public function compose(View $view){
        $view->with('data', ViewComposer::orderBy('name')->get() );
    }

}