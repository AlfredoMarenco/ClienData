<?php

namespace App\Http\Livewire;

use App\Models\Employee;
use Carbon\Carbon;
use Livewire\Component;

class CheckAccess extends Component
{
    public $date;
    public $time;
    public $code;
    public $access_type;
    public $entrada = true;
    public $salida = true;
    public $comida_salida = true;
    public $comida_entrada = true;
    public $visible = false;
    public $accesses;

    public function timer(){
        //hora actual formato hora minutos y segundos
        $this->time = Carbon::now()->format('h:i:s A');
        //fecha actual formato dia mes año
        $this->date = Carbon::now()->format('d-m-Y');
        $this->date = Carbon::now()->formatLocalized('%d de %B de %Y');
    }

    public function check(){
        $employee = Employee::where('code', $this->code)->first();
        if ($employee) {
            $employee->accesses()->create([
                'date' => $this->date,
                'time' => $this->time,
                'access_type' => $this->access_type
            ]);
            $this->code = null;
            $this->access_type = null;
        } else {
            $this->access_type = 'No existe el empleado';
        }
    }

    public function render()
    {
        $employee = Employee::where('code', $this->code)->first();
        if ($employee) {
            $this->visible = true;
            $accesses = $employee->accesses()->where('date', $this->date)->get();
            $this->accesses = $accesses;
            foreach ($accesses as $access) {
                    if ($access->access_type == 'entrada') {
                        $this->entrada = false;
                    }
                    if ($access->access_type == 'salida') {
                        $this->salida = false;
                    }
                    if ($access->access_type == 'comida_salida') {
                        $this->comida_salida = false;
                    }
                    if ($access->access_type == 'comida_entrada') {
                        $this->comida_entrada = false;
                    }
            }
        }else{
            $this->visible = false;
        }

        return view('livewire.check-access')->layout('layouts.guest');
    }
}
