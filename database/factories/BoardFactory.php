<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Department;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Board>
 */
class BoardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => 'VCB ' . $this->faker->realTextBetween(20,30),
            'company_id' => Company::get()->random()->id,
            'admin_id' => User::get()->random()->id,
            'board_level' => random_int(0, 3),
        ];
    }
}
