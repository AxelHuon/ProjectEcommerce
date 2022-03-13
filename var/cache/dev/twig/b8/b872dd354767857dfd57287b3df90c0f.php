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

/* product_simple/index.html.twig */
class __TwigTemplate_f129a7baf1f89cad958dc27b7dfe4b96 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product_simple/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product_simple/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product_simple/index.html.twig", 1);
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        
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
            <aside class=\"price-product\"><p>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 20, $this->source); })()), "price", [], "any", false, false, false, 20), "html", null, true);
        echo "€</p></aside>

            <aside class=\"color-product\"><p>Color of product : ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 22, $this->source); })()), "color", [], "any", false, false, false, 22), "html", null, true);
        echo "</p></aside>

            <aside class=\"stock-product\"><p>
                    ";
        // line 25
        if ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 25, $this->source); })()), "stock", [], "any", false, false, false, 25) == 0)) {
            // line 26
            echo "                        <span class=\"out-of-stock\">OUT OF STOCK</span>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 27
(isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 27, $this->source); })()), "stock", [], "any", false, false, false, 27) <= 5)) {
            // line 28
            echo "                        <span class=\"semi-important\">Stock : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 28, $this->source); })()), "stock", [], "any", false, false, false, 28), "html", null, true);
            echo "</span>
                    </aside>
                    <aside><button class=\"btn-custom btn-black btn-add-to-cart\">Add to cart</aside>
                    <aside class=\"shipping-details\">
                        <p class=\"ship\">Free delivery</p>
                        <p class=\"come-back\">Free returns</p>
                    </aside>
                    ";
        } else {
            // line 36
            echo "                    Stock : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 36, $this->source); })()), "stock", [], "any", false, false, false, 36), "html", null, true);
            echo "
                    </aside>
                        <aside><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\" class=\"btn-custom btn-black btn-add-to-cart\">Add to cart</a></aside>
                    <aside class=\"shipping-details\">
                        <p class=\"ship\">Free delivery</p>
                        <p class=\"come-back\">Free returns</p>
                    </aside>
                    ";
        }
        // line 44
        echo "
        </section>

    </article>
    <aside class=\"title-section content-site\"><h2>Similar products</h2></aside>
    <section class=\"boucle-produit content-site\">
        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["productAll"]) || array_key_exists("productAll", $context) ? $context["productAll"] : (function () { throw new RuntimeError('Variable "productAll" does not exist.', 50, $this->source); })()), 0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 51
            echo "            <a class=\"box-produit\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_simple", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\">
                <aside class=\"box-produit-content\">
                    <div class=\"product-title-home\"><h2>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 53), "html", null, true);
            echo "</h2></div>
                    <div class=\"product-img-home\"><img src=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/products/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "img", [], "any", false, false, false, 54), "html", null, true);
            echo "\"></div>
                    <div class=\"product-description-home\"><p>";
            // line 55
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 55)) > 50)) ? ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 55), 0, 100) . "...")) : (twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 55))), "html", null, true);
            echo "</p></div>
                    <div class=\"product-price-home\"><h4>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 56), "html", null, true);
            echo " €</h4></div>
                    <form action=\"#\"><button class=\"btn-custom btn-black btn-add-to-cart\">Add to cart</button></form>
                </aside></a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "    </section>






    </article>



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "product_simple/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 60,  198 => 56,  194 => 55,  189 => 54,  185 => 53,  179 => 51,  175 => 50,  167 => 44,  158 => 38,  152 => 36,  140 => 28,  138 => 27,  135 => 26,  133 => 25,  127 => 22,  122 => 20,  118 => 19,  110 => 16,  100 => 12,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ product.name }}{% endblock %}

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
            <aside class=\"price-product\"><p>{{ product.price }}€</p></aside>

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
                        <aside><a href=\"{{ path('cart_add', {id:product.id}) }}\" class=\"btn-custom btn-black btn-add-to-cart\">Add to cart</a></aside>
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
", "product_simple/index.html.twig", "/Users/axelhuon/Documents/Projet/ProjectEcommerce/templates/product_simple/index.html.twig");
    }
}
