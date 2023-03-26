<?php

namespace App\Providers;

use App\Models\Contacts;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Social Media
        $socialMedia = Contacts::select('social')->first();
        View::share('socialMedia', $socialMedia);
    }
}
