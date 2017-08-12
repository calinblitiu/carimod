<?php

/* @particles/content-pro.html.twig */
class __TwigTemplate_d39af88a970645f5ec1bdc7780ea3bb5faee542cb14d57e871d50dfc813d8e8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/content-pro.html.twig", 1);
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
        // line 22
        ob_start();
        // line 23
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "items", array()), twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "columns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "columns", array()), "3")) : ("3")))));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 24
            echo "\t\t";
            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array()), "static")) : ("static")) == "static")) {
                echo "<div class=\"g-grid\">";
            }
            // line 25
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 26
                echo "\t\t\t\t";
                $context["attr_extra_item"] = "";
                // line 27
                echo "\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "extra", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["extra"]) {
                    // line 28
                    echo "\t\t\t\t\t";
                    $context["attr_extra_item"] = ((((((isset($context["attr_extra_item"]) ? $context["attr_extra_item"] : null) . " ") . twig_escape_filter($this->env, twig_first($this->env, twig_get_array_keys_filter($context["extra"])))) . "=\"") . twig_escape_filter($this->env, twig_first($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->valuesFilter($context["extra"])), "html_attr")) . "\"");
                    // line 29
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "
\t\t\t\t";
                // line 31
                ob_start();
                // line 32
                echo "\t\t\t\t\t<div class=\"g-content-pro-item\">
\t\t\t\t\t\t";
                // line 33
                if ($this->getAttribute($context["item"], "image", array())) {
                    // line 34
                    echo "\t\t\t\t\t\t\t<div class=\"g-content-pro-image\">
\t\t\t\t\t\t\t\t";
                    // line 35
                    if ((((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array()), "enable")) : ("enable")) == "enable") || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array()), "enable")) : ("enable")) == "disable"))) {
                        // line 36
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array()), "enable")) : ("enable")) == "enable")) {
                            // line 37
                            echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", array()), false, 0), "html", null, true);
                            echo "\" data-uk-lightbox class=\"uk-overlay uk-overlay-hover\">
\t\t\t\t\t\t\t\t\t\t<span class=\"uk-overlay-panel uk-overlay-background uk-overlay-icon uk-overlay-fade\"></span>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 40
                        echo "\t\t\t\t\t\t\t\t\t\t<img alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "alt", array()));
                        echo "\" src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", array())), "html", null, true);
                        echo "\" ";
                        echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->imageSize($this->getAttribute($context["item"], "image", array()));
                        echo ">
\t\t\t\t\t\t\t\t\t";
                        // line 41
                        if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array()), "enable")) : ("enable")) == "enable")) {
                            // line 42
                            echo "\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 44
                        echo "\t\t\t\t\t\t\t\t";
                    }
                    // line 45
                    echo "
\t\t\t\t\t\t\t\t";
                    // line 46
                    if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array()), "enable")) : ("enable")) == "disablelink")) {
                        // line 47
                        echo "\t\t\t\t\t\t\t\t\t";
                        if ($this->getAttribute($context["item"], "link", array())) {
                            echo "<a target=\"";
                            echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "target", array()), "_parent")) : ("_parent")));
                            echo "\" href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()));
                            echo "\">";
                        }
                        // line 48
                        echo "\t\t\t\t\t\t\t\t\t\t<img alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "alt", array()));
                        echo "\" src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", array())), "html", null, true);
                        echo "\" ";
                        echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->imageSize($this->getAttribute($context["item"], "image", array()));
                        echo ">
