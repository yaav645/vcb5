<?php

namespace App\Http\Controllers\Board;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\User;


class CreateController extends Controller
{

    public function __invoke()
    {
        $companies = Company::all();
        $users = User::all();

        return view('board.create', compact('companies', 'users'));
    }
}
