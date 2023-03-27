<?php

namespace App\Http\Controllers\Admin;

class IndexAdminController extends Controller
{

    public function index()
    {
        return view('admin.index');
    }
}
