<?php

/* @particles/features.html.twig */
class __TwigTemplate_1e3e3af7372230cf8e9ebc6f10f96e5018071d1e131f04ffcd853f81691e9bc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/features.html.twig", 1);
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
        echo "\t";
        if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "style1")) : ("style1")) == "style1")) {
            // line 14
            echo "\t\t<div class=\"g-features-particle ";
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
\t\t\t";
            // line 15
            if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mainheading", array()) || $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array()))) {
                // line 16
                echo "\t\t\t\t<div class=\"g-particle-intro\">
\t\t\t\t\t";
                // line 17
                if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mainheading", array())) {
                    // line 18
                    echo "\t\t\t\t\t\t<h3 class=\"g-title g-main-title\">";
                    echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mainheading", array());
                    echo "</h3>
\t\t\t\t\t\t<div class=\"g-title-separator ";
                    // line 19
                    if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array()) == false)) {
                        echo "no-intro-text";
                    }
                    echo "\"></div>
\t\t\t\t\t";
                }
                // line 20
                echo "\t
\t\t\t\t\t";
                // line 21
                if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array())) {
                    echo "<p class=\"g-introtext\">";
                    echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array());
                    echo "</p>";
                }
                // line 22
                echo "\t\t\t\t</div>
\t\t\t";
            }
            // line 24
            echo "\t\t\t<div class=\"g-grid\">
\t\t\t\t";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "items", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 26
                echo "\t\t\t\t\t";
                $context["attr_extra_item"] = "";
                // line 27
                echo "\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "extra", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["extra"]) {
                    // line 28
                    echo "\t\t\t\t\t\t";
                    $context["attr_extra_item"] = ((((((isset($context["attr_extra_item"]) ? $context["attr_extra_item"] : null) . " ") . twig_escape_filter($this->env, twig_first($this->env, twig_get_array_keys_filter($context["extra"])))) . "=\"") . twig_escape_filter($this->env, twig_first($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->valuesFilter($context["extra"])), "html_attr")) . "\"");
                    // line 29
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "\t\t\t\t\t<div class=\"g-block g-features-particle-item";
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
\t\t\t\t\t\t\t";
                // line 32
                if ($this->getAttribute($context["item"], "icon", array())) {
                    echo "<span class=\"g-features-particle-icon ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", array()));
                    echo "\"><span class=\"g-circle-border\"></span></span>";
                }
                // line 33
                echo "\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["item"], "title", array())) {
                    echo "<h4 class=\"g-features-particle-title\">";
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
                // line 34
                echo "\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["item"], "description", array())) {
                    echo "<p class=\"g-features-particle-desc\">";
                    echo $this->getAttribute($context["item"], "description", array());
                    echo "</p>";
                }
                // line 35
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t\t\t</div>
\t\t</div>
\t";
        }
        // line 41
        echo "\t";
        if ((((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "style1")) : ("style1")) == "style2") || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "style1")) : ("style1")) == "style3"))) {
            // line 42
            echo "\t\t<div class=\"g-features2-particle ";
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
\t\t\t";
            // line 43
            if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mainheading", array()) || $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array()))) {
                // line 44
                echo "\t\t\t\t<div class=\"g-particle-intro\">
\t\t\t\t\t";
                // line 45
                if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mainheading", array())) {
                    // line 46
                    echo "\t\t\t\t\t\t<h3 class=\"g-title g-main-title\">";
                    echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mainheading", array());
                    echo "</h3>
\t\t\t\t\t\t<div class=\"g-title-separator ";
                    // line 47
                    if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array()) == false)) {
                        echo "no-intro-text";
                    }
                    echo "\"></div>
\t\t\t\t\t";
                }
                // line 48
                echo "\t
\t\t\t\t\t";
                // line 49
                if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array())) {
                    echo "<p class=\"g-introtext\">";
                    echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array());
                    echo "</p>";
                }
                // line 50
                echo "\t\t\t\t</div>
\t\t\t";
            }
            // line 52
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "items", array()), twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "columns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "columns", array()), "3")) : ("3")))));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 53
                echo "\t\t\t\t<div class=\"g-grid\">
\t\t\t\t\t";
                // line 54
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 55
                    echo "\t\t\t\t\t\t";
                    $context["attr_extra_item"] = "";
                    // line 56
                    echo "\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "extra", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["extra"]) {
                        // line 57
                        echo "\t\t\t\t\t\t\t";
                        $context["attr_extra_item"] = ((((((isset($context["attr_extra_item"]) ? $context["attr_extra_item"] : null) . " ") . twig_escape_filter($this->env, twig_first($this->env, twig_get_array_keys_filter($context["extra"])))) . "=\"") . twig_escape_filter($this->env, twig_first($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->valuesFilter($context["extra"])), "html_attr")) . "\"");
                        // line 58
                        echo "\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 59
                    echo "\t\t\t\t\t\t<div class=\"g-block g-features2-particle-item";
                    if ($this->getAttribute($context["item"], "class", array())) {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "class", array()));
                    }
                    echo "\" ";
                    if ($this->getAttribute($context["item"], "extra", array())) {
                        echo (isset($context["attr_extra_item"]) ? $context["attr_extra_item"] : null);
                    }
                    echo ">
