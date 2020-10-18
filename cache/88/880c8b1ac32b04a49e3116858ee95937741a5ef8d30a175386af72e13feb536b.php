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
class __TwigTemplate_1cc8b6ea567582d52a1e20ae8923f70aadc1cbdebb9eeecc2a80f0ac9ac10a84 extends Template
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
        <a class=\"nav-link\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["BASE_URL"] ?? null), "html", null, true);
        echo "\">Home</a>
      </li>
      <!-- <li class=\"nav-item\">1
        <a class=\"nav-link\" href=\"#\">Code</a>
      </li> -->
    </ul>";
    }

    public function getTemplateName()
    {
        return "navbar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"navbar-nav mr-auto\">
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ BASE_URL }}\">Home</a>
      </li>
      <!-- <li class=\"nav-item\">1
        <a class=\"nav-link\" href=\"#\">Code</a>
      </li> -->
    </ul>", "navbar.html", "/var/www/html/website/php/src/views/navbar.html");
    }
}
