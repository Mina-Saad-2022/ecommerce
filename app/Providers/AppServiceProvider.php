<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $setting = Setting::firstOr(function (){
            return setting::create([
                'title' => 'title',
                'description' => 'description',
                'icon' => 'icon',
                'address' => 'address',
                'phone' => 'phone',
                'whatsapp' => 'whatsapp',
                'facebook' => 'facebook',
                'linkedin' => 'linkedin',

            ]);

        });
//        dd($setting);
view()->share('setting',$setting);
    }
}