\t\t\t\t\t\t\t\t\t";
                        // line 49
                        if ($this->getAttribute($context["item"], "link", array())) {
                            echo "</a>";
                        }
                        // line 50
                        echo "\t\t\t\t\t\t\t\t";
                    }
                    // line 51
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 53
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute($context["item"], "title", array()) || $this->getAttribute($context["item"], "description", array()))) {
                    // line 54
                    echo "\t\t\t\t\t\t\t<div class=\"g-info-container\">
\t\t\t\t\t\t\t\t";
                    // line 55
                    if ($this->getAttribute($context["item"], "title", array())) {
                        // line 56
                        echo "\t\t\t\t\t\t\t\t\t<h4 class=\"g-content-pro-title\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 57
                        if ($this->getAttribute($context["item"], "link", array())) {
                            // line 58
                            echo "\t\t\t\t\t\t\t\t\t\t\t<a target=\"";
                            echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "target", array()), "_parent")) : ("_parent")));
                            echo "\" href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()));
                            echo "\">
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 60
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        echo $this->getAttribute($context["item"], "title", array());
                        echo "
\t\t\t\t\t\t\t\t\t\t";
                        // line 61
                        if ($this->getAttribute($context["item"], "link", array())) {
                            // line 62
                            echo "\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 64
                        echo "\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t";
                    }
                    // line 66
                    echo "\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["item"], "date", array())) {
                        // line 67
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"g-item-details\">
\t\t\t\t\t\t\t\t\t\t<span class=\"date\"><i class=\"fa fa-clock-o\"></i>";
                        // line 68
                        echo $this->getAttribute($context["item"], "date", array());
                        echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 71
                    echo "\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["item"], "description", array())) {
                        // line 72
                        echo "\t\t\t\t\t\t\t\t\t<p class=\"g-content-pro-desc\">";
                        echo $this->getAttribute($context["item"], "description", array());
                        echo "</p>
\t\t\t\t\t\t\t\t";
                    }
                    // line 74
                    echo "\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute($context["item"], "specialtext", array()) || $this->getAttribute($context["item"], "bottomlink", array()))) {
                        // line 75
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"g-bottom-info clearfix";
                        if (($this->getAttribute($context["item"], "specialtext", array()) == false)) {
                            echo " no-special";
                        }
                        if (($this->getAttribute($context["item"], "bottomlink", array()) == false)) {
                            echo " no-link";
                        }
                        echo "\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 76
                        if ($this->getAttribute($context["item"], "specialtext", array())) {
                            // line 77
                            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"g-content-pro-special\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 78
                            if ($this->getAttribute($context["item"], "icon", array())) {
                                echo "<i class=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", array()));
                                echo "\"></i>";
                            }
                            // line 79
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                            echo $this->getAttribute($context["item"], "specialtext", array());
                            echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 82
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if ($this->getAttribute($context["item"], "bottomlink", array())) {
                            // line 83
                            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"g-content-pro-link\">
\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"";
                            // line 84
                            echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "target", array()), "_parent")) : ("_parent")));
                            echo "\" href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()));
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 85
                            echo $this->getAttribute($context["item"], "bottomlink", array());
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-long-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 90
                        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 92
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 94
                echo "\t\t\t\t\t</div>
\t\t\t\t";
                $context["style1"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 96
                echo "
\t\t\t\t";
                // line 97
                ob_start();
                // line 98
                echo "\t\t\t\t\t<div class=\"g-content-pro-item uk-overlay uk-overlay-hover\">
\t\t\t\t\t\t";
                // line 99
                if ($this->getAttribute($context["item"], "image", array())) {
                    // line 100
                    echo "\t\t\t\t\t\t\t<div class=\"g-content-pro-image\">
\t\t\t\t\t\t\t\t";
                    // line 101
                    if ((((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array()), "enable")) : ("enable")) == "enable") || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array()), "enable")) : ("enable")) == "disable"))) {
                        // line 102
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array()), "enable")) : ("enable")) == "enable")) {
                            // line 103
                            echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", array()), false, 0), "html", null, true);
                            echo "\" data-uk-lightbox class=\"uk-overlay\">
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 105
                        echo "\t\t\t\t\t\t\t\t\t\t<img alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "alt", array()));
                        echo "\" src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", array())), "html", null, true);
                        echo "\" ";
                        echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->imageSize($this->getAttribute($context["item"], "image", array()));
                        echo ">
