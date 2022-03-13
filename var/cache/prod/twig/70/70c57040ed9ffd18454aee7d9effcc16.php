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

/* @EasyAdmin/crud/detail.html.twig */
class __TwigTemplate_cc4fcbf4db96c7c69e77f8a06868783c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'configured_head_contents' => [$this, 'block_configured_head_contents'],
            'configured_body_contents' => [$this, 'block_configured_body_contents'],
            'configured_stylesheets' => [$this, 'block_configured_stylesheets'],
            'configured_javascripts' => [$this, 'block_configured_javascripts'],
            'content_title' => [$this, 'block_content_title'],
            'page_actions' => [$this, 'block_page_actions'],
            'content_footer_wrapper' => [$this, 'block_content_footer_wrapper'],
            'main' => [$this, 'block_main'],
            'detail_fields' => [$this, 'block_detail_fields'],
            'detail_field' => [$this, 'block_detail_field'],
            'delete_form' => [$this, 'block_delete_form'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "layout"], "method", false, false, false, 3), "@EasyAdmin/crud/detail.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        $context["__internal_a0a7988d37a7b1cceb36c3bc1259134a7ab777353f903a08988fbdc787875a1d"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 5), "translationDomain", [], "any", false, false, false, 5);
        // line 10
        $context["ea_field_assts"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 10), "fieldAssets", [0 => twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud::PAGE_DETAIL")], "method", false, false, false, 10);
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ((("ea-detail-" . twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, false, 7)) . "-") . twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "primaryKeyValue", [], "any", false, false, false, 7)), "html", null, true);
    }

    // line 8
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ("ea-detail ea-detail-" . twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, false, 8)), "html", null, true);
    }

    // line 12
    public function block_configured_head_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    ";
        $this->displayParentBlock("configured_head_contents", $context, $blocks);
        echo "
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["ea_field_assts"] ?? null), "headContents", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 15
            echo "        ";
            echo $context["htmlContent"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 19
    public function block_configured_body_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "    ";
        $this->displayParentBlock("configured_body_contents", $context, $blocks);
        echo "
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["ea_field_assts"] ?? null), "bodyContents", [], "any", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 22
            echo "        ";
            echo $context["htmlContent"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 26
    public function block_configured_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "    ";
        $this->displayParentBlock("configured_stylesheets", $context, $blocks);
        echo "
    ";
        // line 28
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_css_assets.html.twig", ["assets" => twig_get_attribute($this->env, $this->source, ($context["ea_field_assts"] ?? null), "cssAssets", [], "any", false, false, false, 28)], false);
        echo "
    ";
        // line 29
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_encore_link_tags.html.twig", ["assets" => twig_get_attribute($this->env, $this->source, ($context["ea_field_assts"] ?? null), "webpackEncoreAssets", [], "any", false, false, false, 29)], false);
        echo "
";
    }

    // line 32
    public function block_configured_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "    ";
        $this->displayParentBlock("configured_javascripts", $context, $blocks);
        echo "
    ";
        // line 34
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_js_assets.html.twig", ["assets" => twig_get_attribute($this->env, $this->source, ($context["ea_field_assts"] ?? null), "jsAssets", [], "any", false, false, false, 34)], false);
        echo "
    ";
        // line 35
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_encore_script_tags.html.twig", ["assets" => twig_get_attribute($this->env, $this->source, ($context["ea_field_assts"] ?? null), "webpackEncoreAssets", [], "any", false, false, false, 35)], false);
        echo "
