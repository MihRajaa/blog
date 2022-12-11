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

/* @acme_demo/event/overall_header_navigation_prepend.html */
class __TwigTemplate_b1830b60f3d9e5781604a4d1e8529f01 extends \Twig\Template
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
        echo "<li data-last-responsive=\"true\">
\t<a href=\"";
        // line 2
        echo ($context["U_DEMO_PAGE"] ?? null);
        echo "\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("DEMO_PAGE");
        echo "\" role=\"menuitem\">
\t\t<i class=\"icon fa-question-circle fa-fw\" aria-hidden=\"true\"></i><span>";
        // line 3
        echo $this->extensions['phpbb\template\twig\extension']->lang("DEMO_PAGE");
        echo "</span>
\t</a>
</li>
";
    }

    public function getTemplateName()
    {
        return "@acme_demo/event/overall_header_navigation_prepend.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@acme_demo/event/overall_header_navigation_prepend.html", "");
    }
}
