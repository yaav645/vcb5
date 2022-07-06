<?php

namespace App\Http\Controllers\Problem;

use App\Http\Controllers\Controller;
use App\Http\Requests\Problem\UpdateRequest;
use App\Models\Problem;


class UpdateController extends Controller
{

    public function __invoke(UpdateRequest $request, Problem $problem)
    {
        $data=$request->validated();
        $problem = $problem->update($data);

        if ($problem) {
            return redirect()->route('problem.index');
        }

        return back()->with('error', __('messages.problem.update.fail'));

    }
}