\t\t\t\t\t\t\t\t\t";
                        // line 106
                        if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array()), "enable")) : ("enable")) == "enable")) {
                            // line 107
                            echo "\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 109
                        echo "\t\t\t\t\t\t\t\t";
                    }
                    // line 110
                    echo "
\t\t\t\t\t\t\t\t";
                    // line 111
                    if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array()), "enable")) : ("enable")) == "disablelink")) {
                        // line 112
                        echo "\t\t\t\t\t\t\t\t\t";
                        if ($this->getAttribute($context["item"], "link", array())) {
                            echo "<a target=\"";
                            echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "target", array()), "_parent")) : ("_parent")));
                            echo "\" href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()));
                            echo "\">";
                        }
                        // line 113
                        echo "\t\t\t\t\t\t\t\t\t\t<img alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "alt", array()));
                        echo "\" src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", array())), "html", null, true);
                        echo "\" ";
                        echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->imageSize($this->getAttribute($context["item"], "image", array()));
                        echo ">
\t\t\t\t\t\t\t\t\t";
                        // line 114
                        if ($this->getAttribute($context["item"], "link", array())) {
                            echo "</a>";
                        }
                        // line 115
                        echo "\t\t\t\t\t\t\t\t";
                    }
                    // line 116
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 118
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute($context["item"], "title", array()) || $this->getAttribute($context["item"], "description", array()))) {
                    // line 119
                    echo "\t\t\t\t\t\t\t<div class=\"g-info-container-style2 uk-overlay-panel uk-overlay-background uk-overlay-bottom uk-overlay-slide-bottom\">
\t\t\t\t\t\t\t\t";
                    // line 120
                    if ($this->getAttribute($context["item"], "title", array())) {
                        // line 121
                        echo "\t\t\t\t\t\t\t\t\t<h4 class=\"g-content-pro-title\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 122
                        if ($this->getAttribute($context["item"], "link", array())) {
                            // line 123
                            echo "\t\t\t\t\t\t\t\t\t\t\t<a target=\"";
                            echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "target", array()), "_parent")) : ("_parent")));
                            echo "\" href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()));
                            echo "\">
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 125
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        echo $this->getAttribute($context["item"], "title", array());
                        echo "
\t\t\t\t\t\t\t\t\t\t";
                        // line 126
                        if ($this->getAttribute($context["item"], "link", array())) {
                            // line 127
                            echo "\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 129
                        echo "\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t";
                    }
                    // line 131
                    echo "\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["item"], "date", array())) {
                        // line 132
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"g-item-details\">
\t\t\t\t\t\t\t\t\t\t<span class=\"date\"><i class=\"fa fa-clock-o\"></i>";
                        // line 133
                        echo $this->getAttribute($context["item"], "date", array());
                        echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 136
                    echo "\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["item"], "description", array())) {
                        // line 137
                        echo "\t\t\t\t\t\t\t\t\t<p class=\"g-content-pro-desc\">";
                        echo $this->getAttribute($context["item"], "description", array());
                        echo "</p>
\t\t\t\t\t\t\t\t";
                    }
                    // line 139
                    echo "\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute($context["item"], "specialtext", array()) || $this->getAttribute($context["item"], "bottomlink", array()))) {
                        // line 140
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"g-bottom-info clearfix";
                        if (($this->getAttribute($context["item"], "specialtext", array()) == false)) {
                            echo " no-special";
                        }
                        if (($this->getAttribute($context["item"], "bottomlink", array()) == false)) {
                            echo " no-link";
                        }
                        echo "\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 141
                        if ($this->getAttribute($context["item"], "specialtext", array())) {
                            // line 142
                            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"g-content-pro-special\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 143
                            if ($this->getAttribute($context["item"], "icon", array())) {
                                echo "<i class=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", array()));
                                echo "\"></i>";
                            }
                            // line 144
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                            echo $this->getAttribute($context["item"], "specialtext", array());
                            echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 147
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if ($this->getAttribute($context["item"], "bottomlink", array())) {
                            // line 148
                            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"g-content-pro-link\">
\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"";
                            // line 149
                            echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "target", array()), "_parent")) : ("_parent")));
                            echo "\" href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()));
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 150
                            echo $this->getAttribute($context["item"], "bottomlink", array());
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-long-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 155
                        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 157
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 159
                echo "\t\t\t\t\t</div>
