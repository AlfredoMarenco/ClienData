<?php

namespace App\Http\Livewire\Emails;

use App\Models\Lead;
use Livewire\Component;

class SendMail extends Component
{
    public $to, $body;

    protected $rules = [
        'to' => 'required',
        'body' => 'required',
    ];
    public function render()
    {
        return view('livewire.emails.send-mail', [
            'leads' => Lead::where('user_id', auth()->user()->id)->get(),
        ]);
    }



    public function sendEmail()
    {
        $this->validate();
    }
}
