<?php

namespace App\Http\Livewire;

use App\Models\Lead;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithPagination;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

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


        return view('livewire.leads-table', [
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
