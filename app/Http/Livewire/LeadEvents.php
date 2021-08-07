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

    public $lead, $note_name, $note_body, $paginate = 5, $success = false, $call_type = 'recibida', $call_date, $call_time, $call_result = 'conectado', $call_comment;

    public function mount(Lead $lead)
    {
        $this->lead = $lead;
        $this->call_date = Carbon::now()->toDateString();
        $this->call_time = Carbon::now()->toTimeString();
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
}
