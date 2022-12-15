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

/* sociallogin_ucp_social_link.html */
class __TwigTemplate_bf31379d3de72fe390fc0d6f8064b77b extends \Twig\Template
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
        $location = "ucp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_header.html", "sociallogin_ucp_social_link.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "<h2>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_LINK");
        echo "</h2>

<div class=\"panel\">
\t<div class=\"inner\">
\t\t<p>";
        // line 6
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_LINK_DESC1");
        echo "<br />";
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_LINK_DESC2");
        echo "</p>
\t\t<p class=\"error\">";
        // line 7
        echo ($context["OA_SOCIAL_LINK_ERROR"] ?? null);
        echo "</p>
\t\t<p><strong>";
        // line 8
        echo ($context["OA_SOCIAL_LINK_SUCCESS"] ?? null);
        echo "</strong></p>
\t\t<dl>
\t\t\t<dt>
\t\t\t\t<label>";
        // line 11
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_LINK_NETWORKS");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br>
\t\t\t\t<span>";
        // line 12
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_LINK_ACTION");
        echo "</span><br /><br />
\t\t\t</dt>
\t\t</dl>
\t\t<dl>
\t\t\t<dt>
\t\t\t\t<div class=\"oneall_social_login\" id=\"oneall_social_login_link_profile\"></div>
\t\t\t</dt>
\t\t</dl>
\t</div>
</div>

<!-- OneAll Social Login : http://www.oneall.com //-->
<script type=\"text/javascript\">
\t// <![CDATA[\t\t\t\t\t            
\t\tvar _oneall = _oneall || [];
\t\t_oneall.push(['social_link', 'set_providers', ['";
        // line 27
        echo ($context["OA_SOCIAL_LOGIN_PROVIDERS"] ?? null);
        echo "']]);
\t\t_oneall.push(['social_link', 'set_user_token', '";
        // line 28
        echo ($context["OA_SOCIAL_LINK_USER_TOKEN"] ?? null);
        echo "']);
\t\t_oneall.push(['social_link', 'set_callback_uri', '";
        // line 29
        echo ($context["OA_SOCIAL_LINK_CALLBACK_URI"] ?? null);
        echo "']);
\t\t_oneall.push(['social_link', 'do_render_ui', 'oneall_social_login_link_profile']);
\t// ]]>
</script>
\t\t\t\t

";
        // line 35
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "sociallogin_ucp_social_link.html", 35)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "sociallogin_ucp_social_link.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 35,  104 => 29,  100 => 28,  96 => 27,  78 => 12,  73 => 11,  67 => 8,  63 => 7,  57 => 6,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sociallogin_ucp_social_link.html", "");
    }
}
