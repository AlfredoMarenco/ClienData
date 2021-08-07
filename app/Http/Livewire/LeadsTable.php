<?php

namespace App\Http\Livewire;

use App\Models\Lead;
use Livewire\Component;

class LeadsTable extends Component
{
    public function render()
    {
        return view('livewire.leads-table', [
            'leads' => Lead::where('user_id',auth()->user()->id)->latest('id')->paginate(10)
        ]);
    }
}
