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

/* product_simple/added.html.twig */
class __TwigTemplate_802ef823d7162574bbe892896840c58e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product_simple/added.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product_simple/added.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product_simple/added.html.twig", 1);
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
    <article class=\"product-simple content-site\">

        <section class=\"left-part\">
            <aside class=\"product-img\">
                <img class=\"img-brand\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/"), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["brand"]) || array_key_exists("brand", $context) ? $context["brand"] : (function () { throw new RuntimeError('Variable "brand" does not exist.', 11, $this->source); })()), "html", null, true);
        echo ".svg\">
                <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/products/"), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 12, $this->source); })()), "img", [], "any", false, false, false, 12), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12), "html", null, true);
        echo "\">
            </aside>
        </section>
        <section class=\"right-part\">
            <aside class=\"title-product\"><h2>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
        echo " - <span class=\"cat-product\">";
        echo twig_escape_filter($this->env, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "</span>
                </h2>
            </aside>
            <aside class=\"description-product\"><p>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 19, $this->source); })()), "description", [], "any", false, false, false, 19), "html", null, true);
        echo "</p></aside>
            ";
        // line 20
        if ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 20, $this->source); })()), "salePrice", [], "any", false, false, false, 20) == 0)) {
            // line 21
            echo "            <aside class=\"price-product\"><p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 21, $this->source); })()), "price", [], "any", false, false, false, 21), "html", null, true);
            echo "€</p></aside>
            ";
        } else {
            // line 23
            echo "                <div class=\"promo-pastille\">
                    Promo
                </div>
                <div class=\"all-price\">
                <aside class=\"price-product price-reduc\"><p>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 27, $this->source); })()), "price", [], "any", false, false, false, 27), "html", null, true);
            echo "€</p></aside>
                <aside class=\"price-product price-new\"><p>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 28, $this->source); })()), "salePrice", [], "any", false, false, false, 28), "html", null, true);
            echo "€</p></aside>
                </div>
            ";
        }
        // line 31
        echo "            <aside class=\"color-product\"><p>Color of product : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 31, $this->source); })()), "color", [], "any", false, false, false, 31), "html", null, true);
        echo "</p></aside>

            <aside class=\"stock-product\"><p>
                    ";
        // line 34
        if ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 34, $this->source); })()), "stock", [], "any", false, false, false, 34) == 0)) {
            // line 35
            echo "                        <span class=\"out-of-stock\">OUT OF STOCK</span>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 36
(isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 36, $this->source); })()), "stock", [], "any", false, false, false, 36) <= 5)) {
            // line 37
            echo "                        <span class=\"semi-important\">Stock : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 37, $this->source); })()), "stock", [], "any", false, false, false, 37), "html", null, true);
            echo "</span>
                    </aside>
                    <aside><button class=\"btn-custom btn-black btn-add-to-cart\">Add to cart</aside>
                    <aside class=\"shipping-details\">
                        <p class=\"ship\">Free delivery</p>
                        <p class=\"come-back\">Free returns</p>
                    </aside>
                    ";
        } else {
            // line 45
            echo "                    Stock : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 45, $this->source); })()), "stock", [], "any", false, false, false, 45), "html", null, true);
            echo "
                    </aside>
                        <aside><form action=\"#\"><button class=\"btn-custom btn-black btn-add-to-cart\">Add to cart</button></form></aside>
                    <aside class=\"shipping-details\">
                        <p class=\"ship\">Free delivery</p>
                        <p class=\"come-back\">Free returns</p>
                    </aside>
                    ";
        }
        // line 53
        echo "        </section>

    </article>
    <aside class=\"title-section content-site\"><h2>Similar products</h2></aside>
    <section class=\"boucle-produit content-site\">
        ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["productAll"]) || array_key_exists("productAll", $context) ? $context["productAll"] : (function () { throw new RuntimeError('Variable "productAll" does not exist.', 58, $this->source); })()), 0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 59
            echo "            <a class=\"box-produit\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_simple", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 59)]), "html", null, true);
            echo "\">
                <aside class=\"box-produit-content\">
                    <div class=\"product-title-home\"><h2>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 61), "html", null, true);
            echo "</h2></div>
                    <div class=\"product-img-home\"><img src=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/products/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "img", [], "any", false, false, false, 62), "html", null, true);
            echo "\"></div>
                    <div class=\"product-description-home\"><p>";
            // line 63
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 63)) > 50)) ? ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 63), 0, 100) . "...")) : (twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 63))), "html", null, true);
            echo "</p></div>
                    <div class=\"product-price-home\"><h4>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 64), "html", null, true);
            echo " €</h4></div>
                    <form action=\"#\"><button class=\"btn-custom btn-black btn-add-to-cart\">Add to cart</button></form>
                </aside></a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "    </section>






    </article>



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "product_simple/added.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 68,  213 => 64,  209 => 63,  204 => 62,  200 => 61,  194 => 59,  190 => 58,  183 => 53,  171 => 45,  159 => 37,  157 => 36,  154 => 35,  152 => 34,  145 => 31,  139 => 28,  135 => 27,  129 => 23,  123 => 21,  121 => 20,  117 => 19,  109 => 16,  99 => 12,  94 => 11,  87 => 6,  77 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}

