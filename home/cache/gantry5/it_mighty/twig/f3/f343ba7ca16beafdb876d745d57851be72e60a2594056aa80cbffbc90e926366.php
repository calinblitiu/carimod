<?php

/* @particles/feedback.html.twig */
class __TwigTemplate_4cabc1dd6729577e46e4c18e7ccf8c46662c580fc37cae3da19ae057cfc816a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/feedback.html.twig", 1);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "items", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 24
            echo "\t\t";
            $context["attr_extra_item"] = "";
            // line 25
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "extra", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["extra"]) {
                // line 26
                echo "\t\t\t";
                $context["attr_extra_item"] = ((((((isset($context["attr_extra_item"]) ? $context["attr_extra_item"] : null) . " ") . twig_escape_filter($this->env, twig_first($this->env, twig_get_array_keys_filter($context["extra"])))) . "=\"") . twig_escape_filter($this->env, twig_first($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->valuesFilter($context["extra"])), "html_attr")) . "\"");
                // line 27
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "
\t\t";
            // line 29
            ob_start();
            // line 30
            echo "\t\t\t<div class=\"g-block";
            if ($this->getAttribute($context["item"], "class", array())) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "class", array()));
            }
            echo "\" ";
            if ($this->getAttribute($context["item"], "extra", array())) {
                echo (isset($context["attr_extra_item"]) ? $context["attr_extra_item"] : null);
            }
            echo ">
\t\t\t\t<div class=\"g-content\">
\t\t\t\t\t<div class=\"g-feedback-item\">
\t\t\t\t\t\t";
            // line 33
            if ($this->getAttribute($context["item"], "feedback", array())) {
                echo "<div class=\"g-feedback-text\">
\t\t\t\t\t\t\t";
                // line 34
                echo $this->getAttribute($context["item"], "feedback", array());
                echo "
\t\t\t\t\t\t</div>";
            }
            // line 36
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($context["item"], "customername", array()) || $this->getAttribute($context["item"], "image", array()))) {
                echo "<div class=\"g-user-info clearfix\">
\t\t\t\t\t\t\t";
                // line 37
                if ($this->getAttribute($context["item"], "image", array())) {
                    echo "<span class=\"g-user-image\"><img alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "alt", array()));
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", array())), "html", null, true);
                    echo "\" ";
                    echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->imageSize($this->getAttribute($context["item"], "image", array()));
                    echo "></span>";
                }
                // line 38
                echo "\t\t\t\t\t\t\t";
                if ((($this->getAttribute($context["item"], "customername", array()) || $this->getAttribute($context["item"], "position", array())) || $this->getAttribute($context["item"], "company", array()))) {
                    echo "<div class=\"g-user-details\">
\t\t\t\t\t\t\t\t";
                    // line 39
                    if ($this->getAttribute($context["item"], "customername", array())) {
                        echo "<div class=\"g-user-name\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "customername", array()));
                        echo "</div>";
                    }
                    // line 40
                    echo "\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute($context["item"], "position", array()) || $this->getAttribute($context["item"], "company", array()))) {
                        echo "<div class=\"g-user-company\">";
                        if ($this->getAttribute($context["item"], "position", array())) {
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "position", array()));
                            if (($this->getAttribute($context["item"], "company", array()) && $this->getAttribute($context["item"], "position", array()))) {
                                echo " ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "wordconnector", array()));
                                echo " ";
                            }
                            if ($this->getAttribute($context["item"], "company", array())) {
                                if ($this->getAttribute($context["item"], "companylink", array())) {
                                    echo "<a target=\"";
                                    echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "target", array()), "_parent")) : ("_parent")));
                                    echo "\" href=\"";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "companylink", array()));
                                    echo "\">";
                                }
                                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "company", array()));
                                if ($this->getAttribute($context["item"], "companylink", array())) {
                                    echo "</a>";
                                }
                            }
                        }
                        echo "</div>";
                    }
                    // line 41
                    echo "\t\t\t\t\t\t\t</div>";
                }
                // line 42
                echo "\t\t\t\t\t\t</div>";
            }
            // line 43
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
            $context["style1"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 47
            echo "
\t\t";
            // line 48
            ob_start();
            // line 49
            echo "\t\t\t<div class=\"g-block";
            if ($this->getAttribute($context["item"], "class", array())) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "class", array()));
            }
            echo "\" ";
            if ($this->getAttribute($context["item"], "extra", array())) {
                echo (isset($context["attr_extra_item"]) ? $context["attr_extra_item"] : null);
            }
            echo ">
