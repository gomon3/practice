<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministrationController extends Controller
{
    //
    public function admin(){
        return view('administration.login');
    }
    
}
