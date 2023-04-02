<?php

if (! function_exists('create_sized_images')) {
    function create_sized_images($outOptions)
    {
        $defaultOptions = [
            'files' => [],
            'sizes' => [
                // 'normal' => 1200,
                // 'thumbnail' => 640,
            ],
            'catalog' => 'shared',
            'isWebp' => true,
            'quality' => 75, // 75 is image quality and its value can be 1 to 100
        ];

        $options = array_merge($defaultOptions, $outOptions);

        $publicPath = Storage::path('/public/images/'.$options['catalog'].'/');
        $urlPath = '/storage/images/'.$options['catalog'].'/';
        $quality = $options['quality'];
        $isWebp = $options['isWebp'];
        $result = [];

        if ($options['files']) {
            foreach ($options['files'] as $fileObj) {
                $originalExtension = $fileObj->getClientOriginalExtension();
                $originalNameWithExe = $fileObj->getClientOriginalName();
                $originalName = explode( '.'.$originalExtension, $originalNameWithExe )[0];

                
                $newFilename = time();

                $resultFile = [
                    'title' => $newFilename,
                    'ext' => $originalExtension,
                    'original' => $urlPath.'original/'.$newFilename.'.'.$originalExtension,
                ];

                if ($options['sizes']) {
                    //Сохраняем оригинальную картинку
                    $fileObj->move($publicPath.'origin/', $newFilename.'.'.$originalExtension);

                    foreach ($options['sizes'] as $sizeKey => $sizeValue) {
                        //Создаем обычный вариант
                        $img = Image::make($publicPath.'origin/'.$newFilename.'.'.$originalExtension);
                        $absPathToSizeFile = $publicPath.$sizeKey.'/'.$newFilename.'.'.$originalExtension;
                        $img->fit($sizeValue, $sizeValue); // обрезаем до
                        $img->save($absPathToSizeFile, $quality);
                        $resultFile[$sizeKey] = [$urlPath.$sizeKey.'/'.$newFilename.'.'.$originalExtension];

                        // webp
                        if ($isWebp) {
                            $imgWebp = $img->encode('webp', $quality);
                            $absPathToSizeFileWebp = $publicPath.$sizeKey.'/'.$newFilename.'.webp';
                            $imgWebp->save($absPathToSizeFileWebp);
                            array_push($resultFile[$sizeKey], $urlPath.$sizeKey.'/'.$newFilename.'.webp');
                        }
                    }
                } else {

                    //Сохраняем оригинальную картинку c сжатием
                    $img = Image::make($fileObj);
                    $absPathToSizeFile = $publicPath.'/'.$originalName.'.'.$originalExtension;
                    $img->save($absPathToSizeFile, $quality);
                    $resultFile['original'] = [$urlPath.'/'.$originalName.'.'.$originalExtension];
                    
                    // webp
                    if ($isWebp) {
                        $imgWebp = $img->encode('webp', $quality);
                        $absPathToSizeFileWebp = $publicPath.'/'.$originalName.'.webp';
                        $imgWebp->save($absPathToSizeFileWebp);
                        array_push($resultFile['original'], $urlPath.'/'.$originalName.'.webp');
                    }                  
                }

                array_push($result, $resultFile);
            }
        }

        return $result;
    }
}

if (! function_exists('get_picture_th')) {
    function get_picture_th($cat, $img, $exe = 'jpg')
    {
        $path = '/storage/images/'.$cat;

        $str = '<picture>';
        $str .= '<source type="image/webp" srcset="'.$path.$img.'.webp">';
        $str .= '<img src="'.$path.$img.'.'.$exe.'" alt="">';
        $str .= '</picture>';

        return $str;
    }
}

if (! function_exists('save_doc_helper')) {
    function save_doc_helper($outOptions)
    {
        $defaultOptions = [
            'files' => [],
            'catalog' => 'shared',
        ];

        $options = array_merge($defaultOptions, $outOptions);

        $publicPath = Storage::path('/public/docs/'.$options['catalog'].'/');
        $urlPath = '/storage/docs/'.$options['catalog'].'/';
        $result = [];

        if ($options['files']) {
            foreach ($options['files'] as $fileObj) {
                $originalExtension = $fileObj->getClientOriginalExtension();
                $newFilename = time();

                //Сохраняем оригинальную картинку
                $fileObj->move($publicPath, $newFilename.'.'.$originalExtension);

                $resultFile = [
                    'title' => $newFilename,
                    'ext' => $originalExtension,
                    'url' => $urlPath.'original/'.$newFilename.'.'.$originalExtension,
                ];

                array_push($result, $resultFile);
            }
        }

        return $result;
    }
}
