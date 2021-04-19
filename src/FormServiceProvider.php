<?php


namespace Saimondev03;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class FormServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/form.php', 'form');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'saimondev03-form');

        Blade::component('Saimondev03\Form','form');
        Blade::component('Saimondev03\Field', 'field');
    }

}