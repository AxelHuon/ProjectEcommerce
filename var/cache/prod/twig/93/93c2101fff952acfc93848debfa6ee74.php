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
class __TwigTemplate_edfb41c7b6d5d06e8232e094668ca4f3 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "product_simple/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 3), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    <article class=\"product-simple content-site\">

        <section class=\"left-part\">
            <aside class=\"product-img\">
                <img class=\"img-brand\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/"), "html", null, true);
        echo twig_escape_filter($this->env, ($context["brand"] ?? null), "html", null, true);
        echo ".svg\">
                <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/products/"), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "img", [], "any", false, false, false, 12), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 12), "html", null, true);
        echo "\">
            </aside>
        </section>
        <section class=\"right-part\">
            <aside class=\"title-product\"><h2>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 16), "html", null, true);
        echo " - <span class=\"cat-product\">";
        echo twig_escape_filter($this->env, ($context["category"] ?? null), "html", null, true);
        echo "</span>
                </h2>
            </aside>
            <aside class=\"description-product\"><p>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 19), "html", null, true);
        echo "</p></aside>
            ";
        // line 20
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "salePrice", [], "any", false, false, false, 20) == 0)) {
            // line 21
            echo "            <aside class=\"price-product\"><p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 21), "html", null, true);
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 27), "html", null, true);
            echo "€</p></aside>
                <aside class=\"price-product price-new\"><p>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "salePrice", [], "any", false, false, false, 28), "html", null, true);
            echo "€</p></aside>
                </div>
            ";
        }
        // line 31
        echo "            <aside class=\"color-product\"><p>Color of product : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "color", [], "any", false, false, false, 31), "html", null, true);
        echo "</p></aside>

            <aside class=\"stock-product\"><p>
                    ";
        // line 34
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "stock", [], "any", false, false, false, 34) == 0)) {
            // line 35
            echo "                        <span class=\"out-of-stock\">OUT OF STOCK</span>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 36
($context["product"] ?? null), "stock", [], "any", false, false, false, 36) <= 5)) {
            // line 37
            echo "                        <span class=\"semi-important\">Stock : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "stock", [], "any", false, false, false, 37), "html", null, true);
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "stock", [], "any", false, false, false, 45), "html", null, true);
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
        echo "
            <aside class=\"select-size\">
                <label for=\"select-size\">Size</label>

                ";
        // line 57
        if ((($context["category"] ?? null) == "SweatShirt")) {
            // line 58
            echo "                <select name=\"select-size\">
                    <option value=\"M\">S</option>
                    <option value=\"M\">M</option>
                    <option value=\"M\">L</option>
                    <option value=\"M\">XL</option>
                    <option value=\"M\">XXL</option>
                </select>

                ";
        } elseif ((        // line 66
($context["category"] ?? null) == "Sneakers")) {
            // line 67
            echo "                    <select name=\"select-size\">
                    ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(35, 45));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 69
                echo "                        <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "                    </select>
                ";
        }
        // line 73
        echo "            </aside>
        </section>

    </article>
    <aside class=\"title-section content-site\"><h2>Similar products</h2></aside>
    <section class=\"boucle-produit content-site\">
        ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["productAll"] ?? null), 0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 80
            echo "            <a class=\"box-produit\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_simple", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 80)]), "html", null, true);
            echo "\">
                <aside class=\"box-produit-content\">
                    <div class=\"product-title-home\"><h2>";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 82), "html", null, true);
            echo "</h2></div>
                    <div class=\"product-img-home\"><img src=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/products/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "img", [], "any", false, false, false, 83), "html", null, true);
            echo "\"></div>
                    <div class=\"product-description-home\"><p>";
            // line 84
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 84)) > 50)) ? ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 84), 0, 100) . "...")) : (twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 84))), "html", null, true);
            echo "</p></div>
                    <div class=\"product-price-home\"><h4>";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 85), "html", null, true);
            echo " €</h4></div>
                    <form action=\"#\"><button class=\"btn-custom btn-black btn-add-to-cart\">Add to cart</button></form>
                </aside></a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "    </section>






    </article>



";
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
        return array (  237 => 89,  227 => 85,  223 => 84,  218 => 83,  214 => 82,  208 => 80,  204 => 79,  196 => 73,  192 => 71,  181 => 69,  177 => 68,  174 => 67,  172 => 66,  162 => 58,  160 => 57,  154 => 53,  142 => 45,  130 => 37,  128 => 36,  125 => 35,  123 => 34,  116 => 31,  110 => 28,  106 => 27,  100 => 23,  94 => 21,  92 => 20,  88 => 19,  80 => 16,  70 => 12,  65 => 11,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "product_simple/index.html.twig", "/Users/axelhuon/Documents/Projet/ProjectEcommerce/templates/product_simple/index.html.twig");
    }
}
