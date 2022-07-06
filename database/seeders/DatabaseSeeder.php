<?php

namespace Database\Seeders;

use App\Models\Board;
use App\Models\Company;
use App\Models\Problem;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(30)->create();
        Company::factory(30)->create();
        Board::factory(30)->create();
        Problem::factory(30)->create();
        Task::factory(30)->create();
    }
}
