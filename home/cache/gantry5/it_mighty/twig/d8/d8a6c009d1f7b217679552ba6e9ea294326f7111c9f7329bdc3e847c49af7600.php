<?php

/* @particles/pricing.html.twig */
class __TwigTemplate_33a431d5057460099102f16619f05ef02569cb91d29301f0b9ccd4079957758f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/pricing.html.twig", 1);
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
        echo "\t<div class=\"g-particle-intro\">
\t\t";
        // line 14
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mainheading", array())) {
            // line 15
            echo "\t\t\t<h3 class=\"g-title g-main-title\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mainheading", array());
            echo "</h3>
\t\t\t<div class=\"g-title-separator ";
            // line 16
            if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array()) == false)) {
                echo "no-intro-text";
            }
            echo "\"></div>
\t\t";
        }
        // line 17
        echo "\t
\t\t";
        // line 18
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array())) {
            echo "<p class=\"g-introtext\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array());
            echo "</p>";
        }
        // line 19
        echo "\t</div>
";
        $context["particleheading"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_particle($context, array $blocks = array())
    {
        // line 23
        echo "    <div class=\"g-pricing-tables ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "style1")) : ("style1")));
        if ($this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "css", array()), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "css", array()), "class", array()));
        }
        if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "gutter", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "gutter", array()), "enabled")) : ("enabled")) == "enabled")) {
            echo " gutter-enabled";
        } else {
            echo " gutter-disabled";
        }
        echo "\" ";
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "extra", array())) {
            echo (isset($context["attr_extra"]) ? $context["attr_extra"] : null);
        }
        echo ">
\t\t";
        // line 24
        if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mainheading", array()) || $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array()))) {
            // line 25
            echo "\t\t\t";
            echo twig_escape_filter($this->env, (isset($context["particleheading"]) ? $context["particleheading"] : null), "html", null, true);
            echo "
\t\t";
        }
        // line 27
        echo "    \t
    \t<div class=\"g-grid\">
\t        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "items", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 30
            echo "\t\t       \t";
            $context["attr_extra_item"] = "";
            // line 31
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "extra", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["extra"]) {
                // line 32
                echo "\t\t\t\t\t";
                $context["attr_extra_item"] = ((((((isset($context["attr_extra_item"]) ? $context["attr_extra_item"] : null) . " ") . twig_escape_filter($this->env, twig_first($this->env, twig_get_array_keys_filter($context["extra"])))) . "=\"") . twig_escape_filter($this->env, twig_first($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->valuesFilter($context["extra"])), "html_attr")) . "\"");
                // line 33
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "\t        \t<div class=\"g-block g-pricing-table";
            if ($this->getAttribute($context["item"], "class", array())) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "class", array()));
            }
            if ($this->getAttribute($context["item"], "featured", array())) {
                echo " featured-table";
            }
            echo "\" ";
            if ($this->getAttribute($context["item"], "extra", array())) {
                echo (isset($context["attr_extra_item"]) ? $context["attr_extra_item"] : null);
            }
            echo ">
\t        \t\t<div ";
            // line 35
            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "gutter", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "gutter", array()), "enabled")) : ("enabled")) == "enabled")) {
                echo "class=\"g-content\"";
            }
            echo ">
