<?php

namespace App\Http\Livewire;

use App\Models\Development;
use App\Models\Lead;
use App\Models\Status;
use Livewire\Component;

class LeadDescription extends Component
{
    public $lead, $name, $last_name, $phone, $status, $email, $development, $state, $city, $observations;

    protected $listeners = ['render' => 'render'];

    public function mount(Lead $lead)
    {
        $this->lead = $lead;
        $this->name = $lead->name;
        $this->last_name = $lead->last_name;
        $this->phone = $lead->phone;
        $this->status = $lead->status_id;
        $this->email = $lead->email;
        $this->development = $lead->development_id;
        $this->state = $lead->state;
        $this->city = $lead->city;
        $this->observations = $lead->observations;
    }

    public function render()
    {
        $statuses = Status::all();
        $developments = Development::all();
        return view('livewire.lead-description', compact('statuses', 'developments'));
    }


    public function updateName()
    {
        $this->lead->update([
            'name' => $this->name,
        ]);

        $this->lead = Lead::find($this->lead->id);
    }

    public function updateLastName()
    {
        $this->lead->update([
            'last_name' => $this->last_name,
        ]);

        $this->lead = Lead::find($this->lead->id);
    }

    public function updatePhone()
    {
        $this->lead->update([
            'phone' => $this->phone,
        ]);

        $this->lead = Lead::find($this->lead->id);
    }

    public function updateStatus()
    {
        $this->lead->update([
            'status_id' => $this->status,
        ]);

        $this->lead = Lead::find($this->lead->id);
    }

    public function updateDevelopment()
    {
        $this->lead->update([
            'development_id' => $this->development,
        ]);

        $this->lead = Lead::find($this->lead->id);
    }
    public function updateState()
    {
        $this->lead->update([
            'state' => $this->state,
        ]);

        $this->lead = Lead::find($this->lead->id);
    }
    public function updateCity()
    {
        $this->lead->update([
            'city' => $this->city,
        ]);

        $this->lead = Lead::find($this->lead->id);
    }

    public function updateEmail()
    {
        $this->lead->update([
            'email' => $this->email,
        ]);

        $this->lead = Lead::find($this->lead->id);
    }

    public function updateObservations()
    {
        $this->lead->update([
            'observations' => $this->observations,
        ]);

        $this->lead = Lead::find($this->lead->id);
    }
}