\t\t\t\t<div class=\"g-content\">
\t\t\t\t\t<div class=\"g-feedback-item\">
\t\t\t\t\t\t";
            // line 52
            if ($this->getAttribute($context["item"], "feedback", array())) {
                // line 53
                echo "\t\t\t\t\t\t\t<div class=\"g-feedback-text\">
\t\t\t\t\t\t\t\t";
                // line 54
                echo $this->getAttribute($context["item"], "feedback", array());
                echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"g-feedback-separator\"><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i></div>
\t\t\t\t\t\t";
            }
            // line 58
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($context["item"], "customername", array()) || $this->getAttribute($context["item"], "image", array()))) {
                echo "<div class=\"g-user-info clearfix\">
\t\t\t\t\t\t\t";
                // line 59
                if ($this->getAttribute($context["item"], "image", array())) {
                    echo "<span class=\"g-user-image\"><img alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "alt", array()));
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", array())), "html", null, true);
                    echo "\" ";
                    echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->imageSize($this->getAttribute($context["item"], "image", array()));
                    echo "></span>";
                }
                // line 60
                echo "\t\t\t\t\t\t\t";
                if ((($this->getAttribute($context["item"], "customername", array()) || $this->getAttribute($context["item"], "position", array())) || $this->getAttribute($context["item"], "company", array()))) {
                    echo "<div class=\"g-user-details\">
\t\t\t\t\t\t\t\t";
                    // line 61
                    if ($this->getAttribute($context["item"], "customername", array())) {
                        echo "<div class=\"g-user-name\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "customername", array()));
                        echo "</div>";
                    }
                    // line 62
                    echo "\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute($context["item"], "position", array()) || $this->getAttribute($context["item"], "company", array()))) {
                        echo "<div class=\"g-user-company\">";
                        if ($this->getAttribute($context["item"], "position", array())) {
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "position", array()));
                            if (($this->getAttribute($context["item"], "company", array()) && $this->getAttribute($context["item"], "position", array()))) {
                                echo " ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "wordconnector", array()));
                                echo " ";
                            }
                            if ($this->getAttribute($context["item"], "company", array())) {
                                if ($this->getAttribute($context["item"], "companylink", array())) {
                                    echo "<a target=\"";
                                    echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "target", array()), "_parent")) : ("_parent")));
                                    echo "\" href=\"";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "companylink", array()));
                                    echo "\">";
                                }
                                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "company", array()));
                                if ($this->getAttribute($context["item"], "companylink", array())) {
                                    echo "</a>";
                                }
                            }
                        }
                        echo "</div>";
                    }
                    // line 63
                    echo "\t\t\t\t\t\t\t</div>";
                }
                // line 64
                echo "\t\t\t\t\t\t</div>";
            }
            // line 65
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
            $context["style2"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 69
            echo "
\t\t";
            // line 70
            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "style1")) : ("style1")) == "style1")) {
                echo twig_escape_filter($this->env, (isset($context["style1"]) ? $context["style1"] : null), "html", null, true);
            }
            // line 71
            echo "\t\t";
            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "style1")) : ("style1")) == "style2")) {
                echo twig_escape_filter($this->env, (isset($context["style2"]) ? $context["style2"] : null), "html", null, true);
            }
            // line 72
            echo "
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        $context["feedbackitemsstatic"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 76
        ob_start();
        // line 77
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "items", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 78
            echo "\t\t";
            $context["attr_extra_item"] = "";
            // line 79
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "extra", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["extra"]) {
                // line 80
                echo "\t\t\t";
                $context["attr_extra_item"] = ((((((isset($context["attr_extra_item"]) ? $context["attr_extra_item"] : null) . " ") . twig_escape_filter($this->env, twig_first($this->env, twig_get_array_keys_filter($context["extra"])))) . "=\"") . twig_escape_filter($this->env, twig_first($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->valuesFilter($context["extra"])), "html_attr")) . "\"");
                // line 81
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "
\t\t";
            // line 83
            ob_start();
            // line 84
            echo "\t\t\t<li ";
            if ($this->getAttribute($context["item"], "class", array())) {
                echo "class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "class", array()));
                echo "\"";
            }
            echo " ";
            if ($this->getAttribute($context["item"], "extra", array())) {
                echo (isset($context["attr_extra_item"]) ? $context["attr_extra_item"] : null);
            }
            echo ">\t\t\t\t\t\t\t        \t
\t\t\t\t<div class=\"g-feedback-item\">
\t\t\t\t\t";
            // line 86
            if ($this->getAttribute($context["item"], "feedback", array())) {
                echo "<div class=\"g-feedback-text\">
\t\t\t\t\t\t";
                // line 87
                echo $this->getAttribute($context["item"], "feedback", array());
                echo "
\t\t\t\t\t</div>";
            }
            // line 89
            echo "\t\t\t\t\t";
            if (($this->getAttribute($context["item"], "customername", array()) || $this->getAttribute($context["item"], "image", array()))) {
                echo "<div class=\"g-user-info clearfix\">
\t\t\t\t\t\t";
                // line 90
                if ($this->getAttribute($context["item"], "image", array())) {
                    echo "<span class=\"g-user-image\"><img alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "alt", array()));
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", array())), "html", null, true);
                    echo "\" ";
                    echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->imageSize($this->getAttribute($context["item"], "image", array()));
                    echo "></span>";
                }
                // line 91
                echo "\t\t\t\t\t\t";
                if ((($this->getAttribute($context["item"], "customername", array()) || $this->getAttribute($context["item"], "position", array())) || $this->getAttribute($context["item"], "company", array()))) {
                    echo "<div class=\"g-user-details\">
\t\t\t\t\t\t\t";
                    // line 92
                    if ($this->getAttribute($context["item"], "customername", array())) {
                        echo "<div class=\"g-user-name\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "customername", array()));
                        echo "</div>";
                    }
                    // line 93
                    echo "\t\t\t\t\t\t\t";
                    if (($this->getAttribute($context["item"], "position", array()) || $this->getAttribute($context["item"], "company", array()))) {
                        echo "<div class=\"g-user-company\">";
                        if ($this->getAttribute($context["item"], "position", array())) {
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "position", array()));
                            if (($this->getAttribute($context["item"], "company", array()) && $this->getAttribute($context["item"], "position", array()))) {
                                echo " ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "wordconnector", array()));
                                echo " ";
                            }
                            if ($this->getAttribute($context["item"], "company", array())) {
                                if ($this->getAttribute($context["item"], "companylink", array())) {
                                    echo "<a target=\"";
                                    echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "target", array()), "_parent")) : ("_parent")));
                                    echo "\" href=\"";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "companylink", array()));
                                    echo "\">";
                                }
                                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "company", array()));
                                if ($this->getAttribute($context["item"], "companylink", array())) {
                                    echo "</a>";
                                }
                            }
                        }
                        echo "</div>";
                    }
                    // line 94
                    echo "\t\t\t\t\t\t</div>";
                }
                // line 95
                echo "\t\t\t\t\t</div>";
            }
            // line 96
            echo "\t\t\t\t</div>
