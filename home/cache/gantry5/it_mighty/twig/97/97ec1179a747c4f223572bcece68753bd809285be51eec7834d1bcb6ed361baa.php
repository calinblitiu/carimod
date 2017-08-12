<?php

/* @particles/icon-fonts.html.twig */
class __TwigTemplate_643663440458df3aca36f8017d406ac497d0f95cb3cb2e02e77f110c183203b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/icon-fonts.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "enabled", array())) {
            // line 5
            echo "        ";
            $this->displayParentBlock("stylesheets", $context, $blocks);
            echo "
        ";
            // line 6
            if ($this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "load", array()), "octicons", array())) {
                // line 7
                echo "            <link rel=\"stylesheet\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://fonts/octicons/octicons.css"), "html", null, true);
                echo "\" type=\"text/css\"/>
        ";
            }
            // line 9
            echo "        ";
            if ($this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "load", array()), "strokeicon7", array())) {
                // line 10
                echo "            <link rel=\"stylesheet\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css"), "html", null, true);
                echo "\" type=\"text/css\"/>
            <link rel=\"stylesheet\" href=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://fonts/pe-icon-7-stroke/css/helper.css"), "html", null, true);
                echo "\" type=\"text/css\"/>
        ";
            }
            // line 13
            echo "        ";
            if ($this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "load", array()), "ionicons", array())) {
                // line 14
                echo "            <link rel=\"stylesheet\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://fonts/ionicons/css/ionicons.min.css"), "html", null, true);
                echo "\" type=\"text/css\"/>
        ";
            }
            // line 16
            echo "        ";
            if ($this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "load", array()), "themify", array())) {
                // line 17
                echo "            <link rel=\"stylesheet\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://fonts/themify-icons/themify-icons.css"), "html", null, true);
                echo "\" type=\"text/css\"/>
        ";
            }
            // line 19
            echo "        ";
            if ($this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "load", array()), "typicons", array())) {
                // line 20
                echo "            <link rel=\"stylesheet\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://fonts/typicons/typicons.min.css"), "html", null, true);
                echo "\" type=\"text/css\"/>
        ";
            }
            // line 22
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "@particles/icon-fonts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 22,  81 => 20,  78 => 19,  72 => 17,  69 => 16,  63 => 14,  60 => 13,  55 => 11,  50 => 10,  47 => 9,  41 => 7,  39 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@particles/icon-fonts.html.twig", "/home3/menmwen/public_html/home/templates/it_mighty/particles/icon-fonts.html.twig");
    }
}
