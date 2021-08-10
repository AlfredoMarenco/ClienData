<?php

namespace App\Charts;

use App\Models\Task;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Carbon\Carbon;

class TasksReport
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {

        $complete = Task::where('status', 'complete')->where('user_id',auth()->user()->id)->count();
        $pending = Task::where('status', 'pending')->where('user_id',auth()->user()->id)->count();
        $expired = Task::where('status', 'pending')->where('user_id',auth()->user()->id)->where('expiration','<', Carbon::now())->count();
        return $this->chart->pieChart()
            ->setTitle('Estatus de tareas')
            ->addData([$complete, $pending, $expired])
            ->setColors(['#03A300','#FF7033','#FF0000'])
            ->setLabels(['Completadas', 'Pendientes', 'Vencidas']);
    }
}
