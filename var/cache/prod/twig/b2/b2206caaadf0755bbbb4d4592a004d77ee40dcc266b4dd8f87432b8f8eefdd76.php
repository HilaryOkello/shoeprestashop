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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/product.html.twig */
class __TwigTemplate_687355e2ce3df4b6026f35a8e5a1408126d6d45002dfe4b32434b48ac657cb55 extends \Twig\Template
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
        // line 25
        echo "
";
        // line 26
        $context["rowIsDisplayed"] = (((isset($context["productIndex"]) || array_key_exists("productIndex", $context)) && (isset($context["paginationNum"]) || array_key_exists("paginationNum", $context))) && (($context["productIndex"] ?? null) > ($context["paginationNum"] ?? null)));
        // line 27
        echo "<tr id=\"orderProduct_";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "orderDetailId", []), "html", null, true);
        echo "\" class=\"cellProduct";
        if (($context["rowIsDisplayed"] ?? null)) {
            echo " d-none d-print-table-row";
        }
        echo "\">
  <td class=\"cellProductImg\">
    ";
        // line 29
        if ($this->getAttribute(($context["product"] ?? null), "imagePath", [])) {
            // line 30
            echo "      <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "imagePath", []), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "name", []), "html", null, true);
            echo "\" />
    ";
        }
        // line 32
        echo "  </td>
  <td class=\"cellProductName\">
    <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_form", ["id" => $this->getAttribute(($context["product"] ?? null), "id", [])]), "html", null, true);
        echo "\">
      <p class=\"mb-0 productName\">";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "name", []), "html", null, true);
        echo "</p>
      ";
        // line 36
        if ($this->getAttribute(($context["product"] ?? null), "reference", [])) {
            // line 37
            echo "        <p class=\"mb-0 productReference\">
          ";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reference number:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
          ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "reference", []), "html", null, true);
            echo "
        </p>
      ";
        }
        // line 42
        echo "      ";
        if ( !twig_test_empty($this->getAttribute(($context["product"] ?? null), "supplierReference", []))) {
            // line 43
            echo "        <p class=\"mb-0 productSupplierReference\">
          ";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Supplier reference:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
          ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "supplierReference", []), "html", null, true);
            echo "
        </p>
      ";
        }
        // line 48
        echo "    </a>
    ";
        // line 49
        if ((($this->getAttribute(($context["product"] ?? null), "type", []) == twig_constant("PrestaShop\\PrestaShop\\Core\\Domain\\Order\\QueryResult\\OrderProductForViewing::TYPE_PACK")) && (null === $this->getAttribute(($context["product"] ?? null), "customizations", [])))) {
            // line 50
            echo "      <span class=\"btn-product-pack-modal d-print-none\" data-toggle=\"modal\" data-target=\"#product-pack-modal\" data-pack-items=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["product"] ?? null), "packItems", [])), "html", null, true);
            echo "\">
        <strong>";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("View pack content", [], "Admin.Actions"), "html", null, true);
            echo "</strong>
      </span>
    ";
        }
        // line 54
        echo "  </td>
  <td class=\"cellProductUnitPrice\">";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "unitPrice", []), "html", null, true);
        echo "</td>
  <td class=\"cellProductQuantity text-center\">
    ";
        // line 57
        if (($this->getAttribute(($context["product"] ?? null), "quantity", []) > 1)) {
            // line 58
            echo "      <span class=\"badge badge-secondary rounded-circle\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "quantity", []), "html", null, true);
            echo "</span>
    ";
        } else {
            // line 60
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "quantity", []), "html", null, true);
            echo "
    ";
        }
        // line 62
        echo "
    <div class=\"d-none js-product-quantity\">
      <input type=\"text\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "quantity", []), "html", null, true);
        echo "\" class=\"form-control\">
    </div>
  </td>
  <td class=\"cellProductLocation";
        // line 67
        if ( !($context["isColumnLocationDisplayed"] ?? null)) {
            echo " d-none";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "location", []), "html", null, true);
        echo "</td>
  <td class=\"cellProductRefunded";
        // line 68
        if ( !($context["isColumnRefundedDisplayed"] ?? null)) {
            echo " d-none";
        }
        echo "\">
    ";
        // line 69
        if (($this->getAttribute(($context["product"] ?? null), "quantityRefunded", []) > 0)) {
            // line 70
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "quantityRefunded", []), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "amountRefunded", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Refunded", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo ")
    ";
        }
        // line 72
        echo "  </td>
  <td class=\"cellProductAvailableQuantity text-center";
        // line 73
        if ( !($context["isAvailableQuantityDisplayed"] ?? null)) {
            echo " d-none";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "availableQuantity", []), "html", null, true);
        echo "</td>
  <td class=\"cellProductTotalPrice\">";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "totalPrice", []), "html", null, true);
        echo "</td>
  ";
        // line 75
        if ($this->getAttribute(($context["orderForViewing"] ?? null), "hasInvoice", [], "method")) {
            // line 76
            echo "    <td>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "orderInvoiceNumber", []), "html", null, true);
            echo "</td>
  ";
        }
        // line 78
        echo "  ";
        if ( !$this->getAttribute(($context["orderForViewing"] ?? null), "delivered", [])) {
            // line 79
            echo "    <td class=\"text-right cellProductActions\">
      <button
        type=\"button\"
        class=\"btn tooltip-link js-order-product-edit-btn\"
        data-toggle=\"pstooltip\"
        data-placement=\"top\"
        data-original-title=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit", [], "Admin.Actions"), "html", null, true);
            echo "\"
        data-order-detail-id=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "orderDetailId", []), "html", null, true);
            echo "\"
        data-product-id=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "id", []), "html", null, true);
            echo "\"
        data-combination-id=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "combinationId", []), "html", null, true);
            echo "\"
        data-product-quantity=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "quantity", []), "html", null, true);
            echo "\"
        data-product-price-tax-incl=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "unitPriceTaxInclRaw", []), "html", null, true);
            echo "\"
        data-product-price-tax-excl=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "unitPriceTaxExclRaw", []), "html", null, true);
            echo "\"
        data-tax-rate=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "taxRate", []), "html", null, true);
            echo "\"
        data-location=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "location", []), "html", null, true);
            echo "\"
        data-available-quantity=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "availableQuantity", []), "html", null, true);
            echo "\"
        data-available-out-of-stock=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "availableOutOfStock", []), "html", null, true);
            echo "\"
        data-order-invoice-id=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "orderInvoiceId", []), "html", null, true);
            echo "\">
        <i class=\"material-icons\">edit</i>
      </button>
      <button
        type=\"button\"
        class=\"btn tooltip-link js-order-product-delete-btn\"
        data-toggle=\"pstooltip\"
        data-placement=\"top\"
        data-order-id=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute(($context["orderForViewing"] ?? null), "id", []), "html", null, true);
            echo "\"
        data-order-detail-id=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "orderDetailId", []), "html", null, true);
            echo "\"
        data-delete-message=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Are you sure?", [], "Admin.Notifications.Warning"), "html", null, true);
            echo "\"
        data-original-title=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete", [], "Admin.Actions"), "html", null, true);
            echo "\">
        <i class=\"material-icons\">delete</i>
      </button>
    </td>
  ";
        }
        // line 112
        echo "  <td class=\"text-right cancel-product-element\">
    <div class=\"cancel-product-cell cancel-product-element";
        // line 113
        if (($this->getAttribute(($context["product"] ?? null), "refundable", []) == false)) {
            echo " hidden";
        }
        echo "\">
      <div class=\"cancel-product-cell-elements\">
        <div class=\"cancel-product-selector form-group\">
          ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cancelProductForm"] ?? null), ("selected_" . $this->getAttribute(($context["product"] ?? null), "orderDetailId", [])), [], "array"), 'widget');
        echo "
        </div>
        <div class=\"cancel-product-quantity form-group\">
          ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cancelProductForm"] ?? null), ("quantity_" . $this->getAttribute(($context["product"] ?? null), "orderDetailId", [])), [], "array"), 'label');
        echo "
          <div class=\"input-group\">
            ";
        // line 121
        $context["quantityInputOptions"] = ["attr" => ["data-product-price-tax-incl" => $this->getAttribute(        // line 123
($context["product"] ?? null), "unitPriceTaxInclRaw", []), "data-product-price-tax-excl" => $this->getAttribute(        // line 124
($context["product"] ?? null), "unitPriceTaxExclRaw", []), "data-amount-refundable" => $this->getAttribute(        // line 125
($context["product"] ?? null), "amountRefundableRaw", []), "data-quantity-refundable" => $this->getAttribute(        // line 126
($context["product"] ?? null), "quantityRefundable", [])]];
        // line 129
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cancelProductForm"] ?? null), ("quantity_" . $this->getAttribute(($context["product"] ?? null), "orderDetailId", [])), [], "array"), 'widget', ($context["quantityInputOptions"] ?? null));
        echo "
            <div class=\"input-group-append\"><div class=\"input-group-text\">/ ";
        // line 130
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "quantityRefundable", []), "html", null, true);
        echo "</div></div>
          </div>
        </div>
        <div class=\"cancel-product-amount form-group\">
          ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cancelProductForm"] ?? null), ("amount_" . $this->getAttribute(($context["product"] ?? null), "orderDetailId", [])), [], "array"), 'label');
        echo "
          <div class=\"input-group\">
            ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cancelProductForm"] ?? null), ("amount_" . $this->getAttribute(($context["product"] ?? null), "orderDetailId", [])), [], "array"), 'widget');
        echo "
            <div class=\"input-group-append\"><div class=\"input-group-text\">";
        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute(($context["orderCurrency"] ?? null), "symbol", []), "html", null, true);
        echo "</div></div>
            <small class=\"max-refund text-left\">
              ";
        // line 139
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("(Max %amount_refundable% %tax_method%)", ["%amount_refundable%" => $this->getAttribute(        // line 140
($context["product"] ?? null), "amountRefundable", []), "%tax_method%" => $this->getAttribute(        // line 141
($context["orderForViewing"] ?? null), "taxMethod", [])], "Admin.Orderscustomers.Help");
        // line 142
        echo "
            </small>
          </div>
        </div>
      </div>
    </div>
  </td>
