<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class UplodeDesignAdminController extends Controller
{
    public function index()
    {
        return view('admin.design.index');
    }


    public function save(Request $request)
    {
        $data = $this->saveData($request);

        return redirect()->route('design.index')->with('success', 'image updated successfully');
    }

    private function saveData(Request $request)
    {
        $data = $request->all();

        if ($data['file-img']) {
            $fileObj = $data['file-img'];

            $options = [
                'files' => [$fileObj],
                'sizes' => [],
                'catalog' => 'design',
                'isWebp' => true,
                'quality' => 75,
            ];

        }

        return create_sized_images($options);
    }
}
