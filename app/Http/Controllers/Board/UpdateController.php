<?php

namespace App\Http\Controllers\Board;

use App\Http\Controllers\Controller;
use App\Http\Requests\Board\UpdateRequest;
use App\Models\Board;


class UpdateController extends Controller
{

    public function __invoke(UpdateRequest $request, Board $board)
    {
        $data=$request->validated();
        $board = $board->update($data);

        if ($board) {
            return redirect()->route('board.index');
        }
        return back()->with('error', __('messages.board.update.fail'));

    }
}
