<?php

namespace App\Http\Livewire\Leads;

use App\Models\Lead;
use App\Models\Status;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class LeadsTable extends Component
{
    use WithPagination;

    public $paginate = '10', $search, $sortBy = 'created_at', $sortDirection = 'desc', $all = false, $user = "", $status = "";


    public function updatingSearch()
    {
        $this->resetPage();
    }


    public function render()
    {
        if (auth()->user()->hasRole('Administrador') && $this->all == true) {
            $leads = Lead::orderBy($this->sortBy, $this->sortDirection)->where('name', 'like', '%' . $this->search . '%')->where('user_id', '!=', 3)->paginate($this->paginate);
        } elseif ($this->user && $this->status) {
            $leads = Lead::where('user_id', $this->user)->where('status_id', $this->status)->orderBy($this->sortBy, $this->sortDirection)->where('name', 'like', '%' . $this->search . '%')->paginate($this->paginate);
        } elseif ($this->user) {
            $leads = Lead::where('user_id', $this->user)->orderBy($this->sortBy, $this->sortDirection)->where('name', 'like', '%' . $this->search . '%')->paginate($this->paginate);
        } elseif ($this->status) {
            $leads = Lead::where('user_id', auth()->user()->id)->where('status_id', $this->status)->orderBy($this->sortBy, $this->sortDirection)->where('name', 'like', '%' . $this->search . '%')->paginate($this->paginate);
        } else {
            $leads = Lead::where('user_id', auth()->user()->id)->orderBy($this->sortBy, $this->sortDirection)->where('name', 'like', '%' . $this->search . '%')->paginate($this->paginate);
        }

        $users = User::all();
        $statuses = Status::all();
        return view('livewire.leads.leads-table', [
            'leads' => $leads,
            'users' => $users,
            'statuses' => $statuses,
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
