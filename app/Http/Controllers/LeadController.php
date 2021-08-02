<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{

    public function index()
    {
        return view('leads.index');
    }

    public function show(Lead $lead)
    {
        return view('leads.show', compact('lead'));
    }
}
