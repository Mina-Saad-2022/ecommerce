<?php

namespace App\Http\Controllers;

use App\Http\Requests\Dshboard\SettingUpdateRequest;
use App\Models\Setting;
use App\Utils\Image_upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class Setting_controller extends Controller

{
    public function update(SettingUpdateRequest $request, Setting $setting)
    {
    $setting->update($request->validated());
        if ($request->has('icon')) {
            $image = Image_upload::image_upload($request->icon, 100, 200,'image.');
            $setting->update(['icon' =>  $image]);
        }

        return to_route('dashboard.setting')->with('success', 'Added successfully');

    }
}
