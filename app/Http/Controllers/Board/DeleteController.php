<?php

namespace App\Http\Controllers\Board;

use App\Http\Controllers\Controller;
use App\Models\Board;


class DeleteController extends Controller
{

    public function __invoke(Board $board)
    {
        $board->delete();


        return redirect()->route('board.index');
    }
}
