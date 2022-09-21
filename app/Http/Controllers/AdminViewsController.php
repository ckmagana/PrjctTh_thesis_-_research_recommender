<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminViewsController extends Controller
{
    public function manageaccount(){
        return view('AdminViews.manageaccount');
    }
}
