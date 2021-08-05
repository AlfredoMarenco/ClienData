<?php

namespace App\Http\Livewire;

use App\Models\Lead;
use App\Models\Task;
use Livewire\Component;

class LeadTasks extends Component
{
    public $lead;

    public function mount(Lead $lead)
    {
        $this->lead = $lead;
    }
    public function render()
    {
        return view('livewire.lead-tasks', [
            'tasks' => Task::where('lead_id', $this->lead->id)->paginate(10),
        ]);
    }
}
