<?php

namespace Saimondev03;

use Illuminate\View\Component;

class Field extends Component
{
    /**
     * @var string
     */
    public $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function render()
    {
        return view('saimondev03-form::field');
    }
}
