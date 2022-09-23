<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VidHostController extends Controller
{
    //
    function index(){
        // return 'Привет медвед';
        return view('VidHost.index');
    }
}
