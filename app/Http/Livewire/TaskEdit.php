<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class TaskEdit extends Component
{
    public $success = false, $task;
    public $name, $type, $platform, $link, $place, $date_start, $date_end, $time_start, $time_end, $observations, $priority, $expiration, $expoption;

    public function mount(Task $task)
    {
        $this->task = $task;
        $this->name = $task->name;
        $this->type = $task->type;
        $this->platform = $task->platform;
        $this->link = $task->link;
        $this->place = $task->place;
        $this->date_start = $task->date_start;
        $this->date_end = $task->date_end;
        $this->time_start = $task->time_start;
        $this->time_end = $task->time_end;
        $this->observations = $task->observations;
        $this->expiration = $task->expiration;
        $this->priority = $task->priority;
        $this->expoption = 'date';
    }

    public function render()
    {
        return view('livewire.task-edit');
    }

    public function resetSuccess()
    {
        $this->reset('success');
    }

    public function updateTask(Task $task)
    {
        switch ($this->type) {
            case 'video_conferencia':
                $this->validate([
                    'name' => 'required',
                    'link' => 'required',
                    'platform' => 'required',
                    'date_start' => 'required',
                    'time_start' => 'required',
                    'date_end' => 'required',
                    'time_end' => 'required',
                ]);
                $task->update([
                    'name' => $this->name,
                    'type' => $this->type,
                    'platform' => $this->platform,
                    'link' => $this->link,
                    'date_start' => $this->date_start,
                    'date_end' => $this->date_end,
                    'time_start' => $this->time_start,
                    'time_end' => $this->time_end,
                    'observations' => $this->observations,
                    'expiration' => $this->date_end . ' ' . $this->time_end,
                    'status' => 'modified',
                    'priority' => $this->priority,
                ]);
                $task->save();
                break;
            case 'reunion':
                $this->validate([
                    'name' => 'required',
                    'place' => 'required',
                    'date_start' => 'required',
                    'time_start' => 'required',
                    'date_end' => 'required',
                    'time_end' => 'required',
                ]);

                $task->update([
                    'name' => $this->name,
                    'type' => $this->type,
                    'place' => $this->place,
                    'date_start' => $this->date_start,
                    'date_end' => $this->date_end,
                    'time_start' => $this->time_start,
                    'time_end' => $this->time_end,
                    'observations' => $this->observations,
                    'expiration' => $this->date_end . ' ' . $this->time_end,
                    'status' => 'modified',
                    'priority' => $this->priority,
                ]);
                $task->save();
                break;
            default:
                $this->validate([
                    'name' => 'required',
                    'date_start' => 'required',
                    'time_start' => 'required',
                    'date_end' => 'required',
                    'time_end' => 'required',
                ]);
                $task->update([
                    'name' => $this->name,
                    'type' => $this->type,
                    'date_start' => $this->date_start,
                    'time_end' => $this->time_end,
                    'observations' => $this->observations,
                    'expiration' => $this->date_start . ' ' . $this->time_end,
                    'status' => 'modified',
                    'priority' => $this->priority,
                ]);
                $task->save();
                break;
        }
        $task->events()->create(['lead_id' => $task->lead->id]);
        $this->success = true;
        $this->emit('render');
        $this->reset('name', 'observations');
    }
}
