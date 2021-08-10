<?php

namespace Database\Factories;

use App\Models\Lead;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class TaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Task::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'name' => $this->faker->word(),
            'type' => Arr::random(['video_conferencia', 'reunion', 'contacto', 'enviar_email', 'llamar', 'whatsapp']),
            'platform' => $this->faker->word(),
            'link' => $this->faker->url(),
            'place' => $this->faker->country(),
            'date_start' => $this->faker->date(),
            'time_start' => $this->faker->time(),
            'date_end' => $this->faker->date(),
            'time_end' => $this->faker->time(),
            'observations' => $this->faker->paragraph(),
            'expiration' => $this->faker->dateTime(),
            'status' => Arr::random(['create', 'pending', 'modified', 'complete']),
            'priority' => Arr::random(['normal', 'alta']),
            'lead_id' => Lead::all()->random()->id,
            'user_id' => User::all()->random()->id,
        ];
    }
}
