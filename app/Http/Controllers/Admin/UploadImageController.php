<?php
 
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Photo;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image; 
 
class UploadImageController extends Controller
{
    public function index()
    {
        return view('admin.image');
    }
 
    public function save(Request $request)
    {

        $data = $request->all();
        $fileObj = $data['image'];

        $options = [
    		'files' => [$fileObj],
    		'sizes' => [
    			'normal' => 1200,
    			'thumbnail' => 640,
    		],
    		'catalog' => 'shared',
    		'isWebp' => true,
    		'quality' => 75, 
    	];

    	$result = [];

    	if (function_exists('create_sized_images')) {
	    	$result = create_sized_images($options);
	    }

        return redirect('admin/upload-image')->with('status', 'Изображение было загружено');
    }
}