</tr>
";
        // line 150
        if ( !(null === $this->getAttribute(($context["product"] ?? null), "customizations", []))) {
            // line 151
            echo "  <tr class=\"order-product-customization";
            if (($context["rowIsDisplayed"] ?? null)) {
                echo " d-none";
            }
            echo "\">
    <td class=\"border-top-0\"></td>
    ";
            // line 153
            $context["colspan"] = 8;
            // line 154
            echo "    ";
            $context["colspan"] = (($this->getAttribute(($context["orderForViewing"] ?? null), "hasInvoice", [], "method")) ? ((($context["colspan"] ?? null) + 1)) : (($context["colspan"] ?? null)));
            // line 155
            echo "    ";
            $context["colspan"] = (( !$this->getAttribute(($context["orderForViewing"] ?? null), "delivered", [])) ? ((($context["colspan"] ?? null) + 1)) : (($context["colspan"] ?? null)));
            // line 156
            echo "    <td colspan=\"";
            echo twig_escape_filter($this->env, ($context["colspan"] ?? null), "html", null, true);
            echo "\" class=\"border-top-0 text-muted\">
      ";
            // line 157
            if ($this->getAttribute($this->getAttribute(($context["product"] ?? null), "customizations", []), "fileCustomizations", [])) {
                // line 158
                echo "        <div class=\"d-flex flex-row flex-wrap\">
          ";
                // line 159
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["product"] ?? null), "customizations", []), "fileCustomizations", []));
                foreach ($context['_seq'] as $context["_key"] => $context["customization"]) {
                    // line 160
                    echo "              <div class=\"mr-4\">
                <p><strong>";
                    // line 161
                    echo twig_escape_filter($this->env, $this->getAttribute($context["customization"], "name", []), "html", null, true);
                    echo "</strong></p>
                <p>
                  <a href=\"";
                    // line 163
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_display_customization_image", ["orderId" => $this->getAttribute(($context["orderForViewing"] ?? null), "id", []), "name" => twig_replace_filter(twig_urlencode_filter($this->getAttribute($context["customization"], "name", [])), ["%" => "_"]), "value" => $this->getAttribute($context["customization"], "value", [])]), "html", null, true);
                    echo "\" download>
                    <img src=\"";
                    // line 164
                    echo twig_escape_filter($this->env, $this->getAttribute($context["customization"], "image", []), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["customization"], "name", []), "html", null, true);
                    echo "\">
                  </a>
                </p>
              </div>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customization'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 169
                echo "        </div>
      ";
            }
            // line 171
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["product"] ?? null), "customizations", []), "textCustomizations", []));
            foreach ($context['_seq'] as $context["_key"] => $context["customization"]) {
                // line 172
                echo "        <p><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["customization"], "name", []), "html", null, true);
                echo " :</strong> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["customization"], "value", []), "html", null, true);
                echo "</p>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customization'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 174
            echo "      ";
            if (($this->getAttribute(($context["product"] ?? null), "type", []) == twig_constant("PrestaShop\\PrestaShop\\Core\\Domain\\Order\\QueryResult\\OrderProductForViewing::TYPE_PACK"))) {
                // line 175
                echo "        <div class=\"btn-product-pack-modal mb-3 d-print-none\" data-toggle=\"modal\" data-target=\"#product-pack-modal\" data-pack-items=\"";
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["product"] ?? null), "packItems", [])), "html", null, true);
                echo "\">
          <strong>";
                // line 176
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("View pack content", [], "Admin.Actions"), "html", null, true);
                echo "</strong>
        </div>
      ";
            }
            // line 179
            echo "    </td>
  </tr>
