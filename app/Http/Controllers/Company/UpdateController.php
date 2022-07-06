<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Http\Requests\Company\UpdateRequest;
use App\Models\Company;
use Illuminate\Http\Request;

class UpdateController extends Controller
{

    public function __invoke(UpdateRequest $request, Company $company)
    {
        $data=$request->validated();

        if ($company->update($data)) {
            return redirect()->route('company.index');
        }
        return back()->with('error', __('messages.company.update.fail'));
    }
}