\t\t\t\t";
                $context["style2"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 161
                echo "
\t\t\t\t";
                // line 162
                ob_start();
                // line 163
                echo "\t\t\t\t\t<div class=\"g-content-pro-item uk-overlay\">
\t\t\t\t\t\t";
                // line 164
                if ($this->getAttribute($context["item"], "image", array())) {
                    // line 165
                    echo "\t\t\t\t\t\t\t<div class=\"g-content-pro-image\">
\t\t\t\t\t\t\t\t";
                    // line 166
                    if ((((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array()), "enable")) : ("enable")) == "enable") || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array()), "enable")) : ("enable")) == "disable"))) {
                        // line 167
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array()), "enable")) : ("enable")) == "enable")) {
                            // line 168
                            echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", array()), false, 0), "html", null, true);
                            echo "\" data-uk-lightbox class=\"uk-overlay\">
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 170
                        echo "\t\t\t\t\t\t\t\t\t\t<img alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "alt", array()));
                        echo "\" src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", array())), "html", null, true);
                        echo "\" ";
                        echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->imageSize($this->getAttribute($context["item"], "image", array()));
                        echo ">
\t\t\t\t\t\t\t\t\t";
                        // line 171
                        if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array()), "enable")) : ("enable")) == "enable")) {
                            // line 172
                            echo "\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 174
                        echo "\t\t\t\t\t\t\t\t";
                    }
                    // line 175
                    echo "
\t\t\t\t\t\t\t\t";
                    // line 176
                    if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array()), "enable")) : ("enable")) == "disablelink")) {
                        // line 177
                        echo "\t\t\t\t\t\t\t\t\t";
                        if ($this->getAttribute($context["item"], "link", array())) {
                            echo "<a target=\"";
                            echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "target", array()), "_parent")) : ("_parent")));
                            echo "\" href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()));
                            echo "\">";
                        }
                        // line 178
                        echo "\t\t\t\t\t\t\t\t\t\t<img alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "alt", array()));
                        echo "\" src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", array())), "html", null, true);
                        echo "\" ";
                        echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->imageSize($this->getAttribute($context["item"], "image", array()));
                        echo ">
\t\t\t\t\t\t\t\t\t";
                        // line 179
                        if ($this->getAttribute($context["item"], "link", array())) {
                            echo "</a>";
                        }
                        // line 180
                        echo "\t\t\t\t\t\t\t\t";
                    }
                    // line 181
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 183
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute($context["item"], "title", array()) || $this->getAttribute($context["item"], "description", array()))) {
                    // line 184
                    echo "\t\t\t\t\t\t\t<div class=\"g-info-container-style2 uk-overlay-panel uk-overlay-background uk-overlay-bottom\">
\t\t\t\t\t\t\t\t";
                    // line 185
                    if ($this->getAttribute($context["item"], "title", array())) {
                        // line 186
                        echo "\t\t\t\t\t\t\t\t\t<h4 class=\"g-content-pro-title\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 187
                        if ($this->getAttribute($context["item"], "link", array())) {
                            // line 188
                            echo "\t\t\t\t\t\t\t\t\t\t\t<a target=\"";
                            echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "target", array()), "_parent")) : ("_parent")));
                            echo "\" href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()));
                            echo "\">
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 190
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        echo $this->getAttribute($context["item"], "title", array());
                        echo "
