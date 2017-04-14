<?php namespace Maxlab\VueElement;

use Illuminate\Support\ServiceProvider;

class VueSemanticUiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../src/resources/assets' => resource_path('/assets'),
            __DIR__.'/../src/resources/views' => resource_path('/views'),
            __DIR__.'/../package.json' => base_path('/package.json'),
            __DIR__.'/../package.json' => base_path('/gulpfile.js'),
            __DIR__.'/../webpack.mix.js' => base_path('/webpack.mix.js'),
        ], 'laravel-vue-semantic-ui');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
