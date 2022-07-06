<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Models\Board;
use App\Models\Problem;
use App\Models\Task;
use App\Models\User;

class EditController extends Controller
{

    public function __invoke(Task $task)
    {
        $users = User::all();
        $problems = Problem::all();
        $boards = Board::all();
        return view('task.edit', compact('task', 'users', 'problems', 'boards'));
    }
}
