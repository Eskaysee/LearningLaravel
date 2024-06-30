<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
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
        //self-explanatory
//        Model::preventLazyLoading();

//        If you dont want to use Tailwind css
//        Paginator::useBootstrapFive();

//        Gate::define('edit-job', function (User $user, $job) {
//            return $job->employer->user->is($user);
//        });
    }
}
