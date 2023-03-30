<?php

if (!function_exists('create_sized_images')) {

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

        $publicPath = Storage::path('/public/images/' . $options['catalog'] . '/');
        $urlPath = '/storage/images/' . $options['catalog'] . '/';
        $quality = $options['quality'];
        $isWebp = $options['isWebp'];
        $result = [];


        if ($options['files']) {

            foreach ($options['files'] as $fileObj) {

                $originalExtension = $fileObj->getClientOriginalExtension();
                $newFilename =  time();

                //Сохраняем оригинальную картинку
                $fileObj->move($publicPath . 'origin/', $newFilename . '.' . $originalExtension);

                $resultFile = [
                    'title' => $newFilename,
                    'ext' => $originalExtension,
                    'original' => $urlPath . 'original/' . $newFilename . '.' . $originalExtension,
                ];

                if ($options['sizes']) {

                    foreach ($options['sizes'] as $sizeKey => $sizeValue) {

                        //Создаем обычный вариант
                        $img = Image::make($publicPath . 'origin/' . $newFilename . '.' . $originalExtension);
                        $absPathToSizeFile = $publicPath . $sizeKey . '/' . $newFilename . '.' . $originalExtension;
                        $img->fit($sizeValue, $sizeValue); // обрезаем до
                        $img->save($absPathToSizeFile, $quality);
                        $resultFile[$sizeKey] = [$urlPath . $sizeKey . '/' . $newFilename . '.' . $originalExtension];

                        // webp
                        if ($isWebp) {
                            $imgWebp = $img->encode('webp', $quality);
                            $absPathToSizeFileWebp = $publicPath . $sizeKey . '/' . $newFilename . '.webp';
                            $imgWebp->save($absPathToSizeFileWebp);
                            array_push($resultFile[$sizeKey], $urlPath . $sizeKey . '/' . $newFilename . '.webp');
                        }
                    }
                }

                array_push($result, $resultFile);
            }
        }

        return $result;
    }
}


if (!function_exists('get_picture_th')) {

    function get_picture_th($cat, $img)
    {
        $path = '/storage/images/' . $cat;

        $str =  '<picture>';
        $str .= '<source type="image/webp" srcset="' . $path . '/thumbnail/' . $img . '.webp">';
        $str .= '<img src="' . $path . '/thumbnail/' . $img . '.jpg" alt="">';
        $str .= '</picture>';

        return $str;
    }
}

if (!function_exists('save_doc_helper')) {

    function save_doc_helper($outOptions)
    {

        $defaultOptions = [
            'files' => [],
            'catalog' => 'shared',
        ];

        $options = array_merge($defaultOptions, $outOptions);

        $publicPath = Storage::path('/public/docs/' . $options['catalog'] . '/');
        $urlPath = '/storage/docs/' . $options['catalog'] . '/';
        $result = [];


        if ($options['files']) {

            foreach ($options['files'] as $fileObj) {

                $originalExtension = $fileObj->getClientOriginalExtension();
                $newFilename =  time();

                //Сохраняем оригинальную картинку
                $fileObj->move($publicPath, $newFilename . '.' . $originalExtension);

                $resultFile = [
                    'title' => $newFilename,
                    'ext' => $originalExtension,
                    'url' => $urlPath . 'original/' . $newFilename . '.' . $originalExtension,
                ];

                array_push($result, $resultFile);
            }
        }

        return $result;
    }
}
