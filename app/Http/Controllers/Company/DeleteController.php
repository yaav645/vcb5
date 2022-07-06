<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class DeleteController extends Controller
{

    public function __invoke(Company $company)
    {
        $company->delete();


        return redirect()->route('company.index');
    }
}
