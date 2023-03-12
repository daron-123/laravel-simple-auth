<?php
namespace Ylamalem\LaravelSimpleAuth;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class YAuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Route::name('')->group(function (){
            $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        });
        $this->publishes([
            __DIR__.'/../views/' => resource_path('views/') ,
            __DIR__.'/Controllers/' => app_path('Http/Controllers/')
        ], 'YAuth');
    }
}
