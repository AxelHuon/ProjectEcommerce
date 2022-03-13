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

/* user_page/index.html.twig */
class __TwigTemplate_1be4dd0d4902a664127432b2a2d0a69c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_page/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_page/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user_page/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 3, $this->source); })()), "firstName", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 3, $this->source); })()), "lastName", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

    <section id=\"page-account\" class=\"content-site\">
        <article class=\"title-section\">
            <h2>Account page of ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 10, $this->source); })()), "firstName", [], "any", false, false, false, 10), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 10, $this->source); })()), "lastName", [], "any", false, false, false, 10), "html", null, true);
        echo "</h2>
        </article>
        <article>
            <div class=\"title-classique\">
                <h3>Personnal informations</h3>
            </div>
            <aside class=\"infos-items\">
                <p><span style=\"color: #999999; font-weight: 400;font-style: italic\">Nom Prénom : </span> <span style=\"font-weight: 600\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 17, $this->source); })()), "lastName", [], "any", false, false, false, 17), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 17, $this->source); })()), "firstName", [], "any", false, false, false, 17), "html", null, true);
        echo "</span></p>
                <p><span style=\"color: #999999; font-weight: 400;font-style: italic\">Email : </span> <span style=\"font-weight: 600\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 18, $this->source); })()), "email", [], "any", false, false, false, 18), "html", null, true);
        echo "</span></p>
            </aside>
            <h3 class=\"title-classique\">Your addresses</h3>
            <aside class=\"all-box-address\">
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 22, $this->source); })()), "address", [], "any", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 23
            echo "                    <div class=\"address-item\">
                        <h3>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "addressName", [], "any", false, false, false, 24), "html", null, true);
            echo "</h3>
                        <p>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "address", [], "any", false, false, false, 25), "html", null, true);
            echo "</p>
                        <p>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 26), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "cp", [], "any", false, false, false, 26), "html", null, true);
            echo "</p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                <a class=\"address-item add-item\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_addAddress");
        echo "\"> <div>
                        <i class=\"fa-solid fa-plus fa-2x\"></i>
                </div></a>
            </aside>


            </aside>
        </article>
        <articles class=\"orders\">
            <section class=\"title-section\">
                <h2>Order(s)</h2>
            </section>

            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 42, $this->source); })()), "orders", [], "any", false, false, false, 42));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 43
            echo "                <h3 class=\"title-order\">Order numero : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 43), "html", null, true);
            echo "</h3>
                <div class=\"shipping\">
                    <h4>Shipping address</h4>
                    <p class=\"title-address\">";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "address", [], "any", false, false, false, 46), "addressName", [], "any", false, false, false, 46), "html", null, true);
            echo "</p>
                    <p>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "address", [], "any", false, false, false, 47), "address", [], "any", false, false, false, 47), "html", null, true);
            echo "</p>
                    <p>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "address", [], "any", false, false, false, 48), "city", [], "any", false, false, false, 48), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "address", [], "any", false, false, false, 48), "cp", [], "any", false, false, false, 48), "html", null, true);
            echo "</p>
                </div>
                <table>
                    <thead>
                        <tr>
                            <td>Product</td>
                            <td>Product image</td>
                            <td>Product Price</td>
                            <td>Status</td>
                        </tr>
                    </thead>
                    <tbody>
                    ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["order"], "orderItems", [], "any", false, false, false, 60));
            foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
                // line 61
                echo "
                        <tr>
                            <td style=\"width: 200px\">";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["items"], "product", [], "any", false, false, false, 63), "name", [], "any", false, false, false, 63), "html", null, true);
                echo "</td>
                            <td><a href=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_simple", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["items"], "product", [], "any", false, false, false, 64), "id", [], "any", false, false, false, 64)]), "html", null, true);
                echo "\"> <img style=\"width: 200px\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/products/"), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["items"], "product", [], "any", false, false, false, 64), "img", [], "any", false, false, false, 64), "html", null, true);
                echo "\"></a></td>
                            <td>";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["items"], "product", [], "any", false, false, false, 65), "price", [], "any", false, false, false, 65), "html", null, true);
                echo "€</td>
                            ";
                // line 66
                if ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 66) == "Paid")) {
                    // line 67
                    echo "                                <td style=\"width: 200px\"><span class=\"status paid\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 67), "html", null, true);
                    echo "</span></td>
                                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 68
$context["order"], "status", [], "any", false, false, false, 68) == "In progress")) {
                    // line 69
                    echo "                                    <td style=\"width: 200px\"><span class=\"status progress\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 69), "html", null, true);
                    echo "</span></td>
                                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 70
$context["order"], "status", [], "any", false, false, false, 70) == "Failed")) {
                    // line 71
                    echo "                                    <td style=\"width: 200px\"><span class=\"status failed\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 71), "html", null, true);
                    echo "</span></td>
                            ";
                }
                // line 73
                echo "                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['items'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "                    </tbody>
                </table>

                <div class=\"total-price\">

                    <h3>Total order</h3>
                    <span> ";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "totalPrice", [], "any", false, false, false, 81), "html", null, true);
            echo " €</span>

                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "    </articles>
    </section>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user_page/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 85,  259 => 81,  251 => 75,  244 => 73,  238 => 71,  236 => 70,  231 => 69,  229 => 68,  224 => 67,  222 => 66,  218 => 65,  211 => 64,  207 => 63,  203 => 61,  199 => 60,  183 => 48,  179 => 47,  175 => 46,  168 => 43,  164 => 42,  147 => 29,  136 => 26,  132 => 25,  128 => 24,  125 => 23,  121 => 22,  114 => 18,  108 => 17,  96 => 10,  90 => 6,  80 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ user.firstName }} {{ user.lastName }}{% endblock %}

