<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Service;
use App\Models\Post;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home', [
            'applications' => Application::all(),
            'services' => Service::all(),
            'posts' => Post::all(),
        ]);
    }
}
