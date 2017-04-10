<?php namespace Zelf\Bow\Templates;

use Illuminate\View\View;

abstract class AbstractTemplate
{
    protected $view;

    abstract public function prepare(View $view, array $parameters);

    /**
     * @return mixed
     */
    public function getView()
    {
        return $this->view;
    }
}
