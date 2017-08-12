<?php

/* @particles/our-team.html.twig */
class __TwigTemplate_5a3ff661bd55e88dd20b3a39f107d4cd786515fdb52aaf1ca15df310bfc9f07b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/our-team.html.twig", 1);
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
        echo "    <div class=\"g-particle-intro\">
        ";
        // line 14
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mainheading", array())) {
            // line 15
            echo "            <h3 class=\"g-title g-main-title\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mainheading", array());
            echo "</h3>
            <div class=\"g-title-separator ";
            // line 16
            if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array()) == false)) {
                echo "no-intro-text";
            }
            echo "\"></div>
        ";
        }
        // line 17
        echo " 
        ";
        // line 18
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array())) {
            echo "<p class=\"g-introtext\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array());
            echo "</p>";
        }
        // line 19
        echo "    </div>
";
        $context["particleheading"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 22
        ob_start();
        // line 23
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "items", array()), twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "columns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "columns", array()), "3")) : ("3")))));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 24
            echo "        ";
            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array()), "static")) : ("static")) == "static")) {
                echo "<div class=\"g-grid\">";
            }
            // line 25
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 26
                echo "                ";
                $context["attr_extra_item"] = "";
                // line 27
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "extra", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["extra"]) {
                    // line 28
                    echo "                    ";
                    $context["attr_extra_item"] = ((((((isset($context["attr_extra_item"]) ? $context["attr_extra_item"] : null) . " ") . twig_escape_filter($this->env, twig_first($this->env, twig_get_array_keys_filter($context["extra"])))) . "=\"") . twig_escape_filter($this->env, twig_first($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->valuesFilter($context["extra"])), "html_attr")) . "\"");
                    // line 29
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "
                ";
                // line 31
                ob_start();
                // line 32
                echo "                    <div class=\"g-our-team-item";
                if (((((($this->getAttribute($context["item"], "facebook", array()) || $this->getAttribute($context["item"], "twitter", array())) || $this->getAttribute($context["item"], "googleplus", array())) || $this->getAttribute($context["item"], "linkedin", array())) || $this->getAttribute($context["item"], "dribbble", array())) || $this->getAttribute($context["item"], "email", array()))) {
                    echo " uk-overlay uk-overlay-hover";
                }
                echo "\">
                        ";
                // line 33
                if ($this->getAttribute($context["item"], "image", array())) {
                    // line 34
                    echo "                            <div class=\"g-our-team-image\">
                                <img alt=\"";
                    // line 35
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "alt", array()));
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", array())), "html", null, true);
                    echo "\" ";
                    echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->imageSize($this->getAttribute($context["item"], "image", array()));
                    echo ">
                                ";
                    // line 36
                    if (((((($this->getAttribute($context["item"], "facebook", array()) || $this->getAttribute($context["item"], "twitter", array())) || $this->getAttribute($context["item"], "googleplus", array())) || $this->getAttribute($context["item"], "linkedin", array())) || $this->getAttribute($context["item"], "dribbble", array())) || $this->getAttribute($context["item"], "email", array()))) {
                        // line 37
                        echo "                                    <div class=\"g-our-team-social uk-overlay-panel uk-overlay-background  uk-overlay-bottom uk-overlay-slide-bottom\">
                                        <div class=\"g-grid\">
                                            ";
                        // line 39
                        if ($this->getAttribute($context["item"], "facebook", array())) {
                            // line 40
                            echo "                                                <div class=\"g-block\">
                                                    <a target=\"";
                            // line 41
                            echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "socialtarget", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "socialtarget", array()), "_blank")) : ("_blank")));
                            echo "\" href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "facebook", array()));
                            echo "\"><i class=\"fa fa-facebook\"></i></a>
                                                </div>
                                            ";
                        }
                        // line 44
                        echo "                                            ";
                        if ($this->getAttribute($context["item"], "twitter", array())) {
                            // line 45
                            echo "                                                <div class=\"g-block\">
                                                    <a target=\"";
                            // line 46
                            echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "socialtarget", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "socialtarget", array()), "_blank")) : ("_blank")));
                            echo "\" href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "twitter", array()));
                            echo "\"><i class=\"fa fa-twitter\"></i></a>
                                                </div>
                                            ";
                        }
                        // line 49
                        echo "                                            ";
                        if ($this->getAttribute($context["item"], "googleplus", array())) {
                            // line 50
                            echo "                                                <div class=\"g-block\">
                                                    <a target=\"";
                            // line 51
                            echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "socialtarget", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "socialtarget", array()), "_blank")) : ("_blank")));
                            echo "\" href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "googleplus", array()));
                            echo "\"><i class=\"fa fa-google-plus\"></i></a>
                                                </div>
                                            ";
                        }
                        // line 54
                        echo "                                            ";
                        if ($this->getAttribute($context["item"], "linkedin", array())) {
                            // line 55
                            echo "                                                <div class=\"g-block\">
                                                    <a target=\"";
                            // line 56
                            echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "socialtarget", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "socialtarget", array()), "_blank")) : ("_blank")));
                            echo "\" href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "linkedin", array()));
                            echo "\"><i class=\"fa fa-linkedin\"></i></a>
                                                </div>
                                            ";
                        }
                        // line 59
                        echo "                                            ";
                        if ($this->getAttribute($context["item"], "dribbble", array())) {
                            // line 60
                            echo "                                                <div class=\"g-block\">
                                                    <a target=\"";
                            // line 61
                            echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "socialtarget", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "socialtarget", array()), "_blank")) : ("_blank")));
                            echo "\" href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "dribbble", array()));
                            echo "\"><i class=\"fa fa-dribbble\"></i></a>
                                                </div>
                                            ";
                        }
                        // line 64
                        echo "                                            ";
                        if ($this->getAttribute($context["item"], "email", array())) {
                            // line 65
                            echo "                                                <div class=\"g-block\">
                                                    <a target=\"";
                            // line 66
                            echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "socialtarget", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "socialtarget", array()), "_blank")) : ("_blank")));
                            echo "\" href=\"mailto:";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "email", array()));
                            echo "\"><i class=\"fa fa-envelope\"></i></a>
                                                </div>
                                            ";
                        }
                        // line 69
                        echo "                                        </div>
                                    </div>
                                ";
                    }
                    // line 72
                    echo "                            </div>
                        ";
                }
                // line 74
                echo "                        ";
                if (($this->getAttribute($context["item"], "name", array()) || $this->getAttribute($context["item"], "description", array()))) {
                    // line 75
                    echo "                            <div class=\"g-info-container\">
                                ";
                    // line 76
                    if ($this->getAttribute($context["item"], "membername", array())) {
                        echo "<h4 class=\"g-our-team-name\">";
                        if ($this->getAttribute($context["item"], "link", array())) {
                            echo "<a target=\"";
                            echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "nametarget", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "nametarget", array()), "_parent")) : ("_parent")));
                            echo "\" href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()));
                            echo "\">";
                        }
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "membername", array()));
                        if ($this->getAttribute($context["item"], "link", array())) {
                            echo "</a>";
                        }
                        echo "</h4>";
                    }
                    // line 77
                    echo "                                ";
                    if ($this->getAttribute($context["item"], "position", array())) {
                        echo "<p class=\"g-our-team-position";
                        if (($this->getAttribute($context["item"], "position", array()) && $this->getAttribute($context["item"], "description", array()))) {
                            echo " g-desc-enabled";
                        }
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "position", array()));
                        echo "</p>";
                    }
                    // line 78
                    echo "                                ";
                    if ($this->getAttribute($context["item"], "description", array())) {
                        echo "<p class=\"g-our-team-desc\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "description", array()));
                        echo "</p>";
                    }
                    // line 79
                    echo "                            </div>
                        ";
                }
                // line 80
                echo "                         
                    </div>
                ";
                $context["style1"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 83
                echo "
                ";
                // line 84
                ob_start();
                // line 85
                echo "                    <div class=\"g-our-team-item\">
                        ";
                // line 86
                if ($this->getAttribute($context["item"], "image", array())) {
                    // line 87
                    echo "                            <div class=\"g-our-team-image\">
                                <img alt=\"";
                    // line 88
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "alt", array()));
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", array())), "html", null, true);
                    echo "\" ";
                    echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->imageSize($this->getAttribute($context["item"], "image", array()));
                    echo ">
                            </div>
                        ";
                }
                // line 91
                echo "                        ";
                if (($this->getAttribute($context["item"], "name", array()) || $this->getAttribute($context["item"], "description", array()))) {
                    // line 92
                    echo "                            <div class=\"g-info-container\">
                                ";
                    // line 93
                    if ($this->getAttribute($context["item"], "membername", array())) {
                        echo "<h4 class=\"g-our-team-name\">";
                        if ($this->getAttribute($context["item"], "link", array())) {
                            echo "<a target=\"";
                            echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "nametarget", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "nametarget", array()), "_parent")) : ("_parent")));
                            echo "\" href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()));
                            echo "\">";
                        }
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "membername", array()));
                        if ($this->getAttribute($context["item"], "link", array())) {
                            echo "</a>";
                        }
                        echo "</h4>";
                    }
                    // line 94
                    echo "                                ";
                    if ($this->getAttribute($context["item"], "position", array())) {
                        echo "<p class=\"g-our-team-position";
                        if (($this->getAttribute($context["item"], "position", array()) && $this->getAttribute($context["item"], "description", array()))) {
                            echo " g-desc-enabled";
                        }
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "position", array()));
                        echo "</p>";
                    }
                    // line 95
                    echo "                                ";
                    if ($this->getAttribute($context["item"], "description", array())) {
                        echo "<p class=\"g-our-team-desc\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "description", array()));
                        echo "</p>";
                    }
                    // line 96
                    echo "                                ";
                    if (((((($this->getAttribute($context["item"], "facebook", array()) || $this->getAttribute($context["item"], "twitter", array())) || $this->getAttribute($context["item"], "googleplus", array())) || $this->getAttribute($context["item"], "linkedin", array())) || $this->getAttribute($context["item"], "dribbble", array())) || $this->getAttribute($context["item"], "email", array()))) {
                        // line 97
                        echo "                                    <div class=\"g-our-team-social\">
                                        ";
                        // line 98
                        if ($this->getAttribute($context["item"], "facebook", array())) {
                            // line 99
                            echo "                                            <a target=\"";
                            echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "socialtarget", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "socialtarget", array()), "_blank")) : ("_blank")));
                            echo "\" href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "facebook", array()));
                            echo "\"><i class=\"fa fa-facebook\"></i></a>
                                        ";
                        }
                        // line 101
                        echo "                                        ";
                        if ($this->getAttribute($context["item"], "twitter", array())) {
                            // line 102
                            echo "                                            <a target=\"";
                            echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "socialtarget", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "socialtarget", array()), "_blank")) : ("_blank")));
                            echo "\" href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "twitter", array()));
                            echo "\"><i class=\"fa fa-twitter\"></i></a>
                                        ";
                        }
                        // line 104
                        echo "                                        ";
                        if ($this->getAttribute($context["item"], "googleplus", array())) {
                            // line 105
                            echo "                                            <a target=\"";
                            echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "socialtarget", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "socialtarget", array()), "_blank")) : ("_blank")));
                            echo "\" href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "googleplus", array()));
                            echo "\"><i class=\"fa fa-google-plus\"></i></a>
                                        ";
                        }
                        // line 107
                        echo "                                        ";
                        if ($this->getAttribute($context["item"], "linkedin", array())) {
                            // line 108
                            echo "                                            <a target=\"";
                            echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "socialtarget", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "socialtarget", array()), "_blank")) : ("_blank")));
                            echo "\" href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "linkedin", array()));
                            echo "\"><i class=\"fa fa-linkedin\"></i></a>
                                        ";
                        }
                        // line 110
                        echo "                                        ";
                        if ($this->getAttribute($context["item"], "dribbble", array())) {
                            // line 111
                            echo "                                            <a target=\"";
                            echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "socialtarget", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "socialtarget", array()), "_blank")) : ("_blank")));
                            echo "\" href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "dribbble", array()));
                            echo "\"><i class=\"fa fa-dribbble\"></i></a>
                                        ";
                        }
                        // line 113
                        echo "                                        ";
                        if ($this->getAttribute($context["item"], "email", array())) {
                            // line 114
                            echo "                                            <a target=\"";
                            echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "socialtarget", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "socialtarget", array()), "_blank")) : ("_blank")));
                            echo "\" href=\"mailto:";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "email", array()));
                            echo "\"><i class=\"fa fa-envelope\"></i></a>
                                        ";
                        }
                        // line 116
                        echo "                                    </div>
                                ";
                    }
                    // line 118
                    echo "                            </div>
                        ";
                }
                // line 119
                echo "                     
                    </div>
                ";
                $context["style2"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 122
                echo "
                ";
                // line 123
                if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array()), "static")) : ("static")) == "static")) {
                    // line 124
                    echo "                    <div class=\"g-block";
                    if ($this->getAttribute($context["item"], "class", array())) {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "class", array()));
                    }
                    echo "\" ";
                    if ($this->getAttribute($context["item"], "extra", array())) {
                        echo (isset($context["attr_extra_item"]) ? $context["attr_extra_item"] : null);
                    }
                    echo ">
                        <div ";
                    // line 125
                    if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "gutter", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "gutter", array()), "enabled")) : ("enabled")) == "enabled")) {
                        echo "class=\"g-content\"";
                    }
                    echo ">
                            ";
                    // line 126
                    if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "style1")) : ("style1")) == "style1")) {
                        echo twig_escape_filter($this->env, (isset($context["style1"]) ? $context["style1"] : null), "html", null, true);
                    }
                    // line 127
                    echo "                            ";
                    if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "style1")) : ("style1")) == "style2")) {
                        echo twig_escape_filter($this->env, (isset($context["style2"]) ? $context["style2"] : null), "html", null, true);
                    }
                    // line 128
                    echo "                        </div>
                    </div>
                ";
                }
                // line 131
                echo "
                ";
                // line 132
                if ((((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array()), "static")) : ("static")) == "slider") || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array()), "static")) : ("static")) == "slideset"))) {
                    // line 133
                    echo "                    <li ";
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
                        ";
                    // line 134
                    if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "style1")) : ("style1")) == "style1")) {
                        echo twig_escape_filter($this->env, (isset($context["style1"]) ? $context["style1"] : null), "html", null, true);
                    }
                    // line 135
                    echo "                        ";
                    if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "style1")) : ("style1")) == "style2")) {
                        echo twig_escape_filter($this->env, (isset($context["style2"]) ? $context["style2"] : null), "html", null, true);
                    }
                    // line 136
                    echo "                    </li>
                ";
                }
                // line 138
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 140
            echo "        ";
            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array()), "static")) : ("static")) == "static")) {
                echo "</div>";
            }
            // line 141
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        $context["ourteamitems"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 144
    public function block_particle($context, array $blocks = array())
    {
        // line 145
        echo "\t
\t";
        // line 146
        if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array()), "static")) : ("static")) == "static")) {
            // line 147
            echo "\t\t<div class=\"g-our-team ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "style1")) : ("style1")));
            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "gutter", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "gutter", array()), "enabled")) : ("enabled")) == "enabled")) {
                echo " gutter-enabled";
            } else {
                echo " gutter-disabled";
            }
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
            // line 148
            if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mainheading", array()) || $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array()))) {
                // line 149
                echo "                ";
                echo twig_escape_filter($this->env, (isset($context["particleheading"]) ? $context["particleheading"] : null), "html", null, true);
                echo "
            ";
            }
            // line 151
            echo "            ";
            echo twig_escape_filter($this->env, (isset($context["ourteamitems"]) ? $context["ourteamitems"] : null), "html", null, true);
            echo "
