<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function __invoke()
    {
        return view('documents.index');
    }
}
