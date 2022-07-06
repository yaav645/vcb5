<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Models\Task;


class IndexController extends Controller
{

    public function __invoke()
    {
        $tasks=Task::with('board', 'responsible', 'problem')->paginate(7);

        return view('task.index', compact('tasks'));
    }
}
