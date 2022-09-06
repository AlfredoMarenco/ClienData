<?php

namespace App\Http\Livewire;

use App\Models\Lead;
use Livewire\Component;

class FormLeads extends Component
{
    public $name;
    public $last_name;
    public $email;
    public $phone;
    public $policy;
    public $user_id=3;
    public $status_id=3;

    protected $rules = [
        'name' => 'required',
        'last_name' => 'required',
        'email' => 'required|email|unique:leads,email',
        'phone' => 'required|regex:/[0-9]{9}/',
        'policy' => 'required'
    ];

    protected $messages = [
        'phone.required' => 'El campo teléfono es un campo obligatorio.',
    ];

    public function submit(){
        $this->validate();
        Lead::create([
            'name' => $this->name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'user_id' => $this->user_id,
            'status_id' => $this->status_id

        ]);
        session()->flash("message", "Tus datos han sido enviados correctamente.");
        $this->reset('name','last_name','email','phone','policy');
    }

    public function render()
    {
        return view('livewire.form-leads');
    }
}
