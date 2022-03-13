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
class __TwigTemplate_3ac1f3ea9fff377d0dfad30cff2fde45 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "user_page/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "firstName", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "lastName", [], "any", false, false, false, 3), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "

    <section id=\"page-account\" class=\"content-site\">
        <article class=\"title-section\">
            <h2>Account page of ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "firstName", [], "any", false, false, false, 10), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "lastName", [], "any", false, false, false, 10), "html", null, true);
        echo "</h2>
        </article>
        <article>
            <div class=\"title-classique\">
                <h3>Personnal informations</h3>
            </div>
            <aside class=\"infos-items\">
                <p><span style=\"color: #999999; font-weight: 400;font-style: italic\">Nom Prénom : </span> <span style=\"font-weight: 600\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "lastName", [], "any", false, false, false, 17), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "firstName", [], "any", false, false, false, 17), "html", null, true);
        echo "</span></p>
                <p><span style=\"color: #999999; font-weight: 400;font-style: italic\">Email : </span> <span style=\"font-weight: 600\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 18), "html", null, true);
        echo "</span></p>
            </aside>
            <h3 class=\"title-classique\">Your addresses</h3>
            <aside class=\"all-box-address\">
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "address", [], "any", false, false, false, 22));
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
                        <a class=\"trash-button\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_address", ["id" => twig_get_attribute($this->env, $this->source, $context["address"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\"><i class=\"fa-solid fa-trash\"></i></a>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
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
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "orders", [], "any", false, false, false, 43));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 44
            echo "                <h3 class=\"title-order\">Order numero : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 44), "html", null, true);
            echo "</h3>
                <div class=\"shipping\">
                    <h4>Shipping address</h4>
                    <p class=\"title-address\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "address", [], "any", false, false, false, 47), "addressName", [], "any", false, false, false, 47), "html", null, true);
            echo "</p>
                    <p>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "address", [], "any", false, false, false, 48), "address", [], "any", false, false, false, 48), "html", null, true);
            echo "</p>
                    <p>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "address", [], "any", false, false, false, 49), "city", [], "any", false, false, false, 49), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "address", [], "any", false, false, false, 49), "cp", [], "any", false, false, false, 49), "html", null, true);
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
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["order"], "orderItems", [], "any", false, false, false, 61));
            foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
                // line 62
                echo "
                        <tr>
                            <td style=\"width: 200px\">";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["items"], "product", [], "any", false, false, false, 64), "name", [], "any", false, false, false, 64), "html", null, true);
                echo "</td>
                            <td><a href=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_simple", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["items"], "product", [], "any", false, false, false, 65), "id", [], "any", false, false, false, 65)]), "html", null, true);
                echo "\"> <img style=\"width: 200px\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/products/"), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["items"], "product", [], "any", false, false, false, 65), "img", [], "any", false, false, false, 65), "html", null, true);
                echo "\"></a></td>
                            <td>";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["items"], "product", [], "any", false, false, false, 66), "price", [], "any", false, false, false, 66), "html", null, true);
                echo "€</td>
                            ";
                // line 67
                if ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 67) == "Paid")) {
                    // line 68
                    echo "                                <td style=\"width: 200px\"><span class=\"status paid\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 68), "html", null, true);
                    echo "</span></td>
                                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 69
$context["order"], "status", [], "any", false, false, false, 69) == "In progress")) {
                    // line 70
                    echo "                                    <td style=\"width: 200px\"><span class=\"status progress\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 70), "html", null, true);
                    echo "</span></td>
                                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 71
$context["order"], "status", [], "any", false, false, false, 71) == "Failed")) {
                    // line 72
                    echo "                                    <td style=\"width: 200px\"><span class=\"status failed\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 72), "html", null, true);
                    echo "</span></td>
                            ";
                }
                // line 74
                echo "                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['items'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "                    </tbody>
                </table>

                <div class=\"total-price\">

                    <h3>Total order</h3>
                    <span> ";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "totalPrice", [], "any", false, false, false, 82), "html", null, true);
            echo " €</span>

                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "    </articles>
    </section>


";
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
        return array (  243 => 86,  233 => 82,  225 => 76,  218 => 74,  212 => 72,  210 => 71,  205 => 70,  203 => 69,  198 => 68,  196 => 67,  192 => 66,  185 => 65,  181 => 64,  177 => 62,  173 => 61,  157 => 49,  153 => 48,  149 => 47,  142 => 44,  138 => 43,  121 => 30,  112 => 27,  106 => 26,  102 => 25,  98 => 24,  95 => 23,  91 => 22,  84 => 18,  78 => 17,  66 => 10,  60 => 6,  56 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user_page/index.html.twig", "/Users/axelhuon/Documents/Projet/ProjectEcommerce/templates/user_page/index.html.twig");
    }
}
