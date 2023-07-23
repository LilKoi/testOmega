<?php

namespace App\Http\Controllers;

use App\Http\Requests\Departaments\StoreDepartamentsRequest;
use App\Http\Requests\Departaments\UpdateDepartamentsRequest;
use App\Models\Departament;

class DepartamentController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('departaments.index', [
            'departaments' => Departament::query()->get()
        ]);
    }

    public function create()
    {
        return view('departaments.create');
    }

    public function store(StoreDepartamentsRequest $request)
    {
        $data = $request->validated();
        Departament::create($data);
        return redirect(route('departaments.index'));
    }

    public function edit(Departament $departament)
    {
        return view('departaments.create', [
            'departament' => $departament
        ]);
    }

    public function update(Departament $departament, UpdateDepartamentsRequest $request)
    {
        $data = $request->validated();
        $departament->update($data);
        return redirect(route('departaments.index'));
    }

    public function delete(Departament $departament)
    {
        $departament->delete();
        return redirect(route('departaments.index'));
    }
}
