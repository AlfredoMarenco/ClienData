<?php

namespace App\Http\Livewire;

use App\Models\Development;
use App\Models\Lead;
use App\Models\Lot;
use Livewire\Component;

class QuoteImperioMayaComponent extends Component
{
    public $development;
    public $lead;
    public $lot;
    public $price_list_per_meter = 310;
    public $discount = 0;
    public $hitch=0;
    public $financing=60;
    public $hitch_method=1;

    public function mount(Development $development,Lead $lead,Lot $lot){
        $this->development = $development;
        $this->lead = $lead;
        $this->lot = $lot;
    }


    public function render()
    {
        return view('livewire.quote-imperio-maya-component');
    }
}
