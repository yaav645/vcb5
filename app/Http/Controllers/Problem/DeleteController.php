<?php

namespace App\Http\Controllers\Problem;

use App\Http\Controllers\Controller;
use App\Models\Problem;


class DeleteController extends Controller
{

    public function __invoke(Problem $problem)
    {
        $problem->delete();


        return redirect()->route('problem.index');
    }
}
