<?php

/* @particles/image-features.html.twig */
class __TwigTemplate_f975fe28d941f6bf36d484c212207d10f02fd97eeed2c22ec8d90971840e3d7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/image-features.html.twig", 1);
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
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_particle($context, array $blocks = array())
    {
        // line 13
        echo "
\t<div class=\"g-image-features";
        // line 14
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
        // line 15
        if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mainheading", array()) || $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array()))) {
            // line 16
            echo "\t\t\t<div class=\"g-particle-intro\">
\t\t\t\t";
            // line 17
            if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mainheading", array())) {
                // line 18
                echo "\t\t\t\t\t<h3 class=\"g-title g-main-title\">";
                echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mainheading", array());
                echo "</h3>
\t\t\t\t\t<div class=\"g-title-separator ";
                // line 19
                if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array()) == false)) {
                    echo "no-intro-text";
                }
                echo "\"></div>
\t\t\t\t";
            }
            // line 20
            echo "\t
\t\t\t\t";
            // line 21
            if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array())) {
                echo "<p class=\"g-introtext\">";
                echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array());
                echo "</p>";
            }
            // line 22
            echo "\t\t\t</div>
\t\t";
        }
        // line 24
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "items", array()), twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "columns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "columns", array()), "2")) : ("2")))));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 25
            echo "\t\t\t<div class=\"g-grid\">
\t\t\t\t";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 27
                echo "\t\t\t\t\t";
                $context["attr_extra_item"] = "";
                // line 28
                echo "\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "extra", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["extra"]) {
                    // line 29
                    echo "\t\t\t\t\t\t";
                    $context["attr_extra_item"] = ((((((isset($context["attr_extra_item"]) ? $context["attr_extra_item"] : null) . " ") . twig_escape_filter($this->env, twig_first($this->env, twig_get_array_keys_filter($context["extra"])))) . "=\"") . twig_escape_filter($this->env, twig_first($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->valuesFilter($context["extra"])), "html_attr")) . "\"");
                    // line 30
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "\t\t\t\t\t<div class=\"g-block";
                if ($this->getAttribute($context["item"], "class", array())) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "class", array()));
                }
                echo "\" ";
                if ($this->getAttribute($context["item"], "extra", array())) {
                    echo (isset($context["attr_extra_item"]) ? $context["attr_extra_item"] : null);
                }
                echo ">
\t\t\t\t\t\t<div class=\"g-content\">
\t\t\t\t\t\t\t<div class=\"g-image-features-item\">
\t\t\t\t\t\t\t\t<div class=\"g-grid\">
\t\t\t\t\t\t\t\t\t";
                // line 35
                if ($this->getAttribute($context["item"], "image", array())) {
                    // line 36
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"g-block size-33 g-image-features-image";
                    if ($this->getAttribute($context["item"], "link", array())) {
                        echo " uk-overlay uk-overlay-hover";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 37
                    if ($this->getAttribute($context["item"], "link", array())) {
                        echo "<a target=\"";
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "target", array()), "_parent")) : ("_parent")));
                        echo "\" href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()));
                        echo "\"><span class=\"uk-overlay-panel uk-overlay-background uk-overlay-icon uk-overlay-fade\"></span>";
                    }
                    echo "<img alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "alt", array()));
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", array())), "html", null, true);
                    echo "\" ";
                    echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->imageSize($this->getAttribute($context["item"], "image", array()));
                    echo ">";
                    if ($this->getAttribute($context["item"], "link", array())) {
                        echo "</a>";
                    }
                    // line 38
                    echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 40
                echo "\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["item"], "title", array()) || $this->getAttribute($context["item"], "description", array()))) {
                    // line 41
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"g-block g-image-features-content\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 42
                    if ($this->getAttribute($context["item"], "title", array())) {
                        echo "<h4 class=\"g-image-features-title\">";
                        if ($this->getAttribute($context["item"], "link", array())) {
                            echo "<a target=\"";
                            echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "target", array()), "_parent")) : ("_parent")));
                            echo "\" href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()));
                            echo "\">";
                        }
                        echo $this->getAttribute($context["item"], "title", array());
                        if ($this->getAttribute($context["item"], "link", array())) {
                            echo "</a>";
                        }
                        echo "</h4>";
                    }
                    // line 43
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["item"], "description", array())) {
                        echo "<p class=\"g-image-features-desc\">";
                        echo $this->getAttribute($context["item"], "description", array());
                        echo "</p>";
                    }
                    // line 44
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute($context["item"], "specialtext", array()) || $this->getAttribute($context["item"], "bottomlink", array()))) {
                        // line 45
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"g-bottom-info clearfix";
                        if (($this->getAttribute($context["item"], "specialtext", array()) == false)) {
                            echo " no-special";
                        }
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 46
                        if ($this->getAttribute($context["item"], "specialtext", array())) {
                            echo "<div class=\"g-image-feature-special\">";
                            if ($this->getAttribute($context["item"], "icon", array())) {
                                echo "<i class=\"";
                                echo $this->getAttribute($context["item"], "icon", array());
                                echo "\"></i>";
                            }
                            echo $this->getAttribute($context["item"], "specialtext", array());
                            echo "</div>";
                        }
                        // line 47
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ($this->getAttribute($context["item"], "bottomlink", array())) {
                            echo "<div class=\"g-image-features-link\"><a target=\"";
                            echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "target", array()), "_parent")) : ("_parent")));
                            echo "\" href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()));
                            echo "\">";
                            echo $this->getAttribute($context["item"], "bottomlink", array());
                            echo "<i class=\"fa fa-long-arrow-right\"></i></a></div>";
                        }
                        // line 48
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 50
                    echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 52
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "\t</div>
";
    }

    public function getTemplateName()
    {
        return "@particles/image-features.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 59,  255 => 57,  245 => 52,  241 => 50,  237 => 48,  226 => 47,  215 => 46,  208 => 45,  205 => 44,  198 => 43,  182 => 42,  179 => 41,  176 => 40,  172 => 38,  154 => 37,  147 => 36,  145 => 35,  130 => 31,  124 => 30,  121 => 29,  116 => 28,  113 => 27,  109 => 26,  106 => 25,  101 => 24,  97 => 22,  91 => 21,  88 => 20,  81 => 19,  76 => 18,  74 => 17,  71 => 16,  69 => 15,  58 => 14,  55 => 13,  52 => 12,  48 => 1,  37 => 7,  33 => 6,  29 => 5,  27 => 4,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@particles/image-features.html.twig", "/home3/menmwen/public_html/home/templates/it_mighty/particles/image-features.html.twig");
    }
}