\t\t\t\t\t\t\t\t\t\t";
                        // line 191
                        if ($this->getAttribute($context["item"], "link", array())) {
                            // line 192
                            echo "\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 194
                        echo "\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t";
                    }
                    // line 196
                    echo "\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["item"], "date", array())) {
                        // line 197
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"g-item-details\">
\t\t\t\t\t\t\t\t\t\t<span class=\"date\"><i class=\"fa fa-clock-o\"></i>";
                        // line 198
                        echo $this->getAttribute($context["item"], "date", array());
                        echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 201
                    echo "\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["item"], "description", array())) {
                        // line 202
                        echo "\t\t\t\t\t\t\t\t\t<p class=\"g-content-pro-desc\">";
                        echo $this->getAttribute($context["item"], "description", array());
                        echo "</p>
\t\t\t\t\t\t\t\t";
                    }
                    // line 204
                    echo "\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute($context["item"], "specialtext", array()) || $this->getAttribute($context["item"], "bottomlink", array()))) {
                        // line 205
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"g-bottom-info clearfix";
                        if (($this->getAttribute($context["item"], "specialtext", array()) == false)) {
                            echo " no-special";
                        }
                        if (($this->getAttribute($context["item"], "bottomlink", array()) == false)) {
                            echo " no-link";
                        }
                        echo "\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 206
                        if ($this->getAttribute($context["item"], "specialtext", array())) {
                            // line 207
                            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"g-content-pro-special\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 208
                            if ($this->getAttribute($context["item"], "icon", array())) {
                                echo "<i class=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", array()));
                                echo "\"></i>";
                            }
                            // line 209
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                            echo $this->getAttribute($context["item"], "specialtext", array());
                            echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 212
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if ($this->getAttribute($context["item"], "bottomlink", array())) {
                            // line 213
                            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"g-content-pro-link\">
\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"";
                            // line 214
                            echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "target", array()), "_parent")) : ("_parent")));
                            echo "\" href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()));
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 215
                            echo $this->getAttribute($context["item"], "bottomlink", array());
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-long-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 220
                        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 222
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 224
                echo "\t\t\t\t\t</div>
\t\t\t\t";
                $context["style3"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 226
                echo "
\t\t\t\t";
                // line 227
                if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array()), "static")) : ("static")) == "static")) {
                    // line 228
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
\t\t\t\t\t\t<div ";
                    // line 229
                    if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "gutter", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "gutter", array()), "enabled")) : ("enabled")) == "enabled")) {
                        echo "class=\"g-content\"";
                    }
                    echo ">
\t\t\t\t\t\t\t";
                    // line 230
                    if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "style1")) : ("style1")) == "style1")) {
                        echo twig_escape_filter($this->env, (isset($context["style1"]) ? $context["style1"] : null), "html", null, true);
                    }
                    // line 231
                    echo "\t\t\t\t\t\t\t";
                    if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "style1")) : ("style1")) == "style2")) {
                        echo twig_escape_filter($this->env, (isset($context["style2"]) ? $context["style2"] : null), "html", null, true);
                    }
                    // line 232
                    echo "\t\t\t\t\t\t\t";
                    if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "style1")) : ("style1")) == "style3")) {
                        echo twig_escape_filter($this->env, (isset($context["style3"]) ? $context["style3"] : null), "html", null, true);
                    }
                    // line 233
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 236
                echo "
