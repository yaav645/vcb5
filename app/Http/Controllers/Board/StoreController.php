<?php

namespace App\Http\Controllers\Board;

use App\Http\Controllers\Controller;
use App\Http\Requests\Board\StoreRequest;
use App\Models\Board;

class StoreController extends Controller
{

    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $board = Board::firstOrCreate($data);

        if ($board) {
            return redirect()->route('board.index');
        }
        return back()->with('error', __('messages.board.store.fail'));
    }
}
