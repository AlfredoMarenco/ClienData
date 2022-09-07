<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SystemController extends Controller
{
    public function __construct(){
        $this->middleware(['role:Administrador']);
    }


    public function __invoke()
    {

        return view('system.index');
    }
}
