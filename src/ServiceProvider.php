<?php
/**
 * Created by PhpStorm.
 * User: shiwuhao
 * Date: 2018/9/29
 * Time: 下午4:35
 */

namespace Shiwuhao\Weather;


class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    protected $defer = true;

    public function register()
    {
        $this->app->singleton(Weather::class, function () {
            return new Weather(config('services.weather.key'));
        });

        $this->app->alias(Weather::class, 'weather');
    }

    public function provides()
    {
        return [
            Weather::class, 'weather'
        ];
    }
}