<?php

/* @particles/main-feature.html.twig */
class __TwigTemplate_3d402a2424fff2d43d92b8dfa23ad392d6a258ee965f848bc486a6208765e4c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/main-feature.html.twig", 1);
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
        $context["attr_extra_left"] = "";
        // line 13
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "extra_left", array())) {
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "extra_left", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["attributes"]) {
                // line 15
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["attributes"]);
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 16
                    $context["attr_extra_left"] = ((((((isset($context["attr_extra_left"]) ? $context["attr_extra_left"] : null) . " ") . twig_escape_filter($this->env, $context["key"])) . "=\"") . twig_escape_filter($this->env, $context["value"], "html_attr")) . "\"");
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attributes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 21
        $context["attr_extra_right"] = "";
        // line 22
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "extra_right", array())) {
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "extra_right", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["attributes"]) {
                // line 24
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["attributes"]);
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 25
                    $context["attr_extra_right"] = ((((((isset($context["attr_extra_right"]) ? $context["attr_extra_right"] : null) . " ") . twig_escape_filter($this->env, $context["key"])) . "=\"") . twig_escape_filter($this->env, $context["value"], "html_attr")) . "\"");
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attributes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 30
        ob_start();
        // line 31
        echo "    ";
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array())) {
            echo "<h3 class=\"g-main-feature-title\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array());
            echo "</h3>";
        }
        // line 32
        echo "    ";
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "description", array())) {
            echo "<p class=\"g-main-feature-desc\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "description", array());
            echo "</p>";
        }
        // line 33
        echo "    ";
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "link", array())) {
            echo "<a class=\"button g-main-feature-link\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "link", array()));
            echo "\" target=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "target", array()), "_blank")) : ("_blank")));
            echo "\">";
            if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "buttonicon", array())) {
                echo "<i class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "buttonicon", array()));
                echo "\"></i>";
            }
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "buttontext", array());
            echo "</a>";
        }
        $context["textcontent"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 36
        ob_start();
        // line 37
        echo "    ";
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "image", array())) {
            echo "<img class=\"g-main-feature-image";
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
        $context["imagecontent"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 40
    public function block_particle($context, array $blocks = array())
    {
        // line 41
        echo "
    <div class=\"g-main-feature";
        // line 42
        if ($this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "css", array()), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "css", array()), "class", array()));
        }
        echo "\" ";
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "extra", array())) {
            echo (isset($context["attr_extra"]) ? $context["attr_extra"] : null);
        }
        echo ">
        <div class=\"g-grid\">
            <div class=\"g-block g-main-feature-left";
        // line 44
        if ($this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "css", array()), "left", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "css", array()), "left", array()));
        }
        if ((twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array()), "right")) : ("right"))) == "left")) {
            echo " image-block";
        }
        echo "\" ";
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "extra_left", array())) {
            echo (isset($context["attr_extra_left"]) ? $context["attr_extra_left"] : null);
        }
        echo ">
                <div class=\"g-content\">
                    ";
        // line 46
        if ((twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array()), "right")) : ("right"))) == "right")) {
            echo twig_escape_filter($this->env, (isset($context["textcontent"]) ? $context["textcontent"] : null), "html", null, true);
        }
        // line 47
        echo "                    ";
        if ((twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array()), "right")) : ("right"))) == "left")) {
            echo twig_escape_filter($this->env, (isset($context["imagecontent"]) ? $context["imagecontent"] : null), "html", null, true);
        }
        // line 48
        echo "                </div>
            </div>
            <div class=\"g-block g-main-feature-right";
        // line 50
        if ($this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "css", array()), "right", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "css", array()), "right", array()));
        }
        if ((twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array()), "right")) : ("right"))) == "right")) {
            echo " align-right image-block";
        }
        echo "\" ";
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "extra_right", array())) {
            echo (isset($context["attr_extra_right"]) ? $context["attr_extra_right"] : null);
        }
        echo ">
                <div class=\"g-content\">
                    ";
        // line 52
        if ((twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array()), "right")) : ("right"))) == "right")) {
            echo twig_escape_filter($this->env, (isset($context["imagecontent"]) ? $context["imagecontent"] : null), "html", null, true);
        }
        // line 53
        echo "                    ";
        if ((twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array()), "right")) : ("right"))) == "left")) {
            echo twig_escape_filter($this->env, (isset($context["textcontent"]) ? $context["textcontent"] : null), "html", null, true);
        }
        // line 54
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@particles/main-feature.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 54,  214 => 53,  210 => 52,  195 => 50,  191 => 48,  186 => 47,  182 => 46,  167 => 44,  155 => 42,  152 => 41,  149 => 40,  145 => 1,  129 => 37,  127 => 36,  110 => 33,  103 => 32,  96 => 31,  94 => 30,  83 => 25,  79 => 24,  75 => 23,  73 => 22,  71 => 21,  60 => 16,  56 => 15,  52 => 14,  50 => 13,  48 => 12,  37 => 7,  33 => 6,  29 => 5,  27 => 4,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@particles/main-feature.html.twig", "/home3/menmwen/public_html/home/templates/it_mighty/particles/main-feature.html.twig");
    }
}
