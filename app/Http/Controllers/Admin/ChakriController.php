<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreChakriRequest;
use App\Http\Requests\UpdateChakriRequest;
use App\Models\Chakri;
use Illuminate\Http\Request;

class ChakriController extends Controller
{
    public function index()
    {
        $chakris = Chakri::latest()->get();
        return view('admin.chakris.index', compact('chakris'));
    }

    public function create()
    {
        return view('admin.chakris.create');
    }

    public function store(StoreChakriRequest $request)
    {
        Chakri::create($request->validated());

        return to_route('admin.chakris.index')->with('success', 'Chakri created successfully.');
    }

    public function show(Chakri $chakri)
    {
        return view('admin.chakris.show', compact('chakri'));
    }

    public function edit(Chakri $chakri)
    {
        return view('admin.chakris.edit', compact('chakri'));
    }

    public function update(UpdateChakriRequest $request, Chakri $chakri)
    {
        $chakri->updateOrFail($request->validated());

        return to_route('admin.chakris.index');
    }

    public function destroy(Chakri $chakri)
    {
        $chakri->deleteOrFail();

        return to_route('admin.chakris.index');
    }
}
