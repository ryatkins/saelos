<?php

namespace App\Http\Controllers;

use App\Notifications\CompanyUpdated;
use Auth;
use App\Company;
use App\Http\Resources\CompanyCollection;
use App\User;
use Illuminate\Http\Request;
use App\Http\Resources\Company as CompanyResource;

class CompanyController extends Controller
{
    const INDEX_WITH = [
        'customFields'
    ];

    const SHOW_WITH = [
        'user',
        'people',
        'people.deals',
        'people.deals.people',
        'deals',
        'customFields',
        'customFields.customField',
        'notes',
        'notes.user',
        'documents',
        'documents.user',
    ];

    public function index(Request $request)
    {
        $companies = Company::with(static::INDEX_WITH);

        $companies->where('published', 1);
        $companies->where(function($q) use ($request) {
            if ($id = $request->get('id')) {
                $q->where('id', (int) $id);

                // If we're getting an ID, just search that
                return;
            }

            if ($name = $request->get('name')) {
                $q->orWhere('name', 'like', '%'.$name.'%');
            }

            if ($city = $request->get('city')) {
                $q->orWhere('city', 'like', '%'.$city.'%');
            }

            if ($state = $request->get('state')) {
                $q->orWhere('state', 'like', '%'.$state.'%');
            }
        });

        return new CompanyCollection($companies->paginate());
    }

    public function show($id)
    {
        return new CompanyResource(Company::with(static::SHOW_WITH)->find($id));
    }

    public function update(Request $request, $id)
    {
        /** @var Company $company */
        $company = Company::findOrFail($id);
        $data = $request->all();
        $customFields = $data['custom_fields'] ?? [];

        $company->user()->associate(Auth::user());
        $company->update($data);
        $company->assignCustomFields($customFields);

        \App\Events\CompanyUpdated::broadcast($company);
        Auth::user()->notify(new CompanyUpdated($company));

        return $this->show($company->id);
    }

    public function store(Request $request)
    {
        $company = Company::create($request->all());

        return $this->update($request, $company->id);
    }

    public function destroy($id)
    {
        Company::findOrFail($id)->delete();

        return '';
    }
}