\t\t\t\t";
                // line 237
                if ((((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array()), "static")) : ("static")) == "slider") || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array()), "static")) : ("static")) == "slideset"))) {
                    // line 238
                    echo "\t\t\t\t\t<li ";
                    if ($this->getAttribute($context["item"], "class", array())) {
                        echo "class=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "class", array()));
                        echo "\"";
                    }
                    echo " ";
                    if ($this->getAttribute($context["item"], "extra", array())) {
                        echo (isset($context["attr_extra_item"]) ? $context["attr_extra_item"] : null);
                    }
                    echo ">
\t\t\t\t\t\t";
                    // line 239
                    if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "style1")) : ("style1")) == "style1")) {
                        echo twig_escape_filter($this->env, (isset($context["style1"]) ? $context["style1"] : null), "html", null, true);
                    }
                    // line 240
                    echo "\t\t\t\t\t\t";
                    if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "style1")) : ("style1")) == "style2")) {
                        echo twig_escape_filter($this->env, (isset($context["style2"]) ? $context["style2"] : null), "html", null, true);
                    }
                    // line 241
                    echo "\t\t\t\t\t\t";
                    if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "style1")) : ("style1")) == "style3")) {
                        echo twig_escape_filter($this->env, (isset($context["style3"]) ? $context["style3"] : null), "html", null, true);
                    }
                    // line 242
                    echo "\t\t\t\t\t</li>
\t\t\t\t";
                }
                // line 244
                echo "
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 246
            echo "\t\t";
            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array()), "static")) : ("static")) == "static")) {
                echo "</div>";
            }
            // line 247
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        $context["contentproitems"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 250
    public function block_particle($context, array $blocks = array())
    {
        // line 251
        echo "\t
\t";
        // line 252
        if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array()), "static")) : ("static")) == "static")) {
            // line 253
            echo "\t\t<div class=\"g-content-pro ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "style1")) : ("style1")));
            if ($this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "css", array()), "class", array())) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "css", array()), "class", array()));
            }
            if ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "pullup", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "pullup", array()), 0)) : (0))) {
                echo " g-pullup";
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
\t\t\t";
            // line 254
            if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mainheading", array()) || $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array()))) {
                // line 255
                echo "\t\t\t\t";
                echo twig_escape_filter($this->env, (isset($context["particleheading"]) ? $context["particleheading"] : null), "html", null, true);
                echo "
\t\t\t";
            }
            // line 257
            echo "\t\t\t";
            echo twig_escape_filter($this->env, (isset($context["contentproitems"]) ? $context["contentproitems"] : null), "html", null, true);
            echo "
\t\t</div>
\t";
        }
        // line 260
        echo "\t";
        if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array()), "static")) : ("static")) == "slider")) {
            // line 261
            echo "\t\t<div class=\"g-content-pro-slider ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "style1")) : ("style1")));
            if ($this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "css", array()), "class", array())) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "css", array()), "class", array()));
            }
            if ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "pullup", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "pullup", array()), 0)) : (0))) {
                echo " g-pullup";
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
\t\t\t";
            // line 262
            if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mainheading", array()) || $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array()))) {
                // line 263
                echo "\t\t\t\t";
                echo twig_escape_filter($this->env, (isset($context["particleheading"]) ? $context["particleheading"] : null), "html", null, true);
                echo "
\t\t\t";
            }
            // line 264
            echo "\t\t    \t
\t\t\t<div class=\"uk-slidenav-position\" data-uk-slider";
            // line 265
            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "autoplay", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "autoplay", array()), "disable")) : ("disable")) == "enable")) {
                echo "=\"{autoplay:true, autoplayInterval: ";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "autoplayInterval", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "autoplayInterval", array()), 7000)) : (7000)));
                echo "}\"";
            }
            echo ">
\t\t\t\t<div class=\"uk-slider-container\">
\t\t\t\t\t<ul class=\"uk-slider";
            // line 267
            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "gutter", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "gutter", array()), "enabled")) : ("enabled")) == "enabled")) {
                echo " uk-grid";
            }
            echo " uk-grid-width-medium-1-";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "columns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "columns", array()), "3")) : ("3")));
            echo "\">
