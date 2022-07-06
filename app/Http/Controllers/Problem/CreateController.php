<?php

namespace App\Http\Controllers\Problem;

use App\Http\Controllers\Controller;
use App\Models\Board;
use App\Models\User;


class CreateController extends Controller
{

    public function __invoke()
    {
        $users=User::all();
        $boards = Board::all();
        return view('problem.create', compact('users', 'boards'));
    }
}
