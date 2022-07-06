<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Company;

class IndexController extends Controller
{

    public function __invoke()
    {

        $companies = Company::with('boards', 'admin')->paginate(10);
        return view('company.index', compact('companies'));
    }
}
