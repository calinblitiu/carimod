<?php

/* @particles/totop.html.twig */
class __TwigTemplate_37b7a4523d3b3760ff65fe85031c486512abe22d6344c3e2b2ea25286d8b5239 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/totop.html.twig", 1);
        $this->blocks = array(
            'particle' => array($this, 'block_particle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = array())
    {
        // line 4
        $assetFunction = $this->env->getFunction('parse_assets')->getCallable();
        $assetVariables = array("priority" => 10);
        if ($assetVariables && !is_array($assetVariables)) {
            throw new UnexpectedValueException('{% scripts with x %}: x is not an array');
        }
        $location = "footer";
        if ($location && !is_string($location)) {
            throw new UnexpectedValueException('{% scripts in x %}: x is not a string');
        }
        $priority = isset($assetVariables['priority']) ? $assetVariables['priority'] : 0;
        ob_start();
        // line 5
        echo "\t<script type=\"text/javascript\">
\t\t(function(\$) {
\t\t\t\$(document).ready(function() {
\t\t\t\t\$(window).scroll(function() {
\t\t\t\t\tif (\$(document).scrollTop() < ";
        // line 9
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "offset", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "offset", array()), 500)) : (500)));
        echo " || \$(window).width() < 767) {
\t\t\t\t        \$('#g-totop-button').removeClass('totopfixed');

\t\t\t\t    } else {
\t\t\t\t        \$('#g-totop-button').addClass('totopfixed');

\t\t\t\t    }
\t\t\t\t});
\t\t\t});
\t\t})(jQuery);
\t</script>
";
        $content = ob_get_clean();
        echo $assetFunction($content, $location, $priority);
        // line 21
        echo "<div class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "css", array()), "class", array()));
        echo " g-particle\">
    <div class=\"g-totop ";
        // line 22
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "style1")) : ("style1")));
        echo "\">
        <a href=\"#\" id=\"g-totop-button\" rel=\"nofollow\" data-uk-smooth-scroll>
            ";
        // line 24
        if ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "icon", array()), "fa fa-angle-up")) : ("fa fa-angle-up"))) {
            echo "<i class=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "icon", array()), "fa fa-angle-up")) : ("fa fa-angle-up")));
            echo "\"></i>";
        }
        // line 25
        echo "            ";
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "content", array())) {
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "content", array());
        }
        // line 26
        echo "        </a>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@particles/totop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 26,  81 => 25,  75 => 24,  70 => 22,  65 => 21,  49 => 9,  43 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@particles/totop.html.twig", "/home3/menmwen/public_html/home/templates/it_mighty/particles/totop.html.twig");
    }
}
