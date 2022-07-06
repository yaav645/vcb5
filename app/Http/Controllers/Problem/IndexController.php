<?php

namespace App\Http\Controllers\Problem;

use App\Http\Controllers\Controller;
use App\Models\Problem;

class IndexController extends Controller
{

    public function __invoke()
    {
        $problems=Problem::with('board', 'owner', 'tasks')->paginate(10);
        return view('problem.index', compact('problems'));
    }
}
