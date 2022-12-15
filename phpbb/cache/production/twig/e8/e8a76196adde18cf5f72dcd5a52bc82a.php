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

/* @oneall_sociallogin/login_body_oneall.html */
class __TwigTemplate_cde8eff00a2350d4d8f56c935905c88c extends \Twig\Template
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
        if (($context["OA_SOCIAL_LOGIN_EMBED_SOCIAL_LOGIN_INLINE"] ?? null)) {
            echo " 
<div class=\"inner\">
  <div class=\"content\">
    ";
            // line 4
            if (($context["OA_SOCIAL_LOGIN_INLINE_PAGE_CAPTION"] ?? null)) {
                // line 5
                echo "    <h2 class=\"login-title\">";
                echo ($context["OA_SOCIAL_LOGIN_INLINE_PAGE_CAPTION"] ?? null);
                echo "</h2>
    ";
            }
            // line 7
            echo "    <div class=\"oneall_social_login_providers\" id=\"oneall_social_login_auth_";
            echo ($context["OA_SOCIAL_LOGIN_RAND"] ?? null);
            echo "\"></div>
      <!-- OneAll Social Login : http://www.oneall.com //-->
      <script type=\"text/javascript\">
        // <![CDATA[
          var _oneall = _oneall || [];
          _oneall.push(['social_login', 'set_providers', ['";
            // line 12
            echo ($context["OA_SOCIAL_LOGIN_PROVIDERS"] ?? null);
            echo "']]);
          _oneall.push(['social_login', 'set_callback_uri', '";
            // line 13
            echo ($context["OA_SOCIAL_LOGIN_CALLBACK_URI"] ?? null);
            echo "']);
          _oneall.push(['social_login', 'set_custom_css_uri', ((\"https:\" == document.location.protocol) ? \"https://secure\" : \"http://public\") + '.oneallcdn.com/css/api/socialize/themes/phpbb/default.css']);
          _oneall.push(['social_login', 'do_render_ui', 'oneall_social_login_auth_";
            // line 15
            echo ($context["OA_SOCIAL_LOGIN_RAND"] ?? null);
            echo "']);
\t\t// ]]>
      </script>
  </div>
</div>
";
        }
        // line 21
        echo "
";
    }

    public function getTemplateName()
    {
        return "@oneall_sociallogin/login_body_oneall.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 21,  69 => 15,  64 => 13,  60 => 12,  51 => 7,  45 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@oneall_sociallogin/login_body_oneall.html", "");
    }
}
