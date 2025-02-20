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

/* @news/display_alert.html.twig */
class __TwigTemplate_e9fa2bead708159336dca8b63ac2d19d extends Template
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
<style>
    /* Mising tabler variable */
    :root{
        --tblr-lime: #74b816;
    }
</style>

";
        // line 36
        $context["js_rand"] = twig_random($this->env);
        // line 37
        echo "<div class=\"plugin_news_alert ";
        echo twig_escape_filter($this->env, ($context["size"] ?? null), "html", null, true);
        echo "\" data-id=\"";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["alert_fields"] ?? null), "id", [], "any", true, true, false, 37)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["alert_fields"] ?? null), "id", [], "any", false, false, false, 37), 0)) : (0)), "html", null, true);
        echo "\">
    <div
        class=\"
            alert-";
        // line 40
        echo twig_escape_filter($this->env, ($context["js_rand"] ?? null), "html", null, true);
        echo "
            alert bg-";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["alert_fields"] ?? null), "background_color", [], "any", false, false, false, 41), "html", null, true);
        echo "
            ";
        // line 42
        echo ((($context["can_close"] ?? null)) ? ("alert-dismissible") : (""));
        echo "
        \"
        style=\"
            color: var(--tblr-";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["alert_fields"] ?? null), "text_color", [], "any", false, false, false, 45), "html", null, true);
        echo ") !important;
            border-left-color: var(--tblr-";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["alert_fields"] ?? null), "emphasis_color", [], "any", false, false, false, 46), "html", null, true);
        echo ") !important;
        \"
    >
        <div class=\"d-flex\">
            <i class=\"ti ti-";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["alert_fields"] ?? null), "icon", [], "any", false, false, false, 50), "html", null, true);
        echo " fa-2x me-2\"></i>
            <div class=\"overflow-hidden\">
                <h3 class=\"mt-1\">
                    ";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(twig_get_attribute($this->env, $this->source, ($context["alert_fields"] ?? null), "name", [], "any", false, false, false, 53)), "html", null, true);
        echo "
                    ";
        // line 54
        if (($context["show_only_login_alerts"] ?? null)) {
            // line 55
            echo "                        <a class=\"plugin_news_alert-toggle\"></a>
                    ";
        }
        // line 57
        echo "                </h3>
                ";
        // line 58
        if (twig_get_attribute($this->env, $this->source, ($context["alert_fields"] ?? null), "display_dates", [], "any", false, false, false, 58)) {
            // line 59
            echo "                    <div
                        ";
            // line 61
            echo "                        ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["alert_fields"] ?? null), "background_color", [], "any", false, false, false, 61), ["dark", "white", "yellow", "lime"])) {
                // line 62
                echo "                            class=\"text-muted\"
                        ";
            } else {
                // line 64
                echo "                            style=\"font-style: italic\"
                        ";
            }
            // line 66
            echo "                    >
                        ";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime(twig_get_attribute($this->env, $this->source, ($context["alert_fields"] ?? null), "date_start", [], "any", false, false, false, 67)), "html", null, true);
            echo "
                        ";
            // line 68
            if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["alert_fields"] ?? null), "date_start", [], "any", false, false, false, 68)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["alert_fields"] ?? null), "date_end", [], "any", false, false, false, 68)))) {
                // line 69
                echo "                            -
                        ";
            }
            // line 71
            echo "                        ";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime(twig_get_attribute($this->env, $this->source, ($context["alert_fields"] ?? null), "date_end", [], "any", false, false, false, 71)), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 74
        echo "                <div class=\"plugin_news_alert-content overflow-hidden\">
                    ";
        // line 75
        echo $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getSafeHtml(($context["content"] ?? null));
        echo "
                </div>
            </div>
        </div>
        ";
        // line 79
        if (($context["can_close"] ?? null)) {
            // line 80
            echo "            <a class=\"btn-close\" aria-label=\"close\" data-bs-dismiss=\"alert\"></a>
        ";
        }
        // line 82
        echo "    </div>
</div>

<script>
    (function () {
        // Accentuation color must have a lower opacity
        // Must be done in JS, we can't do a rgba on hex variables directly from css
        const background = \$('.alert-";
        // line 89
        echo twig_escape_filter($this->env, ($context["js_rand"] ?? null), "html", null, true);
        echo "').css('background-color');
        const accent = \$('.alert-";
        // line 90
        echo twig_escape_filter($this->env, ($context["js_rand"] ?? null), "html", null, true);
        echo "').css('border-left-color');

        // Do not add opacity if background and accent are identical (= no accent)
        if (background !== accent) {
            // Rewrite \"rgb(r,g,b)\" into \"rgba(r,g,b,0.6)\"
            \$('.alert-";
        // line 95
        echo twig_escape_filter($this->env, ($context["js_rand"] ?? null), "html", null, true);
        echo "').css(
                'border-left-color',
                \$('.alert-";
        // line 97
        echo twig_escape_filter($this->env, ($context["js_rand"] ?? null), "html", null, true);
        echo "').css('border-left-color')
                    .replace('rgb', 'rgba')
                    .replace(')', ', 0.6)')
            )
        }

        // ITIL form has a specified layout, we must always display the full size
        // alert.
        // The \"col-12\" class can't be directly used for this purpose because
        // a GLPI's core script will automatically replace it by \"col-6\" when
        // expending the sidebar.
        \$('form[id=\"itil-form\"]')
            .find('.plugin_news_alert')
            .addClass('w-100');
    })();
</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@news/display_alert.html.twig";
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
        return array (  180 => 97,  175 => 95,  167 => 90,  163 => 89,  154 => 82,  150 => 80,  148 => 79,  141 => 75,  138 => 74,  131 => 71,  127 => 69,  125 => 68,  121 => 67,  118 => 66,  114 => 64,  110 => 62,  107 => 61,  104 => 59,  102 => 58,  99 => 57,  95 => 55,  93 => 54,  89 => 53,  83 => 50,  76 => 46,  72 => 45,  66 => 42,  62 => 41,  58 => 40,  49 => 37,  47 => 36,  37 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("", "@news/display_alert.html.twig", "C:\\xampp\\htdocs\\glpi\\marketplace\\news\\templates\\display_alert.html.twig");
    }
}
