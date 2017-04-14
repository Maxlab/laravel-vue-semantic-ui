<?php namespace Maxlab\VueSemanticUi;

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
            __DIR__.'/../semantic.json' => base_path('/semantic.json'),
            __DIR__.'/../gulpfile.js' => base_path('/gulpfile.js'),
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
