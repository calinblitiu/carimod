<?php

/* @particles/keypoints.html.twig */
class __TwigTemplate_442400bf3168852a1b0a8f766c6ddb92de8e3073e7ccb7b0ec870592c7ad3a52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/keypoints.html.twig", 1);
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
\t<div class=\"g-keypoints";
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
        echo "\t\t<div class=\"g-grid\">
\t\t\t<div class=\"g-block g-left-points\">
\t\t\t\t<div class=\"g-content\">
\t\t\t\t\t<div class=\"g-grid\">
\t\t\t\t\t\t<div class=\"g-block\">
\t\t\t\t\t\t\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "itemsleft", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 34
            echo "\t\t\t\t\t\t\t\t";
            $context["attr_extra_item"] = "";
            // line 35
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "extra", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["extra"]) {
                // line 36
                echo "\t\t\t\t\t\t\t\t\t";
                $context["attr_extra_item"] = ((((((isset($context["attr_extra_item"]) ? $context["attr_extra_item"] : null) . " ") . twig_escape_filter($this->env, twig_first($this->env, twig_get_array_keys_filter($context["extra"])))) . "=\"") . twig_escape_filter($this->env, twig_first($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->valuesFilter($context["extra"])), "html_attr")) . "\"");
                // line 37
                echo "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t\t\t\t\t\t\t\t<div class=\"g-keypoints-item";
            if ($this->getAttribute($context["item"], "class", array())) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "class", array()));
            }
            echo "\" ";
            if ($this->getAttribute($context["item"], "extra", array())) {
                echo (isset($context["attr_extra_item"]) ? $context["attr_extra_item"] : null);
            }
            echo ">
\t\t\t\t\t\t\t\t\t";
            // line 39
            if ($this->getAttribute($context["item"], "title", array())) {
                echo "<h4 class=\"g-keypoints-item-title\">";
                if ($this->getAttribute($context["item"], "link", array())) {
                    echo "<a target=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "target", array()), "_parent")) : ("_parent")));
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()));
                    echo "\">";
                }
                echo $this->getAttribute($context["item"], "title", array());
                if ($this->getAttribute($context["item"], "icon", array())) {
                    echo "<span class=\"g-keypoints-item-icon ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", array()));
                    echo "\"></span>";
                }
                if ($this->getAttribute($context["item"], "link", array())) {
                    echo "</a>";
                }
                echo "</h4>";
            }
            // line 40
            echo "\t\t\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["item"], "description", array())) {
                echo "<div class=\"g-keypoints-item-desc\">";
                echo $this->getAttribute($context["item"], "description", array());
                echo "</div>";
            }
            // line 41
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"g-block g-main-image\">
\t\t\t\t<div class=\"g-content\">
\t\t\t\t\t";
        // line 50
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "image", array())) {
            echo "<img class=\"g-keypoints-image";
            if ((twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "imagebottom", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "imagebottom", array()), "yes")) : ("yes"))) == "yes")) {
                echo " image-bottom";
            }
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "alt", array()));
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "image", array())), "html", null, true);
            echo "\" ";
            echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->imageSize($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "image", array()));
            echo ">";
        }
        // line 51
        echo "\t\t\t\t</div>\t\t\t
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"g-block g-right-points\">
\t\t\t\t<div class=\"g-content\">
\t\t\t\t\t<div class=\"g-grid\">
\t\t\t\t\t\t<div class=\"g-block\">
\t\t\t\t\t\t\t";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "itemsright", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 59
            echo "\t\t\t\t\t\t\t\t";
            $context["attr_extra_item"] = "";
            // line 60
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "extra", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["extra"]) {
                // line 61
                echo "\t\t\t\t\t\t\t\t\t";
                $context["attr_extra_item"] = ((((((isset($context["attr_extra_item"]) ? $context["attr_extra_item"] : null) . " ") . twig_escape_filter($this->env, twig_first($this->env, twig_get_array_keys_filter($context["extra"])))) . "=\"") . twig_escape_filter($this->env, twig_first($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->valuesFilter($context["extra"])), "html_attr")) . "\"");
                // line 62
                echo "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "\t\t\t\t\t\t\t\t<div class=\"g-keypoints-item";
            if ($this->getAttribute($context["item"], "class", array())) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "class", array()));
            }
            echo "\" ";
            if ($this->getAttribute($context["item"], "extra", array())) {
                echo (isset($context["attr_extra_item"]) ? $context["attr_extra_item"] : null);
            }
            echo ">
\t\t\t\t\t\t\t\t\t";
            // line 64
            if ($this->getAttribute($context["item"], "title", array())) {
                echo "<h4 class=\"g-keypoints-item-title\">";
                if ($this->getAttribute($context["item"], "link", array())) {
                    echo "<a target=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "target", array()), "_parent")) : ("_parent")));
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()));
                    echo "\">";
                }
                if ($this->getAttribute($context["item"], "icon", array())) {
                    echo "<span class=\"g-keypoints-item-icon ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", array()));
                    echo "\"></span>";
                }
                echo $this->getAttribute($context["item"], "title", array());
                if ($this->getAttribute($context["item"], "link", array())) {
                    echo "</a>";
                }
                echo "</h4>";
            }
            // line 65
            echo "\t\t\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["item"], "description", array())) {
                echo "<div class=\"g-keypoints-item-desc\">";
                echo $this->getAttribute($context["item"], "description", array());
                echo "</div>";
            }
            // line 66
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "@particles/keypoints.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 68,  277 => 66,  270 => 65,  249 => 64,  237 => 63,  231 => 62,  228 => 61,  223 => 60,  220 => 59,  216 => 58,  207 => 51,  193 => 50,  184 => 43,  177 => 41,  170 => 40,  149 => 39,  137 => 38,  131 => 37,  128 => 36,  123 => 35,  120 => 34,  116 => 33,  109 => 28,  103 => 26,  101 => 25,  90 => 24,  87 => 23,  84 => 22,  80 => 1,  76 => 19,  70 => 18,  67 => 17,  60 => 16,  55 => 15,  53 => 14,  50 => 13,  48 => 12,  37 => 7,  33 => 6,  29 => 5,  27 => 4,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@particles/keypoints.html.twig", "/home3/menmwen/public_html/home/templates/it_mighty/particles/keypoints.html.twig");
    }
}
