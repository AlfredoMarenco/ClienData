<?php

namespace App\Http\Controllers;

use App\Charts\LeadAssignUser;
use App\Charts\TasksReport;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(LeadAssignUser $chart1,TasksReport $chart2)
    {
        return view('dashboard', [
            'leads' => $chart1->build(),
            'tasks' => $chart2->build()
        ]);
    }
}
