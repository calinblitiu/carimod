<?php

/* @particles/cta-button.html.twig */
class __TwigTemplate_c4a304226f53c496e5427c729abd52648d26952da96c2b32f56bb92267de27da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/cta-button.html.twig", 1);
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
        // line 3
        $context["attr_extra"] = "";
        // line 4
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "extra", array())) {
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "extra", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["attributes"]) {
                // line 6
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["attributes"]);
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 7
                    $context["attr_extra"] = ((((((isset($context["attr_extra"]) ? $context["attr_extra"] : null) . " ") . twig_escape_filter($this->env, $context["key"])) . "=\"") . twig_escape_filter($this->env, $context["value"], "html_attr")) . "\"");
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attributes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 12
        ob_start();
        // line 13
        echo "    <div class=\"g-grid\">
        <div class=\"g-block\">
            <div class=\"g-cta-inner clearfix\">
                <div class=\"g-cta-left ";
        // line 16
        if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "description", array()) == false)) {
            echo " no-desc";
        }
        echo "\">
                    ";
        // line 17
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array())) {
            echo "<h3 class=\"g-cta-title\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array());
            echo "</h3>";
        }
        // line 18
        echo "                    ";
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "description", array())) {
            echo "<span class=\"g-cta-desc\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "description", array());
            echo "</span>";
        }
        // line 19
        echo "                </div>
                <div class=\"g-cta-right";
        // line 20
        if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "description", array()) == false)) {
            echo " no-desc";
        }
        echo "\">
                    ";
        // line 21
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "link", array())) {
            // line 22
            echo "                        <a class=\"button\" target=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "target", array()), "_parent")) : ("_parent")));
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "link", array()));
            echo "\">";
            if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "buttonicon", array())) {
                echo "<i class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "buttonicon", array()));
                echo "\"></i>";
            }
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "buttontext", array()));
            echo "</a>
                    ";
        }
        // line 24
        echo "                </div>
            </div>
        </div>
    </div>
";
        $context["ctabutton"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 30
    public function block_particle($context, array $blocks = array())
    {
        // line 31
        echo "
    <div class=\"g-cta-button";
        // line 32
        if ($this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "css", array()), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "css", array()), "class", array()));
        }
        echo " ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "style1")) : ("style1")));
        echo "\" ";
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "extra", array())) {
            echo (isset($context["attr_extra"]) ? $context["attr_extra"] : null);
        }
        echo ">
        ";
        // line 33
        if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "style1")) : ("style1")) == "style1")) {
            echo twig_escape_filter($this->env, (isset($context["ctabutton"]) ? $context["ctabutton"] : null), "html", null, true);
        }
        // line 34
        echo "        ";
        if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "style1")) : ("style1")) == "style2")) {
            echo twig_escape_filter($this->env, (isset($context["ctabutton"]) ? $context["ctabutton"] : null), "html", null, true);
        }
        // line 35
        echo "    </div>

";
    }

    public function getTemplateName()
    {
        return "@particles/cta-button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 35,  134 => 34,  130 => 33,  117 => 32,  114 => 31,  111 => 30,  107 => 1,  100 => 24,  85 => 22,  83 => 21,  77 => 20,  74 => 19,  67 => 18,  61 => 17,  55 => 16,  50 => 13,  48 => 12,  37 => 7,  33 => 6,  29 => 5,  27 => 4,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@particles/cta-button.html.twig", "/home3/menmwen/public_html/home/templates/it_mighty/particles/cta-button.html.twig");
    }
}
