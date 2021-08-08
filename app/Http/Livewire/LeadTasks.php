<?php

namespace App\Http\Livewire;

use App\Models\Lead;
use App\Models\Task;
use Carbon\Carbon;
use Livewire\Component;

class LeadTasks extends Component
{
    public $lead;

    protected $listeners = ['render' => 'render'];

    public function mount(Lead $lead)
    {
        $this->lead = $lead;
    }
    public function render()
    {
        return view('livewire.lead-tasks', [
            'tasks' => Task::where('lead_id', $this->lead->id)->where('status','pending')->get(),
            'carbon' => new Carbon(),
        ]);
    }
}
