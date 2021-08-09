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
            'tasks' => Task::where('lead_id', $this->lead->id)->where('status', 'pending')->orderBy('expiration', 'ASC')->get(),
            'carbon' => new Carbon(),
        ]);
    }

    public function setCompleteTask(Task $task)
    {
        $newTask = Task::create([
            'name' => $task->name,
            'type' => $task->type,
            'platform' => $task->platform,
            'link' => $task->link,
            'place' => $task->place,
            'date_start' => $task->date_start,
            'time_start' => $task->time_start,
            'date_start' => $task->date_end,
            'time_start' => $task->time_end,
            'observations' => $task->observations,
            'expiration' => $task->expiration,
            'status' => 'complete',
            'priority' => $task->priority,
            'lead_id' => $task->lead->id,
        ]);

        $task->update([
            'status' => 'create',
        ]);

        $newTask->events()->create(['lead_id' => $this->lead->id]);

        $this->lead->update([
            'updated_at' => Carbon::now()
        ]);

        $this->emit('render');
    }
}
