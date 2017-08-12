<?php

/* @gantry-admin/partials/php_unsupported.html.twig */
class __TwigTemplate_4d3db24c1023f142c018726d223a86ec35530fcf5041e31399e9d32e6435f38a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["php_version"] = twig_constant("PHP_VERSION");
        // line 2
        echo "
";
        // line 3
        if ((is_string($__internal_0c740603003165db592e9edcb4b2d037c0ec1ea5bb777f15355aad2a4245a55d = (isset($context["php_version"]) ? $context["php_version"] : null)) && is_string($__internal_99706124ece92a9121105bd0131eedf35cef8b63483b3eae6fa278e29b39d101 = "5.4") && ('' === $__internal_99706124ece92a9121105bd0131eedf35cef8b63483b3eae6fa278e29b39d101 || 0 === strpos($__internal_0c740603003165db592e9edcb4b2d037c0ec1ea5bb777f15355aad2a4245a55d, $__internal_99706124ece92a9121105bd0131eedf35cef8b63483b3eae6fa278e29b39d101)))) {
            // line 4
            echo "<div class=\"g-grid\">
    <div class=\"g-block alert alert-warning g-php-outdated\">
        ";
            // line 6
            echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_PHP54_WARNING", (isset($context["php_version"]) ? $context["php_version"] : null));
            echo "
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@gantry-admin/partials/php_unsupported.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gantry-admin/partials/php_unsupported.html.twig", "/home3/menmwen/public_html/home/administrator/components/com_gantry5/templates/partials/php_unsupported.html.twig");
    }
}
