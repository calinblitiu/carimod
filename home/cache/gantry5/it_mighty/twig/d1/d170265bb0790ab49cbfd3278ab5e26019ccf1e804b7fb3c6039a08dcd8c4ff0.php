<?php

/* @particles/video-feature.html.twig */
class __TwigTemplate_48fad9e7f95a4b06b16096955cf17db0127a62375f96d233cf9d7c16f902bc33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/video-feature.html.twig", 1);
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
            echo "<h3 class=\"g-video-feature-title\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array());
            echo "</h3>";
        }
        // line 32
        echo "    ";
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "description", array())) {
            echo "<div class=\"g-video-feature-desc\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "description", array());
            echo "</div>";
        }
        // line 33
        echo "    ";
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "link", array())) {
            echo "<a class=\"button g-video-feature-link\" href=\"";
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
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "video", array())) {
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "video", array());
        }
        $context["videocontent"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 40
    public function block_particle($context, array $blocks = array())
    {
        // line 41
        echo "
    <div class=\"g-video-feature";
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
        ";
        // line 43
        if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mainheading", array()) || $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array()))) {
            // line 44
            echo "            <div class=\"g-particle-intro\">
                ";
            // line 45
            if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mainheading", array())) {
                // line 46
                echo "                    <h3 class=\"g-title g-main-title\">";
                echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mainheading", array());
                echo "</h3>
                    <div class=\"g-title-separator ";
                // line 47
                if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array()) == false)) {
                    echo "no-intro-text";
                }
                echo "\"></div>
                ";
            }
            // line 48
            echo " 
                ";
            // line 49
            if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array())) {
                echo "<p class=\"g-introtext\">";
                echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array());
                echo "</p>";
            }
            // line 50
            echo "            </div>
        ";
        }
        // line 52
        echo "        <div class=\"g-grid\">
            <div class=\"g-block g-video-feature-left";
        // line 53
        if ($this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "css", array()), "left", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "css", array()), "left", array()));
        }
        if ((twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array()), "left")) : ("left"))) == "left")) {
            echo " video-block";
        }
        echo "\" ";
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "extra_left", array())) {
            echo (isset($context["attr_extra_left"]) ? $context["attr_extra_left"] : null);
        }
        echo ">
                <div class=\"g-content\">
                    ";
        // line 55
        if ((twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array()), "left")) : ("left"))) == "right")) {
            echo twig_escape_filter($this->env, (isset($context["textcontent"]) ? $context["textcontent"] : null), "html", null, true);
        }
        // line 56
        echo "                    ";
        if ((twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array()), "left")) : ("left"))) == "left")) {
            echo twig_escape_filter($this->env, (isset($context["videocontent"]) ? $context["videocontent"] : null), "html", null, true);
        }
        // line 57
        echo "                </div>
            </div>
            <div class=\"g-block g-video-feature-right";
        // line 59
        if ($this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "css", array()), "right", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "css", array()), "right", array()));
        }
        if ((twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array()), "left")) : ("left"))) == "right")) {
            echo " align-right video-block";
        }
        echo "\" ";
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "extra_right", array())) {
            echo (isset($context["attr_extra_right"]) ? $context["attr_extra_right"] : null);
        }
        echo ">
                <div class=\"g-content\">
                    ";
        // line 61
        if ((twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array()), "left")) : ("left"))) == "right")) {
            echo twig_escape_filter($this->env, (isset($context["videocontent"]) ? $context["videocontent"] : null), "html", null, true);
        }
        // line 62
        echo "                    ";
        if ((twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array()), "left")) : ("left"))) == "left")) {
            echo twig_escape_filter($this->env, (isset($context["textcontent"]) ? $context["textcontent"] : null), "html", null, true);
        }
        // line 63
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@particles/video-feature.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 63,  238 => 62,  234 => 61,  219 => 59,  215 => 57,  210 => 56,  206 => 55,  191 => 53,  188 => 52,  184 => 50,  178 => 49,  175 => 48,  168 => 47,  163 => 46,  161 => 45,  158 => 44,  156 => 43,  145 => 42,  142 => 41,  139 => 40,  135 => 1,  129 => 37,  127 => 36,  110 => 33,  103 => 32,  96 => 31,  94 => 30,  83 => 25,  79 => 24,  75 => 23,  73 => 22,  71 => 21,  60 => 16,  56 => 15,  52 => 14,  50 => 13,  48 => 12,  37 => 7,  33 => 6,  29 => 5,  27 => 4,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@particles/video-feature.html.twig", "/home3/menmwen/public_html/home/templates/it_mighty/particles/video-feature.html.twig");
    }
}
