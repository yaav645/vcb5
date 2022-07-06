<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;

class EditController extends Controller
{

    public function __invoke(Company $company)
    {
        $users = User::all();
        return view('company.edit', compact('company', 'users'));
    }
}
