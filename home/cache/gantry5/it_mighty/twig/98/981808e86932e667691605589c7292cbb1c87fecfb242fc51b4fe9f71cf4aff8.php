<?php

/* @particles/buttons.html.twig */
class __TwigTemplate_5fd2176ef45aa09aaba1f16c5434b8d453a4b25f03d1db370ce173cef64adb36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/buttons.html.twig", 1);
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
        echo "
\t<div class=\"g-buttons";
        // line 24
        if ($this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "css", array()), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "css", array()), "class", array()));
        }
        echo "\" ";
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "extra", array())) {
            echo (isset($context["attr_extra"]) ? $context["attr_extra"] : null);
        }
        echo ">
\t\t";
        // line 25
        if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mainheading", array()) || $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array()))) {
            // line 26
            echo "\t\t\t";
            echo twig_escape_filter($this->env, (isset($context["particleheading"]) ? $context["particleheading"] : null), "html", null, true);
            echo "
\t\t";
        }
        // line 28
        echo "
\t\t<div class=\"g-grid\">
\t        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "itemsbuttons", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 31
            echo "\t\t\t";
            $context["attr_extra_item"] = "";
            // line 32
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "extra", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["extra"]) {
                // line 33
                echo "\t\t\t\t";
                $context["attr_extra_item"] = ((((((isset($context["attr_extra_item"]) ? $context["attr_extra_item"] : null) . " ") . twig_escape_filter($this->env, twig_first($this->env, twig_get_array_keys_filter($context["extra"])))) . "=\"") . twig_escape_filter($this->env, twig_first($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->valuesFilter($context["extra"])), "html_attr")) . "\"");
                // line 34
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "\t\t\t<div class=\"g-block\">
\t\t\t\t";
            // line 36
            if ($this->getAttribute($context["item"], "link", array())) {
                echo "<a target=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "target", array()), "_parent")) : ("_parent")));
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()));
                echo "\">";
            }
            // line 37
            echo "\t\t\t\t<div class=\"g-content g-buttons-item";
            if ($this->getAttribute($context["item"], "class", array())) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "class", array()));
            }
            if ($this->getAttribute($context["item"], "invertbutton", array())) {
                echo " inverted-button";
            }
            echo " ";
            if ((twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "fixedbuttonwidth", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "fixedbuttonwidth", array()), "yes")) : ("yes"))) == "yes")) {
                echo " fixed-button";
            }
            echo "\" ";
            if ($this->getAttribute($context["item"], "extra", array())) {
                echo (isset($context["attr_extra_item"]) ? $context["attr_extra_item"] : null);
            }
            echo ">
\t\t\t\t\t<div class=\"g-grid\">
\t\t\t\t\t\t<div class=\"g-block size-20\">
\t\t\t\t\t\t\t";
            // line 40
            if ($this->getAttribute($context["item"], "icon", array())) {
                echo "<span class=\"g-buttons-item-icon ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", array()));
                echo "\"></span>";
            }
            // line 41
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"g-block size-80\">
\t\t\t\t\t\t\t";
            // line 43
            if ($this->getAttribute($context["item"], "title1", array())) {
                echo "<p class=\"g-buttons-item-title1\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title1", array()));
                echo "</p>";
            }
            // line 44
            echo "\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["item"], "title2", array())) {
                echo "<h3 class=\"g-buttons-item-title2\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title2", array()));
                echo "</h3>";
            }
            // line 45
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            // line 48
            if ($this->getAttribute($context["item"], "link", array())) {
                echo "</a>";
            }
            // line 49
            echo "\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "\t\t</div>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "@particles/buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 51,  198 => 49,  194 => 48,  189 => 45,  182 => 44,  176 => 43,  172 => 41,  166 => 40,  145 => 37,  137 => 36,  134 => 35,  128 => 34,  125 => 33,  120 => 32,  117 => 31,  113 => 30,  109 => 28,  103 => 26,  101 => 25,  90 => 24,  87 => 23,  84 => 22,  80 => 1,  76 => 19,  70 => 18,  67 => 17,  60 => 16,  55 => 15,  53 => 14,  50 => 13,  48 => 12,  37 => 7,  33 => 6,  29 => 5,  27 => 4,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@particles/buttons.html.twig", "/home3/menmwen/public_html/home/templates/it_mighty/particles/buttons.html.twig");
    }
}
