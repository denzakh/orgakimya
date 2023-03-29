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

    	// Подготавливаем данные
        $data = $request->all();
        $fileObj = $data['image'];
        $filename    = $fileObj->getClientOriginalName(); //image_file is the name of the file field used in the form in blade
        $newFilename =  time(). '.' .$filename;
        $originalExtension = $fileObj->getClientOriginalExtension(); //

		
        //Сохраняем оригинальную картинку
        $data['image']->move(Storage::path('/public/images/').'origin/',$newFilename);

        $img = Image::make(Storage::path('/public/images/').'origin/'.$newFilename);
		$img->save(Storage::path('/public/images/').'normal/'.$newFilename, 75); 


        //Создаем миниатюру изображения и сохраняем ее
        $thumbnail = Image::make(Storage::path('/public/images/').'origin/'.$newFilename);
        $thumbnail->fit(300, 300);
        $thumbnail->save(Storage::path('/public/images/').'thumbnail/'.$newFilename, 75);// 75 is the image quality








        // $save = new Photo;
 
        // $save->name = $filename;
        // $save->path = $path;
 
        // $save->save();
 
        return redirect('admin/upload-image')->with('status', 'Изображение было загружено');
 
    }
}