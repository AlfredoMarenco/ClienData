<?php

namespace App\Http\Livewire;

use App\Models\Lead;
use App\Models\Status;
use Livewire\Component;

class LeadDescription extends Component
{
    public $lead, $phone, $status, $email;

    public function mount(Lead $lead)
    {
        $this->lead = $lead;
        $this->phone = $lead->phone;
        $this->status = $lead->status_id;
        $this->email = $lead->email;
    }

    public function render()
    {
        $statuses = Status::all();
        return view('livewire.lead-description', compact('statuses'));
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

    public function updateEmail()
    {
        $this->lead->update([
            'email' => $this->email,
        ]);

        $this->lead = Lead::find($this->lead->id);
    }
}
