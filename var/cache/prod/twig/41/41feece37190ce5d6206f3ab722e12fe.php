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

/* base.html.twig */
class __TwigTemplate_b91de06bbefac6d44d64d928715f2abf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Sneakers Store - ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/main.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\" integrity=\"sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js\" integrity=\"sha512-H6cPm97FAsgIKmlBA4s774vqoN24V5gSQL4yBTDOY2su2DeXZVhQPxFK4P6GPdnZqM9fg1G3cMv5wD7e6cFLZQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
        <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/nav.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 13
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "


        ";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    </head>
    <body>
    <header>
        <nav class=\"content-site\">
            <div class=\"nav-icon\"><a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"logo-sneakers fa-lg\"></a></div>
            <div id=\"btn-hamburgeur\" class=\"hamburgeur\"><i class=\"fas fa-bars fa-2x\"></i></div>
            <div class=\"list-nav\">
                <ul>
                    <li><a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Home</a></li>
                    <li><a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop");
        echo "\">Shop</a></li>
                    <li><a href=\"\">Contact</a></li>
                </ul>
            </div>
            ";
        // line 35
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 36
            echo "                <div class=\"account-nav\">
                    <ul>
                        <li><a href=\"";
            // line 38
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_page");
            echo "\"><i class=\"fas fa-user\"></i></a></li>
                        <li><a href=\"";
            // line 39
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart");
            echo "\"><i class=\"fas fa-shopping-cart\"></i></a></li>
                        <li><a href=\"";
            // line 40
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"><i class=\"fas fa-sign-out-alt\"></i>

                            </a></li>
                    </ul>
                </div>
            ";
        } else {
            // line 46
            echo "                <div class=\"account-nav\">
                    <ul>
                        <li><a href=\"";
            // line 48
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"><i class=\"fas fa-user fa-lg\"></i></a></li>
                    </ul>
                </div>

            ";
        }
        // line 53
        echo "        </nav>
    <div class=\"menu-mobile\">
        <div class=\"header-mobile content-site\">
            <div class=\"nav-icon-mobile\">
                <a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"logo-sneakers fa-lg\"></a>
            </div>
            <div id=\"close-mobile-menu\"><i class=\"fas fa-times fa-2x\"></i></div>
        </div>
    </div>
    </header>
        ";
        // line 63
        $this->displayBlock('body', $context, $blocks);
        // line 65
        echo "        <footer>
            <div>
                <article class=\"content-site\">
                    <aside class=\"img-footer\">
                        <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"logo\">
                    </aside>
                    <aside class=\"links-site-footer\">
                        <ul>
                            <li><a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_page");
        echo "\">My account</a></li>
                            <li><a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Logout</a></li>
                            <li><a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop");
        echo "\">Shop</a></li>
                            <li><a href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop");
        echo "\">Contact</a></li>
                        </ul>
                    </aside>
                    <aside class=\"links-site-footer\">
                        <ul>
                            <li><a href=\"\">CVG</a></li>
                            <li><a href=\"\">Legal mention</a></li>
                        </ul>
                        <div class=\"payment\">
                            <i class=\"fab fa-cc-mastercard fa-lg\"></i>
                            <i class=\"fab fa-paypal fa-lg\"></i>
                        </div>
                    </aside>
                </article>
            </div>
            <div class=\"marques-footer\">
                <aside class=\"all-logos\">
                    <img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/nike.svg"), "html", null, true);
        echo "\">
                    <img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/jordan.svg"), "html", null, true);
        echo "\">
                    <img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/converse.svg"), "html", null, true);
        echo "\">
                    <img src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/adidas.svg"), "html", null, true);
        echo "\">
                    <img style=\"filter: none !important;\" src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/northface.svg"), "html", null, true);
        echo "\">
                </aside>
            </div>
        </footer>

    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "            ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('encore_entry_link_tags')->getCallable(), ["app"]), "html", null, true);
        echo "
        ";
    }

    // line 19
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "            ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('encore_entry_script_tags')->getCallable(), ["app"]), "html", null, true);
        echo "
        ";
    }

    // line 63
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        echo "        ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 64,  254 => 63,  247 => 20,  243 => 19,  236 => 14,  232 => 13,  226 => 5,  214 => 97,  210 => 96,  206 => 95,  202 => 94,  198 => 93,  178 => 76,  174 => 75,  170 => 74,  166 => 73,  159 => 69,  153 => 65,  151 => 63,  140 => 57,  134 => 53,  126 => 48,  122 => 46,  113 => 40,  109 => 39,  105 => 38,  101 => 36,  99 => 35,  92 => 31,  88 => 30,  79 => 26,  73 => 22,  71 => 19,  66 => 16,  63 => 13,  58 => 10,  51 => 6,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/Users/axelhuon/Documents/Projet/ProjectEcommerce/templates/base.html.twig");
    }
}
