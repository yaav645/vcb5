<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Http\Requests\Task\StoreRequest;
use App\Models\Task;

class StoreController extends Controller
{

    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $task = Task::firstOrCreate($data);

        if ($task) {
            return redirect()->route('task.index');
        }

        return back()->with('error', __('messages.task.store.fail'));
    }
}
