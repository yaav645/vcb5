<?php

namespace App\Http\Controllers\Board;

use App\Http\Controllers\Controller;
use App\Models\Board;
use App\Models\Company;
use App\Models\User;

class EditController extends Controller
{

    public function __invoke(Board $board)
    {
        $companies = Company::all();
        $users = User::all();
        return view('board.edit', compact('board', 'companies', 'users'));
    }
}