\t\t</div>
\t";
        }
        // line 154
        echo "\t";
        if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array()), "static")) : ("static")) == "slider")) {
            // line 155
            echo "\t\t<div class=\"g-our-team-slider ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "style1")) : ("style1")));
            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "gutter", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "gutter", array()), "enabled")) : ("enabled")) == "enabled")) {
                echo " gutter-enabled";
            } else {
                echo " gutter-disabled";
            }
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
            // line 156
            if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mainheading", array()) || $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array()))) {
                // line 157
                echo "                ";
                echo twig_escape_filter($this->env, (isset($context["particleheading"]) ? $context["particleheading"] : null), "html", null, true);
                echo "
            ";
            }
            // line 158
            echo "\t    \t
\t\t\t<div class=\"uk-slidenav-position\" data-uk-slider";
            // line 159
            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "autoplay", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "autoplay", array()), "disable")) : ("disable")) == "enable")) {
                echo "=\"{autoplay:true}\"";
            }
            echo ">
\t\t\t\t<div class=\"uk-slider-container\">
\t\t\t\t\t<ul class=\"uk-slider";
            // line 161
            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "gutter", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "gutter", array()), "enabled")) : ("enabled")) == "enabled")) {
                echo " uk-grid";
            }
            echo " uk-grid-width-medium-1-";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "columns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "columns", array()), "3")) : ("3")));
            echo "\">
                        ";
            // line 162
            echo twig_escape_filter($this->env, (isset($context["ourteamitems"]) ? $context["ourteamitems"] : null), "html", null, true);
            echo "
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t";
            // line 165
            if ((((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array()), "arrows")) : ("arrows")) == "arrows") || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array()), "arrows")) : ("arrows")) == "both"))) {
                echo "<a href=\"\" class=\"uk-slidenav uk-slidenav-previous\" data-uk-slider-item=\"previous\"></a>";
            }
            // line 166
            echo "\t\t\t\t";
            if ((((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array()), "arrows")) : ("arrows")) == "arrows") || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array()), "arrows")) : ("arrows")) == "both"))) {
                echo "<a href=\"\" class=\"uk-slidenav uk-slidenav-next\" data-uk-slider-item=\"next\"></a>";
            }
            // line 167
            echo "\t\t\t</div>\t\t    \t