\t\t\t\t\t\t";
            // line 268
            echo twig_escape_filter($this->env, (isset($context["contentproitems"]) ? $context["contentproitems"] : null), "html", null, true);
            echo "
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t";
            // line 271
            if ((((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array()), "arrows")) : ("arrows")) == "arrows") || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array()), "arrows")) : ("arrows")) == "both"))) {
                // line 272
                echo "\t\t\t\t\t<a href=\"\" class=\"uk-slidenav uk-slidenav-previous\" data-uk-slider-item=\"previous\"></a>
\t\t\t\t\t<a href=\"\" class=\"uk-slidenav uk-slidenav-next\" data-uk-slider-item=\"next\"></a>
\t\t\t\t";
            }
            // line 275
            echo "\t\t\t</div>\t\t    \t
\t\t</div>
\t";
        }
        // line 278
        echo "\t";
        if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array()), "static")) : ("static")) == "slideset")) {
            // line 279
            echo "\t\t<div class=\"g-content-pro-slideset ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "style1")) : ("style1")));
            if ($this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "css", array()), "class", array())) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "css", array()), "class", array()));
            }
            if ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "pullup", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "pullup", array()), 0)) : (0))) {
                echo " g-pullup";
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
\t\t\t";
            // line 280
            if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mainheading", array()) || $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array()))) {
                // line 281
                echo "\t\t\t\t";
                echo twig_escape_filter($this->env, (isset($context["particleheading"]) ? $context["particleheading"] : null), "html", null, true);
                echo "
\t\t\t";
            }
            // line 282
            echo "\t    \t
\t\t\t<div class=\"uk-slidenav-position\" data-uk-slideset=\"{small: 1, medium: ";
            // line 283
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "columns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "columns", array()), "3")) : ("3")));
            echo ", large: ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "columns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "columns", array()), "3")) : ("3")));
            echo ", duration: ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "duration", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "duration", array()), 200)) : (200)));
            echo ", ";
            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "autoplay", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "autoplay", array()), "disable")) : ("disable")) == "enable")) {
                echo "autoplay: 'true', autoplayInterval: ";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "autoplayInterval", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "autoplayInterval", array()), 7000)) : (7000)));
                echo ",";
            }
            echo " animation: '";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "animation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "animation", array()), "fade")) : ("fade")));
            echo "'}\">
\t\t\t\t<div class=\"uk-slider-container\">
\t\t\t\t\t<ul class=\"uk-slideset uk-grid\">
\t\t\t\t\t\t";
            // line 286
            echo twig_escape_filter($this->env, (isset($context["contentproitems"]) ? $context["contentproitems"] : null), "html", null, true);
            echo "
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t";
            // line 289
            if ((((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array()), "arrows")) : ("arrows")) == "arrows") || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array()), "arrows")) : ("arrows")) == "both"))) {
                // line 290
                echo "\t\t\t\t\t<a href=\"\" class=\"uk-slidenav uk-slidenav-previous\" data-uk-slideset-item=\"previous\"></a>
\t\t\t\t\t<a href=\"\" class=\"uk-slidenav uk-slidenav-next\" data-uk-slideset-item=\"next\"></a>
\t\t\t\t";
            }
            // line 293
            echo "\t\t\t\t";
            if ((((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array()), "arrows")) : ("arrows")) == "dots") || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array()), "arrows")) : ("arrows")) == "both"))) {
                // line 294
                echo "\t\t\t\t\t<ul class=\"uk-slideset-nav uk-dotnav uk-flex-center\">
\t    \t\t\t";
                // line 295
                $context["counter"] = 0;
                // line 296
                echo "\t    \t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "items", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 297
                    echo "\t    \t\t\t\t<li data-uk-slideset-item=\"";
                    echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : null), "html", null, true);
                    echo "\"><a href=\"\"></a></li>
\t    \t\t\t\t";
                    // line 298
                    $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : null) + 1);
                    // line 299
                    echo "\t    \t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 300
                echo "\t\t\t\t\t</ul>
\t\t\t\t";
            }
            // line 302
            echo "\t\t\t</div>\t\t    \t
