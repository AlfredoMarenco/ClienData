<?php

namespace App\Http\Livewire\Leads;

use App\Models\Development;
use App\Models\Lead;
use App\Models\Status;
use App\Models\User;
use Livewire\Component;

class LeadAdd extends Component
{
    public $name, $last_name, $email, $phone, $city, $state, $observations, $status_id = 1, $user_id, $development_id = 1, $success = false;

    protected $rules = [
        'name' => 'required',
        'last_name' => 'required',
        'email' => 'required|email|unique:leads',
        'phone' => 'required|unique:leads'
    ];

    protected $messages = [
        'name.required' => 'El campo nombre es obligatorio',
        'last_name.required' => 'El campo apellidos es obligatorio',
        'phone.required' => 'El campo telefono es obligatorio',
        'phone.required' => 'El campo telefono es obligatorio',
    ];

    public function mount()
    {
        $this->user_id = auth()->user()->id;
    }

    public function render()
    {
        return view('livewire.leads.lead-add', [
            'users' => User::all(),
            'statuses' => Status::all(),
            'developments' => Development::all(),
        ]);
    }


    public function storeLead()
    {
        $this->validate();

        Lead::create([
            'name' => $this->name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'city' => $this->city,
            'state' => $this->state,
            'observations' => $this->observations,
            'status_id' => $this->status_id,
            'user_id' => auth()->user()->id,
            'development_id' => $this->development_id,
        ]);
        $this->reset('name', 'last_name', 'email', 'phone', 'city', 'state');
        $this->success = true;
    }
}
