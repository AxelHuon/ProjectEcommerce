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

/* shop/index.html.twig */
class __TwigTemplate_e82bbca2631839641aff1b2144bf97a8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "shop/index.html.twig", 1);
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

        echo "Shop";
        
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
    <section id=\"shop-brand\" class=\"brand-full-whidth\">
        <div class=\"back-black-brand\"></div>
        <article>
            <h1>SHOP</h1>
        </article>
    </section>

    <section class=\"filter content-site\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 16
            echo "            <a class=\"btn-custom btn-black\" id=\"category";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 16), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop_category", ["categoryId" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 16)]), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 16), "html", null, true);
            echo "</a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        ";
        if (((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 18, $this->source); })()) == 1)) {
            // line 19
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop");
            echo "\">Remove Filters</a>
        ";
        } else {
            // line 21
            echo "        ";
        }
        // line 22
        echo "    </section>

    <script>
        if(window.location.pathname == \"/shop/category1\"){
            document.getElementById(\"category1\").classList.add(\"active-filter\")
        }else if(window.location.pathname == \"/shop/category2\"){
            document.getElementById(\"category2\").classList.add(\"active-filter\")
        }else if(window.location.pathname == \"/shop/category3\"){
            document.getElementById(\"category3\").classList.add(\"active-filter\")
        }else if(window.location.pathname == \"/shop/category4\"){
            document.getElementById(\"category4\").classList.add(\"active-filter\")
        }
    </script>

    <section class=\"boucle-produit content-site\">
        ";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 37, $this->source); })()), "html", null, true);
        echo "
        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 39
            echo "            <a class=\"box-produit\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_simple", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\">
                <aside class=\"box-produit-content\">
                    <div class=\"product-title-home\"><h2>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 41), "html", null, true);
            echo "</h2></div>
                    <div class=\"product-img-home\"><img src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/products/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "img", [], "any", false, false, false, 42), "html", null, true);
            echo "\"></div>
                    <div class=\"product-description-home\"><p>";
            // line 43
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 43)) > 50)) ? ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 43), 0, 100) . "...")) : (twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 43))), "html", null, true);
            echo "</p></div>
                    <div class=\"product-price-home\"><h4>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 44), "html", null, true);
            echo " €</h4></div>
                    <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\" class=\"btn-custom btn-black btn-add-to-cart\">Add to cart</a>
                </aside></a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "    </section>



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "shop/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 48,  176 => 45,  172 => 44,  168 => 43,  163 => 42,  159 => 41,  153 => 39,  149 => 38,  145 => 37,  128 => 22,  125 => 21,  119 => 19,  116 => 18,  103 => 16,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Shop{% endblock %}

{% block body %}

    <section id=\"shop-brand\" class=\"brand-full-whidth\">
        <div class=\"back-black-brand\"></div>
        <article>
            <h1>SHOP</h1>
        </article>
    </section>

    <section class=\"filter content-site\">
        {% for category in categories %}
            <a class=\"btn-custom btn-black\" id=\"category{{ category.id }}\" href=\"{{ path('shop_category', {categoryId:category.id}) }}\"> {{ category.name }}</a>
        {% endfor %}
        {% if filter == 1 %}
            <a href=\"{{ path('shop') }}\">Remove Filters</a>
        {% else %}
        {% endif %}
    </section>

    <script>
        if(window.location.pathname == \"/shop/category1\"){
            document.getElementById(\"category1\").classList.add(\"active-filter\")
        }else if(window.location.pathname == \"/shop/category2\"){
            document.getElementById(\"category2\").classList.add(\"active-filter\")
        }else if(window.location.pathname == \"/shop/category3\"){
            document.getElementById(\"category3\").classList.add(\"active-filter\")
        }else if(window.location.pathname == \"/shop/category4\"){
            document.getElementById(\"category4\").classList.add(\"active-filter\")
        }
    </script>

    <section class=\"boucle-produit content-site\">
        {{ message }}
        {% for product in products %}
            <a class=\"box-produit\" href=\"{{ path ('product_simple', {id:product.id}) }}\">
                <aside class=\"box-produit-content\">
                    <div class=\"product-title-home\"><h2>{{ product.name }}</h2></div>
                    <div class=\"product-img-home\"><img src=\"{{ asset('assets/img/products/') }}{{ product.img }}\"></div>
                    <div class=\"product-description-home\"><p>{{ product.description|length > 50 ? product.description|slice(0, 100) ~ '...' : product.description}}</p></div>
                    <div class=\"product-price-home\"><h4>{{ product.price }} €</h4></div>
                    <a href=\"{{ path('cart_add', {id:product.id}) }}\" class=\"btn-custom btn-black btn-add-to-cart\">Add to cart</a>
                </aside></a>
        {% endfor%}
    </section>



{% endblock %}
", "shop/index.html.twig", "/Users/axelhuon/Documents/Projet/ProjectEcommerce/templates/shop/index.html.twig");
    }
}
