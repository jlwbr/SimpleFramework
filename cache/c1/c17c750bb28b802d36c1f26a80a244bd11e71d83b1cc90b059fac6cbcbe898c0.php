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

/* layout.html */
class __TwigTemplate_a09d783e3e4fee38133f387c914a347986a97883ae6c23fade75825e99a8b66e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"en\">

<head>
\t";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 51
        echo "</head>

<body>
\t<nav class=\"navbar navbar-expand-md navbar-dark bg-dark fixed-top\">
\t\t<a class=\"navbar-brand\" href=\"#\"><?= \$v(\$title) ?></a>
\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\"
\t\t\taria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>

\t\t<div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">
\t\t\t";
        // line 62
        echo twig_include($this->env, $context, "navbar.html");
        echo "
\t\t\t<form class=\"form-inline my-2 my-lg-0\" action=\"/home/search/\" method=\"post\">
\t\t\t\t<input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Zoek\" name=\"search\" aria-label=\"Search\">
\t\t\t\t<button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Zoek</button>
\t\t\t</form>
\t\t</div>
\t</nav>

\t<main role=\"main\" class=\"container\">
\t\t<div style=\"padding-top: 70px;\">
\t\t\t<!-- <?php if (isset(\$alert)) : ?>
\t\t\t\t<div class=\"alert alert-<?= \$v(\$alert[\"type\"]) ?>\" role=\"alert\">
\t\t\t\t<?= \$v(\$alert[\"msg\"]) ?>
\t\t\t\t</div>
\t\t\t<?php endif ?> -->
\t\t\t";
        // line 77
        $this->displayBlock('content', $context, $blocks);
        // line 78
        echo "\t\t</div>
\t</main><!-- /.container -->
\t<script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\"
\t\tintegrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\"
\t\tcrossorigin=\"anonymous\"></script>
\t<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\"
\t\tintegrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\"
\t\tcrossorigin=\"anonymous\"></script>
\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\"
\t\tintegrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\"
\t\tcrossorigin=\"anonymous\"></script>

\t";
        // line 90
        $this->displayBlock('scripts', $context, $blocks);
        // line 91
        echo "</body>

</html>";
    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t<title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

\t<link rel=\"canonical\" href=\"https://getbootstrap.com/docs/4.4/examples/starter-template/\">

\t<!-- Bootstrap core CSS -->
\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\"
\t\tintegrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">

\t<meta name=\"theme-color\" content=\"#563d7c\">


\t<style>
\t\t.bd-placeholder-img {
\t\t\tfont-size: 1.125rem;
\t\t\ttext-anchor: middle;
\t\t\t-webkit-user-select: none;
\t\t\t-moz-user-select: none;
\t\t\t-ms-user-select: none;
\t\t\tuser-select: none;
\t\t}

\t\t@media (min-width: 768px) {
\t\t\t.bd-placeholder-img-lg {
\t\t\t\tfont-size: 3.5rem;
\t\t\t}
\t\t}

\t\tbody {
\t\t\tbackground-color: whitesmoke;
\t\t}

\t\ta.reset-style {
\t\t\tcolor: #000000 !important;
\t\t\ttext-decoration: none;

\t\t}

\t\t.star-rating .fa-star {
\t\t\tcolor: orange;
\t\t}
\t</style>
\t";
    }

    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 77
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 90
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 90,  164 => 77,  112 => 8,  108 => 6,  104 => 5,  98 => 91,  96 => 90,  82 => 78,  80 => 77,  62 => 62,  49 => 51,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout.html", "/var/www/html/website/php/src/views/layout.html");
    }
}
