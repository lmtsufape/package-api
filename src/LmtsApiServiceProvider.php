<?php

namespace Lmts\src;

use Illuminate\Support\ServiceProvider;
// use Lmts\src\controller\LmtsApiController;

class LmtsApiServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
      $this->app->make('Lmts\src\controller\LmtsApi');        
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
        __DIR__ . '/config' => config_path(),
        ]);
        // $api = new LmtsApiController();

        // $this->app->instance('api', $api);
    }
}
