<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Setting;
use App\Models\Page;
use Illuminate\Support\Facades\View;

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
    public function boot(): void
    {
        $mdsettings = Setting::findOrFail(1)->toArray();
        View::share('mdsettings', $mdsettings);

        // $mdpages = Page::all()->toArray();        
        // View::share('mdpages', $mdpages);
    }
}
