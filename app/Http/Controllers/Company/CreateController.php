<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\User;


class CreateController extends Controller
{

    public function __invoke()
    {
        $users = User::all();
        return view('company.create', compact('users'));
    }
}
