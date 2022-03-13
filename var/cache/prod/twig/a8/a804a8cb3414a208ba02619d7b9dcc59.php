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
class __TwigTemplate_d0d6641c19c241a483542b8aee52938f extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "shop/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Shop";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    <section id=\"shop-brand\" class=\"brand-full-whidth\">
        <div class=\"back-black-brand\"></div>
        <article>
            <h1>SHOP</h1>
        </article>
    </section>


    <section class=\"boucle-produit content-site\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 17
            echo "            <a class=\"box-produit\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_simple", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 17)]), "html", null, true);
            echo "\">
                <aside class=\"box-produit-content\">
                    <div class=\"product-title-home\"><h2>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 19), "html", null, true);
            echo "</h2></div>
                    <div class=\"product-img-home\"><img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/products/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "img", [], "any", false, false, false, 20), "html", null, true);
            echo "\"></div>
                    <div class=\"product-description-home\"><p>";
            // line 21
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 21)) > 50)) ? ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 21), 0, 100) . "...")) : (twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 21))), "html", null, true);
            echo "</p></div>
                    ";
            // line 22
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "salePrice", [], "any", false, false, false, 22) == 0)) {
                // line 23
                echo "                    <div class=\"product-price-home\"><h4>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 23), "html", null, true);
                echo " €</h4></div>
                    ";
            } else {
                // line 25
                echo "                        <div class=\"all-price\">
                    <div class=\"product-price-home price-reduc\"><h4>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 26), "html", null, true);
                echo " €</h4></div>
                    <div class=\"product-price-home price-new\"><h4>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "salePrice", [], "any", false, false, false, 27), "html", null, true);
                echo " €</h4></div>
                            ";
            }
            // line 29
            echo "                        </div>
                    <form action><button class=\"btn-custom btn-black btn-add-to-cart\">Add to cart</button></form>
                </aside></a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </section>



";
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
        return array (  122 => 33,  113 => 29,  108 => 27,  104 => 26,  101 => 25,  95 => 23,  93 => 22,  89 => 21,  84 => 20,  80 => 19,  74 => 17,  70 => 16,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "shop/index.html.twig", "/Users/axelhuon/Documents/Projet/ProjectEcommerce/templates/shop/index.html.twig");
    }
}