\t\t</div>
\t";
        }
        // line 170
        echo "\t";
        if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array()), "static")) : ("static")) == "slideset")) {
            // line 171
            echo "\t\t<div class=\"g-our-team-slideset ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "style1")) : ("style1")));
            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "gutter", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "gutter", array()), "enabled")) : ("enabled")) == "enabled")) {
                echo " gutter-enabled";
            } else {
                echo " gutter-disabled";
            }
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
            // line 172
            if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mainheading", array()) || $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array()))) {
                // line 173
                echo "                ";
                echo twig_escape_filter($this->env, (isset($context["particleheading"]) ? $context["particleheading"] : null), "html", null, true);
                echo "
            ";
            }
            // line 174
            echo "\t\t    \t
\t\t\t<div class=\"uk-slidenav-position\" data-uk-slideset=\"{small: 1, medium: ";
            // line 175
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
                        ";
            // line 178
            echo twig_escape_filter($this->env, (isset($context["ourteamitems"]) ? $context["ourteamitems"] : null), "html", null, true);
            echo "
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t";
            // line 181
            if ((((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array()), "arrows")) : ("arrows")) == "arrows") || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array()), "arrows")) : ("arrows")) == "both"))) {
                echo "<a href=\"\" class=\"uk-slidenav uk-slidenav-previous\" data-uk-slideset-item=\"previous\"></a>";
            }
            // line 182
            echo "\t\t\t\t";
            if ((((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array()), "arrows")) : ("arrows")) == "arrows") || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array()), "arrows")) : ("arrows")) == "both"))) {
                echo "<a href=\"\" class=\"uk-slidenav uk-slidenav-next\" data-uk-slideset-item=\"next\"></a>";
            }
            // line 183
            echo "\t\t\t\t";
            if ((((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array()), "arrows")) : ("arrows")) == "dots") || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array()), "arrows")) : ("arrows")) == "both"))) {
                echo "<ul class=\"uk-slideset-nav uk-dotnav uk-flex-center\">
\t    \t\t\t";
                // line 184
                $context["counter"] = 0;
                // line 185
                echo "\t    \t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "items", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 186
                    echo "\t    \t\t\t\t<li data-uk-slideset-item=\"";
                    echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : null), "html", null, true);
                    echo "\"><a href=\"\"></a></li>
