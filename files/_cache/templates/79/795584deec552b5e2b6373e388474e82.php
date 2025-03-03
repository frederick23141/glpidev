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

/* pages/admin/inventory/upload_form.html.twig */
class __TwigTemplate_eb45bcc74a091298f38d0d103e92b910 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "pages/admin/inventory/upload_form.html.twig", 34)->unwrap();
        // line 35
        echo "
<form method='POST' enctype='multipart/form-data'>
    <h2>
        ";
        // line 38
        echo twig_escape_filter($this->env, __("Import inventory files"), "html", null, true);
        echo "
    </h2>
    <div class=\"alert alert-info\" role=\"alert\">
        <p>
            ";
        // line 42
        echo twig_escape_filter($this->env, twig_sprintf(__("You can use this menu to upload one or several inventory files. Files must have a known extension (%1\$s).
"), twig_join_filter(($context["inventory_extensions"] ?? null), ", ")), "html", null, true);
        echo "<br>
            ";
        // line 43
        echo twig_escape_filter($this->env, __("It is also possible to upload a compressed archive directly with a collection of inventory files."), "html", null, true);
        echo "
        </p>
    </div>
    ";
        // line 46
        echo twig_call_macro($macros["fields"], "macro_fileField", ["inventory_files[]", "", "", ["is_horizontal" => true, "simple" => true, "no_label" => true, "multiple" => true, "required" => true]], 46, $context, $this->getSourceContext());
        // line 57
        echo "

    <button class=\"btn btn-primary me-2\" type=\"submit\"
            name=\"upload_inventory\" value=\"1\">
        <i class=\"ti ti-upload\"></i>
        <span>";
        // line 62
        echo twig_escape_filter($this->env, _x("button", "Upload"), "html", null, true);
        echo "</span>
    </button>

    <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
        echo "\" />
</form>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/admin/inventory/upload_form.html.twig";
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
        return array (  80 => 65,  74 => 62,  67 => 57,  65 => 46,  59 => 43,  54 => 42,  47 => 38,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/admin/inventory/upload_form.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\pages\\admin\\inventory\\upload_form.html.twig");
    }
}
