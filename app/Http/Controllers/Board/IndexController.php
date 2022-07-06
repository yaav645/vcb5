<?php

namespace App\Http\Controllers\Board;

use App\Http\Controllers\Controller;
use App\Models\Board;

class IndexController extends Controller
{

    public function __invoke()
    {
        $boards = Board::with('company', 'problems', 'admin', 'tasks')->paginate(10);
        return view('board.index', compact('boards'));
    }
}
