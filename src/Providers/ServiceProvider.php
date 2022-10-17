<?php
 
namespace MarcellusKu283\LumenFormRequest;
 
use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

class ServiceProvider extends IlluminateServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(FormRequest::class, function ($app) {
            return new FormRequest();
        });
    }
}