\t\t\t\t\t\t\t<div class=\"g-content\">
\t\t\t\t\t\t\t\t";
                    // line 61
                    if ($this->getAttribute($context["item"], "title", array())) {
                        echo "<h4 class=\"g-features2-particle-title\">";
                        if ($this->getAttribute($context["item"], "link", array())) {
                            echo "<a target=\"";
                            echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "target", array()), "_parent")) : ("_parent")));
                            echo "\" href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()));
                            echo "\">";
                        }
                        if ($this->getAttribute($context["item"], "icon", array())) {
                            echo "<span class=\"g-features2-particle-icon ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", array()));
                            echo "\"></span>";
                        }
                        echo $this->getAttribute($context["item"], "title", array());
                        if ($this->getAttribute($context["item"], "link", array())) {
                            echo "</a>";
                        }
                        echo "</h4>";
                    }
                    // line 62
                    echo "\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["item"], "description", array())) {
                        echo "<p class=\"g-features2-particle-desc\">";
                        echo $this->getAttribute($context["item"], "description", array());
                        echo "</p>";
                    }
                    // line 63
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "\t\t</div>
\t";
        }
        // line 70
        echo "\t";
        if ((((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "style1")) : ("style1")) == "style4") || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "style1")) : ("style1")) == "style5"))) {
            // line 71
            echo "\t\t<div class=\"g-features2-particle ";
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
\t\t\t";
            // line 72
            if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mainheading", array()) || $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array()))) {
                // line 73
                echo "\t\t\t\t<div class=\"g-particle-intro\">
\t\t\t\t\t";
                // line 74
                if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mainheading", array())) {
                    // line 75
                    echo "\t\t\t\t\t\t<h3 class=\"g-title g-main-title\">";
                    echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mainheading", array());
                    echo "</h3>
\t\t\t\t\t\t<div class=\"g-title-separator ";
                    // line 76
                    if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array()) == false)) {
                        echo "no-intro-text";
                    }
                    echo "\"></div>
\t\t\t\t\t";
                }
                // line 77
                echo "\t
\t\t\t\t\t";
                // line 78
                if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array())) {
                    echo "<p class=\"g-introtext\">";
                    echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array());
                    echo "</p>";
                }
                // line 79
                echo "\t\t\t\t</div>
\t\t\t";
            }
            // line 81
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "items", array()), twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "columns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "columns", array()), "3")) : ("3")))));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 82
                echo "\t\t\t\t<div class=\"g-grid\">
\t\t\t\t\t";
                // line 83
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 84
                    echo "\t\t\t\t\t\t";
                    $context["attr_extra_item"] = "";
                    // line 85
                    echo "\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "extra", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["extra"]) {
                        // line 86
                        echo "\t\t\t\t\t\t\t";
                        $context["attr_extra_item"] = ((((((isset($context["attr_extra_item"]) ? $context["attr_extra_item"] : null) . " ") . twig_escape_filter($this->env, twig_first($this->env, twig_get_array_keys_filter($context["extra"])))) . "=\"") . twig_escape_filter($this->env, twig_first($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->valuesFilter($context["extra"])), "html_attr")) . "\"");
                        // line 87
                        echo "\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 88
                    echo "\t\t\t\t\t\t<div class=\"g-block g-features2-particle-item";
                    if ($this->getAttribute($context["item"], "class", array())) {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "class", array()));
                    }
                    echo "\" ";
                    if ($this->getAttribute($context["item"], "extra", array())) {
                        echo (isset($context["attr_extra_item"]) ? $context["attr_extra_item"] : null);
                    }
                    echo ">
\t\t\t\t\t\t\t<div class=\"g-content\">
\t\t\t\t\t\t\t\t";
                    // line 90
                    if ($this->getAttribute($context["item"], "icon", array())) {
                        // line 91
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"g-features2-particle-icon\">
\t\t\t\t\t\t\t\t\t\t<span class=\"";
                        // line 92
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", array()));
                        echo "\"></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 95
                    echo "\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute($context["item"], "title", array()) || $this->getAttribute($context["item"], "description", array()))) {
                        // line 96
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"g-title-desc-container\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 97
                        if ($this->getAttribute($context["item"], "title", array())) {
                            echo "<h4 class=\"g-features2-particle-title\">";
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
                        // line 98
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if ($this->getAttribute($context["item"], "description", array())) {
                            echo "<p class=\"g-features2-particle-desc\">";
                            echo $this->getAttribute($context["item"], "description", array());
                            echo "</p>";
                        }
                        // line 99
                        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 101
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 104
                echo "\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "\t\t</div>
\t";
        }
    }

    public function getTemplateName()
    {
        return "@particles/features.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  469 => 106,  462 => 104,  454 => 101,  450 => 99,  443 => 98,  427 => 97,  424 => 96,  421 => 95,  415 => 92,  412 => 91,  410 => 90,  397 => 88,  391 => 87,  388 => 86,  383 => 85,  380 => 84,  376 => 83,  373 => 82,  368 => 81,  364 => 79,  358 => 78,  355 => 77,  348 => 76,  343 => 75,  341 => 74,  338 => 73,  336 => 72,  323 => 71,  320 => 70,  316 => 68,  309 => 66,  301 => 63,  294 => 62,  273 => 61,  260 => 59,  254 => 58,  251 => 57,  246 => 56,  243 => 55,  239 => 54,  236 => 53,  231 => 52,  227 => 50,  221 => 49,  218 => 48,  211 => 47,  206 => 46,  204 => 45,  201 => 44,  199 => 43,  186 => 42,  183 => 41,  178 => 38,  170 => 35,  163 => 34,  146 => 33,  140 => 32,  127 => 30,  121 => 29,  118 => 28,  113 => 27,  110 => 26,  106 => 25,  103 => 24,  99 => 22,  93 => 21,  90 => 20,  83 => 19,  78 => 18,  76 => 17,  73 => 16,  71 => 15,  58 => 14,  55 => 13,  52 => 12,  48 => 1,  37 => 7,  33 => 6,  29 => 5,  27 => 4,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@particles/features.html.twig", "/home3/menmwen/public_html/home/templates/it_mighty/particles/features.html.twig");
    }
}
