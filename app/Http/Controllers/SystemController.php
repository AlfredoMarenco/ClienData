<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SystemController extends Controller
{
    public function __invoke()
    {
        $this->middleware(['role:Administrador']);
        return view('system.index');
    }
}
