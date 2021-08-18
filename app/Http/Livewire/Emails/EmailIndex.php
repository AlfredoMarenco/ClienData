<?php

namespace App\Http\Livewire\Emails;

use App\Models\Lead;
use Livewire\Component;

class EmailIndex extends Component
{
    public $nav_emails = true, $nav_templates;
    
    public function render()
    {
        return view('livewire.emails.email-index');
    }

    public function navigation($link)
    {
        switch ($link) {
            case 'emails':
                $this->nav_emails = true;
                $this->nav_templates = false;
                break;
            case 'templates':
                $this->nav_emails = false;
                $this->nav_templates = true;
                break;
            default:

                break;
        }
    }
}
