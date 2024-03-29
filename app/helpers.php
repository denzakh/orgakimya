<?php



if (!function_exists('create_sized_images')) {
    function create_sized_images($outOptions)
    {
        $dr = $_SERVER['DOCUMENT_ROOT'];

        $defaultOptions = [
            'files' => [],
            'sizes' => [
                // 'normal' => 1200,
                // 'thumbnail' => 640,
            ],
            'crops' => [
                //'mob' => [640,200],
            ],
            'catalog' => 'shared',
            'isWebp' => true,
            'quality' => 75, // 75 is image quality and its value can be 1 to 100
            'isNewFileName' => true,
            'cutMethod' => 'size',
        ];

        $options = array_merge($defaultOptions, $outOptions);

        // var_dump($options);
        // die();

        $relativePath = '/images/' . $options['catalog'] . '/';
        $publicPath = Storage::path('/public/images/' . $options['catalog'] . '/');
        $urlPath = '/storage/images/' . $options['catalog'] . '/';
        $quality = $options['quality'];
        $isWebp = $options['isWebp'];
        $result = [];

        if ($options['files']) {
            foreach ($options['files'] as $fileObj) {

                $originalExtension = $fileObj->getClientOriginalExtension();
                $originalNameWithExe = $fileObj->getClientOriginalName();
                $originalName = explode('.' . $originalExtension, $originalNameWithExe)[0];
                $newFilename = time();
                $fileName = $originalName;

                if ($options['isNewFileName']) {
                    $fileName = $fileName;
                }

                $resultFile = [
                    'title' => $fileName,
                    'ext' => $originalExtension,
                    'original' => $urlPath . 'original/' . $fileName . '.' . $originalExtension,
                ];

                // создаем корневую папку, если ее не было
                if (!Storage::disk('public')->has($relativePath)) {
                    Storage::disk('public')->makeDirectory($relativePath);
                }

                //Сохраняем оригинальную картинку c сжатием
                $img = Image::make($fileObj);
                $absPathToSizeFile = $publicPath . '/' . $fileName . '.' . $originalExtension;
                $img->save($absPathToSizeFile, $quality);
                $resultFile['original'] = [$urlPath . '/' . $fileName . '.' . $originalExtension];

                // webp
                if ($isWebp) {
                    $imgWebp = $img->encode('webp', $quality);
                    $absPathToSizeFileWebp = $publicPath . '/' . $fileName . '.webp';
                    $imgWebp->save($absPathToSizeFileWebp);
                    array_push($resultFile['original'], $urlPath . '/' . $fileName . '.webp');
                }


                if ($options['sizes']) {
                    foreach ($options['sizes'] as $sizeKey => $sizeValue) {

                        $img = Image::make($fileObj);
                        $publicPathSizedFolder = $publicPath . $sizeKey;
                        $relativePathSizedFolder = $relativePath . $sizeKey;

                        if (!Storage::disk('public')->has($relativePathSizedFolder)) {
                            Storage::disk('public')->makeDirectory($relativePathSizedFolder);
                        }

                        // родное расширение
                        $absPathToSizeFile = $publicPathSizedFolder . '/' . $fileName . '.' . $originalExtension;
                        $img->widen($sizeValue); // пережимаем до
                        $img->save($absPathToSizeFile, $quality);
                        $resultFile[$sizeKey] = [$urlPath . $sizeKey . '/' . $fileName . '.' . $originalExtension];

                        // webp
                        if ($isWebp) {
                            $imgWebp = $img->encode('webp', $quality);
                            $absPathToSizeFileWebp = $publicPathSizedFolder . '/' . $fileName . '.webp';
                            $imgWebp->save($absPathToSizeFileWebp);
                            array_push($resultFile[$sizeKey], $urlPath . $sizeKey . '/' . $fileName . '.webp');
                        }
                    }
                }

                if ($options['crops']) {
                    foreach ($options['crops'] as $cropKey => $cropValue) {

                        $img = Image::make($fileObj);
                        $originalHeight = $img->height();
                        $cropWidth = $cropValue[0];
                        $cropHeight = $cropValue[1] ?? $originalHeight;

                        $publicPathCropFolder = $publicPath . $cropKey;
                        $relativePathCropFolder = $relativePath . $cropKey;

                        if (!Storage::disk('public')->has($relativePathCropFolder)) {
                            Storage::disk('public')->makeDirectory($relativePathCropFolder);
                        }

                        // родное расширение
                        $absPathToSizeFile = $publicPathCropFolder . '/' . $fileName . '.' . $originalExtension;
                        $img->crop($cropWidth, $cropHeight); // обрезаем до
                        $img->save($absPathToSizeFile, $quality);
                        $resultFile[$cropKey] = [$urlPath . $cropKey . '/' . $fileName . '.' . $originalExtension];

                        // webp
                        if ($isWebp) {
                            $imgWebp = $img->encode('webp', $quality);
                            $absPathToSizeFileWebp = $publicPathCropFolder . '/' . $fileName . '.webp';
                            $imgWebp->save($absPathToSizeFileWebp);
                            array_push($resultFile[$cropKey], $urlPath . $cropKey . '/' . $fileName . '.webp');
                        }
                    }
                }

                array_push($result, $resultFile);
            }
        }

        return $result;
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
                $newFilename = time();

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


if (!function_exists('get_picture_th')) {
    function get_picture_th($outOptions)
    {

        $defaultOptions = [
            'catalog' => 'design',
            'img' => '',
            'ext' => 'jpg',
            'isLazy' => true,
            'alt' => '',
            'width' => '',
            'height' => '',
        ];

        $options = array_merge($defaultOptions, $outOptions);

        $catalogPath = '/storage/images/' . $options['catalog'] . '/';
        $lazy = $options['isLazy'] ? ' loading="lazy" ' : '';
        $img = $options['img'];
        $ext = $options['ext'];
        $width = $options['width'] ? ' width="' . $options['width'] . '" ' : '';
        $height = $options['height'] ? ' height="' . $options['height'] . '" ' : '';

        $str = '<picture>';
        $str .= '<source type="image/webp" srcset="' . $catalogPath . $img . '.webp">';
        $str .= '<img src="' . $catalogPath . $img . '.' . $ext . '" ' . $lazy . $width . $height . ' alt="' . $options['alt'] . '">';
        $str .= '</picture>';

        return $str;
    }
}

if (!function_exists('get_picture_ad')) {
    function get_picture_ad($outOptions)
    {
        $defaultOptions = [
            'catalog' => 'design',
            'img' => '',
            'sizes' => [],
            'ext' => 'jpg',
            'isLazy' => true,
            'alt' => ''
        ];

        $options = array_merge($defaultOptions, $outOptions);

        $catalogPath = '/storage/images/' . $options['catalog'] . '/';
        $lazy = $options['isLazy'] ? ' loading="lazy" ' : '';
        $img = $options['img'];
        $ext = $options['ext'];

        $str = '<picture>';

        if ($options['sizes']) {
            foreach ($options['sizes'] as $sizeKey => $sizeValue) {
                $path = $catalogPath . $sizeKey . '/';
                $str .= '<source type="image/webp" srcset="' . $path . $img . '.webp" media="(min-width: ' . $sizeValue . 'px)">';
                $str .= '<source srcset="' . $path . $img . '.' . $ext . '" media="(min-width: ' . $sizeValue . 'px)">';
            }
            $str .= '<!-- -->';
            $str .= '<source type="image/webp" srcset="' . $path . $img . '.webp">';
            $str .= '<img src="' . $catalogPath . $img . '.' . $ext . '" ' . $lazy . ' alt="' . $options['alt'] . '">';
        } else {
            $str .= '<source type="image/webp" srcset="' . $path . $img . '.webp">';
            $str .= '<img src="' . $catalogPath . $img . '.' . $ext . '" ' . $lazy . ' alt="' . $options['alt'] . '">';
        }

        $str .= '</picture>';

        return $str;
    }
}

if (!function_exists('get_seo')) {
    function get_seo($pageId)
    {
        $page = App\Models\Page::findOrFail($pageId)->toArray();
        $ln = LaravelLocalization::getCurrentLocale();
        $titleKey = 'title_' . $ln;
        $descriptionKey = 'description_' . $ln;

        return [
            'title' => $page[$titleKey],
            'description' => $page[$descriptionKey],
        ];
    }
}
