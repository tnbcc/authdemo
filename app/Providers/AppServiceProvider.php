<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Collection;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Collection::macro('toConcatenatedString', function ($fields = [], $separator = ' ') {
            return $this->map(function($item) use ($fields, $separator) {
                return implode($separator, array_map(function ($el) use ($item) {
                        return $item[$el];
                    }, $fields)
                );
            })->implode("\n");
        });
        Collection::macro('whereRegex', function($expression, $field) {
            return $this->map(function ($item) use ($expression, $field) {
                return preg_match($expression, $item[$field]);
            });
});

    }
}
