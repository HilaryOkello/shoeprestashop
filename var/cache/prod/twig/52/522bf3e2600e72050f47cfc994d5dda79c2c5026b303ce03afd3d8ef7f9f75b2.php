<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/payments_alert.html.twig */
class __TwigTemplate_71334b2555eb3f4d0a21cd3f4f87b6ae7f1812156d8290622458d0594b3b088d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if (($this->getAttribute(($context["payments"] ?? null), "amountToPay", []) && $this->getAttribute(($context["payments"] ?? null), "paidAmount", []))) {
            // line 2
            echo "    <div class=\"alert alert-danger mb-0 js-view-order-payments-alert\" role=\"alert\">
        <p class=\"alert-text\">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Warning", [], "Admin.Global"), "html", null, true);
            echo "
            <strong>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute(($context["payments"] ?? null), "paidAmount", []), "html", null, true);
            echo "</strong>
            ";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("paid instead of", [], "Admin.Orderscustomers.Notification"), "html", null, true);
            echo "
            <strong>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute(($context["payments"] ?? null), "amountToPay", []), "html", null, true);
            echo "</strong>

            ";
            // line 9
            if ( !twig_test_empty($this->getAttribute(($context["linkedOrders"] ?? null), "linkedOrders", []))) {
                // line 10
                echo "                ";
                if ((twig_length_filter($this->env, $this->getAttribute(($context["linkedOrders"] ?? null), "linkedOrders", [])) == 1)) {
                    // line 11
                    echo "                    <br/>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This warning also concerns order:", [], "Admin.Orderscustomers.Notification"), "html", null, true);
                    echo "
                ";
                } else {
                    // line 13
                    echo "                    <br/>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This warning also concerns the following orders:", [], "Admin.Orderscustomers.Notification"), "html", null, true);
                    echo "
                ";
                }
                // line 15
                echo "
                ";
                // line 16
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["linkedOrders"] ?? null), "linkedOrders", []));
                foreach ($context['_seq'] as $context["_key"] => $context["linkedOrder"]) {
                    // line 17
                    echo "                    <a target=\"_blank\" rel=\"noopener noreferrer\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_view", ["orderId" => $this->getAttribute($context["linkedOrder"], "orderId", [])]), "html", null, true);
                    echo "\">
                        #";
                    // line 18
                    echo twig_escape_filter($this->env, $this->getAttribute($context["linkedOrder"], "orderId", []), "html", null, true);
                    echo "
                    </a>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['linkedOrder'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 21
                echo "            ";
            }
            // line 22
            echo "        </p>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/payments_alert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 22,  91 => 21,  82 => 18,  77 => 17,  73 => 16,  70 => 15,  64 => 13,  58 => 11,  55 => 10,  53 => 9,  48 => 7,  44 => 6,  40 => 5,  36 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/payments_alert.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Order\\Order\\Blocks\\View\\payments_alert.html.twig");
    }
}
