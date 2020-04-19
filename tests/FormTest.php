<?php


namespace Tests;


use Saimondev03\Form;

class FormTest extends  TestCase
{
    /** @test */
    function render_a_form()
    {
        $form = new Form;

        $this->assertSame('<form></form>', trim($form->render()->toHtml()));
    }

    /** @test */
    function a_template_can_render_a_form_component()
    {
        $this->assertTemplateRenders(
            '<form></form>',
            '<x-form></x-form>'
        );
    }

    protected function assertTemplateRenders($expectedHtml, $actualTemplate)
    {
        file_put_contents(__DIR__.'/views/'.md5($actualTemplate).'.blade.php', $actualTemplate);

        $this->app->view->addNamespace('_test', __DIR__.'/views/');

        $this->assertSame(
            $expectedHtml,
            trim($this->app->view->make('_test::'.md5($actualTemplate))->toHtml())
        );
    }

}