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

/* @phpbb_skeleton/event/overall_header_navigation_prepend.html */
class __TwigTemplate_89f5eca563799d2339a9c4886b83e2d3 extends \Twig\Template
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
        echo "<li class=\"no-bulletin\">
\t<a href=\"";
        // line 2
        echo ($context["U_PHPBB_SKELETON_EXT"] ?? null);
        echo "\">
\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"300\" height=\"300\" viewBox=\"0 0 300 300\" style=\"position: relative; top: 2px; width: 14px; height: 14px; padding: 0 2px; fill: currentColor;\">
\t\t\t<path d=\"M63.946 118.649c5.727 0 11.353-.897 16.773-2.625l32.214 32.192 35.279-35.272-32.199-32.227c6.207-19.396 1.107-40.888-13.359-55.349C92.356 15.067 78.647 9.396 64.091 9.396a55.153 55.153 0 0 0-23.605 5.332 3.75 3.75 0 0 0-2.084 2.755 3.783 3.783 0 0 0 1.045 3.291l33.894 33.902a13.124 13.124 0 0 1 3.881 9.339c0 3.531-1.382 6.843-3.881 9.342-4.979 4.994-13.684 4.994-18.672-.013L20.763 39.451a3.778 3.778 0 0 0-3.287-1.048 3.745 3.745 0 0 0-2.755 2.084c-9.958 20.868-5.69 45.858 10.641 62.177 10.304 10.304 24.006 15.985 38.584 15.985zM236.074 181.348a55.09 55.09 0 0 0-16.798 2.635l-35.631-35.634-35.303 35.297 35.641 35.64c-6.194 19.39-1.098 40.876 13.359 55.346 10.301 10.301 24.01 15.973 38.565 15.973a55.17 55.17 0 0 0 23.608-5.335 3.748 3.748 0 0 0 2.084-2.755 3.764 3.764 0 0 0-1.045-3.291l-33.893-33.909a13.116 13.116 0 0 1-3.878-9.327c0-3.528 1.379-6.84 3.884-9.342 4.995-4.998 13.681-4.995 18.666.003l33.899 33.893a3.766 3.766 0 0 0 3.291 1.048 3.756 3.756 0 0 0 2.755-2.084c9.958-20.865 5.693-45.852-10.638-62.174-10.301-10.303-24-15.984-38.566-15.984z\"/><path d=\"M221.571 100.988s5.897 5.165 10.759 2.752c5.495-2.765 20.976 12.497 25.915 16.068.016.012.05.012.108.04l-2.7 2.712c-3.566 3.525-3.563 9.281-.009 12.812a9.08 9.08 0 0 0 12.831 0l21.378-21.35c3.532-3.55 3.535-9.296-.006-12.84-3.528-3.532-9.283-3.532-12.824.003l-3.56 3.557c-2.95-4.063-7.852-10.988-7.23-13.282 2.607-10.047-17.875-33.779-17.875-33.779C197.49 6.823 163.513 7.979 147.349 13.537c-6.488 2.232-5.285 3.646 1.454 4.833 49.04 8.56 55.123 37.48 46.81 48.638-3.197 4.308 1.466 9.509 1.466 9.509l1.753 1.741-82.803 82.788c1.123.677 2.214 1.447 3.176 2.412l13.929 13.916c.946.949 1.719 2.032 2.39 3.154l82.804-82.791 3.243 3.251zM113.632 169.025c-3.056-3.059-8.257-3.256-11.526-.417l-92.019 82.497c-3.284 2.836-3.467 7.663-.405 10.725l25.064 25.046c3.064 3.062 7.882 2.891 10.715-.375l82.522-92.046c2.823-3.266 2.644-8.449-.421-11.507l-13.93-13.923z\"/>
\t\t</svg>";
        // line 5
        echo $this->extensions['phpbb\template\twig\extension']->lang("PHPBB_SKELETON_EXT");
        echo "
\t</a>
</li>
";
    }

    public function getTemplateName()
    {
        return "@phpbb_skeleton/event/overall_header_navigation_prepend.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@phpbb_skeleton/event/overall_header_navigation_prepend.html", "");
    }
}
