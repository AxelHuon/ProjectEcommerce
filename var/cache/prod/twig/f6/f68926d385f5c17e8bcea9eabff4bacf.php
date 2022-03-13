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
class __TwigTemplate_7bdc97ae03b16a5009aa942dd3bc5bed extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "product_simple/added.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo "        </section>

    </article>
    <aside class=\"title-section content-site\"><h2>Similar products</h2></aside>
    <section class=\"boucle-produit content-site\">
        ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["productAll"] ?? null), 0, 3));
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
        return array (  193 => 68,  183 => 64,  179 => 63,  174 => 62,  170 => 61,  164 => 59,  160 => 58,  153 => 53,  141 => 45,  129 => 37,  127 => 36,  124 => 35,  122 => 34,  115 => 31,  109 => 28,  105 => 27,  99 => 23,  93 => 21,  91 => 20,  87 => 19,  79 => 16,  69 => 12,  64 => 11,  57 => 6,  53 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "product_simple/added.html.twig", "/Users/axelhuon/Documents/Projet/ProjectEcommerce/templates/product_simple/added.html.twig");
    }
}
