<?php

namespace Database\Factories;

use App\Models\Board;
use App\Models\Problem;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => 'Task ' . $this->faker->realTextBetween(30,50),
            'responsible_id' => User::get()->random()->id,
            'problem_id' => Problem::get()->random()->id,
            'deadline' => $this->faker->date('Y-m-d'),
            'board_id' => Board::get()->random()->id,
            'deadline_shift' => random_int(0, 1),
        ];
    }
}
