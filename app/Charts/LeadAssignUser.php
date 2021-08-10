<?php

namespace App\Charts;

use App\Models\Lead;
use App\Models\Status;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class LeadAssignUser
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        /*Creamos el arreglo para poder generar los labels de forma dinamica */
        $statuses_labels = [];
        $statuses = Status::all();
        foreach ($statuses as $status) {
            array_push($statuses_labels, $status->name);
        }
        /*Creamos el arreglo para poder generar los colores de forma dinamica */
        $statuses_colors = [];
        $statuses = Status::all();
        foreach ($statuses as $status) {
            array_push($statuses_colors, $status->color_bg);
        }

        /*Creamos el arreglo para poder generar los datos de forma dinamica */
        $data = [];
        $leads = Lead::where('user_id', auth()->user()->id)->get();
        for ($i = 1; $i <= Status::all()->count(); $i++) {
            $leads = Lead::where('user_id', auth()->user()->id)->where('status_id', $i)->count();
            array_push($data, $leads);
        }

        return $this->chart->pieChart()
            ->setTitle('Leads por estatus')
            ->addData($data)
            ->setColors($statuses_colors)
            ->setLabels($statuses_labels);
    }
}