";
    }

    // line 38
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        ob_start(function () { return ''; });
        // line 40
        $context["custom_page_title"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 40), "customPageTitle", [0 => ($context["pageName"] ?? null), 1 => ((($context["entity"] ?? null)) ? (twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "instance", [], "any", false, false, false, 40)) : (null))], "method", false, false, false, 40);
        // line 41
        echo "        ";
        echo (((null === ($context["custom_page_title"] ?? null))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 42
($context["ea"] ?? null), "crud", [], "any", false, false, false, 42), "defaultPageTitle", [], "any", false, false, false, 42), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 42), "translationParameters", [], "any", false, false, false, 42), "EasyAdminBundle")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(        // line 43
($context["custom_page_title"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 43), "translationParameters", [], "any", false, false, false, 43),         // line 5
($context["__internal_a0a7988d37a7b1cceb36c3bc1259134a7ab777353f903a08988fbdc787875a1d"] ?? null))));
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 39
        echo twig_spaceless($___internal_parse_0_);
    }

    // line 47
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 48));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 49
            echo "        ";
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 49), ["action" => $context["action"]], false);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 53
    public function block_content_footer_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "";
    }

    // line 55
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "    ";
        $this->displayBlock('detail_fields', $context, $blocks);
        // line 80
        echo "
    ";
        // line 81
        $this->displayBlock('delete_form', $context, $blocks);
    }

    // line 56
    public function block_detail_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "        ";
        $context["form_panel_is_already_open"] = false;
        // line 58
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "fields", [], "any", false, false, false, 58));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 59
            echo "            ";
            $context["is_form_field_panel"] = twig_in_filter("field-form_panel", twig_get_attribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 59));
            // line 60
            echo "
            ";
            // line 61
            if ((($context["is_form_field_panel"] ?? null) || (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 61) &&  !($context["is_form_field_panel"] ?? null)))) {
                // line 62
                echo "                ";
                if (($context["form_panel_is_already_open"] ?? null)) {
                    // line 63
                    echo "                    ";
                    echo twig_call_macro($macros["_self"], "macro_close_form_field_panel", [], 63, $context, $this->getSourceContext());
                    echo "
                    ";
                    // line 64
                    $context["form_panel_is_already_open"] = false;
                    // line 65
                    echo "                ";
                }
                // line 66
                echo "
                ";
                // line 67
                echo twig_call_macro($macros["_self"], "macro_open_form_field_panel", [((($context["is_form_field_panel"] ?? null)) ? ($context["field"]) : (null))], 67, $context, $this->getSourceContext());
                echo "
                ";
                // line 68
                $context["form_panel_is_already_open"] = true;
                // line 69
                echo "            ";
            }
            // line 70
            echo "
            ";
            // line 71
            $this->displayBlock('detail_field', $context, $blocks);
            // line 76
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "
        ";
        // line 78
        echo twig_call_macro($macros["_self"], "macro_close_form_field_panel", [], 78, $context, $this->getSourceContext());
        echo "
    ";
    }

    // line 71
    public function block_detail_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 72
        echo "                ";
        if ( !($context["is_form_field_panel"] ?? null)) {
            // line 73
            echo "                    ";
            echo twig_call_macro($macros["_self"], "macro_render_field", [($context["entity"] ?? null), ($context["field"] ?? null)], 73, $context, $this->getSourceContext());
            echo "
                ";
        }
        // line 75
        echo "            ";
    }

    // line 81
    public function block_delete_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 82
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_delete_form.html.twig", ["entity_id" => twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "primaryKeyValue", [], "any", false, false, false, 82)], false);
        echo "
    ";
    }

    // line 86
    public function macro_open_form_field_panel($__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 87
            echo "    ";
            $context["panel_name"] = (((null === ($context["field"] ?? null))) ? (null) : (("content-" . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "uniqueId", [], "any", false, false, false, 87))));
            // line 88
            echo "    ";
            $context["collapsible"] = (((null === ($context["field"] ?? null))) ? (false) : (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOption", [0 => "collapsible"], "method", false, false, false, 88)));
            // line 89
            echo "    ";
            $context["collapsed"] = (((null === ($context["field"] ?? null))) ? (false) : (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOption", [0 => "collapsed"], "method", false, false, false, 89)));
            // line 90
            echo "    ";
            $context["panel_icon"] = (((null === ($context["field"] ?? null))) ? (null) : (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, true, false, 90), "get", [0 => "icon"], "method", true, true, false, 90)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, true, false, 90), "get", [0 => "icon"], "method", false, false, false, 90), false)) : (false))));
            // line 91
            echo "    ";
            $context["panel_label"] = (((null === ($context["field"] ?? null))) ? (null) : (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 91)));
            // line 92
            echo "    ";
            $context["panel_help"] = (((null === ($context["field"] ?? null))) ? (null) : (((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", true, true, false, 92)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 92), false)) : (false))));
            // line 93
            echo "    ";
            $context["panel_has_header"] = (((($context["collapsible"] ?? null) || ($context["panel_icon"] ?? null)) || ($context["panel_label"] ?? null)) || ($context["panel_help"] ?? null));
            // line 94
            echo "
    <div class=\"";
            // line 95
            (((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", true, true, false, 95) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 95)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 95), "html", null, true))) : (print ("")));
            echo "\">
        <div class=\"form-panel\">
            ";
            // line 97
            if (($context["panel_has_header"] ?? null)) {
                // line 98
                echo "                <div class=\"form-panel-header ";
                echo ((($context["collapsible"] ?? null)) ? ("collapsible") : (""));
                echo " ";
                echo (( !twig_test_empty(($context["panel_help"] ?? null))) ? ("with-help") : (""));
                echo "\">
                    <div class=\"form-panel-title\">
                        <a ";
                // line 100
                if ( !($context["collapsible"] ?? null)) {
                    // line 101
                    echo "                            href=\"#\" class=\"not-collapsible\"
                        ";
                } else {
                    // line 103
                    echo "                            href=\"#";
                    echo twig_escape_filter($this->env, ($context["panel_name"] ?? null), "html", null, true);
                    echo "\" data-bs-toggle=\"collapse\"
                            class=\"form-panel-collapse ";
                    // line 104
                    echo ((($context["collapsed"] ?? null)) ? ("collapsed") : (""));
                    echo "\"
                            aria-expanded=\"";
                    // line 105
                    echo ((($context["collapsed"] ?? null)) ? ("false") : ("true"));
                    echo "\" aria-controls=\"";
                    echo twig_escape_filter($this->env, ($context["panel_name"] ?? null), "html", null, true);
                    echo "\"
                        ";
                }
                // line 107
                echo "                        >
                            ";
                // line 108
                if (($context["collapsible"] ?? null)) {
                    // line 109
                    echo "                                <i class=\"fas fw fa-chevron-right form-panel-collapse-marker\"></i>
                            ";
                }
                // line 111
                echo "
                            ";
                // line 112
                if (($context["panel_icon"] ?? null)) {
                    // line 113
                    echo "                                <i class=\"form-panel-icon ";
                    echo twig_escape_filter($this->env, ($context["panel_icon"] ?? null), "html", null, true);
                    echo "\"></i>
                            ";
                }
                // line 115
                echo "                            ";
                echo ($context["panel_label"] ?? null);
                echo "
                        </a>

                        ";
                // line 118
                if (($context["panel_help"] ?? null)) {
                    // line 119
                    echo "                            <div class=\"form-panel-help\">";
                    echo ($context["panel_help"] ?? null);
                    echo "</div>
                        ";
                }
                // line 121
                echo "                    </div>
                </div>
            ";
            }
            // line 124
            echo "
            <div ";
            // line 125
            if (($context["panel_name"] ?? null)) {
                echo "id=\"";
                echo twig_escape_filter($this->env, ($context["panel_name"] ?? null), "html", null, true);
                echo "\"";
            }
            echo " class=\"form-panel-body ";
            echo ((($context["collapsible"] ?? null)) ? ("collapse") : (""));
            echo " ";
            echo (( !($context["collapsed"] ?? null)) ? ("show") : (""));
            echo "\">
                <dl class=\"datalist\">
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 129
    public function macro_close_form_field_panel(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 130
            echo "            </dl>
        </div>
    </div>
</div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 136
    public function macro_render_field($__entity__ = null, $__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "entity" => $__entity__,
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 137
            echo "    <div class=\"data-row ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 137), "html", null, true);
            echo "\">
        <dt>
            ";
            // line 139
            echo twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 139);
            echo "

            ";
            // line 141
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 141))) {
                // line 142
                echo "                <span class=\"data-help\">
                    <i class=\"far fa-question-circle\" data-bs-toggle=\"tooltip\" title=\"";
                // line 143
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 143), "html_attr");
                echo "\"></i>
                </span>
            ";
            }
            // line 146
            echo "        </dt>
        <dd>
            ";
            // line 148
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "templatePath", [], "any", false, false, false, 148), ["field" => ($context["field"] ?? null), "entity" => ($context["entity"] ?? null)], false);
            echo "
        </dd>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  539 => 148,  535 => 146,  529 => 143,  526 => 142,  524 => 141,  519 => 139,  513 => 137,  499 => 136,  486 => 130,  474 => 129,  454 => 125,  451 => 124,  446 => 121,  440 => 119,  438 => 118,  431 => 115,  425 => 113,  423 => 112,  420 => 111,  416 => 109,  414 => 108,  411 => 107,  404 => 105,  400 => 104,  395 => 103,  391 => 101,  389 => 100,  381 => 98,  379 => 97,  374 => 95,  371 => 94,  368 => 93,  365 => 92,  362 => 91,  359 => 90,  356 => 89,  353 => 88,  350 => 87,  337 => 86,  330 => 82,  326 => 81,  322 => 75,  316 => 73,  313 => 72,  309 => 71,  303 => 78,  300 => 77,  286 => 76,  284 => 71,  281 => 70,  278 => 69,  276 => 68,  272 => 67,  269 => 66,  266 => 65,  264 => 64,  259 => 63,  256 => 62,  254 => 61,  251 => 60,  248 => 59,  230 => 58,  227 => 57,  223 => 56,  219 => 81,  216 => 80,  213 => 56,  209 => 55,  202 => 53,  191 => 49,  186 => 48,  182 => 47,  178 => 39,  175 => 5,  174 => 43,  173 => 42,  171 => 41,  169 => 40,  167 => 39,  163 => 38,  157 => 35,  153 => 34,  148 => 33,  144 => 32,  138 => 29,  134 => 28,  129 => 27,  125 => 26,  114 => 22,  110 => 21,  105 => 20,  101 => 19,  90 => 15,  86 => 14,  81 => 13,  77 => 12,  70 => 8,  63 => 7,  59 => 3,  57 => 10,  55 => 5,  48 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/detail.html.twig", "/Users/axelhuon/Documents/Projet/ProjectEcommerce/vendor/easycorp/easyadmin-bundle/src/Resources/views/crud/detail.html.twig");
    }
}
