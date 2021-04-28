<?php

namespace Saimondev03;

use Illuminate\Config\Repository;
use Illuminate\View\Component;

class Field extends Component
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var true|mixed
     */
    public $label;

    /**
     * @var false|mixed
     */
    public $required;
    /**
     * @var Repository
     */
    private $config;

    public function __construct(Repository $config, string $name, $required = false, $label = true)
    {
        $this->name = $name;
        $this->required = $required;
        $this->label = $label;
        $this->config = $config;
    }

    public function highlightsRequired()
    {
        return $this->config->get('form.highlights_requirement') === 'required' && $this->required;
    }

    public function highlightsOptional()
    {
        return $this->config->get('form.highlights_requirement') === 'optional' && ! $this->required;
    }

    public function highlightsLabel()
    {
        return $this->label === true;
    }

    public function render()
    {
        return view('saimondev03-form::field');
    }
}