\t\t\t</li>
\t\t";
            $context["style1"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 99
            echo "
\t\t";
            // line 100
            ob_start();
            // line 101
            echo "\t\t\t<li ";
            if ($this->getAttribute($context["item"], "class", array())) {
                echo "class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "class", array()));
                echo "\"";
            }
            echo " ";
            if ($this->getAttribute($context["item"], "extra", array())) {
                echo (isset($context["attr_extra_item"]) ? $context["attr_extra_item"] : null);
            }
            echo ">\t\t\t\t\t\t\t        \t
\t\t\t\t<div class=\"g-feedback-item\">
\t\t\t\t\t";
            // line 103
            if ($this->getAttribute($context["item"], "feedback", array())) {
                // line 104
                echo "\t\t\t\t\t\t<div class=\"g-feedback-text\">
\t\t\t\t\t\t\t";
                // line 105
                echo $this->getAttribute($context["item"], "feedback", array());
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"g-feedback-separator\"><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i></div>
\t\t\t\t\t";
            }
            // line 109
            echo "\t\t\t\t\t";
            if (($this->getAttribute($context["item"], "customername", array()) || $this->getAttribute($context["item"], "image", array()))) {
                echo "<div class=\"g-user-info clearfix\">
\t\t\t\t\t\t";
                // line 110
                if ($this->getAttribute($context["item"], "image", array())) {
                    echo "<span class=\"g-user-image\"><img alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "alt", array()));
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", array())), "html", null, true);
                    echo "\" ";
                    echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->imageSize($this->getAttribute($context["item"], "image", array()));
                    echo "></span>";
                }
                // line 111
                echo "\t\t\t\t\t\t";
                if ((($this->getAttribute($context["item"], "customername", array()) || $this->getAttribute($context["item"], "position", array())) || $this->getAttribute($context["item"], "company", array()))) {
                    echo "<div class=\"g-user-details\">
\t\t\t\t\t\t\t";
                    // line 112
                    if ($this->getAttribute($context["item"], "customername", array())) {
                        echo "<div class=\"g-user-name\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "customername", array()));
                        echo "</div>";
                    }
                    // line 113
                    echo "\t\t\t\t\t\t\t";
                    if (($this->getAttribute($context["item"], "position", array()) || $this->getAttribute($context["item"], "company", array()))) {
                        echo "<div class=\"g-user-company\">";
                        if ($this->getAttribute($context["item"], "position", array())) {
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "position", array()));
                            if (($this->getAttribute($context["item"], "company", array()) && $this->getAttribute($context["item"], "position", array()))) {
                                echo " ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "wordconnector", array()));
                                echo " ";
                            }
                            if ($this->getAttribute($context["item"], "company", array())) {
                                if ($this->getAttribute($context["item"], "companylink", array())) {
                                    echo "<a target=\"";
                                    echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "target", array()), "_parent")) : ("_parent")));
                                    echo "\" href=\"";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "companylink", array()));
                                    echo "\">";
                                }
                                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "company", array()));
                                if ($this->getAttribute($context["item"], "companylink", array())) {
                                    echo "</a>";
                                }
                            }
                        }
                        echo "</div>";
                    }
                    // line 114
                    echo "\t\t\t\t\t\t</div>";
                }
                // line 115
                echo "\t\t\t\t\t</div>";
            }
            // line 116
            echo "\t\t\t\t</div>
