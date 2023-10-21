<?php

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

function uploadImage($image, $path, $old_path = null)
{
    if ($image) {
//        dd(file_exists($old_path));
        if (file_exists($old_path)) {
            unlink(public_path($old_path));
        }

        $image_name = date('YmdHis') . '.' . $image->extension();
        $url = $path . $image_name;
        if (File::isDirectory(public_path($path))) {
            File::makeDirectory(public_path($path), 0777, true, true);
        }

        Image::make($image)->save(public_path($path) . $image_name);

        return $url;
    }
}
