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

    public $paginate = '10', $name, $email, $sortBy = 'created_at', $sortDirection = 'desc', $all = false, $user, $status = "";

    protected $listeners = ['render'];

    public function updatingname()
    {
        $this->resetPage();
    }

    public function mount()
    {
        $this->user = auth()->user()->id;
    }

    public function render()
    {
        if (auth()->user()->hasRole('SuperUser')) {
            if ($this->all) {
                $leads = Lead::orderBy($this->sortBy, $this->sortDirection)->where('name', 'like', '%' . $this->name . '%')->where('email', 'like', '%' . $this->email . '%')->where('status_id', 'LIKE', '%' . $this->status . '%')->paginate($this->paginate);
            } else {
                $leads = Lead::where('user_id', $this->user)->orderBy($this->sortBy, $this->sortDirection)->where('name', 'like', '%' . $this->name . '%')->where('email', 'like', '%' . $this->email . '%')->where('status_id', 'LIKE', '%' . $this->status . '%')->paginate($this->paginate);
            }
        } elseif (auth()->user()->hasRole('Administrador')) {
            if ($this->all) {
                $leads = Lead::orderBy($this->sortBy, $this->sortDirection)->where('name', 'like', '%' . $this->name . '%')->where('email', 'like', '%' . $this->email . '%')->where('user_id', '!=', 3)->where('status_id', 'LIKE', '%' . $this->status . '%')->paginate($this->paginate);
            } else {
                $leads = Lead::where('user_id', $this->user)->orderBy($this->sortBy, $this->sortDirection)->where('name', 'like', '%' . $this->name . '%')->where('email', 'like', '%' . $this->email . '%')->where('status_id', 'LIKE', '%' . $this->status . '%')->paginate($this->paginate);
            }
        } else {
            $leads = Lead::where('user_id', auth()->user()->id)->where('name', 'like', '%' . $this->name . '%')->where('email', 'like', '%' . $this->email . '%')->where('status_id', 'LIKE', '%' . $this->status . '%')->orderBy($this->sortBy, $this->sortDirection)->paginate($this->paginate);
        }

        $users = User::all();
        $statuses = Status::all();
        return view('livewire.leads.leads-table', [
            'leads' => $leads,
            'users' => $users,
            'statuses' => $statuses,
        ]);
    }

    public function delete(Lead $lead)
    {
        $lead->delete();
        $this->emit('render');
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