\t\t\t</li>
\t\t";
            $context["style2"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 119
            echo "
\t\t";
            // line 120
            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "style1")) : ("style1")) == "style1")) {
                echo twig_escape_filter($this->env, (isset($context["style1"]) ? $context["style1"] : null), "html", null, true);
            }
            // line 121
            echo "\t\t";
            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "style1")) : ("style1")) == "style2")) {
                echo twig_escape_filter($this->env, (isset($context["style2"]) ? $context["style2"] : null), "html", null, true);
            }
            // line 122
            echo "
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        $context["feedbackitems"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 126
    public function block_particle($context, array $blocks = array())
    {
        // line 127
        echo "\t
\t";
        // line 128
        if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array()), "static")) : ("static")) == "static")) {
            // line 129
            echo "\t\t<div class=\"g-feedback";
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
\t\t\t";
            // line 130
            if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mainheading", array()) || $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array()))) {
                // line 131
                echo "\t\t\t\t";
                echo twig_escape_filter($this->env, (isset($context["particleheading"]) ? $context["particleheading"] : null), "html", null, true);
                echo "
\t\t\t";
            }
            // line 133
            echo "\t\t\t<div class=\"g-grid\">
\t\t\t\t";
            // line 134
            echo twig_escape_filter($this->env, (isset($context["feedbackitemsstatic"]) ? $context["feedbackitemsstatic"] : null), "html", null, true);
            echo "
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 138
        echo "\t";
        if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array()), "static")) : ("static")) == "slider")) {
            // line 139
            echo "\t\t<div class=\"g-feedback-slider";
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
\t\t\t";
            // line 140
            if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mainheading", array()) || $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array()))) {
                // line 141
                echo "\t\t\t\t";
                echo twig_escape_filter($this->env, (isset($context["particleheading"]) ? $context["particleheading"] : null), "html", null, true);
                echo "
\t\t\t";
            }
            // line 142
            echo "\t    \t
