<?php

namespace App\Http\Controllers\Admin;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationAdminController extends Controller
{
    public function index()
    {
        return view('admin.applications.index', ['applications' => Application::all()]);
    }

    public function show(string $id)
    {
        return view('admin.applications.show', ['application' => Application::findOrFail($id)]);
    }

    public function create()
    {
        return view('admin.applications.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title_en' => 'required',
        ]);

        $data = $this->getAllData($request);

        Application::create($data);

        return redirect()->route('applications.index')->with('success', 'applications created successfully.');
    }

    public function edit(string $id)
    {
        return view('admin.applications.edit', ['application' => Application::findOrFail($id)]);
    }

    public function update(Request $request, Application $application)
    {
        $request->validate([
            'title_en' => 'required',
        ]);

        $data = $this->getAllData($request);

        $application->update($data);

        return redirect()->route('applications.index')->with('success', 'applications updated successfully');
    }

    public function destroy(Application $application)
    {
        $application->delete();

        return redirect()->route('applications.index')
            ->with('success', 'applications deleted successfully');
    }

    private function getAllData(Request $request) {

        $data = $request->all();

        if(isset($data['file-img']) && $data['file-img']) {
            $fileObj = $data['file-img'];

            $options = [
                'files' => [$fileObj],
                'sizes' => [
                    'normal' => 1200,
                    'thumbnail' => 640,
                ],
                'catalog' => 'applications',
                'isWebp' => true,
                'quality' => 75, 
            ];

            $result = [];

            if (function_exists('create_sized_images')) {
                $result = create_sized_images($options);
                $data['img'] = $result[0]['title'];               
            }
        }

        // save doc
        if(isset($data['file-doc']) && $data['file-doc']) {
            $fileObj = $data['file-doc'];

            $options = [
                'files' => [$fileObj],
                'catalog' => 'applications',
            ];

            $result = [];

            if (function_exists('save_doc_helper')) {
                $result = save_doc_helper($options);
                $data['doc'] = $result[0]['title'];               
            }
        }

        return $data;
    }
}
