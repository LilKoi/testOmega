<?php

namespace App\Http\Controllers;

use App\Http\Requests\Positions\StorePositionRequest;
use App\Http\Requests\Positions\UpdatePositionRequest;
use App\Models\Position;

class PositionController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('positions.index', [
            'positions' => Position::query()->get()
        ]);
    }

    public function create()
    {
        return view('positions.create');
    }

    public function store(StorePositionRequest $request)
    {
        $data = $request->validated();
        Position::create($data);
        return redirect(route('positions.index'));
    }

    public function edit(Position $position)
    {
        return view('positions.create', [
            'position' => $position
        ]);
    }

    public function update(Position $position, UpdatePositionRequest $request)
    {
        $data = $request->validated();
        $position->update($data);
        return redirect(route('positions.index'));
    }

    public function delete(Position $position)
    {
        $position->delete();
        return redirect(route('positions.index'));
    }
}