\t\t\t<div class=\"uk-slidenav-position\" data-uk-slider";
            // line 143
            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "autoplay", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "autoplay", array()), "disable")) : ("disable")) == "enable")) {
                echo "=\"{autoplay:true}\"";
            }
            echo ">
\t\t\t\t<div class=\"uk-slider-container\">
\t\t\t\t\t<ul class=\"uk-slider uk-grid uk-grid-width-medium-1-";
            // line 145
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "columns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "columns", array()), "3")) : ("3")));
            echo "\">
\t\t\t\t\t\t";
            // line 146
            echo twig_escape_filter($this->env, (isset($context["feedbackitems"]) ? $context["feedbackitems"] : null), "html", null, true);
            echo "
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t";
            // line 149
            if ((((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array()), "dots")) : ("dots")) == "arrows") || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array()), "dots")) : ("dots")) == "both"))) {
                echo "<a href=\"\" class=\"uk-slidenav uk-slidenav-previous\" data-uk-slider-item=\"previous\"></a>";
            }
            // line 150
            echo "\t\t\t\t";
            if ((((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array()), "dots")) : ("dots")) == "arrows") || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array()), "dots")) : ("dots")) == "both"))) {
                echo "<a href=\"\" class=\"uk-slidenav uk-slidenav-next\" data-uk-slider-item=\"next\"></a>";
            }
            // line 151
            echo "\t\t\t</div>\t\t    \t
\t\t</div>
\t";
        }
        // line 154
        echo "\t";
        if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array()), "static")) : ("static")) == "slideset")) {
            // line 155
            echo "\t\t<div class=\"g-feedback-slideset";
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
\t\t\t";
            // line 156
            if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mainheading", array()) || $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array()))) {
                // line 157
                echo "\t\t\t\t";
                echo twig_escape_filter($this->env, (isset($context["particleheading"]) ? $context["particleheading"] : null), "html", null, true);
                echo "
\t\t\t";
            }
            // line 158
            echo "\t    \t
\t\t\t<div class=\"uk-slidenav-position\" data-uk-slideset=\"{small: 1, medium: ";
            // line 159
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "columns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "columns", array()), "3")) : ("3")));
            echo ", large: ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "columns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "columns", array()), "3")) : ("3")));
            echo ", duration: ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "duration", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "duration", array()), 200)) : (200)));
            echo ", ";
            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "autoplay", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "autoplay", array()), "disable")) : ("disable")) == "enable")) {
                echo "autoplay: 'true',";
            }
            echo " animation: '";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "animation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "animation", array()), "fade")) : ("fade")));
            echo "'}\">
