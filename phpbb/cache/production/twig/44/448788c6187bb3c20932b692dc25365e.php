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

/* sociallogin.html */
class __TwigTemplate_2af96a5798dc7462bb76c4fb3b3d38b1 extends \Twig\Template
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
        echo "
";
        // line 2
        $asset_file = "@oneall_sociallogin/admin.js";
        $asset = new \phpbb\template\asset($asset_file, $this->env->get_path_helper(), $this->env->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->env->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->env->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
        }
        
        if ($asset->is_relative()) {
            $asset->add_assets_version($this->env->get_phpbb_config()['assets_version']);
        }
        $this->env->get_assets_bag()->add_script($asset);        // line 3
        $asset_file = "@oneall_sociallogin/admin.css";
        $asset = new \phpbb\template\asset($asset_file, $this->env->get_path_helper(), $this->env->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->env->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->env->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
        }
        
        if ($asset->is_relative()) {
            $asset->add_assets_version($this->env->get_phpbb_config()['assets_version']);
        }
        $this->env->get_assets_bag()->add_stylesheet($asset);        // line 4
        echo "
";
        // line 5
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "sociallogin.html", 5)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 6
        echo "
<script type=\"text/javascript\">
// <![CDATA[
    var OA_SOCIAL_LOGIN_AJAX_URL_AUTODETECT = '";
        // line 9
        echo ($context["OA_SOCIAL_LOGIN_AJAX_URL_AUTODETECT"] ?? null);
        echo "';
    var OA_SOCIAL_LOGIN_AJAX_URL_VERIFY = '";
        // line 10
        echo ($context["OA_SOCIAL_LOGIN_AJAX_URL_VERIFY"] ?? null);
        echo "';
//]]>
</script>

<div id=\"oneall_sociallogin\">
\t";
        // line 15
        if (($context["OA_SOCIAL_LOGIN_SETTINGS_SAVED"] ?? null)) {
            // line 16
            echo "\t\t<div class=\"successbox\">
\t\t\t<h3>Information</h3>
\t\t\t<p>";
            // line 18
            echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_SETTINGS_UPDATED");
            echo "</p>
\t\t</div>
\t";
        }
        // line 20
        echo "\t
\t";
        // line 21
        if (($context["S_WARNING"] ?? null)) {
            // line 22
            echo "\t\t<div class=\"errorbox\">
\t   \t<h3>";
            // line 23
            echo $this->extensions['phpbb\template\twig\extension']->lang("WARNING");
            echo "</h3>
\t   \t<p>";
            // line 24
            echo ($context["WARNING_MSG"] ?? null);
            echo "</p>
\t\t</div>
\t";
        }
        // line 27
        echo "\t<h1>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_TITLE");
        echo "</h1>
\t<div class=\"section\">
\t\t<p>
\t\t\t";
        // line 30
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_INTRO");
        echo "
\t\t</p>
\t</div>\t\t\t\t\t
\t<div class=\"section welcome\">
\t\t<h3>";
        // line 34
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_TITLE_HELP");
        echo "</h3>
\t\t<ul>
\t\t\t<li>";
        // line 36
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_FOLLOW_US_TWITTER");
        echo "</li>
\t\t\t<li>";
        // line 37
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_READ_DOCS");
        echo "</li>
\t\t\t<li>";
        // line 38
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_DISCOVER_PLUGINS");
        echo "</li>
\t\t\t<li>";
        // line 39
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_GET_HELP");
        echo "</li>\t\t\t
\t\t</ul>
\t</div>
\t<div class=\"section get_started\">
\t\t<h4>";
        // line 43
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_CREATE_ACCOUNT_FIRST");
        echo "</h4>
\t\t<p>
\t\t\t";
        // line 45
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_SETUP_FREE_ACCOUNT");
        echo " | ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_VIEW_CREDENTIALS");
        echo "
\t\t</p>
\t</div>\t\t
\t<form id=\"oneall_social_login_form\" method=\"post\" action=\"";
        // line 48
        echo ($context["U_ACTION"] ?? null);
        echo "\">\t
\t\t<fieldset>
\t\t\t<legend>";
        // line 50
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_DO_ENABLE");
        echo "</legend>\t\t\t
\t\t\t<dl>
\t\t\t\t<dt>
\t\t\t\t\t<label for=\"oa_social_login_disable_0\">";
        // line 53
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_DO_ENABLE");
        echo "</label>
