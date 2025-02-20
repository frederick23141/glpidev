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

/* components/kanban/teammember.html.twig */
class __TwigTemplate_eb01231606667a222551f630397b409d extends Template
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
        // line 33
        echo "
";
        // line 34
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/kanban/teammember.html.twig", 34)->unwrap();
        // line 35
        echo "
";
        // line 36
        $context["rand"] = twig_random($this->env);
        // line 37
        echo "
";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["members_types"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 39
            echo "    ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", [            // line 40
$context["type"], (            // line 41
$context["type"] . "list"), [], $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName(            // line 43
$context["type"]), ["entity" => (($__internal_compile_0 = twig_get_attribute($this->env, $this->source,             // line 45
($context["item"] ?? null), "fields", [], "any", false, false, false, 45)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["entities_id"] ?? null) : null), "right" => "interface", "rand" =>             // line 47
($context["rand"] ?? null), "multiple" => true, "values" => []]], 39, $context, $this->getSourceContext());
            // line 51
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "<div class=\"form-group\" id=\"members_list_";
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "\">
<div>

<script>
    \$(document).ready(function() {
        ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["members_types"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 59
            echo "            \$('#dropdown_";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "list__";
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "').change(function() {
                \$(this).find('option:selected').each(function() {
                    let items_id = \$(this).val();
                    let role = '';
                    \$('<input>').attr({
                        type: 'hidden',
                        class: 'actor_entry',
                        'data-itemtype': \"";
            // line 66
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "\",
                        'data-items-id': items_id,
                        'data-actortype': role
                    }).appendTo('#members_list_";
            // line 69
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "');
                });
            });
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "    });
</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/kanban/teammember.html.twig";
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
        return array (  111 => 73,  101 => 69,  95 => 66,  82 => 59,  78 => 58,  69 => 53,  62 => 51,  60 => 47,  59 => 45,  58 => 43,  57 => 41,  56 => 40,  54 => 39,  50 => 38,  47 => 37,  45 => 36,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/kanban/teammember.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\kanban\\teammember.html.twig");
    }
}
