<?php

namespace App\Providers;

use App\Models\Etudiant;
use App\Models\Parcoure;
use App\Observers\EtudiantObserver;
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
        //
        Etudiant::observe(EtudiantObserver::class);
        view()->composer('*',function($view) {
            $view->with('liste_parcoure', Parcoure::all());
        });
    }
}
