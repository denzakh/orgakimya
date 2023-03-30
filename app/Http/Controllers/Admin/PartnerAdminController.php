<?php

namespace App\Http\Controllers\Admin;

use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerAdminController extends Controller
{
    public function index()
    {
        return view('admin.partners.index', ['partners' => Partner::all()]);
    }

    public function show(string $id)
    {
        return view('admin.partners.show', ['partner' => Partner::findOrFail($id)]);
    }

    public function create()
    {
        return view('admin.partners.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title_en' => 'required',
        ]);

        $data = $this->getAllData($request);

        Partner::create($data);

        return redirect()->route('partners.index')->with('success', 'partners created successfully.');
    }

    public function edit(string $id)
    {
        return view('admin.partners.edit', ['partner' => Partner::findOrFail($id)]);
    }

    public function update(Request $request, Partner $partner)
    {
        $request->validate([
            'title_en' => 'required',
        ]);

        $data = $this->getAllData($request);

        $partner->update($data);

        return redirect()->route('partners.index')->with('success', 'partners updated successfully');
    }

    public function destroy(Partner $partner)
    {
        $partner->delete();

        return redirect()->route('partners.index')
            ->with('success', 'partners deleted successfully');
    }

    private function getAllData(Request $request) {

        $data = $request->all();

        if($data['file-img']) {
            $fileObj = $data['file-img'];

            $options = [
                'files' => [$fileObj],
                'sizes' => [
                    'normal' => 1200,
                    'thumbnail' => 640,
                ],
                'catalog' => 'partners',
                'isWebp' => true,
                'quality' => 75, 
            ];

            $result = [];

            if (function_exists('create_sized_images')) {
                $result = create_sized_images($options);
                $data['img'] = $result[0]['title'];               
            }
        }

        return $data;
    }
}