\t\t</div>
\t";
        }
    }

    public function getTemplateName()
    {
        return "@particles/content-pro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1014 => 302,  1010 => 300,  1004 => 299,  1002 => 298,  997 => 297,  992 => 296,  990 => 295,  987 => 294,  984 => 293,  979 => 290,  977 => 289,  971 => 286,  953 => 283,  950 => 282,  944 => 281,  942 => 280,  921 => 279,  918 => 278,  913 => 275,  908 => 272,  906 => 271,  900 => 268,  892 => 267,  883 => 265,  880 => 264,  874 => 263,  872 => 262,  851 => 261,  848 => 260,  841 => 257,  835 => 255,  833 => 254,  812 => 253,  810 => 252,  807 => 251,  804 => 250,  800 => 1,  793 => 247,  788 => 246,  781 => 244,  777 => 242,  772 => 241,  767 => 240,  763 => 239,  750 => 238,  748 => 237,  745 => 236,  740 => 233,  735 => 232,  730 => 231,  726 => 230,  720 => 229,  708 => 228,  706 => 227,  703 => 226,  699 => 224,  695 => 222,  691 => 220,  683 => 215,  677 => 214,  674 => 213,  671 => 212,  664 => 209,  658 => 208,  655 => 207,  653 => 206,  643 => 205,  640 => 204,  634 => 202,  631 => 201,  625 => 198,  622 => 197,  619 => 196,  615 => 194,  611 => 192,  609 => 191,  604 => 190,  596 => 188,  594 => 187,  591 => 186,  589 => 185,  586 => 184,  583 => 183,  579 => 181,  576 => 180,  572 => 179,  563 => 178,  554 => 177,  552 => 176,  549 => 175,  546 => 174,  542 => 172,  540 => 171,  531 => 170,  525 => 168,  522 => 167,  520 => 166,  517 => 165,  515 => 164,  512 => 163,  510 => 162,  507 => 161,  503 => 159,  499 => 157,  495 => 155,  487 => 150,  481 => 149,  478 => 148,  475 => 147,  468 => 144,  462 => 143,  459 => 142,  457 => 141,  447 => 140,  444 => 139,  438 => 137,  435 => 136,  429 => 133,  426 => 132,  423 => 131,  419 => 129,  415 => 127,  413 => 126,  408 => 125,  400 => 123,  398 => 122,  395 => 121,  393 => 120,  390 => 119,  387 => 118,  383 => 116,  380 => 115,  376 => 114,  367 => 113,  358 => 112,  356 => 111,  353 => 110,  350 => 109,  346 => 107,  344 => 106,  335 => 105,  329 => 103,  326 => 102,  324 => 101,  321 => 100,  319 => 99,  316 => 98,  314 => 97,  311 => 96,  307 => 94,  303 => 92,  299 => 90,  291 => 85,  285 => 84,  282 => 83,  279 => 82,  272 => 79,  266 => 78,  263 => 77,  261 => 76,  251 => 75,  248 => 74,  242 => 72,  239 => 71,  233 => 68,  230 => 67,  227 => 66,  223 => 64,  219 => 62,  217 => 61,  212 => 60,  204 => 58,  202 => 57,  199 => 56,  197 => 55,  194 => 54,  191 => 53,  187 => 51,  184 => 50,  180 => 49,  171 => 48,  162 => 47,  160 => 46,  157 => 45,  154 => 44,  150 => 42,  148 => 41,  139 => 40,  132 => 37,  129 => 36,  127 => 35,  124 => 34,  122 => 33,  119 => 32,  117 => 31,  114 => 30,  108 => 29,  105 => 28,  100 => 27,  97 => 26,  92 => 25,  87 => 24,  82 => 23,  80 => 22,  76 => 19,  70 => 18,  67 => 17,  60 => 16,  55 => 15,  53 => 14,  50 => 13,  48 => 12,  37 => 7,  33 => 6,  29 => 5,  27 => 4,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@particles/content-pro.html.twig", "/home3/menmwen/public_html/home/templates/it_mighty/particles/content-pro.html.twig");
    }
}
