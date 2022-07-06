<?php

namespace Database\Factories;

use App\Models\Board;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Problem>
 */
class ProblemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => 'Problem ' . $this->faker->realTextBetween(15,30),
            'owner_id' => User::get()->random()->id,
            'deadline' => $this->faker->dateTimeThisYear()->format('Y-m-d'),
            'board_id' => Board::get()->random()->id,
            'deadline_shift' => mt_rand(0,4)
        ];
    }
}
