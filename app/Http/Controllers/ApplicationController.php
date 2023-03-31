<?php

namespace App\Http\Controllers;

use App\Models\Application;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('applications.index', ['applications' => Application::all()]);
    }

    public function show(string $id)
    {
        return view('applications.show', ['application' => Application::findOrFail($id)]);
    }
}
