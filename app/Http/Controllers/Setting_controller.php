<?php

namespace App\Http\Controllers;

use App\Http\Requests\Dshboard\SettingUpdateRequest;
use App\Models\Setting;
use Illuminate\Http\Request;

class Setting_controller extends Controller
{
    public function update(SettingUpdateRequest $request ,Setting $setting)
    {
        $setting->update($request->validated());
        return to_route('dashboard.setting')->with('success','Added successfully');
    }
}
