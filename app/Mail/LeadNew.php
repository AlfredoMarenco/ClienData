<?php

namespace App\Mail;

use App\Models\Lead;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class LeadNew extends Mailable
{
    use Queueable, SerializesModels;

    public $lead;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Lead $lead)
    {
        $this->lead = $lead;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.leads.new',[
            'id' => $this->lead->id,
            'name' => $this->lead->name,
            'last_name' => $this->lead->last_name,
            'phone' => $this->lead->phone,
            'email' => $this->lead->email,
            'time' => $this->lead->time,
            'amount' => $this->lead->amount
        ]);
    }
}
