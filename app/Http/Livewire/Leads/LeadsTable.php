<?php

namespace App\Http\Livewire\Leads;

use App\Models\Lead;
use Livewire\Component;
use Livewire\WithPagination;

class LeadsTable extends Component
{
    use WithPagination;

    public $paginate = '10', $search, $sortBy = 'created_at', $sortDirection = 'desc', $all = false;


    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        if (auth()->user()->hasRole('Administrador') && $this->all == true) {
            $leads = Lead::orderBy($this->sortBy, $this->sortDirection)->where('name', 'like', '%' . $this->search . '%')->paginate($this->paginate);
        } else {
            $leads = Lead::where('user_id', auth()->user()->id)->orderBy($this->sortBy, $this->sortDirection)->where('name', 'like', '%' . $this->search . '%')->paginate($this->paginate);
        }


        return view('livewire.leads.leads-table', [
            'leads' => $leads,
        ]);
    }

    public function sortBy($field)
    {
        if ($this->sortDirection == 'asc') {
            $this->sortDirection = 'desc';
        } else {
            $this->sortDirection = 'asc';
        }
        return $this->sortBy = $field;
    }
}
