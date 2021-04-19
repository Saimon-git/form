<?php


namespace Tests;


class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return ['Saimondev03\FormServiceProvider'];
    }
    protected function assertTemplateRenders($expectedHtml, $actualTemplate)
    {
        $this->makeTemplate($actualTemplate)
            ->assertRender($expectedHtml);
    }

    protected function makeTemplate($actualTemplate): Template
    {
        return $this->app[Template::class]->setContent($actualTemplate);
    }
}