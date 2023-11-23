<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCriteriaRequest;
use App\Http\Requests\StoreCriteriaRequest;
use App\Http\Requests\UpdateCriteriaRequest;
use App\Models\Criteria;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CriteriaController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('criteria_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $criteria = Criteria::get();
        // dd($category);

        return view('admin.criteria.index', compact('criteria'));
    }

    public function create()
    {
        abort_if(Gate::denies('criteria_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $criteria = Criteria::get();

        return view('admin.criteria.create', compact('criteria'));
    }

    public function store(StoreCriteriaRequest $request)
    {

        Criteria::create($request->validated());
        
        return redirect()->route('admin.criterias.index')->with('message','Data Added Successfully');
    }

    public function edit($id)
    {
        abort_if(Gate::denies('criteria_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $criteria = Criteria::get();
        // dd($category);

        $data = Criteria::findOrFail($id);

        return view('admin.criteria.edit', compact('criteria', 'id', 'data'));
    }

    public function update(UpdateCriteriaRequest $request, Criteria $criteria)
    {
        $criteria->update($request->validated());

        return redirect()->route('admin.criterias.index')->with('message','Data Updated Successfully');
    }

    public function show(Criteria $criteria)
    {
        abort_if(Gate::denies('criteria_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.criteria.show', compact('criteria'));
    }

    public function destroy(Criteria $criteria)
    {
        abort_if(Gate::denies('criteria_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $criteria->delete();

        return redirect()->route('admin.criterias.index')->with('message','Data Deleted Successfully');
    }

    public function massDestroy(MassDestroyCriteriaRequest $request)
    {
        Criteria::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
