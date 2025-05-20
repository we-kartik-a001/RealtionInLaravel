<?php

namespace App\Providers;

use App\Models\InstaPost;
use App\Models\InstaUser;
use App\Observers\InstaPostObserver;
use App\Observers\InstaUserObserver;
use Illuminate\Support\ServiceProvider;

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
        InstaUser::observe(InstaUserObserver::class);
        InstaPost::observe(InstaPostObserver::class);
    }
}
