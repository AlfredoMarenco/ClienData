<?php

namespace App\Http\Livewire;

use App\Models\Lead;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithPagination;

class LeadsTable extends Component
{
    use WithPagination;

    public $paginate = '10', $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.leads-table', [
            'leads' => Lead::where('user_id', auth()->user()->id)->latest('id')->where('name', 'like', '%' . $this->search . '%')->paginate($this->paginate),

        ]);
    }
}
