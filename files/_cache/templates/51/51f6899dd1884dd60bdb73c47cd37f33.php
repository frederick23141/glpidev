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

/* pages/management/softwarelicense.html.twig */
class __TwigTemplate_7a1e737ca96116ac84b7f4c189177760 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'form_fields' => [$this, 'block_form_fields'],
            'more_fields' => [$this, 'block_more_fields'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 34
        return "generic_show_form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "pages/management/softwarelicense.html.twig", 35)->unwrap();
        // line 36
        $context["params"] = (($context["params"]) ?? ([]));
        // line 34
        $this->parent = $this->loadTemplate("generic_show_form.html.twig", "pages/management/softwarelicense.html.twig", 34);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 38
    public function block_form_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "

   ";
        // line 41
        if (((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 41)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["id"] ?? null) : null) > 0)) {
            // line 42
            echo "
      <input type=\"hidden\" name=\"softwares_id\" value=\"";
            // line 43
            echo twig_escape_filter($this->env, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 43)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["softwares_id"] ?? null) : null), "html", null, true);
            echo "\" />

      ";
            // line 45
            ob_start(function () { return ''; });
            // line 46
            echo "         <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Software::getFormURLWithID", [(($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 46)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["softwares_id"] ?? null) : null)]), "html", null, true);
            echo "\">
         ";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::getDropdownName", ["glpi_softwares", (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 47)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["softwares_id"] ?? null) : null)]), "html", null, true);
            echo " </a>
      ";
            $context["software_link"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 49
            echo "
      ";
            // line 50
            echo twig_call_macro($macros["fields"], "macro_field", ["software",             // line 52
($context["software_link"] ?? null), _n("Software", "Software", Session::getPluralNumber()), ["width" => "100%", "height" => "100%", "input_class" => "d-flex col-xxl-7 field-container align-items-center"]], 50, $context, $this->getSourceContext());
            // line 59
            echo "

   ";
        } else {
            // line 62
            echo "
      ";
            // line 63
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Software", "softwares_id", (($__internal_compile_4 = twig_get_attribute($this->env, $this->source,             // line 66
($context["item"] ?? null), "fields", [], "any", false, false, false, 66)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["softwares_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Software"), ["entity" => (($__internal_compile_5 = twig_get_attribute($this->env, $this->source,             // line 69
($context["item"] ?? null), "fields", [], "any", false, false, false, 69)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["entities_id"] ?? null) : null), "condition" => ["is_template" => 0, "is_deleted" => 0], "on_change" => "this.form.submit()"]], 63, $context, $this->getSourceContext());
            // line 76
            echo "

   ";
        }
        // line 79
        echo "


   ";
        // line 82
        echo twig_call_macro($macros["fields"], "macro_nullField", [], 82, $context, $this->getSourceContext());
        echo "

   ";
        // line 84
        $this->displayParentBlock("form_fields", $context, $blocks);
        echo "
