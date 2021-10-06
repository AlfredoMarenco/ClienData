<?php

namespace App\Http\Livewire\Reports;

use Livewire\Component;

class Index extends Component
{
    public $leads;

    public function setNavigation($option)
    {
        switch ($option) {
            case 'leads':
                $this->leads = true;
                break;
        }
    }

    public function render()
    {
        return view('livewire.reports.index');
    }
}