\t\t\t\t\t<br /><span>";
        // line 54
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_DO_ENABLE_DESC");
        echo "</span>
\t\t\t\t</dt>
\t\t\t\t<dd>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"oa_social_login_disable_0\" name=\"oa_social_login_disable\" value=\"0\"";
        // line 57
        if ( !($context["OA_SOCIAL_LOGIN_DISABLE"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_DO_ENABLE_YES");
        echo " <strong>(";
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_DEFAULT");
        echo ")</strong></label><br />
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"oa_social_login_disable_1\" name=\"oa_social_login_disable\" value=\"1\"";
        // line 58
        if (($context["OA_SOCIAL_LOGIN_DISABLE"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_DO_ENABLE_NO");
        echo "</label>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t</fieldset>\t\t
\t\t<fieldset>
\t\t\t<legend>";
        // line 63
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_API_CONNECTION");
        echo "</legend>
\t\t\t<dl>
\t\t\t\t<dt>
\t\t\t\t\t<label for=\"oa_social_login_api_connection_handler_curl\">";
        // line 66
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_API_CONNECTION_HANDLER");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label>
\t\t\t\t\t<br /><span>";
        // line 67
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_API_CONNECTION_HANDLER_DESC");
        echo "</span>
\t\t\t\t</dt>
\t\t\t\t<dd>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"oa_social_login_api_connection_handler_curl\" name=\"oa_social_login_api_connection_handler\" value=\"cr\"";
        // line 70
        if (($context["OA_SOCIAL_LOGIN_API_CONNECTION_HANDLER_CURL"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_CURL");
        echo "</label><br />
\t\t\t\t\t<span>";
        // line 71
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_CURL_DESC");
        echo "</span> (";
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_CURL_DOCS");
        echo ")<br /><br />\t\t\t\t\t
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"oa_social_login_api_connection_handler_fsockopen\" name=\"oa_social_login_api_connection_handler\" value=\"fs\"";
        // line 72
        if (($context["OA_SOCIAL_LOGIN_API_CONNECTION_HANDLER_FSOCKOPEN"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_FSOCKOPEN");
        echo "</label><br />
\t\t\t\t\t<span>";
        // line 73
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_FSOCKOPEN_DESC");
        echo "</span> (";
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_FSOCKOPEN_DOCS");
        echo ")
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt>
\t\t\t\t\t<label for=\"oa_social_login_api_connection_port_443\">";
        // line 78
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_API_PORT");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label>
\t\t\t\t\t<br /><span>";
        // line 79
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_API_PORT_DESC");
        echo "</span>
\t\t\t\t</dt>
\t\t\t\t<dd>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"oa_social_login_api_connection_port_443\" name=\"oa_social_login_api_connection_port\" value=\"443\"";
        // line 82
        if (($context["OA_SOCIAL_LOGIN_API_CONNECTION_PORT_443"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_PORT_443");
        echo "</label><br />
\t\t\t\t\t<span>";
        // line 83
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_PORT_443_DESC");
        echo "</span><br /><br />\t\t\t\t
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"oa_social_login_api_connection_port_80\" name=\"oa_social_login_api_connection_port\" value=\"80\"";
        // line 84
        if (($context["OA_SOCIAL_LOGIN_API_CONNECTION_PORT_80"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_PORT_80");
        echo "</label><br />
\t\t\t\t\t<span>";
        // line 85
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_PORT_80_DESC");
        echo "</span>\t\t\t\t
\t\t\t\t</dd>
\t\t\t</dl>\t\t\t
\t\t\t<dl>
\t\t\t\t<dt>
\t\t\t\t\t<span id=\"oa_social_login_api_connection_handler_result\"></span>
\t\t\t\t</dt>
\t\t\t\t<dd> \t\t\t
\t\t\t\t\t<input class=\"button2\" type=\"button\" id=\"oa_social_login_autodetect_api_connection_handler\" value=\"";
        // line 93
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_API_AUTODETECT");
        echo "\" />               
\t\t\t\t</dd>
\t\t\t</dl>
\t\t</fieldset>\t\t\t
\t\t<fieldset>
\t\t\t<legend>";
        // line 98
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_API_CREDENTIALS_TITLE");
        echo "</legend>\t\t
\t\t\t\t<dl>
\t\t\t\t\t<dt>
\t\t\t\t\t\t<label for=\"oa_social_login_api_subdomain\">";
        // line 101
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_API_SUBDOMAIN");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label>
\t\t\t\t\t</dt>
\t\t\t\t\t<dd>
\t\t\t\t\t\t<input type=\"text\" id=\"oa_social_login_api_subdomain\" name=\"oa_social_login_api_subdomain\" value=\"";
        // line 104
        echo ($context["OA_SOCIAL_LOGIN_API_SUBDOMAIN"] ?? null);
        echo "\"  size=\"60\" />
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt>
\t\t\t\t\t\t<label for=\"oa_social_login_api_key\">";
        // line 109
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_API_PUBLIC_KEY");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label>
\t\t\t\t\t</dt>
\t\t\t\t\t<dd>
\t\t\t\t\t\t<input type=\"text\" id=\"oa_social_login_api_key\" name=\"oa_social_login_api_key\" value=\"";
        // line 112
        echo ($context["OA_SOCIAL_LOGIN_API_KEY"] ?? null);
        echo "\"  size=\"60\" />
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt>
\t\t\t\t\t\t<label for=\"oa_social_login_api_secret\">";
        // line 117
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_API_PRIVATE_KEY");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label>
\t\t\t\t\t</dt>
\t\t\t\t\t<dd>
\t\t\t\t\t\t<input type=\"text\" id=\"oa_social_login_api_secret\" name=\"oa_social_login_api_secret\" value=\"";
        // line 120
        echo ($context["OA_SOCIAL_LOGIN_API_SECRET"] ?? null);
        echo "\"  size=\"60\" />
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt>
\t\t\t\t\t\t<span id=\"oa_social_login_api_test_result\"></span>
\t\t\t\t\t</dt>
\t\t\t\t\t<dd> \t\t\t
\t\t\t\t\t\t<input class=\"button2\" type=\"button\" id=\"oa_social_login_test_api_settings\" value=\"";
        // line 128
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_API_VERIFY");
        echo "\" />               
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t</fieldset>\t\t
\t\t<fieldset>
\t\t\t<legend>";
        // line 133
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_DISPLAY_LOC");
        echo "</legend>\t\t\t
\t\t\t<dl>
\t\t\t\t<dt>
\t\t\t\t\t<label for=\"oa_social_login_index_page_disable_0\">";
        // line 136
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_INDEX_PAGE_ENABLE");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label>
\t\t\t\t\t<br /><span>";
        // line 137
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_INDEX_PAGE_ENABLE_DESC");
        echo "</span>
\t\t\t\t</dt>
\t\t\t\t<dd>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"oa_social_login_index_page_disable_1\" name=\"oa_social_login_index_page_disable\" value=\"1\"";
        // line 140
        if (($context["OA_SOCIAL_LOGIN_INDEX_PAGE_DISABLE"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_INDEX_PAGE_NO");
        echo "</label>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"oa_social_login_index_page_disable_0\" name=\"oa_social_login_index_page_disable\" value=\"0\"";
        // line 141
        if ( !($context["OA_SOCIAL_LOGIN_INDEX_PAGE_DISABLE"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_INDEX_PAGE_YES");
        echo " <strong>(";
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_DEFAULT");
        echo ")</strong></label>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t<dl class=\"dot\">
\t\t\t\t<dt>
\t\t\t\t\t<label for=\"oa_social_login_index_page_caption\">";
        // line 146
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_INDEX_PAGE_CAPTION");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label>
\t\t\t\t\t<br /><span>";
        // line 147
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_INDEX_PAGE_CAPTION_DESC");
        echo "</span>
\t\t\t\t</dt>
\t\t\t\t<dd>
\t\t\t\t\t<input type=\"text\" id=\"oa_social_login_index_page_caption\" name=\"oa_social_login_index_page_caption\" value=\"";
        // line 150
        echo ($context["OA_SOCIAL_LOGIN_INDEX_PAGE_CAPTION"] ?? null);
        echo "\" size=\"60\" />
\t\t\t\t</dd>
\t\t\t</dl>\t\t\t\t
\t\t\t<dl>
\t\t\t\t<dt>
\t\t\t\t\t<label for=\"oa_social_login_login_page_disable_0\">";
        // line 155
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_LOGIN_PAGE_ENABLE");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label>
\t\t\t\t\t<br /><span>";
        // line 156
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_LOGIN_PAGE_ENABLE_DESC");
        echo "</span>
\t\t\t\t</dt>
\t\t\t\t<dd>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"oa_social_login_login_page_disable_1\" name=\"oa_social_login_login_page_disable\" value=\"1\"";
        // line 159
        if (($context["OA_SOCIAL_LOGIN_LOGIN_PAGE_DISABLE"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_LOGIN_PAGE_NO");
        echo "</label>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"oa_social_login_login_page_disable_0\" name=\"oa_social_login_login_page_disable\" value=\"0\"";
        // line 160
        if ( !($context["OA_SOCIAL_LOGIN_LOGIN_PAGE_DISABLE"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_LOGIN_PAGE_YES");
        echo " <strong>(";
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_DEFAULT");
        echo ")</strong></label>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t<dl class=\"dot\">
\t\t\t\t<dt>
\t\t\t\t\t<label for=\"oa_social_login_login_page_caption\">";
        // line 165
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_LOGIN_PAGE_CAPTION");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label>
\t\t\t\t\t<br /><span>";
        // line 166
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_LOGIN_PAGE_CAPTION_DESC");
        echo "</span>
\t\t\t\t</dt>
\t\t\t\t<dd>
\t\t\t\t\t<input type=\"text\" id=\"oa_social_login_login_page_caption\" name=\"oa_social_login_login_page_caption\" value=\"";
        // line 169
        echo ($context["OA_SOCIAL_LOGIN_LOGIN_PAGE_CAPTION"] ?? null);
        echo "\" size=\"60\" />
\t\t\t\t</dd>
\t\t\t</dl>\t\t\t\t
\t\t\t<dl>
\t\t\t\t<dt>
\t\t\t\t\t<label for=\"oa_social_login_inline_page_disable_0\">";
        // line 174
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_INLINE_PAGE_ENABLE");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label>
\t\t\t\t\t<br /><span>";
        // line 175
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_INLINE_PAGE_ENABLE_DESC");
        echo "</span>
\t\t\t\t</dt>
\t\t\t\t<dd>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"oa_social_login_inline_page_disable_1\" name=\"oa_social_login_inline_page_disable\" value=\"1\"";
        // line 178
        if (($context["OA_SOCIAL_LOGIN_INLINE_PAGE_DISABLE"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_INLINE_PAGE_NO");
        echo "</label>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"oa_social_login_inline_page_disable_0\" name=\"oa_social_login_inline_page_disable\" value=\"0\"";
        // line 179
        if ( !($context["OA_SOCIAL_LOGIN_INLINE_PAGE_DISABLE"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_INLINE_PAGE_YES");
        echo " <strong>(";
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_DEFAULT");
        echo ")</strong></label>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t<dl class=\"dot\">
\t\t\t\t<dt>
\t\t\t\t\t<label for=\"oa_social_login_inline_page_caption\">";
        // line 184
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_INLINE_PAGE_CAPTION");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label>
\t\t\t\t\t<br /><span>";
        // line 185
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_INLINE_PAGE_CAPTION_DESC");
        echo "</span>
\t\t\t\t</dt>
\t\t\t\t<dd>
\t\t\t\t\t<input type=\"text\" id=\"oa_social_login_inline_page_caption\" name=\"oa_social_login_inline_page_caption\" value=\"";
        // line 188
        echo ($context["OA_SOCIAL_LOGIN_INLINE_PAGE_CAPTION"] ?? null);
        echo "\" size=\"60\" />
\t\t\t\t</dd>
\t\t\t</dl>\t\t\t\t
\t\t\t<dl>
\t\t\t\t<dt>
\t\t\t\t\t<label for=\"oa_social_login_registration_page_disable_0\">";
        // line 193
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_REGISTRATION_PAGE_ENABLE");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label>
\t\t\t\t\t<br /><span>";
        // line 194
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_REGISTRATION_PAGE_ENABLE_DESC");
        echo "</span>
\t\t\t\t</dt>
\t\t\t\t<dd>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"oa_social_login_registration_page_disable_1\" name=\"oa_social_login_registration_page_disable\" value=\"1\"";
        // line 197
        if (($context["OA_SOCIAL_LOGIN_REGISTRATION_PAGE_DISABLE"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_REGISTRATION_PAGE_NO");
        echo "</label>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"oa_social_login_registration_page_disable_0\" name=\"oa_social_login_registration_page_disable\" value=\"0\"";
        // line 198
        if ( !($context["OA_SOCIAL_LOGIN_REGISTRATION_PAGE_DISABLE"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_REGISTRATION_PAGE_YES");
        echo " <strong>(";
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_DEFAULT");
        echo ")</strong></label>\t\t\t\t\t
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t<dl class=\"dot\">
\t\t\t\t<dt>
\t\t\t\t\t<label for=\"oa_social_login_registration_page_caption\">";
        // line 203
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_REGISTRATION_PAGE_CAPTION");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label>
\t\t\t\t\t<br /><span>";
        // line 204
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_REGISTRATION_PAGE_CAPTION_DESC");
        echo "</span>
\t\t\t\t</dt>
\t\t\t\t<dd>
\t\t\t\t\t<input type=\"text\" id=\"oa_social_login_registration_page_caption\" name=\"oa_social_login_registration_page_caption\" value=\"";
        // line 207
        echo ($context["OA_SOCIAL_LOGIN_REGISTRATION_PAGE_CAPTION"] ?? null);
        echo "\" size=\"60\" />
\t\t\t\t</dd>
\t\t\t</dl>\t\t\t\t
\t\t\t<dl>
\t\t\t\t<dt>
\t\t\t\t\t<label for=\"oa_social_login_other_page_disable_0\">";
        // line 212
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_OTHER_PAGE_ENABLE");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label>
\t\t\t\t\t<br /><span>";
        // line 213
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_OTHER_PAGE_ENABLE_DESC");
        echo "</span>
\t\t\t\t</dt>
\t\t\t\t<dd>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"oa_social_login_other_page_disable_1\" name=\"oa_social_login_other_page_disable\" value=\"1\"";
        // line 216
        if (($context["OA_SOCIAL_LOGIN_OTHER_PAGE_DISABLE"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_OTHER_PAGE_NO");
        echo " <strong>(";
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_DEFAULT");
        echo ")</strong></label>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"oa_social_login_other_page_disable_0\" name=\"oa_social_login_other_page_disable\" value=\"0\"";
        // line 217
        if ( !($context["OA_SOCIAL_LOGIN_OTHER_PAGE_DISABLE"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_OTHER_PAGE_YES");
        echo "</label>\t\t\t\t
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt>
\t\t\t\t\t<label for=\"oa_social_login_other_page_caption\">";
        // line 222
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_OTHER_PAGE_CAPTION");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label>
\t\t\t\t\t<br /><span>";
        // line 223
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_OTHER_PAGE_CAPTION_DESC");
        echo "</span>
\t\t\t\t</dt>
\t\t\t\t<dd>
\t\t\t\t\t<input type=\"text\" id=\"oa_social_login_other_page_caption\" name=\"oa_social_login_other_page_caption\" value=\"";
        // line 226
        echo ($context["OA_SOCIAL_LOGIN_OTHER_PAGE_CAPTION"] ?? null);
        echo "\" size=\"60\" />
\t\t\t\t</dd>
\t\t\t</dl>\t
\t\t</fieldset>\t\t\t\t\t\t
\t\t<fieldset>
\t\t\t<legend>";
        // line 231
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_DO_AVATARS");
        echo "</legend>\t\t\t
\t\t\t<dl>
\t\t\t\t<dt>
\t\t\t\t\t<label for=\"oa_social_login_avatars_enable_0\">";
        // line 234
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_DO_AVATARS");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label>
\t\t\t\t\t<br /><span>";
        // line 235
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_DO_AVATARS_DESC");
        echo "</span>
\t\t\t\t</dt>
\t\t\t\t<dd>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"oa_social_login_avatars_enable_0\" name=\"oa_social_login_avatars_enable\" value=\"0\"";
        // line 238
        if ( !($context["OA_SOCIAL_LOGIN_AVATARS_ENABLE"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_DO_AVATARS_ENABLE_YES");
        echo " <strong>(";
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_DEFAULT");
        echo ")</strong></label><br />
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"oa_social_login_avatars_enable_1\" name=\"oa_social_login_avatars_enable\" value=\"1\"";
        // line 239
        if (($context["OA_SOCIAL_LOGIN_AVATARS_ENABLE"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_DO_AVATARS_ENABLE_NO");
        echo "</label>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t</fieldset>\t\t
\t\t<fieldset>
\t\t\t<legend>";
        // line 244
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_DO_VALIDATION");
        echo "</legend>\t\t
\t\t\t<dl>
\t\t\t\t<dt>
\t\t\t\t\t<label for=\"oa_social_login_validate_0\">";
        // line 247
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_DO_VALIDATION_ASK");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label>
\t\t\t\t\t<br /><span>";
        // line 248
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_DO_VALIDATION_DESC");
        echo "</span>
\t\t\t\t</dt>
\t\t\t\t<dd>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"oa_social_login_validate_0\" name=\"oa_social_login_validate\" value=\"0\"";
        // line 251
        if ((($context["OA_SOCIAL_LOGIN_VALIDATE"] ?? null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_DO_VALIDATION_NEVER");
        echo " <strong>(";
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_DEFAULT");
        echo ")</strong></label><br />
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"oa_social_login_validate_1\" name=\"oa_social_login_validate\" value=\"1\"";
        // line 252
        if ((($context["OA_SOCIAL_LOGIN_VALIDATE"] ?? null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_DO_VALIDATION_ALWAYS");
        echo "</label><br />\t
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"oa_social_login_validate_2\" name=\"oa_social_login_validate\" value=\"2\"";
        // line 253
        if ((($context["OA_SOCIAL_LOGIN_VALIDATE"] ?? null) == 2)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_DO_VALIDATION_DEPENDS");
        echo "</label>\t
\t\t\t\t</dd>
\t\t\t</dl>
\t\t</fieldset>
\t\t<fieldset>
\t\t\t<legend>";
        // line 258
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_DO_LINKING");
        echo "</legend>\t\t
\t\t\t<dl>
\t\t\t\t<dt>
\t\t\t\t\t<label for=\"oa_social_login_disable_linking_0\">";
        // line 261
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_DO_LINKING_ASK");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label>
\t\t\t\t\t<br /><span>";
        // line 262
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_DO_LINKING_DESC");
        echo "</span>
\t\t\t\t</dt>
\t\t\t\t<dd>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"oa_social_login_disable_linking_0\" name=\"oa_social_login_disable_linking\" value=\"0\"";
        // line 265
        if ( !($context["OA_SOCIAL_LOGIN_DISABLE_LINKING"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_DO_LINKING_YES");
        echo " <strong>(";
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_DEFAULT");
        echo ")</strong></label><br />
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"oa_social_login_disable_linking_1\" name=\"oa_social_login_disable_linking\" value=\"1\"";
        // line 266
        if (($context["OA_SOCIAL_LOGIN_DISABLE_LINKING"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_DO_LINKING_NO");
        echo "</label>\t\t\t\t\t\t
\t\t\t\t</dd>\t\t\t
\t\t\t</dl>
\t\t</fieldset>\t\t
\t\t<fieldset>\t
\t\t\t\t<legend>";
        // line 271
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_DO_REDIRECT");
        echo "</legend>\t\t
\t\t\t\t<dl>
\t\t\t\t\t<dt>
\t\t\t\t\t\t<label for=\"oa_social_login_redirect\">";
        // line 274
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_DO_REDIRECT_ASK");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label>
\t\t\t\t\t\t<br /><span>";
        // line 275
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_DO_REDIRECT_DESC");
        echo "</span>
\t\t\t\t\t</dt>
\t\t\t\t\t<dd>
\t\t\t\t\t\t<input type=\"text\" id=\"oa_social_login_redirect\" name=\"oa_social_login_redirect\" value=\"";
        // line 278
        echo ($context["OA_SOCIAL_LOGIN_REDIRECT"] ?? null);
        echo "\" size=\"60\" />
\t\t\t\t\t</dd>
\t\t\t\t</dl>\t
\t\t</fieldset>\t\t
\t\t<fieldset>
\t\t\t<legend>";
        // line 283
        echo $this->extensions['phpbb\template\twig\extension']->lang("OA_SOCIAL_LOGIN_ENABLE_NETWORKS");
        echo "</legend>\t\t\t\t\t\t
\t\t\t";
        // line 284
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "provider", [], "any", false, false, false, 284));
        foreach ($context['_seq'] as $context["_key"] => $context["provider"]) {
            // line 285
            echo "\t\t\t\t<dl>\t
\t\t\t\t\t<dt class=\"provider_box\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<label for=\"oa_social_login_provider_";
            // line 287
            echo twig_get_attribute($this->env, $this->source, $context["provider"], "KEY", [], "any", false, false, false, 287);
            echo "\"><span class=\"oa_social_login_provider oa_social_login_provider_";
            echo twig_get_attribute($this->env, $this->source, $context["provider"], "KEY", [], "any", false, false, false, 287);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["provider"], "NAME", [], "any", false, false, false, 287);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["provider"], "NAME", [], "any", false, false, false, 287);
            echo "</span></label>\t\t\t\t\t\t
\t\t\t\t\t\t\t<input style=\"cursor:pointer\" type=\"checkbox\" id=\"oa_social_login_provider_";
            // line 288
            echo twig_get_attribute($this->env, $this->source, $context["provider"], "KEY", [], "any", false, false, false, 288);
            echo "\" name=\"oa_social_login_provider_";
            echo twig_get_attribute($this->env, $this->source, $context["provider"], "KEY", [], "any", false, false, false, 288);
            echo "\" value=\"1\" ";
            if (twig_get_attribute($this->env, $this->source, $context["provider"], "ENABLE", [], "any", false, false, false, 288)) {
                echo " checked=\"checked\"";
            }
            echo "  />
\t\t\t\t\t\t\t<label for=\"oa_social_login_provider_";
            // line 289
            echo twig_get_attribute($this->env, $this->source, $context["provider"], "KEY", [], "any", false, false, false, 289);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["provider"], "NAME", [], "any", false, false, false, 289);
            echo "</label>
\t\t\t\t\t</dt>
\t\t\t\t\t<dd></dd>
\t\t\t\t</dl>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['provider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 293
        echo "\t\t\t
\t\t</fieldset>\t\t
\t\t<fieldset class=\"submit-buttons\">
\t\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
        // line 296
        echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
        echo "\" />
\t\t\t";
        // line 297
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
\t\t</fieldset>
\t</form>
</div>
";
        // line 301
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "sociallogin.html", 301)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "sociallogin.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  862 => 301,  855 => 297,  851 => 296,  846 => 293,  833 => 289,  823 => 288,  813 => 287,  809 => 285,  805 => 284,  801 => 283,  793 => 278,  787 => 275,  782 => 274,  776 => 271,  764 => 266,  754 => 265,  748 => 262,  743 => 261,  737 => 258,  725 => 253,  717 => 252,  707 => 251,  701 => 248,  696 => 247,  690 => 244,  678 => 239,  668 => 238,  662 => 235,  657 => 234,  651 => 231,  643 => 226,  637 => 223,  632 => 222,  620 => 217,  610 => 216,  604 => 213,  599 => 212,  591 => 207,  585 => 204,  580 => 203,  566 => 198,  558 => 197,  552 => 194,  547 => 193,  539 => 188,  533 => 185,  528 => 184,  514 => 179,  506 => 178,  500 => 175,  495 => 174,  487 => 169,  481 => 166,  476 => 165,  462 => 160,  454 => 159,  448 => 156,  443 => 155,  435 => 150,  429 => 147,  424 => 146,  410 => 141,  402 => 140,  396 => 137,  391 => 136,  385 => 133,  377 => 128,  366 => 120,  359 => 117,  351 => 112,  344 => 109,  336 => 104,  329 => 101,  323 => 98,  315 => 93,  304 => 85,  296 => 84,  292 => 83,  284 => 82,  278 => 79,  273 => 78,  263 => 73,  255 => 72,  249 => 71,  241 => 70,  235 => 67,  230 => 66,  224 => 63,  212 => 58,  202 => 57,  196 => 54,  192 => 53,  186 => 50,  181 => 48,  173 => 45,  168 => 43,  161 => 39,  157 => 38,  153 => 37,  149 => 36,  144 => 34,  137 => 30,  130 => 27,  124 => 24,  120 => 23,  117 => 22,  115 => 21,  112 => 20,  106 => 18,  102 => 16,  100 => 15,  92 => 10,  88 => 9,  83 => 6,  71 => 5,  68 => 4,  54 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sociallogin.html", "");
    }
}
