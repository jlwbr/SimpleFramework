<?php
namespace Framework\Controllers;

abstract class Base {
    protected $templates;

    public function __construct() {
        $loader = new \Twig\Loader\FilesystemLoader(TEMPLATE_ROOT);
        
        $this->templates = new \Twig\Environment($loader, [
            'cache' => TEMPLATE_CACHE,
            'debug' => DEBUG
        ]);
    }

    protected function renderView(string $viewname, array $variables=[])
    {
        return $this->templates->render($viewname.".html",$variables);
    }
}