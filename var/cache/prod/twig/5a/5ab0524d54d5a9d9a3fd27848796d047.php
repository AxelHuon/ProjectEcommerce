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

/* cart/index.html.twig */
class __TwigTemplate_893f30f2b0828ed4d54cb49baf515a44 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Hello CartController!";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <section class=\"cart content-site\">
    <h2 class=\"title-reset\">Cart</h2>
    ";
        // line 8
        if ((twig_length_filter($this->env, ($context["items"] ?? null)) > 0)) {
            // line 9
            echo "        <table>
            <thead>
                <tr>
                    <td>Product(s)</td>
                    <td>Prix</td>
                    <td>Quanity</td>
                    <td>Total</td>
                    <td>Delete</td>
                </tr>
            </thead>
            <tbody>
            ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 21
                echo "                <tr>
                    <td class=\"product-description-cart\"><span>";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 22), "name", [], "any", false, false, false, 22), "html", null, true);
                echo "</span><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/products/"), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 22), "img", [], "any", false, false, false, 22), "html", null, true);
                echo "\"></td>
                    <td>";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 23), "price", [], "any", false, false, false, 23), "html", null, true);
                echo "</td>
                    <td>";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 24), "html", null, true);
                echo "</td>
                    <td>";
                // line 25
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 25), "price", [], "any", false, false, false, 25) * twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 25)), "html", null, true);
                echo "</td>
                    <td><a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remove", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 26), "id", [], "any", false, false, false, 26)]), "html", null, true);
                echo "\"><i class=\"fa-solid fa-trash-can\"></i></a></td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "            </tbody>
            <tfoot>
                <tr>
                    <td colspan=\"4\"><strong class=\"strong-item\">Total : </strong></td>
                    <td><strong class=\"strong-item\">";
            // line 33
            echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
            echo " €</strong></td>
                </tr>
            </tfoot>
        </table>
        <a href=\"";
            // line 37
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("checkout");
            echo "\" class=\"btn-custom btn-black\">Go Checkout</a>
    ";
        } else {
            // line 39
            echo "        <div class=\"empty-cart\">
            <h3>Your cart is empty...</h3>
        </div>
    ";
        }
        // line 43
        echo "
    </section>

";
    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 43,  130 => 39,  125 => 37,  118 => 33,  112 => 29,  103 => 26,  99 => 25,  95 => 24,  91 => 23,  84 => 22,  81 => 21,  77 => 20,  64 => 9,  62 => 8,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cart/index.html.twig", "/Users/axelhuon/Documents/Projet/ProjectEcommerce/templates/cart/index.html.twig");
    }
}