{% block body %}

    <article class=\"product-simple content-site\">

        <section class=\"left-part\">
            <aside class=\"product-img\">
                <img class=\"img-brand\" src=\"{{ asset('assets/img/') }}{{ brand }}.svg\">
                <img src=\"{{ asset('assets/img/products/')}}{{ product.img }}\" alt=\"{{ product.name }}\">
            </aside>
        </section>
        <section class=\"right-part\">
            <aside class=\"title-product\"><h2>{{ product.name }} - <span class=\"cat-product\">{{ category }}</span>
                </h2>
            </aside>
            <aside class=\"description-product\"><p>{{ product.description }}</p></aside>
            {% if  product.salePrice  == 0 %}
            <aside class=\"price-product\"><p>{{ product.price }}€</p></aside>
            {% else %}
                <div class=\"promo-pastille\">
                    Promo
                </div>
                <div class=\"all-price\">
                <aside class=\"price-product price-reduc\"><p>{{ product.price }}€</p></aside>
                <aside class=\"price-product price-new\"><p>{{ product.salePrice }}€</p></aside>
                </div>
            {% endif %}
            <aside class=\"color-product\"><p>Color of product : {{ product.color }}</p></aside>

            <aside class=\"stock-product\"><p>
                    {% if product.stock == 0 %}
                        <span class=\"out-of-stock\">OUT OF STOCK</span>
                    {% elseif product.stock <= 5  %}
                        <span class=\"semi-important\">Stock : {{ product.stock }}</span>
                    </aside>
                    <aside><button class=\"btn-custom btn-black btn-add-to-cart\">Add to cart</aside>
                    <aside class=\"shipping-details\">
                        <p class=\"ship\">Free delivery</p>
                        <p class=\"come-back\">Free returns</p>
                    </aside>
                    {% else %}
                    Stock : {{product.stock}}
                    </aside>
                        <aside><form action=\"#\"><button class=\"btn-custom btn-black btn-add-to-cart\">Add to cart</button></form></aside>
                    <aside class=\"shipping-details\">
                        <p class=\"ship\">Free delivery</p>
                        <p class=\"come-back\">Free returns</p>
                    </aside>
                    {% endif %}
        </section>

    </article>
    <aside class=\"title-section content-site\"><h2>Similar products</h2></aside>
    <section class=\"boucle-produit content-site\">
        {% for product in productAll | slice(0,3) %}
            <a class=\"box-produit\" href=\"{{ path ('product_simple', {id:product.id}) }}\">
                <aside class=\"box-produit-content\">
                    <div class=\"product-title-home\"><h2>{{ product.name }}</h2></div>
                    <div class=\"product-img-home\"><img src=\"{{ asset('assets/img/products/') }}{{ product.img }}\"></div>
                    <div class=\"product-description-home\"><p>{{ product.description|length > 50 ? product.description|slice(0, 100) ~ '...' : product.description}}</p></div>
                    <div class=\"product-price-home\"><h4>{{ product.price }} €</h4></div>
                    <form action=\"#\"><button class=\"btn-custom btn-black btn-add-to-cart\">Add to cart</button></form>
                </aside></a>
        {% endfor%}
    </section>






    </article>



{% endblock %}
", "product_simple/added.html.twig", "/Users/axelhuon/Documents/Projet/ProjectEcommerce/templates/product_simple/added.html.twig");
    }
}
