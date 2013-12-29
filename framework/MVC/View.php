<?php

namespace T4\MVC;


class View
{

    protected $paths = [];
    protected $twig;

    public function __construct($paths = [])
    {
        $this->paths = (array)$paths;
        $loader = new \Twig_Loader_Filesystem($paths);
        $this->twig = new \Twig_Environment($loader);
    }

    public function render($template, $data = [])
    {
        return $this->twig->render($template, $data->toArray());
    }

}