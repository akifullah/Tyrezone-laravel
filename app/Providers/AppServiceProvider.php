<?php

namespace App\Providers;

use App\Models\logo;
use App\Models\Manufacturer;
use App\Models\Size;
use App\Models\SmtpSetting;
use App\Models\StripeSetting;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Stripe\Stripe;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    // public function boot(): void
    // {
    //     //
    // }

    public function boot()
    {
        $navManufactures = Manufacturer::with("products", "products.manufacturer")->limit(8)->get();

        // $navManufactures = Manufacturer::orderBy("created_at", "DESC")->limit(8)->get();
        View::share('navManufactures', $navManufactures);
        
        
        $logo = logo::first();
        View::share('logo', $logo);




        
        
    }
}
