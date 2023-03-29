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
        $originalExtension = '.'.$fileObj->getClientOriginalExtension(); //
        $newFilename =  time(); //.$filename;

        

		
        //Сохраняем оригинальную картинку
        $fileObj->move(Storage::path('/public/images/').'origin/',$newFilename.$originalExtension);


		//Создаем обычный вариант
        $img = Image::make(Storage::path('/public/images/').'origin/'.$newFilename.$originalExtension);
        $img->fit(1200, 1200); // обрезаем до
		$img->save(Storage::path('/public/images/').'normal/'.$newFilename.$originalExtension, 75);         

        // webp
        $imgWebp = $img->encode('webp', 75);  // 75 is image quality and its value can be 1 to 100
		$imgWebp->save(Storage::path('/public/images/').'normal/'.$newFilename.'.webp'); // 75 is the image quality


        //Создаем миниатюру изображения и сохраняем ее
        $thumbnail = Image::make(Storage::path('/public/images/').'origin/'.$newFilename.$originalExtension);
        $thumbnail->fit(640, 640);
        $thumbnail->save(Storage::path('/public/images/').'thumbnail/'.$newFilename.$originalExtension, 75);// 75 is the image quality

        // webp
        $thumbnailWebp = $img->encode('webp', 75);  // 75 is image quality and its value can be 1 to 100
		$thumbnailWebp->save(Storage::path('/public/images/').'thumbnail/'.$newFilename.'.webp'); // 75 is the image quality

        // $save = new Photo;
 
        // $save->name = $filename;
        // $save->path = $path;
 
        // $save->save();
 
        return redirect('admin/upload-image')->with('status', 'Изображение было загружено');
 
    }
}