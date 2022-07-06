<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Models\Board;
use App\Models\Problem;
use App\Models\User;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateController extends Controller
{

    public function __invoke()
    {

        $users = User::all();
        $problems = Problem::all();
        $boards = Board::all();

        return view('task.create', compact('users', 'problems', 'boards'));
    }
}
