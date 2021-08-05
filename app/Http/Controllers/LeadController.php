<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Lead;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class LeadController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index()
    {
        return view('leads.index');
    }

    public function show(Lead $lead)
    {
        $this->authorize('view', $lead);

        return view('leads.show', compact('lead'));
    }
}
