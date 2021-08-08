<?php

namespace App\Http\Livewire;

use App\Models\Development;
use App\Models\Status;
use Livewire\Component;

class SystemConfig extends Component
{
    public $status_name, $status_colorbg, $status_colortext, $development_name, $nav_dev = true, $nav_status = false, $success = false;

    public function render()
    {
        return view('livewire.system-config', [
            'statuses' => Status::all(),
            'developments' => Development::all(),
        ]);
    }

    public function resetSuccess()
    {
        $this->reset('success');
    }

    public function activeDev()
    {
        $this->nav_dev = true;
        $this->nav_status = false;
    }

    public function activeStatus()
    {
        $this->nav_dev = false;
        $this->nav_status = true;
    }


    public function setStatus(Status $status)
    {
        $this->reset('status_name', 'status_colorbg', 'status_colortext');
        $this->status_name = $status->name;
        $this->status_colorbg = $status->color_bg;
        $this->status_colortext = $status->color_text;
    }

    public function setDevelopment(Development $development)
    {
        $this->development_name = $development->name;
    }

    public function storeStatus()
    {
        Status::create([
            'name' => $this->status_name,
            'color_bg' => $this->status_colorbg,
            'color_text' => $this->status_colortext,
        ]);
        $this->success = true;
        $this->reset('status_name', 'status_colorbg', 'status_colortext');
    }

    public function storeDevelopment()
    {
        Development::create([
            'name' => $this->development_name,
        ]);
        $this->success = true;
        $this->reset('development_name');
    }

    public function updateStatus(Status $status)
    {
        $status->update([
            'name' => $this->status_name,
            'color_bg' => $this->status_colorbg,
            'color_text' => $this->status_colortext,
        ]);
        $this->success = true;
        $this->reset('status_name', 'status_colorbg', 'status_colortext');
    }

    public function updateDevelopment(Development $development)
    {
        $development->update([
            'name' => $this->development_name,
        ]);
        $this->success = true;
        $this->reset('development_name');
    }
}
