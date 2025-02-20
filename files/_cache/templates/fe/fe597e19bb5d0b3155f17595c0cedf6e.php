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

/* @news/components/news_fields_macros.html.twig */
class __TwigTemplate_7f6608455faac70b949347748051a9cd extends Template
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
        // line 28
        echo "
";
        // line 53
        echo "
";
        // line 93
        echo "
";
    }

    // line 29
    public function macro_checkboxesField($__name__ = null, $__possible_values__ = null, $__current_values__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "possible_values" => $__possible_values__,
            "current_values" => $__current_values__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 30
            echo "    ";
            $macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@news/components/news_fields_macros.html.twig", 30)->unwrap();
            // line 31
            echo "    ";
            ob_start(function () { return ''; });
            // line 32
            echo "        <div>
            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["possible_values"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["label"]) {
                // line 34
                echo "                <label class=\"form-check form-check-inline mb-0\">
                    <input type=\"hidden\" name=\"";
                // line 35
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" value=\"0\">
                    <input
                        class=\"form-check-input\"
                        name=\"";
                // line 38
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"
                        type=\"checkbox\"
                        value=\"1\"
                        ";
                // line 41
                echo (((($__internal_compile_0 = ($context["current_values"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["key"]] ?? null) : null)) ? ("checked") : (""));
                echo "
                        ";
                // line 42
                echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 42)) ? ("readonly") : (""));
                echo "
                        ";
                // line 43
                echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 43)) ? ("disabled") : (""));
                echo "
                    >
                    <span class=\"form-check-label\">";
                // line 45
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "</span>
                </label>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "        </div>
    ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 50
            echo "
    ";
            // line 51
            echo twig_call_macro($macros["fields"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 51, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 54
    public function macro_iconField($__name__ = null, $__main_values__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "main_values" => $__main_values__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 55
            echo "    ";
            $macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@news/components/news_fields_macros.html.twig", 55)->unwrap();
            // line 56
            echo "    ";
            ob_start(function () { return ''; });
            // line 57
            echo "        <div class=\"form-selectgroup\">
            ";
            // line 58
            if (((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "display_emptychoice", [], "any", true, true, false, 58)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "display_emptychoice", [], "any", false, false, false, 58), false)) : (false))) {
                // line 59
                echo "                <label class=\"form-selectgroup-item\">
                    <input
                        type=\"radio\"
                        name=\"";
                // line 62
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\"
                        value=\"\"
                        class=\"form-selectgroup-input\"
                        ";
                // line 65
                echo (((($context["value"] ?? null) == ($context["key"] ?? null))) ? ("checked") : (""));
                echo "
                    >
                    <span class=\"form-selectgroup-label\">";
                // line 67
                echo twig_escape_filter($this->env, __("No icon", "news"), "html", null, true);
                echo "</span>
                </label>
            ";
            }
            // line 70
            echo "
            ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["main_values"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["label"]) {
                // line 72
                echo "                <label class=\"form-selectgroup-item\" title=\"";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\">
                    <input
                        name=\"";
                // line 74
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\"
                        value=\"";
                // line 75
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"
                        class=\"form-selectgroup-input\"
                        type=\"radio\"
                        ";
                // line 78
                echo (((($context["value"] ?? null) == $context["key"])) ? ("checked") : (""));
                echo "
                    >
                    <span class=\"form-selectgroup-label\">
                        <i
                            class=\"ti ti-";
                // line 82
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo " icon fa-fw d-inline-block\"
                            style=\"font-size: 1.4em !important; width: 1em !important\"
                        ></i>
                    </span>
                </label>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "        </div>
    ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 90
            echo "
    ";
            // line 91
            echo twig_call_macro($macros["fields"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 91, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 94
    public function macro_colorField($__name__ = null, $__colors__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "colors" => $__colors__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 95
            echo "    ";
            $macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@news/components/news_fields_macros.html.twig", 95)->unwrap();
            // line 96
            echo "
    ";
            // line 97
            ob_start(function () { return ''; });
            // line 98
            echo "        <div class=\"row g-2\">
            ";
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["colors"] ?? null));
            foreach ($context['_seq'] as $context["color"] => $context["label"]) {
                // line 100
                echo "                <div class=\"col-auto\">
                    <label
                        class=\"form-colorinput ";
                // line 102
                echo ((($context["color"] == "white")) ? ("form-colorinput-light") : (""));
                echo "\"
                        title=\"";
                // line 103
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\"
                    >
                        <input
                            name=\"";
                // line 106
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\"
                            type=\"radio\"
                            value=\"";
                // line 108
                echo twig_escape_filter($this->env, $context["color"], "html", null, true);
                echo "\"
                            class=\"form-colorinput-input\"
                            ";
                // line 110
                echo (((($context["value"] ?? null) == $context["color"])) ? ("checked") : (""));
                echo "
                        >
                        <span class=\"form-colorinput-color bg-";
                // line 112
                echo twig_escape_filter($this->env, $context["color"], "html", null, true);
                echo "\"></span>
                    </label>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['color'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "        </div>
    ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 118
            echo "
    ";
            // line 119
            echo twig_call_macro($macros["fields"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 119, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@news/components/news_fields_macros.html.twig";
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
        return array (  321 => 119,  318 => 118,  314 => 116,  304 => 112,  299 => 110,  294 => 108,  289 => 106,  283 => 103,  279 => 102,  275 => 100,  271 => 99,  268 => 98,  266 => 97,  263 => 96,  260 => 95,  243 => 94,  232 => 91,  229 => 90,  225 => 88,  213 => 82,  206 => 78,  200 => 75,  196 => 74,  190 => 72,  186 => 71,  183 => 70,  177 => 67,  172 => 65,  166 => 62,  161 => 59,  159 => 58,  156 => 57,  153 => 56,  150 => 55,  133 => 54,  122 => 51,  119 => 50,  115 => 48,  106 => 45,  101 => 43,  97 => 42,  93 => 41,  87 => 38,  81 => 35,  78 => 34,  74 => 33,  71 => 32,  68 => 31,  65 => 30,  48 => 29,  43 => 93,  40 => 53,  37 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("", "@news/components/news_fields_macros.html.twig", "C:\\xampp\\htdocs\\glpi\\marketplace\\news\\templates\\components\\news_fields_macros.html.twig");
    }
}
