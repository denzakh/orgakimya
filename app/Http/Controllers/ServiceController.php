<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;

class ServiceController extends Controller
{
    public function index()
    {
        return view('services.index', ['services' => Service::all()]);
    }


    public function show(string $id)
    {
      return view('services.show', ['service' => Service::findOrFail($id)]);
    }
}
