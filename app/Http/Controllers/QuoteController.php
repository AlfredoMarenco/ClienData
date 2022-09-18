<?php

namespace App\Http\Controllers;

use App\Models\Development;
use App\Models\Lead;
use App\Models\Lot;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function index(){
        $developments = Development::all();
        return view('quotes.index',compact('developments'));
    }

    public function leads(Development $development){
        $leads = Lead::where('user_id', auth()->user()->id)->latest()->get();
        return view('quotes.leads',compact('leads','development'));
    }

    public function master(Development $development,Lead $lead){
        $lots = Lot::where('development_id', $development->id)->get();
        return view('quotes.master-plan',compact('lots','development','lead'));
    }

    public function lot(Development $development,Lead $lead,Lot $lot){
        return view('quotes.lot',compact('development', 'lead', 'lot'));
    }
}
