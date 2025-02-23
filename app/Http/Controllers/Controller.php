<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Support\Facades\View;

abstract class Controller
{
    //

    public function boot()
    {
        $sizes = Size::all();
        View::share('sizes', $sizes);
    }
}
