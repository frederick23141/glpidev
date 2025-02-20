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

/* @gantt/view.html.twig */
class __TwigTemplate_bd21d3484b524da1f8539bc4f693c8fa extends Template
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
<input type=\"hidden\" id=\"hf_gantt_item_state\" value=\"\" />
<div id=\"gantt-container\" class=\"gantt-block\" style=\"width:100%; height:63vh;\"></div>
<div class=\"gantt-block__features\">
   <ul class=\"gantt-block__controls mt-3\">
      <li class=\"gantt-menu-item gantt-menu-item-right\">
         <a href=\"#\" class=\"btn btn-outline-secondary btn-icon\" onclick=\"gantt.ext.fullscreen.toggle();\"
            title=\"";
        // line 35
        echo twig_escape_filter($this->env, __("Fullscreen", "gantt"), "html", null, true);
        echo "\" data-bs-toggle=\"tooltip\">
            <i class=\"fas fa-expand\"></i>
         </a>
      </li>

      <li class=\"gantt-menu-item gantt-menu-item-right\">
         <div class=\"btn-group flex-wrap\" role=\"group\">
            <span class=\"btn bg-blue-lt pe-none\" aria-disabled=\"true\">
               <i class=\"ti ti-file-export\"></i>
               <span>";
        // line 44
        echo twig_escape_filter($this->env, __("Export", "gantt"), "html", null, true);
        echo "</span>
            </span>

            <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, (($this->extensions['Glpi\Application\View\Extension\PluginExtension']->getPluginWebDir("gantt") . "/front/projectsexport.php?project_id=") . ($context["id"] ?? null)), "html", null, true);
        echo "\" target=\"_blank\" class=\"btn btn-outline-secondary\">";
        echo twig_escape_filter($this->env, __("JSON", "gantt"), "html", null, true);
        echo "</a>
         </div>

      </li>

      <li class=\"gantt-menu-item gantt-menu-item-right\">
         <div class=\"btn-group flex-wrap\" role=\"group\">
            <span class=\"btn bg-blue-lt pe-none\" aria-disabled=\"true\">
               <i class=\"fas fa-search-plus\"></i>
               <span>";
        // line 56
        echo twig_escape_filter($this->env, __("Zoom", "gantt"), "html", null, true);
        echo "</span>
            </span>

            <input type=\"radio\" id=\"scale1\" class=\"btn-check gantt_radio\" name=\"scale\" value=\"day\" checked />
            <label class=\"btn btn-outline-secondary\" for=\"scale1\">";
        // line 60
        echo twig_escape_filter($this->env, __("Days", "gantt"), "html", null, true);
        echo "</label>

            <input type=\"radio\" id=\"scale2\" class=\"btn-check gantt_radio\" name=\"scale\" value=\"week\" />
            <label class=\"btn btn-outline-secondary\" for=\"scale2\">";
        // line 63
        echo twig_escape_filter($this->env, __("Weeks", "gantt"), "html", null, true);
        echo "</label>

            <input type=\"radio\" id=\"scale3\" class=\"btn-check gantt_radio\" name=\"scale\" value=\"month\" checked />
            <label class=\"btn btn-outline-secondary\" for=\"scale3\">";
        // line 66
        echo twig_escape_filter($this->env, __("Months", "gantt"), "html", null, true);
        echo "</label>

            <input type=\"radio\" id=\"scale4\" class=\"btn-check gantt_radio\" name=\"scale\" value=\"quarter\" />
            <label class=\"btn btn-outline-secondary\" for=\"scale4\">";
        // line 69
        echo twig_escape_filter($this->env, __("Quarters", "gantt"), "html", null, true);
        echo "</label>

            <input type=\"radio\" id=\"scale5\" class=\"btn-check gantt_radio\" name=\"scale\" value=\"year\" />
            <label class=\"btn btn-outline-secondary\" for=\"scale5\">";
        // line 72
        echo twig_escape_filter($this->env, __("Years", "gantt"), "html", null, true);
        echo "</label>
         </div>

      </li>

      <li class=\"gantt-menu-item gantt-menu-item-right\">
         <div class=\"input-group\" role=\"group\">
            <input type=\"radio\" id=\"rb-find\" class=\"btn-check rb-optype gantt_radio\" name=\"rb-optype\" checked />
            <label class=\"btn btn-outline-secondary\" for=\"rb-find\">
               <i class=\"fas fa-search\"></i>
               <span>";
        // line 82
        echo twig_escape_filter($this->env, __("Find", "gantt"), "html", null, true);
        echo "</span>
            </label>

            <input type=\"radio\" id=\"rb-filter\" class=\"btn-check rb-optype gantt_radio\" name=\"rb-optype\" />
            <label class=\"btn btn-outline-secondary\" for=\"rb-filter\">
               <i class=\"fas fa-filter\"></i>
               <span>";
        // line 88
        echo twig_escape_filter($this->env, __("Filter", "gantt"), "html", null, true);
        echo "</span>
            </label>

            <input id=\"search\" data-text-filter type=\"field\" placeholder=\"";
        // line 91
        echo twig_escape_filter($this->env, __("by name", "gantt"), "html", null, true);
        echo "\"
                   class=\"form-control\"
                   oninput=\"gantt.\$doFilter(this.value);\" />
         </div>
      </li>
   </ul>
</div>

<script type=\"text/javascript\">
\$(function() {

   \$(document).ajaxSend(function(event, request, settings) {
      if (settings.url.indexOf('gantt.php') != -1) {
         \$('#gantt-loader, #gantt-loader-overlay').fadeIn('fast');
      }
   });

   \$(document).ajaxStop(function (event, request, settings) {
      \$('#gantt-loader, #gantt-loader-overlay').fadeOut('fast');
   });

   GlpiGantt.init(\"";
        // line 112
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\");

   \$('.gantt-block').append('<div id=\"gantt-loader\" class=\"spin-center\"></div>');
   \$('#page').append('<div id=\"gantt-loader-overlay\" style=\"display: none;\"></div>');

});
</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@gantt/view.html.twig";
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
        return array (  161 => 112,  137 => 91,  131 => 88,  122 => 82,  109 => 72,  103 => 69,  97 => 66,  91 => 63,  85 => 60,  78 => 56,  64 => 47,  58 => 44,  46 => 35,  37 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("", "@gantt/view.html.twig", "C:\\xampp\\htdocs\\glpi\\marketplace\\gantt\\templates\\view.html.twig");
    }
}