{% block body %}


    <section id=\"page-account\" class=\"content-site\">
        <article class=\"title-section\">
            <h2>Account page of {{ user.firstName }} {{ user.lastName }}</h2>
        </article>
        <article>
            <div class=\"title-classique\">
                <h3>Personnal informations</h3>
            </div>
            <aside class=\"infos-items\">
                <p><span style=\"color: #999999; font-weight: 400;font-style: italic\">Nom Prénom : </span> <span style=\"font-weight: 600\">{{ user.lastName}} {{ user.firstName}}</span></p>
                <p><span style=\"color: #999999; font-weight: 400;font-style: italic\">Email : </span> <span style=\"font-weight: 600\">{{ user.email}}</span></p>
            </aside>
            <h3 class=\"title-classique\">Your addresses</h3>
            <aside class=\"all-box-address\">
                {% for address in user.address %}
                    <div class=\"address-item\">
                        <h3>{{ address.addressName }}</h3>
                        <p>{{ address.address }}</p>
                        <p>{{ address.city }}, {{ address.cp }}</p>
                    </div>
                {% endfor %}
                <a class=\"address-item add-item\" href=\"{{ path('user_addAddress') }}\"> <div>
                        <i class=\"fa-solid fa-plus fa-2x\"></i>
                </div></a>
            </aside>


            </aside>
        </article>
        <articles class=\"orders\">
            <section class=\"title-section\">
                <h2>Order(s)</h2>
            </section>

            {% for order in user.orders %}
                <h3 class=\"title-order\">Order numero : {{ order.id }}</h3>
                <div class=\"shipping\">
                    <h4>Shipping address</h4>
                    <p class=\"title-address\">{{ order.address.addressName }}</p>
                    <p>{{ order.address.address }}</p>
                    <p>{{ order.address.city }}{{ order.address.cp }}</p>
                </div>
                <table>
                    <thead>
                        <tr>
                            <td>Product</td>
                            <td>Product image</td>
                            <td>Product Price</td>
                            <td>Status</td>
                        </tr>
                    </thead>
                    <tbody>
                    {% for items in order.orderItems %}

                        <tr>
                            <td style=\"width: 200px\">{{ items.product.name }}</td>
                            <td><a href=\"{{ path ('product_simple', {id:items.product.id}) }}\"> <img style=\"width: 200px\" src=\"{{ asset('assets/img/products/') }}{{ items.product.img }}\"></a></td>
                            <td>{{ items.product.price }}€</td>
                            {% if order.status == \"Paid\" %}
                                <td style=\"width: 200px\"><span class=\"status paid\">{{ order.status }}</span></td>
                                {% elseif order.status == \"In progress\" %}
                                    <td style=\"width: 200px\"><span class=\"status progress\">{{ order.status }}</span></td>
                                {% elseif order.status == \"Failed\" %}
                                    <td style=\"width: 200px\"><span class=\"status failed\">{{ order.status }}</span></td>
                            {% endif %}
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>

                <div class=\"total-price\">

                    <h3>Total order</h3>
                    <span> {{ order.totalPrice }} €</span>

                </div>
                {% endfor %}
    </articles>
    </section>


{% endblock %}
", "user_page/index.html.twig", "/Users/axelhuon/Documents/Projet/ProjectEcommerce/templates/user_page/index.html.twig");
    }
}
