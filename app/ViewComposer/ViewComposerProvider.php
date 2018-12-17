<?php

namespace App\ViewComposer;


use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewComposerProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', 'App\ViewComposer\MainMenuComposer');
        View::composer('*', 'App\ViewComposer\CartComposer');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}