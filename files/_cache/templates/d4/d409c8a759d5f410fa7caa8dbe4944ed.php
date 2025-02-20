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

/* components/kanban/kanban.html.twig */
class __TwigTemplate_1bb77582911b7dd1f2cfbeb46a7e5f7f extends Template
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
        $macros["modals"] = $this->macros["modals"] = $this->loadTemplate("components/form/modals_macros.html.twig", "components/kanban/kanban.html.twig", 34)->unwrap();
        // line 35
        echo "
";
        // line 36
        if ( !array_key_exists("rights", $context)) {
            // line 37
            echo "   ";
            $context["rights"] = ["create_item" => false, "delete_item" => false, "create_column" => false, "modify_view" => false, "order_card" => false, "create_card_limited_columns" => [0]];
        }
        // line 46
        echo "
<div id=\"kanban\" class=\"kanban\"></div>
";
        // line 48
        echo twig_call_macro($macros["modals"], "macro_modal", ["", "", ["id" => "kanban-modal"]], 48, $context, $this->getSourceContext());
        // line 50
        echo "

";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["supported_itemtypes"] ?? null));
        foreach ($context['_seq'] as $context["supported_itemtype"] => $context["info"]) {
            // line 53
            echo "   <template id=\"kanban-teammember-item-dropdown-";
            echo twig_escape_filter($this->env, $context["supported_itemtype"], "html", null, true);
            echo "\">
   </template>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['supported_itemtype'], $context['info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "
<script>
   \$(function(){
      // Create Kanban
      var kanban = new GLPIKanban({
         element: \"#";
        // line 61
        echo twig_escape_filter($this->env, ((array_key_exists("kanban_id", $context)) ? (_twig_default_filter(($context["kanban_id"] ?? null), "kanban")) : ("kanban")), "html", null, true);
        echo "\",
         rights: ";
        // line 62
        echo json_encode(($context["rights"] ?? null));
        echo ",
         supported_itemtypes: ";
        // line 63
        echo json_encode(($context["supported_itemtypes"] ?? null));
        echo ",
         max_team_images: 3,
         column_field: ";
        // line 65
        echo json_encode(($context["column_field"] ?? null));
        echo ",
         background_refresh_interval: ";
        // line 66
        echo twig_escape_filter($this->env, ((array_key_exists("background_refresh_interval", $context)) ? (_twig_default_filter(($context["background_refresh_interval"] ?? null), $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpirefresh_views"))) : ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpirefresh_views"))), "html", null, true);
        echo ",
         item: ";
        // line 67
        echo json_encode(($context["item"] ?? null));
        echo ",
         supported_filters: ";
        // line 68
        echo json_encode(($context["supported_filters"] ?? null));
        echo ",
         display_initials: ";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->getEntityConfig("display_users_initials", $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")), "html", null, true);
        echo ",
      });
      // Create kanban elements and add data
      kanban.init();
   });
</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/kanban/kanban.html.twig";
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
        return array (  111 => 69,  107 => 68,  103 => 67,  99 => 66,  95 => 65,  90 => 63,  86 => 62,  82 => 61,  75 => 56,  65 => 53,  61 => 52,  57 => 50,  55 => 48,  51 => 46,  47 => 37,  45 => 36,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/kanban/kanban.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\kanban\\kanban.html.twig");
    }
}
