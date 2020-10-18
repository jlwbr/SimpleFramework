<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* navbar.html */
class __TwigTemplate_0bfd3b7f953a9b8277a621c4bdd35d6a4d2626d06aa75ed944db0d34b62ee15d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<ul class=\"navbar-nav mr-auto\">
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"<?=BASE_URL ?>\">Home</a>
      </li>
      <!-- <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#\">Code</a>
      </li> -->
    </ul>";
    }

    public function getTemplateName()
    {
        return "navbar.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "navbar.html", "/var/www/html/website/php/src/views/navbar.html");
    }
}