\t    \t\t\t\t";
                    // line 187
                    $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : null) + 1);
                    // line 188
                    echo "\t    \t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 189
                echo "\t\t\t\t</ul>";
            }
            // line 190
            echo "\t\t\t</div>\t\t    \t
\t\t</div>
\t";
        }
    }

    public function getTemplateName()
    {
        return "@particles/our-team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  723 => 190,  720 => 189,  714 => 188,  712 => 187,  707 => 186,  702 => 185,  700 => 184,  695 => 183,  690 => 182,  686 => 181,  680 => 178,  664 => 175,  661 => 174,  655 => 173,  653 => 172,  635 => 171,  632 => 170,  627 => 167,  622 => 166,  618 => 165,  612 => 162,  604 => 161,  597 => 159,  594 => 158,  588 => 157,  586 => 156,  568 => 155,  565 => 154,  558 => 151,  552 => 149,  550 => 148,  532 => 147,  530 => 146,  527 => 145,  524 => 144,  520 => 1,  513 => 141,  508 => 140,  501 => 138,  497 => 136,  492 => 135,  488 => 134,  475 => 133,  473 => 132,  470 => 131,  465 => 128,  460 => 127,  456 => 126,  450 => 125,  438 => 124,  436 => 123,  433 => 122,  428 => 119,  424 => 118,  420 => 116,  412 => 114,  409 => 113,  401 => 111,  398 => 110,  390 => 108,  387 => 107,  379 => 105,  376 => 104,  368 => 102,  365 => 101,  357 => 99,  355 => 98,  352 => 97,  349 => 96,  342 => 95,  331 => 94,  315 => 93,  312 => 92,  309 => 91,  299 => 88,  296 => 87,  294 => 86,  291 => 85,  289 => 84,  286 => 83,  281 => 80,  277 => 79,  270 => 78,  259 => 77,  243 => 76,  240 => 75,  237 => 74,  233 => 72,  228 => 69,  220 => 66,  217 => 65,  214 => 64,  206 => 61,  203 => 60,  200 => 59,  192 => 56,  189 => 55,  186 => 54,  178 => 51,  175 => 50,  172 => 49,  164 => 46,  161 => 45,  158 => 44,  150 => 41,  147 => 40,  145 => 39,  141 => 37,  139 => 36,  131 => 35,  128 => 34,  126 => 33,  119 => 32,  117 => 31,  114 => 30,  108 => 29,  105 => 28,  100 => 27,  97 => 26,  92 => 25,  87 => 24,  82 => 23,  80 => 22,  76 => 19,  70 => 18,  67 => 17,  60 => 16,  55 => 15,  53 => 14,  50 => 13,  48 => 12,  37 => 7,  33 => 6,  29 => 5,  27 => 4,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@particles/our-team.html.twig", "/home3/menmwen/public_html/home/templates/it_mighty/particles/our-team.html.twig");
    }
}
