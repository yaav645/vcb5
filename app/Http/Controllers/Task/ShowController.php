<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Models\Task;

class ShowController extends Controller
{

    public function __invoke(Task $task)
    {
        return view('task.show', compact('task'));
    }
}
