<?php

namespace App\Http\Livewire;

use App\Models\Call;
use App\Models\Event;
use App\Models\Lead;
use App\Models\Note;
use App\Models\Task;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class LeadEvents extends Component
{
    use WithPagination;

    public $lead, $note_name, $note_body, $paginate = 5, $success = false, $call_type = 'recibida', $call_date, $call_time, $call_result = 'conectado', $call_comment, $comment_body;

    public $task_name, $task_type, $task_platform, $task_link, $task_place, $task_datestart, $task_dateend, $task_timestart, $task_timeend, $task_observations, $task_priority, $task_expiration, $task_expoption;

    protected $listeners = ['render' => 'render'];

    public function mount(Lead $lead)
    {
        $this->lead = $lead;
        $this->call_date = Carbon::now()->toDateString();
        $this->call_time = '23:59';
        $this->task_datestart = Carbon::now()->toDateString();
        $this->task_timestart = '00:00';
        $this->task_dateend = Carbon::now()->toDateString();
        $this->task_timeend = '23:59';
        $this->task_type = 'contacto';
        $this->task_platform = 'zoom';
        $this->task_expoption = 'date';
        $this->task_priority = 'normal';
    }

    public function render()
    {
        return view('livewire.lead-events', [
            'events' => Event::where('lead_id', $this->lead->id)->latest('id')->paginate($this->paginate),
            'tasks' => Task::all(),
            'calls' => Call::all(),
            'notes' => Note::all(),
            'carbon' => new Carbon(),
        ]);
    }

    public function viewMore()
    {
        $this->paginate = $this->paginate + 5;
    }

    public function resetSuccess()
    {
        $this->reset('success');
    }


    public function storeNote()
    {
        $note = Note::create([
            'name' => $this->note_name,
            'body' => $this->note_body,
            'lead_id' => $this->lead->id,
        ]);

        $note->events()->create(['lead_id' => $this->lead->id]);

        $this->reset('note_name', 'note_body');

        $this->success = true;
    }

    public function deleteNote(Note $note)
    {
        $note->events()->delete();
        $note->delete();
    }


    public function storeCall()
    {
        $call = Call::create([
            'type' => $this->call_type,
            'date' => $this->call_date,
            'time' => $this->call_time,
            'result' => $this->call_result,
            'comment' => $this->call_comment,
            'lead_id' => $this->lead->id
        ]);

        $call->events()->create(['lead_id' => $this->lead->id]);

        $this->reset('call_comment');
        $this->success = true;
    }

    public function deleteCall(Call $call)
    {
        $call->events()->delete();
        $call->delete();
    }

    public function commentNote(Note $note)
    {
        $note->comments()->create([
            'body' => $this->comment_body
        ]);

        $this->reset('comment_body');
    }

    public function commentCall(Call $call)
    {
        $call->comments()->create([
            'body' => $this->comment_body
        ]);

        $this->reset('comment_body');
    }

    public function commentTask(Task $task)
    {
        $task->comments()->create([
            'body' => $this->comment_body
        ]);

        $this->reset('comment_body');
    }


    public function storeTask()
    {
        switch ($this->task_type) {
            case 'video_conferencia':
                $this->validate([
                    'task_name' => 'required',
                    'task_link' => 'required',
                    'task_platform' => 'required',
                    'task_datestart' => 'required',
                    'task_timestart' => 'required',
                    'task_dateend' => 'required',
                    'task_timeend' => 'required',
                ]);
                $task = Task::create([
                    'name' => $this->task_name,
                    'type' => $this->task_type,
                    'platform' => $this->task_platform,
                    'link' => $this->task_link,
                    'date_start' => $this->task_datestart,
                    'date_end' => $this->task_dateend,
                    'time_start' => $this->task_timestart,
                    'time_end' => $this->task_timeend,
                    'observations' => $this->task_observations,
                    'expiration' => $this->task_dateend . ' ' . $this->task_timeend,
                    'status' => 'pending',
                    'priority' => $this->task_priority,
                    'lead_id' => $this->lead->id
                ]);
                break;
            case 'reunion':
                $this->validate([
                    'task_name' => 'required',
                    'task_place' => 'required',
                    'task_datestart' => 'required',
                    'task_timestart' => 'required',
                    'task_dateend' => 'required',
                    'task_timeend' => 'required',
                ]);

                $task = Task::create([
                    'name' => $this->task_name,
                    'type' => $this->task_type,
                    'place' => $this->task_place,
                    'date_start' => $this->task_datestart,
                    'date_end' => $this->task_dateend,
                    'time_start' => $this->task_timestart,
                    'time_end' => $this->task_timeend,
                    'observations' => $this->task_observations,
                    'expiration' => $this->task_dateend . ' ' . $this->task_timeend,
                    'status' => 'pending',
                    'priority' => $this->task_priority,
                    'lead_id' => $this->lead->id
                ]);
                break;
            default:
                $this->validate([
                    'task_name' => 'required',
                    'task_datestart' => 'required',
                    'task_timestart' => 'required',
                    'task_dateend' => 'required',
                    'task_timeend' => 'required',
                ]);
                $task = Task::create([
                    'name' => $this->task_name,
                    'type' => $this->task_type,
                    'date_start' => $this->task_datestart,
                    'time_end' => $this->task_timeend,
                    'observations' => $this->task_observations,
                    'expiration' => $this->task_datestart . ' ' . $this->task_timeend,
                    'status' => 'pending',
                    'priority' => $this->task_priority,
                    'lead_id' => $this->lead->id
                ]);
                break;
        }
        $task->events()->create(['lead_id' => $this->lead->id]);
        $this->success = true;
        $this->emit('render');
        $this->reset('task_name', 'task_observations');
    }

    public function deleteTask(Task $task)
    {
        $task->events()->delete();
        /* $task->delete(); */
        $this->emit('render');
    }
}
