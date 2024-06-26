<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* invoices/index.twig */
class __TwigTemplate_5d1f7ee2a2590b0c58f056daa6f0ec0d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "<style>
    table {
        width: 100%;
        border-collapse: collapse;
        text-align: center;
    }

    table tr th, table tr td {
        border: 1px #eee solid;
        padding: 5px;
    }

</style>

<table>
  <thead>
    <tr>
      <th>Invoice Number</th>
      <th>Amount</th>
      <th>Status</th>
      <th>Due Date</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["invoices"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["invoice"]) {
            // line 26
            yield "      <tr>
        <td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "invoiceNumber", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
        <td>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "amount", [], "any", false, false, false, 28), "USD"), "html", null, true);
            yield "</td>
        <td>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "status", [], "any", false, false, false, 29), "html", null, true);
            yield "</td>
        <td>
            ";
            // line 31
            ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "dueDate", [], "any", false, false, false, 31))) ? (yield "N/A") : (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "dueDate", [], "any", false, false, false, 31), "m/d/Y"), "html", null, true)));
            yield "     
        </td>
      </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            yield "      <tr><td colspan=\"4\">No Invoices Found</td></tr> 
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invoice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "   
    
  </tbody>
</table>

















































<!-- <style>
    table {
        width: 100%;
        border-collapse: collapse;
        text-align: center;
    }

    table tr th, table tr td {
        border: 1px #eee solid;
        padding: 5px;
    }

</style>
<table>
    <thead>
        <tr>
            <th>Invoice #</th>
            <th>Amount</th>
            <th>Status</th>
            <th>Due Date</th>
        </tr>
    </thead>
    <tbody>
        <?php if (empty(\$invoices)) : ?>
            <tr><td colspan=\"4\"><No Invoices Found></td></tr>
        <?php else: ?>
            <?php foreach (\$invoices as \$invoice): ?>
                <tr>
                    <td><?= \$invoice['invoiceNumber'] ?></td>
                    <td>\$<?= number_format(\$invoice['amount'], 2) ?></td>
                    <td><?= \$invoice['status'] ?></td>
                    <td>
                        <?php if(\$invoice['dueDate']): ?>
                            <?= date('m/d/Y', strtotime(\$invoice['dueDate'])) ?>
                        <?php else: ?>
                            N/A
                        <?php endif ?>       
                    </td>
                </tr>
            <?php endforeach ?>
        <?php endif ?>                    
    </tbody>
</table> -->


















































































































<!-- <style>
    table {
        width: 100%;
        border-collapse: collapse;
        text-align: center;
    }

    table tr th, table tr td {
        border: 1px #eee solid;
        padding: 5px;
    }

    .color-green {
        color: green;
    }
    .color-red {
        color: red;
    }
    .color-grey {
        color: grey;
    }
    .color-orange {
        color: orange;
    }

</style>
<table>
    <thead>
        <tr>
            <th>Invoice #</th>
            <th>Amount</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach (\$invoices as \$invoice) : ?>
            <tr>
                <td><?= \$invoice['invoice_number'] ?></td>
                <td>\$<?= number_format(\$invoice['amount'], 2) ?></td>
                <td class=\"<?= \\App\\Enums\\InvoiceStatus::tryFrom(\$invoice['status'])->color()->getClass() ?>\">
                    <?= \\App\\Enums\\InvoiceStatus::tryFrom(\$invoice['status'])->toString() ?>
                </td>
            </tr>
        <?php endforeach ?>    
    </tbody>
</table> -->













































































































<!-- <!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>Invoices</body>
</html> -->
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "invoices/index.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  101 => 36,  94 => 35,  85 => 31,  80 => 29,  76 => 28,  72 => 27,  69 => 26,  64 => 25,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "invoices/index.twig", "/var/www/views/invoices/index.twig");
    }
}
