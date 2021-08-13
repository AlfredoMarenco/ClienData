<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function __invoke(){
        return view('emails.index');
    }
}
