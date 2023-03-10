<?php

namespace App\Utils;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class Image_upload
{
    public static function image_upload($request, $height = null, $width = null ,$path = null )
    {

        $image_name = Str::uuid() . date('Y-m-d H:i:s') . '.' . $request->extension();


        [$heightDefault, $widthDefault] = getimagesize($request);
        $width = $width ?? $widthDefault;
        $height = $height ?? $heightDefault;

        $icon = Image::make($request->path());
        $icon->fit($width , $height , function ($constraint) {
            $constraint->upsize();
        })->stream();
        Storage::disk('public')->put($path ,$image_name, $icon);

//        $setting->update(['icon' => 'public/' . $image_name]);

   return 'public/'.$path.$image_name ;
    }
}
