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
class __TwigTemplate_74aaa760c10874b2ab3b23777696f70f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" />


        ";
        // line 15
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "


        ";
        // line 21
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
        echo "    </head>
    <body>
    <header>
        <nav class=\"content-site\">
            <div class=\"nav-icon\"><a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"logo-sneakers fa-lg\"></a></div>
            <div id=\"btn-hamburgeur\" class=\"hamburgeur\"><i class=\"fas fa-bars fa-2x\"></i></div>
            <div class=\"list-nav\">
                <ul>
                    <li><a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Home</a></li>
                    <li><a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop");
        echo "\">Shop</a></li>
                    <li><a href=\"\">Contact</a></li>
                </ul>
            </div>
            ";
        // line 37
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 38
            echo "                <div class=\"account-nav\">
                    <ul>
                        <li><a href=\"";
            // line 40
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_page");
            echo "\"><i class=\"fas fa-user\"></i></a></li>
                        <li><a href=\"";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart");
            echo "\"><i class=\"fas fa-shopping-cart\"></i></a></li>
                        <li><a href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"><i class=\"fas fa-sign-out-alt\"></i>

                            </a></li>
                    </ul>
                </div>
            ";
        } else {
            // line 48
            echo "                <div class=\"account-nav\">
                    <ul>
                        <li><a href=\"";
            // line 50
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"><i class=\"fas fa-user fa-lg\"></i></a></li>
                        <li><a href=\"";
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart");
            echo "\"><i class=\"fas fa-shopping-cart\"></i></a></li>
                    </ul>
                </div>

            ";
        }
        // line 56
        echo "        </nav>
    <div class=\"menu-mobile\">
        <div class=\"header-mobile content-site\">
            <div class=\"nav-icon-mobile\">
                <a href=\"";
        // line 60
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
        // line 66
        $this->displayBlock('body', $context, $blocks);
        // line 68
        echo "        <footer>
            <div>
                <article class=\"content-site\">
                    <aside class=\"img-footer\">
                        <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"logo\">
                    </aside>
                    <aside class=\"links-site-footer\">
                        <ul>
                            <li><a href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_page");
        echo "\">My account</a></li>
                            <li><a href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Logout</a></li>
                            <li><a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop");
        echo "\">Shop</a></li>
                            <li><a href=\"";
        // line 79
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
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/nike.svg"), "html", null, true);
        echo "\">
                    <img src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/jordan.svg"), "html", null, true);
        echo "\">
                    <img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/converse.svg"), "html", null, true);
        echo "\">
                    <img src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/adidas.svg"), "html", null, true);
        echo "\">
                    <img style=\"filter: none !important;\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/northface.svg"), "html", null, true);
        echo "\">
                </aside>
            </div>
        </footer>

    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "            ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('encore_entry_link_tags')->getCallable(), ["app"]), "html", null, true);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "            ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('encore_entry_script_tags')->getCallable(), ["app"]), "html", null, true);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 66
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 67
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  321 => 67,  311 => 66,  298 => 22,  288 => 21,  275 => 16,  265 => 15,  247 => 5,  229 => 100,  225 => 99,  221 => 98,  217 => 97,  213 => 96,  193 => 79,  189 => 78,  185 => 77,  181 => 76,  174 => 72,  168 => 68,  166 => 66,  155 => 60,  149 => 56,  141 => 51,  137 => 50,  133 => 48,  124 => 42,  120 => 41,  116 => 40,  112 => 38,  110 => 37,  103 => 33,  99 => 32,  90 => 28,  84 => 24,  82 => 21,  77 => 18,  74 => 15,  68 => 11,  64 => 10,  57 => 6,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Sneakers Store - {% block title %}{% endblock %}</title>
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/main.css') }}\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\" integrity=\"sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js\" integrity=\"sha512-H6cPm97FAsgIKmlBA4s774vqoN24V5gSQL4yBTDOY2su2DeXZVhQPxFK4P6GPdnZqM9fg1G3cMv5wD7e6cFLZQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
        <script src=\"{{ asset('assets/js/nav.js') }}\"></script>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('assets/img/logo.png') }}\" />


        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        {% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
        {% endblock %}



        {% block javascripts %}
            {{ encore_entry_script_tags('app') }}
        {% endblock %}
    </head>
    <body>
    <header>
        <nav class=\"content-site\">
            <div class=\"nav-icon\"><a href=\"{{ path('home') }}\"><img src=\"{{ asset('assets/img/logo.png') }}\" alt=\"logo-sneakers fa-lg\"></a></div>
            <div id=\"btn-hamburgeur\" class=\"hamburgeur\"><i class=\"fas fa-bars fa-2x\"></i></div>
            <div class=\"list-nav\">
                <ul>
                    <li><a href=\"{{ path('home') }}\">Home</a></li>
                    <li><a href=\"{{ path('shop') }}\">Shop</a></li>
                    <li><a href=\"\">Contact</a></li>
                </ul>
            </div>
            {% if is_granted('ROLE_USER') %}
                <div class=\"account-nav\">
                    <ul>
                        <li><a href=\"{{ path ('user_page')}}\"><i class=\"fas fa-user\"></i></a></li>
                        <li><a href=\"{{ path('cart') }}\"><i class=\"fas fa-shopping-cart\"></i></a></li>
                        <li><a href=\"{{ path('app_logout') }}\"><i class=\"fas fa-sign-out-alt\"></i>

                            </a></li>
                    </ul>
                </div>
            {% else %}
                <div class=\"account-nav\">
                    <ul>
                        <li><a href=\"{{ path ('app_login') }}\"><i class=\"fas fa-user fa-lg\"></i></a></li>
                        <li><a href=\"{{ path('cart') }}\"><i class=\"fas fa-shopping-cart\"></i></a></li>
                    </ul>
                </div>

            {% endif %}
        </nav>
    <div class=\"menu-mobile\">
        <div class=\"header-mobile content-site\">
            <div class=\"nav-icon-mobile\">
                <a href=\"{{ path('home') }}\"><img src=\"{{ asset('assets/img/logo.png') }}\" alt=\"logo-sneakers fa-lg\"></a>
            </div>
            <div id=\"close-mobile-menu\"><i class=\"fas fa-times fa-2x\"></i></div>
        </div>
    </div>
    </header>
        {% block body %}
        {% endblock %}
        <footer>
            <div>
                <article class=\"content-site\">
                    <aside class=\"img-footer\">
                        <img src=\"{{ asset('assets/img/logo.png') }}\" alt=\"logo\">
                    </aside>
                    <aside class=\"links-site-footer\">
                        <ul>
                            <li><a href=\"{{ path ('user_page')}}\">My account</a></li>
                            <li><a href=\"{{ path('app_logout') }}\">Logout</a></li>
                            <li><a href=\"{{ path('shop') }}\">Shop</a></li>
                            <li><a href=\"{{ path('shop') }}\">Contact</a></li>
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
                    <img src=\"{{ asset('assets/img/nike.svg') }}\">
                    <img src=\"{{ asset('assets/img/jordan.svg') }}\">
                    <img src=\"{{ asset('assets/img/converse.svg') }}\">
                    <img src=\"{{ asset('assets/img/adidas.svg') }}\">
                    <img style=\"filter: none !important;\" src=\"{{ asset('assets/img/northface.svg') }}\">
                </aside>
            </div>
        </footer>

    </body>
</html>
", "base.html.twig", "/Users/axelhuon/Documents/Projet/ProjectEcommerce/templates/base.html.twig");
    }
}
