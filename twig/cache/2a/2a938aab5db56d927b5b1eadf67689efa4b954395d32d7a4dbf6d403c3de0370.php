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

/* layout.tpl */
class __TwigTemplate_7fea7413cb26fa51f06dc3571c967524e45e093c6aa0d7ee7526a1fe09f747a1 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'styles' => [$this, 'block_styles'],
            'body' => [$this, 'block_body'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <title>Ajax page load</title>
        <link href=\"./../ajax_load_pages/style.css\" rel=\"stylesheet\" media=\"all\">
\t\t";
        // line 6
        $this->displayBlock('styles', $context, $blocks);
        // line 7
        echo "    </head>

    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "
        <script
                src=\"https://code.jquery.com/jquery-3.4.1.min.js\"
                integrity=\"sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=\"
                crossorigin=\"anonymous\">
        </script>
\t\t";
        // line 17
        $this->displayBlock('scripts', $context, $blocks);
        // line 18
        echo "    </body>
</html>";
    }

    // line 6
    public function block_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 17
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "layout.tpl";
    }

    public function getDebugInfo()
    {
        return array (  83 => 17,  77 => 10,  71 => 6,  66 => 18,  64 => 17,  56 => 11,  54 => 10,  49 => 7,  47 => 6,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout.tpl", "/home/blivemaster/data/live23/praktikum/twig/tpl/layout.tpl");
    }
}
