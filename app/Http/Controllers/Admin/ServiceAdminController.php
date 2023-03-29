<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceAdminController extends Controller
{
    public function index()
    {
        return view('admin.services.index', ['services' => Service::all()]);
    }

    public function show(string $id)
    {
        return view('admin.services.show', ['service' => Service::findOrFail($id)]);
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title_en' => 'required',
        ]);

        Service::create($request->all());

        return redirect()->route('services.index')->with('success', 'services created successfully.');
    }

    public function edit(string $id)
    {
        return view('admin.services.edit', ['service' => Service::findOrFail($id)]);
    }

    public function update(Request $request, Service $service)
    {
        $request->validate([
            'title_en' => 'required',
        ]);

        $service->update($request->all());

        return redirect()->route('services.index')->with('success', 'services updated successfully');
    }

    public function destroy(Service $service)
    {
        $service->delete();

        return redirect()->route('services.index')
            ->with('success', 'services deleted successfully');
    }
}
