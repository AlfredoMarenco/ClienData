<?php

namespace Database\Factories;

use App\Models\Call;
use App\Models\Event;
use App\Models\Lead;
use App\Models\Note;
use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Event::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'eventable_id' => rand(1, 100),
            'eventable_type' => Arr::random([Task::class, Note::class, Call::class]),
            'lead_id' => Lead::all()->random()->id
        ];
    }
}
