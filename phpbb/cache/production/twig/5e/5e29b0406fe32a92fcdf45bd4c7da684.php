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

/* acp_demo_body.html */
class __TwigTemplate_8550393ad67c73f62cb7072e586a8373 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "acp_demo_body.html", 1)->display($context);
        // line 2
        echo "
<h1>";
        // line 3
        echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_DEMO_TITLE");
        echo "</h1>

";
        // line 5
        if (($context["S_ERROR"] ?? null)) {
            // line 6
            echo "\t<div class=\"errorbox\">
\t\t<h3>";
            // line 7
            echo $this->extensions['phpbb\template\twig\extension']->lang("WARNING");
            echo "</h3>
\t\t<p>";
            // line 8
            echo ($context["ERROR_MSG"] ?? null);
            echo "</p>
\t</div>
";
        }
        // line 11
        echo "
<form id=\"acme_demo_acp\" name=\"acme_demo_acp\" method=\"post\" action=\"";
        // line 12
        echo ($context["U_ACTION"] ?? null);
        echo "\">

\t<fieldset>
\t\t<legend>";
        // line 15
        echo $this->extensions['phpbb\template\twig\extension']->lang("SETTINGS");
        echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"acme_demo_goodbye\">";
        // line 17
        echo ($this->extensions['phpbb\template\twig\extension']->lang("ACP_DEMO_GOODBYE") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
        echo "</label></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"acme_demo_goodbye\" value=\"1\"";
        // line 18
        if (($context["ACME_DEMO_GOODBYE"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
        echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"acme_demo_goodbye\" value=\"0\"";
        // line 19
        if ( !($context["ACME_DEMO_GOODBYE"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
        echo "</label></dd>
\t\t</dl>
\t</fieldset>

\t<fieldset class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
        // line 24
        echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
        echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"submit\" id=\"preview\" name=\"preview\" value=\"";
        // line 25
        echo $this->extensions['phpbb\template\twig\extension']->lang("PREVIEW");
        echo "\" />
\t\t";
        // line 26
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
\t</fieldset>

</form>

";
        // line 31
        $this->loadTemplate("overall_footer.html", "acp_demo_body.html", 31)->display($context);
    }

    public function getTemplateName()
    {
        return "acp_demo_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 31,  108 => 26,  104 => 25,  100 => 24,  88 => 19,  80 => 18,  76 => 17,  71 => 15,  65 => 12,  62 => 11,  56 => 8,  52 => 7,  49 => 6,  47 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "acp_demo_body.html", "");
    }
}
