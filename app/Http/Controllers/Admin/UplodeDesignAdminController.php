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

        if (isset($data['file-img-orig']) && $data['file-img-orig']) {
            $fileObj = $data['file-img-orig'];

            $options = [
                'files' => [$fileObj],
                'sizes' => [],
                'catalog' => 'design',
                'isWebp' => true,
                'quality' => 75,
            ];

            create_sized_images($options);
        }

        if (isset($data['file-img-sized']) && $data['file-img-sized']) {
            $fileObj = $data['file-img-sized'];

            $options = [
                'files' => [$fileObj],
                'sizes' => [
                    'wide-sz' => 1920,    
                    'desktop-sz' => 1280,   
                    'tab-sz' => 1100,                                                     
                    'mob-sz' => 640,
                ],
                'catalog' => 'design',
                'isWebp' => true,
                'quality' => 75,
            ];

            create_sized_images($options);
        }

        if (isset($data['file-img-croped']) && $data['file-img-croped']) {
            $fileObj = $data['file-img-croped'];

            $options = [
                'files' => [$fileObj],
                'crops' => [
                    'wide-cr' => [1920],  
                    'desktop-cr' => [1280],   
                    'tab-cr' => [1100],                                                       
                    'mob-cr' => [640],
                ],
                'catalog' => 'design',
                'isWebp' => true,
                'quality' => 75,
            ];

            create_sized_images($options);
        }

        return 1;
    }
}
