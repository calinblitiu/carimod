<?php

/* @particles/animated-counter.html.twig */
class __TwigTemplate_e0fb75464cb6f01a62ac91ddb17b656730528db522f1b0d9e5de7c39f826b819 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/animated-counter.html.twig", 1);
        $this->blocks = array(
            'particle' => array($this, 'block_particle'),
            'javascript_footer' => array($this, 'block_javascript_footer'),
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
        $context["timerid"] = twig_random($this->env);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_particle($context, array $blocks = array())
    {
        // line 15
        echo "\t<div class=\"g-animated-counter ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "style1")) : ("style1")));
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
        // line 16
        if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mainheading", array()) || $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array()))) {
            // line 17
            echo "\t\t\t<div class=\"g-particle-intro\">
\t\t\t\t";
            // line 18
            if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mainheading", array())) {
                // line 19
                echo "\t\t\t\t\t<h3 class=\"g-title g-main-title\">";
                echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mainheading", array());
                echo "</h3>
\t\t\t\t\t<div class=\"g-title-separator ";
                // line 20
                if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array()) == false)) {
                    echo "no-intro-text";
                }
                echo "\"></div>
\t\t\t\t";
            }
            // line 21
            echo "\t
\t\t\t\t";
            // line 22
            if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array())) {
                echo "<p class=\"g-introtext\">";
                echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array());
                echo "</p>";
            }
            // line 23
            echo "\t\t\t</div>
\t\t";
        }
        // line 25
        echo "\t\t<div class=\"g-grid\">
\t\t\t";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "items", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 27
            echo "\t\t\t\t";
            $context["attr_extra_item"] = "";
            // line 28
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "extra", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["extra"]) {
                // line 29
                echo "\t\t\t\t\t";
                $context["attr_extra_item"] = ((((((isset($context["attr_extra_item"]) ? $context["attr_extra_item"] : null) . " ") . twig_escape_filter($this->env, twig_first($this->env, twig_get_array_keys_filter($context["extra"])))) . "=\"") . twig_escape_filter($this->env, twig_first($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->valuesFilter($context["extra"])), "html_attr")) . "\"");
                // line 30
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "\t\t\t\t<div class=\"g-block g-animated-counter-item";
            if ($this->getAttribute($context["item"], "class", array())) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "class", array()));
            }
            echo "\" ";
            if ($this->getAttribute($context["item"], "extra", array())) {
                echo (isset($context["attr_extra_item"]) ? $context["attr_extra_item"] : null);
            }
            echo ">
\t\t\t\t\t<div class=\"g-content\">
\t\t\t\t\t\t";
            // line 33
            if ($this->getAttribute($context["item"], "icon", array())) {
                echo "<span class=\"g-animated-counter-icon ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", array()));
                echo "\"></span>";
            }
            // line 34
            echo "\t\t\t\t\t\t<h4 class=\"g-animated-counter-number timer_";
            echo twig_escape_filter($this->env, (isset($context["timerid"]) ? $context["timerid"] : null), "html", null, true);
            echo "\" data-from=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "fromnumber", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "fromnumber", array()), "0")) : ("0")));
            echo "\" data-to=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "tonumber", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "tonumber", array()), "100")) : ("100")));
            echo "\" data-speed=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "duration", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "duration", array()), "1000")) : ("1000")));
            echo "\" data-refresh-interval=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "refresh", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "refresh", array()), "100")) : ("100")));
            echo "\"></h4>
\t\t\t\t\t\t";
            // line 35
            if ($this->getAttribute($context["item"], "title", array())) {
                echo "<h4 class=\"g-animated-counter-title\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()));
                echo "</h4>";
            }
            // line 36
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "\t\t</div>
\t</div>
";
    }

    // line 43
    public function block_javascript_footer($context, array $blocks = array())
    {
        // line 44
        echo "\t";
        $this->displayParentBlock("javascript_footer", $context, $blocks);
        echo "
\t";
        // line 45
        if (($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "platform", array()), "getName", array(), "method") == "joomla")) {
            // line 46
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["joomla"]) ? $context["joomla"] : null), "html", array(0 => "jquery.framework"), "method"), "html", null, true);
            echo "
\t";
        }
        // line 48
        echo "
\t";
        // line 49
        if (($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "platform", array()), "getName", array(), "method") == "wordpress")) {
            // line 50
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wordpress"]) ? $context["wordpress"] : null), "call", array(0 => "wp_enqueue_script", 1 => "jquery"), "method"), "html", null, true);
            echo "
\t";
        }
        // line 52
        echo "
\t<script type=\"text/javascript\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/jquery.countTo.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\">
\t\tjQuery('.timer_";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["timerid"]) ? $context["timerid"] : null), "html", null, true);
        echo "').waypoint(function() {
\t\t\tjQuery('.timer_";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["timerid"]) ? $context["timerid"] : null), "html", null, true);
        echo "').countTo();
\t\t\tthis.destroy();
\t\t}, {offset: \"bottom-in-view\"});
\t</script>
";
    }

    public function getTemplateName()
    {
        return "@particles/animated-counter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 57,  218 => 56,  213 => 54,  209 => 53,  206 => 52,  200 => 50,  198 => 49,  195 => 48,  189 => 46,  187 => 45,  182 => 44,  179 => 43,  173 => 39,  165 => 36,  159 => 35,  146 => 34,  140 => 33,  127 => 31,  121 => 30,  118 => 29,  113 => 28,  110 => 27,  106 => 26,  103 => 25,  99 => 23,  93 => 22,  90 => 21,  83 => 20,  78 => 19,  76 => 18,  73 => 17,  71 => 16,  58 => 15,  55 => 14,  51 => 1,  49 => 12,  38 => 7,  34 => 6,  30 => 5,  28 => 4,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@particles/animated-counter.html.twig", "/home3/menmwen/public_html/home/templates/it_mighty/particles/animated-counter.html.twig");
    }
}
