<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Http\Requests\Task\UpdateRequest;
use App\Models\Task;


class UpdateController extends Controller
{

    public function __invoke(UpdateRequest $request, Task $task)
    {

        $data = $request->validated();
        $task = $task->update($data);

        if ($task) {
            return redirect()->route('task.index');
        }

        return back()->with('error', __('messages.task.update.fail'));

    }
}
