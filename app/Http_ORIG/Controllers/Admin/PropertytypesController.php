<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Propertytype;
use Gate;
use App\Http\Requests\MassDestroyPropertytypeRequest;
use App\Http\Requests\StorePropertytypeRequest;
use App\Http\Requests\UpdatePropertytypeRequest;
use Symfony\Component\HttpFoundation\Response;

class PropertytypesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('type_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $propertytypes = Propertytype::all();

        return view('admin.propertytypes.index', compact('propertytypes'));
    }

    public function create()
    {
        abort_if(Gate::denies('type_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.propertytypes.create');
    }

    public function store(StorePropertytypeRequest $request)
    {
        $propertytype = Propertytype::create($request->all());

        return redirect()->route('admin.propertytypes.index');
    }

    public function edit(Propertytype $propertytype)
    {
        abort_if(Gate::denies('type_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.propertytypes.edit', compact('propertytype'));
    }

    public function update(UpdatePropertytypeRequest $request, Propertytype $propertytype)
    {
        $propertytype->update($request->all());

        return redirect()->route('admin.propertytypes.index');
    }

    public function show(Propertytype $propertytype)
    {
        abort_if(Gate::denies('type_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.propertytypes.show', compact('propertytype'));
    }

    public function destroy(Propertytype $propertytype)
    {
        abort_if(Gate::denies('type_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $propertytype->delete();

        return back();
    }

    public function massDestroy(MassDestroyPropertytypeRequest $request)
    {
        Propertytype::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
