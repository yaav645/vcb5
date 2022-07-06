<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Http\Requests\Company\StoreRequest;
use App\Models\Company;

class StoreController extends Controller
{

    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $company = Company::firstOrCreate($data);

        if ($company) {
            return redirect()->route('company.index');
        }
        return back()->with('error', __('messages.company.store.fail'));
    }
}
