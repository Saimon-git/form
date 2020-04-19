<?php


namespace Saimondev03;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class FormServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'saimondev03-form');

        Blade::component(Form::class,'form');
    }

}