\t\t\t\t<div class=\"uk-slider-container\">
\t\t\t\t\t<ul class=\"uk-slideset uk-grid\">
\t\t\t\t\t\t";
            // line 162
            echo twig_escape_filter($this->env, (isset($context["feedbackitems"]) ? $context["feedbackitems"] : null), "html", null, true);
            echo "
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t";
            // line 165
            if ((((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array()), "dots")) : ("dots")) == "arrows") || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array()), "dots")) : ("dots")) == "both"))) {
                echo "<a href=\"\" class=\"uk-slidenav uk-slidenav-previous\" data-uk-slideset-item=\"previous\"></a>";
            }
            // line 166
            echo "\t\t\t\t";
            if ((((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array()), "dots")) : ("dots")) == "arrows") || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array()), "dots")) : ("dots")) == "both"))) {
                echo "<a href=\"\" class=\"uk-slidenav uk-slidenav-next\" data-uk-slideset-item=\"next\"></a>";
            }
            // line 167
            echo "\t\t\t\t";
            if ((((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array()), "dots")) : ("dots")) == "dots") || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array()), "dots")) : ("dots")) == "both"))) {
                echo "<ul class=\"uk-slideset-nav uk-dotnav uk-flex-center\">
\t    \t\t\t";
                // line 168
                $context["counter"] = 0;
                // line 169
                echo "\t    \t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "items", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 170
                    echo "\t    \t\t\t\t<li data-uk-slideset-item=\"";
                    echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : null), "html", null, true);
                    echo "\"><a href=\"\"></a></li>
\t    \t\t\t\t";
                    // line 171
                    $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : null) + 1);
                    // line 172
                    echo "\t    \t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 173
                echo "\t\t\t\t</ul>";
            }
            // line 174
            echo "\t\t\t</div>    \t
\t\t</div>
\t";
        }
    }

    public function getTemplateName()
    {
        return "@particles/feedback.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  734 => 174,  731 => 173,  725 => 172,  723 => 171,  718 => 170,  713 => 169,  711 => 168,  706 => 167,  701 => 166,  697 => 165,  691 => 162,  675 => 159,  672 => 158,  666 => 157,  664 => 156,  650 => 155,  647 => 154,  642 => 151,  637 => 150,  633 => 149,  627 => 146,  623 => 145,  616 => 143,  613 => 142,  607 => 141,  605 => 140,  591 => 139,  588 => 138,  581 => 134,  578 => 133,  572 => 131,  570 => 130,  556 => 129,  554 => 128,  551 => 127,  548 => 126,  544 => 1,  536 => 122,  531 => 121,  527 => 120,  524 => 119,  519 => 116,  516 => 115,  513 => 114,  486 => 113,  480 => 112,  475 => 111,  465 => 110,  460 => 109,  453 => 105,  450 => 104,  448 => 103,  434 => 101,  432 => 100,  429 => 99,  424 => 96,  421 => 95,  418 => 94,  391 => 93,  385 => 92,  380 => 91,  370 => 90,  365 => 89,  360 => 87,  356 => 86,  342 => 84,  340 => 83,  337 => 82,  331 => 81,  328 => 80,  323 => 79,  320 => 78,  315 => 77,  313 => 76,  305 => 72,  300 => 71,  296 => 70,  293 => 69,  287 => 65,  284 => 64,  281 => 63,  254 => 62,  248 => 61,  243 => 60,  233 => 59,  228 => 58,  221 => 54,  218 => 53,  216 => 52,  202 => 49,  200 => 48,  197 => 47,  191 => 43,  188 => 42,  185 => 41,  158 => 40,  152 => 39,  147 => 38,  137 => 37,  132 => 36,  127 => 34,  123 => 33,  109 => 30,  107 => 29,  104 => 28,  98 => 27,  95 => 26,  90 => 25,  87 => 24,  82 => 23,  80 => 22,  76 => 19,  70 => 18,  67 => 17,  60 => 16,  55 => 15,  53 => 14,  50 => 13,  48 => 12,  37 => 7,  33 => 6,  29 => 5,  27 => 4,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@particles/feedback.html.twig", "/home3/menmwen/public_html/home/templates/it_mighty/particles/feedback.html.twig");
    }
}
