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

/* pages/tools/project_task.html.twig */
class __TwigTemplate_0c5138c8c81ea3bc34ef061adc918a92 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'form_fields' => [$this, 'block_form_fields'],
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "pages/tools/project_task.html.twig", 35)->unwrap();
        // line 37
        $context["form_id"] = ("project_task_" . ($context["rand"] ?? null));
        // line 38
        $context["content_field_id"] = ("content_" . ($context["rand"] ?? null));
        // line 39
        $context["params"] = ["formoptions" => (("id=\"" .         // line 40
($context["form_id"] ?? null)) . "\"")];
        // line 34
        $this->parent = $this->loadTemplate("generic_show_form.html.twig", "pages/tools/project_task.html.twig", 34);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 43
    public function block_form_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "
    ";
        // line 45
        echo twig_call_macro($macros["fields"], "macro_dropdownField", ["ProjectTaskTemplate", "projecttasktemplates_id", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 48
($context["item"] ?? null), "fields", [], "any", false, false, false, 48), "projecttasktemplates_id", [], "any", false, false, false, 48), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("ProjectTaskTemplate"), ["entity" => twig_get_attribute($this->env, $this->source,         // line 51
($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 51), "on_change" => "projecttasktemplate_update(this.value)"]], 45, $context, $this->getSourceContext());
        // line 54
        echo "

    <script>
        const form = \$('#";
        // line 57
        echo twig_escape_filter($this->env, ($context["form_id"] ?? null), "html", null, true);
        echo "');
        function projecttasktemplate_update(value) {
            \$.ajax({
                url: CFG_GLPI.root_doc + \"/ajax/projecttask.php\",
                type: \"POST\",
                data: {
                    projecttasktemplates_id: value
                }
            }).done(function(data) {
                // Set simple inputs
                form.find('input[name=name]').val(data.name);
                form.find('textarea[name=comment]').val(data.comments);

                // Set flatpickr dates
                form.find('input[name=plan_start_date]').parent()[0]._flatpickr.setDate(data.plan_start_date);
                form.find('input[name=plan_end_date]').parent()[0]._flatpickr.setDate(data.plan_end_date);
                form.find('input[name=real_start_date]').parent()[0]._flatpickr.setDate(data.real_start_date);
                form.find('input[name=real_end_date]').parent()[0]._flatpickr.setDate(data.real_end_date);

                // Set content
                setRichTextEditorContent(\"";
        // line 77
        echo twig_escape_filter($this->env, ($context["content_field_id"] ?? null), "html", null, true);
        echo "\", data.description);

                // Set dropdowns and dates
                form.find('select[name=projecttasks_id]').trigger(\"setValue\", data.projecttasks_id);
                form.find('select[name=projectstates_id]').trigger(\"setValue\", data.projectstates_id);
                form.find('select[name=projecttasktypes_id]').trigger(\"setValue\", data.projecttasktypes_id);
                form.find('select[name=percent_done]').trigger(\"setValue\", data.percent_done);
                form.find('select[name=is_milestone]').trigger(\"setValue\", data.is_milestone);
                form.find('select[name=effective_duration]').trigger(\"setValue\", data.effective_duration);
                form.find('select[name=planned_duration]').trigger(\"setValue\", data.planned_duration);
            });
         }
    </script>

    ";
        // line 91
        echo twig_call_macro($macros["fields"], "macro_nullField", [], 91, $context, $this->getSourceContext());
        echo "

    ";
        // line 93
        ob_start(function () { return ''; });
        // line 94
        echo "        <span class=\"col-form-label d-inline-flex\">";
        echo twig_get_attribute($this->env, $this->source, ($context["parent"] ?? null), "getLink", [], "method", false, false, false, 94);
        echo "</span>
    ";
        $context["project_link"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 96
        echo "    ";
        echo twig_call_macro($macros["fields"], "macro_field", ["_project",         // line 98
($context["project_link"] ?? null), twig_get_attribute($this->env, $this->source,         // line 99
($context["parent"] ?? null), "getTypeName", [], "method", false, false, false, 99)], 96, $context, $this->getSourceContext());
        // line 100
        echo "

    ";
        // line 102
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewID", [($context["id"] ?? null)], "method", false, false, false, 102)) {
            // line 103
            echo "        <input type='hidden' name='projects_id' value='";
            echo twig_escape_filter($this->env, ($context["projects_id"] ?? null), "html", null, true);
            echo "'>
        <input type='hidden' name='is_recursive' value='";
            // line 104
            echo twig_escape_filter($this->env, ($context["recursive"] ?? null), "html", null, true);
            echo "'>
    ";
        }
        // line 106
        echo "
    ";
        // line 107
        echo twig_call_macro($macros["fields"], "macro_dropdownField", ["ProjectTask", "projecttasks_id",         // line 110
($context["projecttasks_id"] ?? null), __("As child of"), ["entity" => twig_get_attribute($this->env, $this->source,         // line 113
($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 113), "condition" => ["glpi_projecttasks.projects_id" =>         // line 114
($context["projects_id"] ?? null)], "used" => [twig_get_attribute($this->env, $this->source,         // line 115
($context["item"] ?? null), "getID", [], "method", false, false, false, 115)]]], 107, $context, $this->getSourceContext());
        // line 117
        echo "

    ";
        // line 119
        echo twig_call_macro($macros["fields"], "macro_textField", ["name", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 121
($context["item"] ?? null), "fields", [], "any", false, false, false, 121), "name", [], "any", false, false, false, 121), __("Name")], 119, $context, $this->getSourceContext());
        // line 123
        echo "

    ";
        // line 125
        echo twig_call_macro($macros["fields"], "macro_nullField", [], 125, $context, $this->getSourceContext());
        echo "

    ";
        // line 127
        echo twig_call_macro($macros["fields"], "macro_dropdownField", ["ProjectState", "projectstates_id", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 130
($context["item"] ?? null), "fields", [], "any", false, false, false, 130), "projectstates_id", [], "any", false, false, false, 130), _x("item", "State")], 127, $context, $this->getSourceContext());
        // line 132
        echo "

    ";
        // line 134
        echo twig_call_macro($macros["fields"], "macro_dropdownField", ["ProjectTaskType", "projecttasktypes_id", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 137
($context["item"] ?? null), "fields", [], "any", false, false, false, 137), "projecttasktypes_id", [], "any", false, false, false, 137), _n("Type", "Types", 1)], 134, $context, $this->getSourceContext());
        // line 139
        echo "

    ";
        // line 141
        echo twig_call_macro($macros["fields"], "macro_dropdownNumberField", ["percent_done", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 143
($context["item"] ?? null), "fields", [], "any", false, false, false, 143), "percent_done", [], "any", false, false, false, 143), __("Percent done"), twig_array_merge(["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 146
($context["item"] ?? null), "fields", [], "any", false, false, false, 146), "percent_done", [], "any", false, false, false, 146), "min" => 0, "max" => 100, "step" => 5, "unit" => "%"], ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 151
($context["item"] ?? null), "fields", [], "any", false, false, false, 151), "auto_percent_done", [], "any", false, false, false, 151)) ? (["specific_tags" => ["disabled" => "disabled"]]) : ([])))], 141, $context, $this->getSourceContext());
        // line 152
        echo "

    ";
        // line 154
        ob_start(function () { return ''; });
        // line 155
        echo "        ";
        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::showToolTip", [__("When automatic computation is active, percentage is computed based on the average of all child task percent done.")]);
        // line 158
        echo "    ";
        $context["tooltip"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 159
        echo "    ";
        echo twig_call_macro($macros["fields"], "macro_checkboxField", ["auto_percent_done", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 161
($context["item"] ?? null), "fields", [], "any", false, false, false, 161), "auto_percent_done", [], "any", false, false, false, 161), __("Automatically calculate"), ["add_field_html" =>         // line 164
($context["tooltip"] ?? null)]], 159, $context, $this->getSourceContext());
        // line 166
        echo "
    <script>
        form.find(\"input[name=auto_percent_done]\").on('change', function() {
            \$(\"select[name='percent_done']\").prop('disabled', \$(\"input[name='auto_percent_done']\").eq(1).prop('checked'));
        });
    </script>

    ";
        // line 173
        echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["is_milestone", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 175
($context["item"] ?? null), "fields", [], "any", false, false, false, 175), "is_milestone", [], "any", false, false, false, 175), __("Milestone")], 173, $context, $this->getSourceContext());
        // line 177
        echo "
    <script>
        form.find('select[name=is_milestone]').on('change', function() {
            \$('.is_milestone').toggleClass('d-none', Boolean(Number(this.value)));
        });
    </script>

    ";
        // line 184
        echo twig_call_macro($macros["fields"], "macro_nullField", [], 184, $context, $this->getSourceContext());
        echo "

    <div class=\"hr-text\">
        <i class=\"ti ti-calendar-event\"></i>
        <span>";
        // line 188
        echo twig_escape_filter($this->env, __("Planning"), "html", null, true);
        echo "</span>
    </div>

    ";
        // line 191
        echo twig_call_macro($macros["fields"], "macro_datetimeField", ["plan_start_date", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 193
($context["item"] ?? null), "fields", [], "any", false, false, false, 193), "plan_start_date", [], "any", false, false, false, 193), __("Planned start date")], 191, $context, $this->getSourceContext());
        // line 195
        echo "

    ";
        // line 197
        echo twig_call_macro($macros["fields"], "macro_datetimeField", ["real_start_date", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 199
($context["item"] ?? null), "fields", [], "any", false, false, false, 199), "real_start_date", [], "any", false, false, false, 199), __("Real start date")], 197, $context, $this->getSourceContext());
        // line 201
        echo "

    ";
        // line 203
        echo twig_call_macro($macros["fields"], "macro_datetimeField", ["plan_end_date", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 205
($context["item"] ?? null), "fields", [], "any", false, false, false, 205), "plan_end_date", [], "any", false, false, false, 205), __("Planned end date"), ["field_class" => ("col-12 col-sm-6 is_milestone " . ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 208
($context["item"] ?? null), "fields", [], "any", false, false, false, 208), "is_milestone", [], "any", false, false, false, 208)) ? ("d-none") : ("")))]], 203, $context, $this->getSourceContext());
        // line 210
        echo "

    ";
        // line 212
        echo twig_call_macro($macros["fields"], "macro_datetimeField", ["real_end_date", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 214
($context["item"] ?? null), "fields", [], "any", false, false, false, 214), "real_end_date", [], "any", false, false, false, 214), __("Real end date"), ["field_class" => ("col-12 col-sm-6 is_milestone " . ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 217
($context["item"] ?? null), "fields", [], "any", false, false, false, 217), "is_milestone", [], "any", false, false, false, 217)) ? ("d-none") : ("")))]], 212, $context, $this->getSourceContext());
        // line 219
        echo "

    ";
        // line 221
        echo twig_call_macro($macros["fields"], "macro_dropdownTimestampField", ["planned_duration", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 223
($context["item"] ?? null), "fields", [], "any", false, false, false, 223), "planned_duration", [], "any", false, false, false, 223), __("Planned duration"), ["min" => 0, "max" => (8 * twig_constant("HOUR_TIMESTAMP")), "addfirstminutes" => true, "inhours" => true, "toadd" =>         // line 230
($context["duration_dropdown_to_add"] ?? null), "field_class" => ("col-12 col-sm-6 is_milestone " . ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 231
($context["item"] ?? null), "fields", [], "any", false, false, false, 231), "is_milestone", [], "any", false, false, false, 231)) ? ("d-none") : ("")))]], 221, $context, $this->getSourceContext());
        // line 233
        echo "

    ";
        // line 235
        echo twig_call_macro($macros["fields"], "macro_dropdownTimestampField", ["effective_duration", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 237
($context["item"] ?? null), "fields", [], "any", false, false, false, 237), "effective_duration", [], "any", false, false, false, 237), __("Effective duration"), ["min" => 0, "max" => (8 * twig_constant("HOUR_TIMESTAMP")), "addfirstminutes" => true, "inhours" => true, "toadd" =>         // line 244
($context["duration_dropdown_to_add"] ?? null), "field_class" => ("col-12 col-sm-6 is_milestone " . ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 245
($context["item"] ?? null), "fields", [], "any", false, false, false, 245), "is_milestone", [], "any", false, false, false, 245)) ? ("d-none") : ("")))]], 235, $context, $this->getSourceContext());
        // line 247
        echo "

    ";
        // line 249
        if (($context["id"] ?? null)) {
            // line 250
            echo "        ";
            ob_start(function () { return ''; });
            // line 251
            echo "            <span class=\"fw-normal col-form-label d-inline-flex \">";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDuration(($context["duration"] ?? null), false), "html", null, true);
            echo "</span>
        ";
            $context["ticket_duration"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 253
            echo "        ";
            echo twig_call_macro($macros["fields"], "macro_field", ["_ticket_duration",             // line 255
($context["ticket_duration"] ?? null), __("Tickets duration")], 253, $context, $this->getSourceContext());
            // line 257
            echo "

        ";
            // line 259
            ob_start(function () { return ''; });
            // line 260
            echo "            <span class=\"fw-normal col-form-label d-inline-flex \">";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDuration((($context["duration"] ?? null) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 260), "effective_duration", [], "any", false, false, false, 260)), false), "html", null, true);
            echo "</span>
        ";
            $context["total_duration"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 262
            echo "        ";
            echo twig_call_macro($macros["fields"], "macro_field", ["_total_duration",             // line 264
($context["total_duration"] ?? null), __("Total duration")], 262, $context, $this->getSourceContext());
            // line 266
            echo "
    ";
        }
        // line 268
        echo "
    <div class=\"hr-text\">
        <i class=\"ti ti-file-description\"></i>
        <span>";
        // line 271
        echo twig_escape_filter($this->env, __("Details"), "html", null, true);
        echo "</span>
    </div>

    ";
        // line 274
        echo twig_call_macro($macros["fields"], "macro_textareaField", ["content", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 276
($context["item"] ?? null), "fields", [], "any", false, false, false, 276), "content", [], "any", false, false, false, 276), __("Description"), ["name" => "content", "enable_richtext" => true, "id" =>         // line 281
($context["content_field_id"] ?? null), "label_class" => "col-xxl-2", "input_class" => "col-xxl-10", "field_class" => "col-12"]], 274, $context, $this->getSourceContext());
        // line 286
        echo "

    ";
        // line 288
        echo twig_call_macro($macros["fields"], "macro_textareaField", ["comment", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 290
($context["item"] ?? null), "fields", [], "any", false, false, false, 290), "comment", [], "any", false, false, false, 290), __("Comments"), ["label_class" => "col-xxl-2", "input_class" => "col-xxl-10", "field_class" => "col-12"]], 288, $context, $this->getSourceContext());
        // line 297
        echo "

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/tools/project_task.html.twig";
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
        return array (  346 => 297,  344 => 290,  343 => 288,  339 => 286,  337 => 281,  336 => 276,  335 => 274,  329 => 271,  324 => 268,  320 => 266,  318 => 264,  316 => 262,  310 => 260,  308 => 259,  304 => 257,  302 => 255,  300 => 253,  294 => 251,  291 => 250,  289 => 249,  285 => 247,  283 => 245,  282 => 244,  281 => 237,  280 => 235,  276 => 233,  274 => 231,  273 => 230,  272 => 223,  271 => 221,  267 => 219,  265 => 217,  264 => 214,  263 => 212,  259 => 210,  257 => 208,  256 => 205,  255 => 203,  251 => 201,  249 => 199,  248 => 197,  244 => 195,  242 => 193,  241 => 191,  235 => 188,  228 => 184,  219 => 177,  217 => 175,  216 => 173,  207 => 166,  205 => 164,  204 => 161,  202 => 159,  199 => 158,  196 => 155,  194 => 154,  190 => 152,  188 => 151,  187 => 146,  186 => 143,  185 => 141,  181 => 139,  179 => 137,  178 => 134,  174 => 132,  172 => 130,  171 => 127,  166 => 125,  162 => 123,  160 => 121,  159 => 119,  155 => 117,  153 => 115,  152 => 114,  151 => 113,  150 => 110,  149 => 107,  146 => 106,  141 => 104,  136 => 103,  134 => 102,  130 => 100,  128 => 99,  127 => 98,  125 => 96,  119 => 94,  117 => 93,  112 => 91,  95 => 77,  72 => 57,  67 => 54,  65 => 51,  64 => 48,  63 => 45,  60 => 44,  56 => 43,  51 => 34,  49 => 40,  48 => 39,  46 => 38,  44 => 37,  42 => 35,  35 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/tools/project_task.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\pages\\tools\\project_task.html.twig");
    }
}
