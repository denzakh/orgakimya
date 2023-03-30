<?php

namespace App\Http\Controllers;

use App\Models\Setting;

class ContactController extends Controller
{
    public function index()
    {
        return view('contacts', ['settings' => Setting::findOrFail(1)->toArray()]);
    }
}
