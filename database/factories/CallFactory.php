<?php

namespace Database\Factories;

use App\Models\Call;
use App\Models\Lead;
use Illuminate\Database\Eloquent\Factories\Factory;

class CallFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Call::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type' => $this->faker->word(),
            'date' => $this->faker->date(),
            'time' => $this->faker->time(),
            'result' => $this->faker->word(),
            'comment' => $this->faker->sentence(),
            'lead_id' => Lead::all()->random()->id,

        ];
    }
}