";
    }

    // line 87
    public function block_more_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 88
        echo "   ";
        ob_start(function () { return ''; });
        // line 89
        echo "      ";
        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("SoftwareVersion::dropdownForOneSoftware", [["name" => "softwareversions_id_use", "softwares_id" => (($__internal_compile_6 = twig_get_attribute($this->env, $this->source,         // line 91
($context["item"] ?? null), "fields", [], "any", false, false, false, 91)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["softwares_id"] ?? null) : null), "value" => (($__internal_compile_7 = twig_get_attribute($this->env, $this->source,         // line 92
($context["item"] ?? null), "fields", [], "any", false, false, false, 92)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["softwareversions_id_use"] ?? null) : null), "width" => "100%"]]);
        // line 95
        echo "   ";
        $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 96
        echo "   ";
        echo twig_call_macro($macros["fields"], "macro_field", ["softwareversions_id_use", ($context["field"] ?? null), __("Version in use")], 96, $context, $this->getSourceContext());
        echo "

   ";
        // line 98
        ob_start(function () { return ''; });
        // line 99
        echo "      ";
        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("SoftwareVersion::dropdownForOneSoftware", [["name" => "softwareversions_id_buy", "softwares_id" => (($__internal_compile_8 = twig_get_attribute($this->env, $this->source,         // line 101
($context["item"] ?? null), "fields", [], "any", false, false, false, 101)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["softwares_id"] ?? null) : null), "value" => (($__internal_compile_9 = twig_get_attribute($this->env, $this->source,         // line 102
($context["item"] ?? null), "fields", [], "any", false, false, false, 102)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["softwareversions_id_buy"] ?? null) : null), "width" => "100%"]]);
        // line 105
        echo "   ";
        $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 106
        echo "   ";
        echo twig_call_macro($macros["fields"], "macro_field", ["softwareversions_id_buy", ($context["field"] ?? null), __("Purchase version")], 106, $context, $this->getSourceContext());
        echo "

   ";
        // line 108
        $context["validity_msg"] = null;
        // line 109
        echo "   ";
        if ((($context["item_type"] ?? null) == "SoftwareLicense")) {
            // line 110
            echo "      ";
            ob_start(function () { return ''; });
            // line 111
            echo "         ";
            if ((($__internal_compile_10 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 111)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["is_valid"] ?? null) : null)) {
                // line 112
                echo "            <span class=\"green\">";
                echo twig_escape_filter($this->env, _x("adjective", "Valid"), "html", null, true);
                echo "</span>
         ";
            } elseif (( !(($__internal_compile_11 = twig_get_attribute($this->env, $this->source,             // line 113
($context["item"] ?? null), "fields", [], "any", false, false, false, 113)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["is_valid"] ?? null) : null) && (($__internal_compile_12 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 113)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["allow_overquota"] ?? null) : null))) {
                // line 114
                echo "            <span class=\"green\">";
                echo twig_escape_filter($this->env, _x("adjective", "Valid (Over Quota)"), "html", null, true);
                echo "</span>
         ";
            } else {
                // line 116
                echo "            <span class=\"red\">";
                echo twig_escape_filter($this->env, _x("adjective", "Invalid"), "html", null, true);
                echo "</span>
         ";
            }
            // line 118
            echo "      ";
            $context["validity_msg"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 119
            echo "   ";
        }
        // line 120
        echo "   ";
        echo twig_call_macro($macros["fields"], "macro_dropdownNumberField", ["number", (($__internal_compile_13 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 120)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["number"] ?? null) : null), _x("quantity", "Number"), ["min" => 1, "max" => 10000, "step" => 1, "toadd" => ["-1" => __("Unlimited")], "add_field_html" =>         // line 125
($context["validity_msg"] ?? null)]], 120, $context, $this->getSourceContext());
        // line 126
        echo "

   ";
        // line 128
        echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["allow_overquota", (($__internal_compile_14 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 128)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["allow_overquota"] ?? null) : null), __("Allow Over-Quota")], 128, $context, $this->getSourceContext());
        echo "

   ";
        // line 130
        echo twig_call_macro($macros["fields"], "macro_datetimeField", ["expire", (($__internal_compile_15 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 130)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["expire"] ?? null) : null), __("Expiration"), ["helper" => __("On search engine, use \"Expiration contains NULL\" to search licenses with no expiration date")]], 130, $context, $this->getSourceContext());
        // line 132
        echo "

   ";
        // line 134
        if (((($__internal_compile_16 = ($context["params"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["withtemplate"] ?? null) : null) == 1)) {
            // line 135
            echo "      ";
            echo twig_call_macro($macros["fields"], "macro_hiddenField", ["withtemplate", "1"], 135, $context, $this->getSourceContext());
            echo "
   ";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/management/softwarelicense.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  215 => 135,  213 => 134,  209 => 132,  207 => 130,  202 => 128,  198 => 126,  196 => 125,  194 => 120,  191 => 119,  188 => 118,  182 => 116,  176 => 114,  174 => 113,  169 => 112,  166 => 111,  163 => 110,  160 => 109,  158 => 108,  152 => 106,  149 => 105,  147 => 102,  146 => 101,  144 => 99,  142 => 98,  136 => 96,  133 => 95,  131 => 92,  130 => 91,  128 => 89,  125 => 88,  121 => 87,  115 => 84,  110 => 82,  105 => 79,  100 => 76,  98 => 69,  97 => 66,  96 => 63,  93 => 62,  88 => 59,  86 => 52,  85 => 50,  82 => 49,  77 => 47,  72 => 46,  70 => 45,  65 => 43,  62 => 42,  60 => 41,  56 => 39,  52 => 38,  47 => 34,  45 => 36,  43 => 35,  36 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/management/softwarelicense.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\pages\\management\\softwarelicense.html.twig");
    }
}
