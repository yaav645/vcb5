<?php

namespace App\Http\Controllers\Problem;

use App\Http\Controllers\Controller;
use App\Models\Board;
use App\Models\Problem;
use App\Models\User;

class EditController extends Controller
{

    public function __invoke(Problem $problem)
    {
        $users = User::all();
        $boards = Board::all();
        return view('problem.edit', compact('problem', 'users', 'boards'));
    }
}