\t        \t\t\t<div class=\"g-pricing-table-inner\">
\t        \t\t\t\t";
            // line 37
            if (($this->getAttribute($context["item"], "title", array()) || $this->getAttribute($context["item"], "price", array()))) {
                // line 38
                echo "\t        \t\t\t\t\t<div class=\"g-table-head\">
\t\t\t        \t\t\t\t";
                // line 39
                if ($this->getAttribute($context["item"], "title", array())) {
                    echo "<div class=\"g-table-title\"><h4>";
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "</h4></div>";
                }
                // line 40
                echo "\t\t\t        \t\t\t\t";
                if ($this->getAttribute($context["item"], "price", array())) {
                    echo "<div class=\"g-table-price\">";
                    echo $this->getAttribute($context["item"], "price", array());
                    echo "</div>";
                }
                // line 41
                echo "\t\t\t        \t\t\t\t";
                if ($this->getAttribute($context["item"], "period", array())) {
                    echo "<div class=\"g-table-period\">";
                    echo $this->getAttribute($context["item"], "period", array());
                    echo "</div>";
                }
                // line 42
                echo "\t        \t\t\t\t\t</div>
\t        \t\t\t\t";
            }
            // line 44
            echo "\t        \t\t\t\t";
            if (((((((($this->getAttribute($context["item"], "item1", array()) || $this->getAttribute($context["item"], "item2", array())) || $this->getAttribute($context["item"], "item3", array())) || $this->getAttribute($context["item"], "item4", array())) || $this->getAttribute($context["item"], "item5", array())) || $this->getAttribute($context["item"], "item6", array())) || $this->getAttribute($context["item"], "item7", array())) || $this->getAttribute($context["item"], "item8", array()))) {
                // line 45
                echo "\t        \t\t\t\t\t<div class=\"g-table-body\">
\t\t\t        \t\t\t\t";
                // line 46
                if ($this->getAttribute($context["item"], "item1", array())) {
                    echo "<div class=\"g-table-item\">";
                    echo $this->getAttribute($context["item"], "item1", array());
                    echo "</div>";
                }
                // line 47
                echo "\t\t\t        \t\t\t\t";
                if ($this->getAttribute($context["item"], "item2", array())) {
                    echo "<div class=\"g-table-item\">";
                    echo $this->getAttribute($context["item"], "item2", array());
                    echo "</div>";
                }
                // line 48
                echo "\t\t\t        \t\t\t\t";
                if ($this->getAttribute($context["item"], "item3", array())) {
                    echo "<div class=\"g-table-item\">";
                    echo $this->getAttribute($context["item"], "item3", array());
                    echo "</div>";
                }
                // line 49
                echo "\t\t\t        \t\t\t\t";
                if ($this->getAttribute($context["item"], "item4", array())) {
                    echo "<div class=\"g-table-item\">";
                    echo $this->getAttribute($context["item"], "item4", array());
                    echo "</div>";
                }
                // line 50
                echo "\t\t\t        \t\t\t\t";
                if ($this->getAttribute($context["item"], "item5", array())) {
                    echo "<div class=\"g-table-item\">";
                    echo $this->getAttribute($context["item"], "item5", array());
                    echo "</div>";
                }
                // line 51
                echo "\t\t\t        \t\t\t\t";
                if ($this->getAttribute($context["item"], "item6", array())) {
                    echo "<div class=\"g-table-item\">";
                    echo $this->getAttribute($context["item"], "item6", array());
                    echo "</div>";
                }
                // line 52
                echo "\t\t\t        \t\t\t\t";
                if ($this->getAttribute($context["item"], "item7", array())) {
                    echo "<div class=\"g-table-item\">";
                    echo $this->getAttribute($context["item"], "item7", array());
                    echo "</div>";
                }
                // line 53
                echo "\t\t\t        \t\t\t\t";
                if ($this->getAttribute($context["item"], "item8", array())) {
                    echo "<div class=\"g-table-item\">";
                    echo $this->getAttribute($context["item"], "item8", array());
                    echo "</div>";
                }
                // line 54
                echo "\t\t\t        \t\t\t</div>
\t\t\t        \t\t";
            }
            // line 56
            echo "\t\t\t        \t\t";
            if (($this->getAttribute($context["item"], "link", array()) || $this->getAttribute($context["item"], "buttontext", array()))) {
                // line 57
                echo "\t\t\t        \t\t\t<div class=\"g-table-button\">
\t\t\t        \t\t\t\t<a class=\"button ";
                // line 58
                if ((((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "style1")) : ("style1")) == "style1") || (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "style1")) : ("style1")) == "style2") && ($this->getAttribute($context["item"], "featured", array()) == false)))) {
                    echo " empty";
                }
                echo "\" target=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "target", array()), "_parent")) : ("_parent")));
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()));
                echo "\">
\t\t\t        \t\t\t\t\t";
                // line 59
                if ($this->getAttribute($context["item"], "buttonicon", array())) {
                    echo "<i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "buttonicon", array()));
                    echo "\"></i>";
                }
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "buttontext", array()));
                echo "
\t\t\t        \t\t\t\t</a>
\t\t\t        \t\t\t</div>
\t\t\t        \t\t";
            }
            // line 63
            echo "\t        \t\t\t</div>
\t\t        \t</div>
\t            </div>
\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "    \t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "@particles/pricing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 67,  282 => 63,  270 => 59,  260 => 58,  257 => 57,  254 => 56,  250 => 54,  243 => 53,  236 => 52,  229 => 51,  222 => 50,  215 => 49,  208 => 48,  201 => 47,  195 => 46,  192 => 45,  189 => 44,  185 => 42,  178 => 41,  171 => 40,  165 => 39,  162 => 38,  160 => 37,  153 => 35,  138 => 34,  132 => 33,  129 => 32,  124 => 31,  121 => 30,  117 => 29,  113 => 27,  107 => 25,  105 => 24,  87 => 23,  84 => 22,  80 => 1,  76 => 19,  70 => 18,  67 => 17,  60 => 16,  55 => 15,  53 => 14,  50 => 13,  48 => 12,  37 => 7,  33 => 6,  29 => 5,  27 => 4,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@particles/pricing.html.twig", "/home3/menmwen/public_html/home/templates/it_mighty/particles/pricing.html.twig");
    }
}
