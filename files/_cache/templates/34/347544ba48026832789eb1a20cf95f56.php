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

/* components/form/item_device.html.twig */
class __TwigTemplate_a33529caa4a906c4ad429158c5f9a10f extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/form/item_device.html.twig", 34)->unwrap();
        // line 35
        $context["no_header"] = ((array_key_exists("no_header", $context)) ? (_twig_default_filter(($context["no_header"] ?? null), ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 35) &&  !((twig_get_attribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", true, true, false, 35)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", false, false, false, 35), false)) : (false))))) : (( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 35) &&  !((twig_get_attribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", true, true, false, 35)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", false, false, false, 35), false)) : (false)))));
        // line 36
        $context["bg"] = "";
        // line 37
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isDeleted", [], "method", false, false, false, 37)) {
            // line 38
            echo "   ";
            $context["bg"] = "asset-deleted";
        }
        // line 40
        echo "
<div class=\"asset ";
        // line 41
        echo twig_escape_filter($this->env, ($context["bg"] ?? null), "html", null, true);
        echo "\">
   ";
        // line 42
        echo twig_include($this->env, $context, "components/form/header.html.twig", ["in_twig" => true]);
        echo "

   ";
        // line 44
        $context["params"] = (($context["params"]) ?? ([]));
        // line 45
        echo "   ";
        $context["field_options"] = ["locked_fields" => twig_get_attribute($this->env, $this->source,         // line 46
($context["item"] ?? null), "getLockedFields", [], "method", false, false, false, 46)];
        // line 48
        echo "
   <div class=\"card-body d-flex flex-wrap\">
      <div class=\"col-12 col-xxl-12 flex-column\">
         <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
            <div class=\"row flex-row align-items-start flex-grow-1\">
               <div class=\"row flex-row\">
                  <script>
                     function showField(item) {
                        // BC - Remove in 10.1
                        showDisclosablePasswordField(item);
                     }
                     function hideField(item) {
                        // BC - Remove in 10.1
                        hideDisclosablePasswordField(item);
                     }
                     function copyToClipboard(item) {
                        // BC - Remove in 10.1
                        copyDisclosablePasswordFieldToClipboard(item);
                     }
                  </script>

                  ";
        // line 69
        $context["field_options"] = twig_array_merge(($context["field_options"] ?? null), ($context["params"] ?? null));
        // line 70
        echo "
                  <input type=\"hidden\" name=";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PhpExtension']->getStatic(($context["item"] ?? null), "itemtype_1"), "html", null, true);
        echo " value=";
        echo twig_escape_filter($this->env, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 71)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$this->extensions['Glpi\Application\View\Extension\PhpExtension']->getStatic(($context["item"] ?? null), "itemtype_1")] ?? null) : null), "html", null, true);
        echo ">



                  ";
        // line 75
        if (($context["item1"] ?? null)) {
            // line 76
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_htmlField", [$this->extensions['Glpi\Application\View\Extension\PhpExtension']->getStatic(            // line 77
($context["item"] ?? null), "itemtype_1"), twig_get_attribute($this->env, $this->source,             // line 78
($context["item1"] ?? null), "getLink", [], "method", false, false, false, 78), twig_get_attribute($this->env, $this->source,             // line 79
($context["item1"] ?? null), "getTypeName", [1], "method", false, false, false, 79),             // line 80
($context["field_options"] ?? null)], 76, $context, $this->getSourceContext());
            // line 81
            echo "
                  ";
        } else {
            // line 83
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_htmlField", ["", __("No associated item"), __("Itemtype"),             // line 87
($context["field_options"] ?? null)], 83, $context, $this->getSourceContext());
            // line 88
            echo "
                  ";
        }
        // line 90
        echo "
                  ";
        // line 91
        if (($context["device"] ?? null)) {
            // line 92
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_htmlField", [$this->extensions['Glpi\Application\View\Extension\PhpExtension']->getStatic(            // line 93
($context["item"] ?? null), "itemtype_2"), twig_get_attribute($this->env, $this->source,             // line 94
($context["device"] ?? null), "getLink", [], "method", false, false, false, 94), _n("Component", "Components", 1),             // line 96
($context["field_options"] ?? null)], 92, $context, $this->getSourceContext());
            // line 97
            echo "
                  ";
        } else {
            // line 99
            echo "                     ";
            $context["dropdown_itemtype"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("getItemtypeForForeignKeyField", [$this->extensions['Glpi\Application\View\Extension\PhpExtension']->getStatic(($context["item"] ?? null), "items_id_2")]);
            // line 100
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", [            // line 101
($context["dropdown_itemtype"] ?? null), $this->extensions['Glpi\Application\View\Extension\PhpExtension']->getStatic(            // line 102
($context["item"] ?? null), "items_id_2"), (($__internal_compile_1 = twig_get_attribute($this->env, $this->source,             // line 103
($context["item"] ?? null), "fields", [], "any", false, false, false, 103)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$this->extensions['Glpi\Application\View\Extension\PhpExtension']->getStatic(($context["item"] ?? null), "items_id_2")] ?? null) : null), _n("Component", "Components", 1),             // line 105
($context["field_options"] ?? null)], 100, $context, $this->getSourceContext());
            // line 106
            echo "
                  ";
        }
        // line 108
        echo "
                  ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["specificities_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["specificities"]) {
            // line 110
            echo "                     ";
            if ((($__internal_compile_2 = $context["specificities"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["canread"] ?? null) : null)) {
                // line 111
                echo "
                        ";
                // line 112
                $context["specific_field_options"] = ($context["field_options"] ?? null);
                // line 113
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["specificities"], "tooltip", [], "array", true, true, false, 113)) {
                    // line 114
                    echo "                           ";
                    $context["specific_field_options"] = twig_array_merge(($context["specific_field_options"] ?? null), ["helper" => (($__internal_compile_3 = $context["specificities"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["tooltip"] ?? null) : null)]);
                    // line 115
                    echo "                        ";
                }
                // line 116
                echo "
                        ";
                // line 117
                if (((($__internal_compile_4 = $context["specificities"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["datatype"] ?? null) : null) == "dropdown")) {
                    // line 118
                    echo "                           ";
                    $context["dropdown_itemtype"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("getItemtypeForForeignKeyField", [(($__internal_compile_5 = $context["specificities"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["field"] ?? null) : null)]);
                    // line 119
                    echo "                           ";
                    echo twig_call_macro($macros["fields"], "macro_dropdownField", [                    // line 120
($context["dropdown_itemtype"] ?? null), (($__internal_compile_6 =                     // line 121
$context["specificities"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["field"] ?? null) : null), (($__internal_compile_7 =                     // line 122
$context["specificities"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["value"] ?? null) : null), (($__internal_compile_8 =                     // line 123
$context["specificities"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["label"] ?? null) : null), twig_array_merge((($__internal_compile_9 =                     // line 124
$context["specificities"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["dropdown_options"] ?? null) : null), ($context["specific_field_options"] ?? null))], 119, $context, $this->getSourceContext());
                    // line 125
                    echo "
                        ";
                } elseif ((($__internal_compile_10 =                 // line 126
$context["specificities"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["protected"] ?? null) : null)) {
                    // line 127
                    echo "                           ";
                    echo twig_call_macro($macros["fields"], "macro_passwordField", [(($__internal_compile_11 =                     // line 128
$context["specificities"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["field"] ?? null) : null), (($__internal_compile_12 =                     // line 129
$context["specificities"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["value"] ?? null) : null), (($__internal_compile_13 =                     // line 130
$context["specificities"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["label"] ?? null) : null), twig_array_merge(                    // line 131
($context["specific_field_options"] ?? null), ["id" => (($__internal_compile_14 =                     // line 132
$context["specificities"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["protected_field_id"] ?? null) : null), "is_disclosable" => true])], 127, $context, $this->getSourceContext());
                    // line 135
                    echo "
                        ";
                } elseif (((($__internal_compile_15 =                 // line 136
$context["specificities"]) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["datatype"] ?? null) : null) == "integer")) {
                    // line 137
                    echo "                           ";
                    echo twig_call_macro($macros["fields"], "macro_numberField", [(($__internal_compile_16 =                     // line 138
$context["specificities"]) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["field"] ?? null) : null), (($__internal_compile_17 =                     // line 139
$context["specificities"]) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["value"] ?? null) : null), (($__internal_compile_18 =                     // line 140
$context["specificities"]) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["label"] ?? null) : null),                     // line 141
($context["specific_field_options"] ?? null)], 137, $context, $this->getSourceContext());
                    // line 142
                    echo "
                        ";
                } else {
                    // line 144
                    echo "                           ";
                    echo twig_call_macro($macros["fields"], "macro_textField", [(($__internal_compile_19 =                     // line 145
$context["specificities"]) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["field"] ?? null) : null), (($__internal_compile_20 =                     // line 146
$context["specificities"]) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["value"] ?? null) : null), (($__internal_compile_21 =                     // line 147
$context["specificities"]) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["label"] ?? null) : null),                     // line 148
($context["specific_field_options"] ?? null)], 144, $context, $this->getSourceContext());
                    // line 149
                    echo "
                        ";
                }
                // line 151
                echo "                     ";
            }
            // line 152
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['specificities'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        echo "
                  ";
        // line 154
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["serial"], "method", false, false, false, 154)) {
            // line 155
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_textField", ["serial", (($__internal_compile_22 = twig_get_attribute($this->env, $this->source,             // line 157
($context["item"] ?? null), "fields", [], "any", false, false, false, 157)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["serial"] ?? null) : null), __("Serial number"),             // line 159
($context["field_options"] ?? null)], 155, $context, $this->getSourceContext());
            // line 160
            echo "
                  ";
        }
        // line 162
        echo "
                  ";
        // line 163
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["otherserial"], "method", false, false, false, 163)) {
            // line 164
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["otherserial",             // line 166
($context["item"] ?? null), __("Inventory number"), 0,             // line 169
($context["field_options"] ?? null)], 164, $context, $this->getSourceContext());
            // line 170
            echo "
                  ";
        }
        // line 172
        echo "
                  ";
        // line 173
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["locations_id"], "method", false, false, false, 173)) {
            // line 174
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Location", "locations_id", (($__internal_compile_23 = twig_get_attribute($this->env, $this->source,             // line 177
($context["item"] ?? null), "fields", [], "any", false, false, false, 177)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["locations_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Location"), twig_array_merge(            // line 179
($context["field_options"] ?? null), ["entity" => (($__internal_compile_24 = twig_get_attribute($this->env, $this->source,             // line 180
($context["item"] ?? null), "fields", [], "any", false, false, false, 180)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["entities_id"] ?? null) : null)])], 174, $context, $this->getSourceContext());
            // line 182
            echo "
                  ";
        }
        // line 184
        echo "
                  ";
        // line 185
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["states_id"], "method", false, false, false, 185)) {
            // line 186
            echo "                     ";
            $context["condition"] = ((twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 186), $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("state_types"))) ? ([("is_visible_" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 186))) => 1]) : ([]));
            // line 187
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["State", "states_id", (($__internal_compile_25 = twig_get_attribute($this->env, $this->source,             // line 190
($context["item"] ?? null), "fields", [], "any", false, false, false, 190)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["states_id"] ?? null) : null), __("Status"), twig_array_merge(            // line 192
($context["field_options"] ?? null), ["entity" => (($__internal_compile_26 = twig_get_attribute($this->env, $this->source,             // line 193
($context["item"] ?? null), "fields", [], "any", false, false, false, 193)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["entities_id"] ?? null) : null), "condition" =>             // line 194
($context["condition"] ?? null)])], 187, $context, $this->getSourceContext());
            // line 196
            echo "
                  ";
        }
        // line 198
        echo "
                  ";
        // line 199
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["users_id"], "method", false, false, false, 199)) {
            // line 200
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["User", "users_id", (($__internal_compile_27 = twig_get_attribute($this->env, $this->source,             // line 203
($context["item"] ?? null), "fields", [], "any", false, false, false, 203)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["users_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("User"), twig_array_merge(            // line 205
($context["field_options"] ?? null), ["entity" => (($__internal_compile_28 = twig_get_attribute($this->env, $this->source,             // line 206
($context["item"] ?? null), "fields", [], "any", false, false, false, 206)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["entities_id"] ?? null) : null), "right" => "all"])], 200, $context, $this->getSourceContext());
            // line 209
            echo "
                  ";
        }
        // line 211
        echo "
                  ";
        // line 212
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["groups_id"], "method", false, false, false, 212)) {
            // line 213
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Group", "groups_id", (($__internal_compile_29 = twig_get_attribute($this->env, $this->source,             // line 216
($context["item"] ?? null), "fields", [], "any", false, false, false, 216)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["groups_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Group"), twig_array_merge(            // line 218
($context["field_options"] ?? null), ["entity" => (($__internal_compile_30 = twig_get_attribute($this->env, $this->source,             // line 219
($context["item"] ?? null), "fields", [], "any", false, false, false, 219)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["entities_id"] ?? null) : null), "condition" => ["is_itemgroup" => 1]])], 213, $context, $this->getSourceContext());
            // line 222
            echo "
                  ";
        }
        // line 224
        echo "
                  ";
        // line 225
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["comment"], "method", false, false, false, 225)) {
            // line 226
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_textareaField", ["comment", (($__internal_compile_31 = twig_get_attribute($this->env, $this->source,             // line 228
($context["item"] ?? null), "fields", [], "any", false, false, false, 228)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["comment"] ?? null) : null), _n("Comment", "Comments", Session::getPluralNumber()),             // line 230
($context["field_options"] ?? null)], 226, $context, $this->getSourceContext());
            // line 231
            echo "
                  ";
        }
        // line 233
        echo "
               </div> ";
        // line 235
        echo "            </div> ";
        // line 236
        echo "         </div> ";
        // line 237
        echo "      </div> ";
        // line 238
        echo "   </div> ";
        // line 239
        echo "

   ";
        // line 241
        echo twig_include($this->env, $context, "components/form/buttons.html.twig");
        echo "
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/form/item_device.html.twig";
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
        return array (  367 => 241,  363 => 239,  361 => 238,  359 => 237,  357 => 236,  355 => 235,  352 => 233,  348 => 231,  346 => 230,  345 => 228,  343 => 226,  341 => 225,  338 => 224,  334 => 222,  332 => 219,  331 => 218,  330 => 216,  328 => 213,  326 => 212,  323 => 211,  319 => 209,  317 => 206,  316 => 205,  315 => 203,  313 => 200,  311 => 199,  308 => 198,  304 => 196,  302 => 194,  301 => 193,  300 => 192,  299 => 190,  297 => 187,  294 => 186,  292 => 185,  289 => 184,  285 => 182,  283 => 180,  282 => 179,  281 => 177,  279 => 174,  277 => 173,  274 => 172,  270 => 170,  268 => 169,  267 => 166,  265 => 164,  263 => 163,  260 => 162,  256 => 160,  254 => 159,  253 => 157,  251 => 155,  249 => 154,  246 => 153,  240 => 152,  237 => 151,  233 => 149,  231 => 148,  230 => 147,  229 => 146,  228 => 145,  226 => 144,  222 => 142,  220 => 141,  219 => 140,  218 => 139,  217 => 138,  215 => 137,  213 => 136,  210 => 135,  208 => 132,  207 => 131,  206 => 130,  205 => 129,  204 => 128,  202 => 127,  200 => 126,  197 => 125,  195 => 124,  194 => 123,  193 => 122,  192 => 121,  191 => 120,  189 => 119,  186 => 118,  184 => 117,  181 => 116,  178 => 115,  175 => 114,  172 => 113,  170 => 112,  167 => 111,  164 => 110,  160 => 109,  157 => 108,  153 => 106,  151 => 105,  150 => 103,  149 => 102,  148 => 101,  146 => 100,  143 => 99,  139 => 97,  137 => 96,  136 => 94,  135 => 93,  133 => 92,  131 => 91,  128 => 90,  124 => 88,  122 => 87,  120 => 83,  116 => 81,  114 => 80,  113 => 79,  112 => 78,  111 => 77,  109 => 76,  107 => 75,  98 => 71,  95 => 70,  93 => 69,  70 => 48,  68 => 46,  66 => 45,  64 => 44,  59 => 42,  55 => 41,  52 => 40,  48 => 38,  46 => 37,  44 => 36,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/form/item_device.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\form\\item_device.html.twig");
    }
}
