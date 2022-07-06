<?php

namespace App\Http\Controllers\Problem;

use App\Http\Controllers\Controller;
use App\Http\Requests\Problem\StoreRequest;
use App\Models\Problem;

class StoreController extends Controller
{

    public function __invoke(StoreRequest $request)
    {
        $data=$request->validated();
        $problem = Problem::firstOrCreate($data);

        if ($problem) {
            return redirect()->route('problem.index');
        }

        return back()->with('error', __('messages.problem.store.fail'));

    }
}