";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  440 => 179,  434 => 176,  429 => 175,  426 => 174,  415 => 172,  410 => 171,  406 => 169,  393 => 164,  389 => 163,  384 => 161,  381 => 160,  377 => 159,  374 => 158,  372 => 157,  367 => 156,  364 => 155,  361 => 154,  359 => 153,  351 => 151,  349 => 150,  339 => 142,  337 => 141,  336 => 140,  335 => 139,  330 => 137,  326 => 136,  321 => 134,  314 => 130,  309 => 129,  307 => 126,  306 => 125,  305 => 124,  304 => 123,  303 => 121,  298 => 119,  292 => 116,  284 => 113,  281 => 112,  273 => 107,  269 => 106,  265 => 105,  261 => 104,  250 => 96,  246 => 95,  242 => 94,  238 => 93,  234 => 92,  230 => 91,  226 => 90,  222 => 89,  218 => 88,  214 => 87,  210 => 86,  206 => 85,  198 => 79,  195 => 78,  189 => 76,  187 => 75,  183 => 74,  175 => 73,  172 => 72,  162 => 70,  160 => 69,  154 => 68,  146 => 67,  140 => 64,  136 => 62,  130 => 60,  124 => 58,  122 => 57,  117 => 55,  114 => 54,  108 => 51,  103 => 50,  101 => 49,  98 => 48,  92 => 45,  88 => 44,  85 => 43,  82 => 42,  76 => 39,  72 => 38,  69 => 37,  67 => 36,  63 => 35,  59 => 34,  55 => 32,  47 => 30,  45 => 29,  35 => 27,  33 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/product.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Order\\Order\\Blocks\\View\\product.html.twig");
    }
}
