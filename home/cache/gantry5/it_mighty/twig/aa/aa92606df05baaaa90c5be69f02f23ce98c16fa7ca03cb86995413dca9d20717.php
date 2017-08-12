<?php

/* @particles/gallery.html.twig */
class __TwigTemplate_ccb70be688feb5832145950bccee4dac22d234c8979f66f41df5cb419361ec3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/gallery.html.twig", 1);
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
        $context["filterid"] = twig_random($this->env);
        // line 24
        ob_start();
        // line 25
        echo "\t<ul id=\"g-gallery-filter_";
        echo twig_escape_filter($this->env, (isset($context["filterid"]) ? $context["filterid"] : null), "html", null, true);
        echo "\" class=\"g-gallery-filter uk-subnav uk-subnav-pill\">
\t\t<li class=\"uk-active\" data-uk-filter=\"all\"><a href=\"\">";
        // line 26
        echo (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filterall", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filterall", array()), "All")) : ("All"));
        echo "</a></li>
\t\t";
        // line 27
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filter1", array())) {
            echo "<li data-uk-filter=\"filter1_";
            echo twig_escape_filter($this->env, (isset($context["filterid"]) ? $context["filterid"] : null), "html", null, true);
            echo "\"><a href=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filter1", array()));
            echo "</a></li>";
        }
        // line 28
        echo "\t\t";
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filter2", array())) {
            echo "<li data-uk-filter=\"filter2_";
            echo twig_escape_filter($this->env, (isset($context["filterid"]) ? $context["filterid"] : null), "html", null, true);
            echo "\"><a href=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filter2", array()));
            echo "</a></li>";
        }
        // line 29
        echo "\t\t";
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filter3", array())) {
            echo "<li data-uk-filter=\"filter3_";
            echo twig_escape_filter($this->env, (isset($context["filterid"]) ? $context["filterid"] : null), "html", null, true);
            echo "\"><a href=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filter3", array()));
            echo "</a></li>";
        }
        // line 30
        echo "\t\t";
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filter4", array())) {
            echo "<li data-uk-filter=\"filter4_";
            echo twig_escape_filter($this->env, (isset($context["filterid"]) ? $context["filterid"] : null), "html", null, true);
            echo "\"><a href=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filter4", array()));
            echo "</a></li>";
        }
        // line 31
        echo "\t\t";
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filter5", array())) {
            echo "<li data-uk-filter=\"filter5_";
            echo twig_escape_filter($this->env, (isset($context["filterid"]) ? $context["filterid"] : null), "html", null, true);
            echo "\"><a href=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filter5", array()));
            echo "</a></li>";
        }
        // line 32
        echo "\t</ul>
";
        $context["gallery_filter"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 35
        ob_start();
        // line 36
        echo "\t";
        $context["all_items"] = 0;
        // line 37
        echo "\t";
        $context["filter1"] = 0;
        // line 38
        echo "\t";
        $context["filter2"] = 0;
        // line 39
        echo "\t";
        $context["filter3"] = 0;
        // line 40
        echo "\t";
        $context["filter4"] = 0;
        // line 41
        echo "\t";
        $context["filter5"] = 0;
        // line 42
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "items", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 43
            echo "\t\t";
            $context["all_items"] = ((isset($context["all_items"]) ? $context["all_items"] : null) + 1);
            // line 44
            echo "\t\t";
            if ($this->getAttribute($context["item"], "filter1", array())) {
                $context["filter1"] = ((isset($context["filter1"]) ? $context["filter1"] : null) + 1);
            }
            // line 45
            echo "\t\t";
            if ($this->getAttribute($context["item"], "filter2", array())) {
                $context["filter2"] = ((isset($context["filter2"]) ? $context["filter2"] : null) + 1);
            }
            // line 46
            echo "\t\t";
            if ($this->getAttribute($context["item"], "filter3", array())) {
                $context["filter3"] = ((isset($context["filter3"]) ? $context["filter3"] : null) + 1);
            }
            // line 47
            echo "\t\t";
            if ($this->getAttribute($context["item"], "filter4", array())) {
                $context["filter4"] = ((isset($context["filter4"]) ? $context["filter4"] : null) + 1);
            }
            // line 48
            echo "\t\t";
            if ($this->getAttribute($context["item"], "filter5", array())) {
                $context["filter5"] = ((isset($context["filter5"]) ? $context["filter5"] : null) + 1);
            }
            // line 49
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "\t<ul id=\"g-gallery-filter_";
        echo twig_escape_filter($this->env, (isset($context["filterid"]) ? $context["filterid"] : null), "html", null, true);
        echo "\" class=\"g-gallery-filter uk-subnav uk-subnav-pill\">
\t\t<li class=\"uk-active\" data-uk-filter=\"all\"><a href=\"\">";
        // line 51
        echo (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filterall", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filterall", array()), "All")) : ("All"));
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["all_items"]) ? $context["all_items"] : null), "html", null, true);
        echo ")</a></li>
\t\t";
        // line 52
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filter1", array())) {
            echo "<li data-uk-filter=\"filter1_";
            echo twig_escape_filter($this->env, (isset($context["filterid"]) ? $context["filterid"] : null), "html", null, true);
            echo "\"><a href=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filter1", array()));
            echo " (";
            echo twig_escape_filter($this->env, (isset($context["filter1"]) ? $context["filter1"] : null), "html", null, true);
            echo ")</a></li>";
        }
        // line 53
        echo "\t\t";
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filter2", array())) {
            echo "<li data-uk-filter=\"filter2_";
            echo twig_escape_filter($this->env, (isset($context["filterid"]) ? $context["filterid"] : null), "html", null, true);
            echo "\"><a href=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filter2", array()));
            echo " (";
            echo twig_escape_filter($this->env, (isset($context["filter2"]) ? $context["filter2"] : null), "html", null, true);
            echo ")</a></li>";
        }
        // line 54
        echo "\t\t";
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filter3", array())) {
            echo "<li data-uk-filter=\"filter3_";
            echo twig_escape_filter($this->env, (isset($context["filterid"]) ? $context["filterid"] : null), "html", null, true);
            echo "\"><a href=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filter3", array()));
            echo " (";
            echo twig_escape_filter($this->env, (isset($context["filter3"]) ? $context["filter3"] : null), "html", null, true);
            echo ")</a></li>";
        }
        // line 55
        echo "\t\t";
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filter4", array())) {
            echo "<li data-uk-filter=\"filter4_";
            echo twig_escape_filter($this->env, (isset($context["filterid"]) ? $context["filterid"] : null), "html", null, true);
            echo "\"><a href=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filter4", array()));
            echo " (";
            echo twig_escape_filter($this->env, (isset($context["filter4"]) ? $context["filter4"] : null), "html", null, true);
            echo ")</a></li>";
        }
        // line 56
        echo "\t\t";
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filter5", array())) {
            echo "<li data-uk-filter=\"filter5_";
            echo twig_escape_filter($this->env, (isset($context["filterid"]) ? $context["filterid"] : null), "html", null, true);
            echo "\"><a href=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filter5", array()));
            echo " (";
            echo twig_escape_filter($this->env, (isset($context["filter5"]) ? $context["filter5"] : null), "html", null, true);
            echo ")</a></li>";
        }
        // line 57
        echo "\t</ul>
";
        $context["gallery_filter_s2"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 60
        ob_start();
        // line 61
        echo "\t";
        $context["all_items"] = 0;
        // line 62
        echo "\t";
        $context["filter1"] = 0;
        // line 63
        echo "\t";
        $context["filter2"] = 0;
        // line 64
        echo "\t";
        $context["filter3"] = 0;
        // line 65
        echo "\t";
        $context["filter4"] = 0;
        // line 66
        echo "\t";
        $context["filter5"] = 0;
        // line 67
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "items", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 68
            echo "\t\t";
            $context["all_items"] = ((isset($context["all_items"]) ? $context["all_items"] : null) + 1);
            // line 69
            echo "\t\t";
            if ($this->getAttribute($context["item"], "filter1", array())) {
                $context["filter1"] = ((isset($context["filter1"]) ? $context["filter1"] : null) + 1);
            }
            // line 70
            echo "\t\t";
            if ($this->getAttribute($context["item"], "filter2", array())) {
                $context["filter2"] = ((isset($context["filter2"]) ? $context["filter2"] : null) + 1);
            }
            // line 71
            echo "\t\t";
            if ($this->getAttribute($context["item"], "filter3", array())) {
                $context["filter3"] = ((isset($context["filter3"]) ? $context["filter3"] : null) + 1);
            }
            // line 72
            echo "\t\t";
            if ($this->getAttribute($context["item"], "filter4", array())) {
                $context["filter4"] = ((isset($context["filter4"]) ? $context["filter4"] : null) + 1);
            }
            // line 73
            echo "\t\t";
            if ($this->getAttribute($context["item"], "filter5", array())) {
                $context["filter5"] = ((isset($context["filter5"]) ? $context["filter5"] : null) + 1);
            }
            // line 74
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "\t<ul id=\"g-gallery-filter_";
        echo twig_escape_filter($this->env, (isset($context["filterid"]) ? $context["filterid"] : null), "html", null, true);
        echo "\" class=\"g-gallery-filter uk-subnav uk-subnav-pill\">
\t\t<li class=\"uk-active\" data-uk-filter=\"all\"><a href=\"\" data-uk-tooltip=\"{cls: 'g-gallery-tooltip'}\" title=\"";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["all_items"]) ? $context["all_items"] : null), "html", null, true);
        echo "\">";
        echo (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filterall", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filterall", array()), "All")) : ("All"));
        echo "</a></li>
\t\t";
        // line 77
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filter1", array())) {
            echo "<li data-uk-filter=\"filter1_";
            echo twig_escape_filter($this->env, (isset($context["filterid"]) ? $context["filterid"] : null), "html", null, true);
            echo "\"><a href=\"\" data-uk-tooltip=\"{cls: 'g-gallery-tooltip'}\" title=\"";
            echo twig_escape_filter($this->env, (isset($context["filter1"]) ? $context["filter1"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filter1", array()));
            echo "</a></li>";
        }
        // line 78
        echo "\t\t";
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filter2", array())) {
            echo "<li data-uk-filter=\"filter2_";
            echo twig_escape_filter($this->env, (isset($context["filterid"]) ? $context["filterid"] : null), "html", null, true);
            echo "\"><a href=\"\" data-uk-tooltip=\"{cls: 'g-gallery-tooltip'}\" title=\"";
            echo twig_escape_filter($this->env, (isset($context["filter2"]) ? $context["filter2"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filter2", array()));
            echo "</a></li>";
        }
        // line 79
        echo "\t\t";
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filter3", array())) {
            echo "<li data-uk-filter=\"filter3_";
            echo twig_escape_filter($this->env, (isset($context["filterid"]) ? $context["filterid"] : null), "html", null, true);
            echo "\"><a href=\"\" data-uk-tooltip=\"{cls: 'g-gallery-tooltip'}\" title=\"";
            echo twig_escape_filter($this->env, (isset($context["filter3"]) ? $context["filter3"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filter3", array()));
            echo "</a></li>";
        }
        // line 80
        echo "\t\t";
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filter4", array())) {
            echo "<li data-uk-filter=\"filter4_";
            echo twig_escape_filter($this->env, (isset($context["filterid"]) ? $context["filterid"] : null), "html", null, true);
            echo "\"><a href=\"\" data-uk-tooltip=\"{cls: 'g-gallery-tooltip'}\" title=\"";
            echo twig_escape_filter($this->env, (isset($context["filter4"]) ? $context["filter4"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filter4", array()));
            echo "</a></li>";
        }
        // line 81
        echo "\t\t";
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filter5", array())) {
            echo "<li data-uk-filter=\"filter5_";
            echo twig_escape_filter($this->env, (isset($context["filterid"]) ? $context["filterid"] : null), "html", null, true);
            echo "\"><a href=\"\" data-uk-tooltip=\"{cls: 'g-gallery-tooltip'}\" title=\"";
            echo twig_escape_filter($this->env, (isset($context["filter5"]) ? $context["filter5"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filter5", array()));
            echo "</a></li>";
        }
        // line 82
        echo "\t</ul>
";
        $context["gallery_filter_s3"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 85
        ob_start();
        // line 86
        echo "\t";
        $context["galleryid"] = twig_random($this->env);
        // line 87
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "items", array()), twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "columns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "columns", array()), "3")) : ("3")))));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 88
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 89
                echo "\t\t\t";
                $context["attr_extra_item"] = "";
                // line 90
                echo "\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "extra", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["extra"]) {
                    // line 91
                    echo "\t\t\t\t";
                    $context["attr_extra_item"] = ((((((isset($context["attr_extra_item"]) ? $context["attr_extra_item"] : null) . " ") . twig_escape_filter($this->env, twig_first($this->env, twig_get_array_keys_filter($context["extra"])))) . "=\"") . twig_escape_filter($this->env, twig_first($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->valuesFilter($context["extra"])), "html_attr")) . "\"");
                    // line 92
                    echo "\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 93
                echo "
\t\t\t";
                // line 94
                $context["indentifier"] = twig_random($this->env);
                // line 95
                echo "
\t\t\t";
                // line 96
                ob_start();
                // line 97
                echo "\t\t\t\t";
                if ($this->getAttribute($context["item"], "image", array())) {
                    // line 98
                    echo "\t\t\t\t\t<div class=\"g-gallery-item";
                    if ($this->getAttribute($context["item"], "class", array())) {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "class", array()));
                    }
                    echo "\" ";
                    if (((((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filters", array()), "disabled")) : ("disabled")) == "enabled") || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filters", array()), "disabled")) : ("disabled")) == "enabled2")) || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filters", array()), "disabled")) : ("disabled")) == "enabled3"))) {
                        echo "data-uk-filter=\"all";
                        if ($this->getAttribute($context["item"], "filter1", array())) {
                            echo ", filter1_";
                            echo twig_escape_filter($this->env, (isset($context["filterid"]) ? $context["filterid"] : null), "html", null, true);
                        }
                        if ($this->getAttribute($context["item"], "filter2", array())) {
                            echo ", filter2_";
                            echo twig_escape_filter($this->env, (isset($context["filterid"]) ? $context["filterid"] : null), "html", null, true);
                        }
                        if ($this->getAttribute($context["item"], "filter3", array())) {
                            echo ", filter3_";
                            echo twig_escape_filter($this->env, (isset($context["filterid"]) ? $context["filterid"] : null), "html", null, true);
                        }
                        if ($this->getAttribute($context["item"], "filter4", array())) {
                            echo ", filter4_";
                            echo twig_escape_filter($this->env, (isset($context["filterid"]) ? $context["filterid"] : null), "html", null, true);
                        }
                        if ($this->getAttribute($context["item"], "filter5", array())) {
                            echo ", filter5_";
                            echo twig_escape_filter($this->env, (isset($context["filterid"]) ? $context["filterid"] : null), "html", null, true);
                        }
                        echo "\"";
                    }
                    if ($this->getAttribute($context["item"], "extra", array())) {
                        echo (isset($context["attr_extra_item"]) ? $context["attr_extra_item"] : null);
                    }
                    echo ">
\t\t\t\t\t\t<a class=\"uk-overlay uk-overlay-hover\" href=\"";
                    // line 99
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", array()), false, 0), "html", null, true);
                    echo "\" ";
                    if ($this->getAttribute($context["item"], "title", array())) {
                        echo "title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()));
                        echo "\"";
                    }
                    echo " data-uk-lightbox=\"{group:'";
                    echo twig_escape_filter($this->env, (isset($context["galleryid"]) ? $context["galleryid"] : null), "html", null, true);
                    echo "'}\">
\t\t\t\t\t\t\t<span class=\"uk-overlay-panel uk-overlay-background uk-overlay-icon uk-overlay-fade\"></span>
\t\t\t\t\t\t\t<img alt=\"";
                    // line 101
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "alt", array()));
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", array())), "html", null, true);
                    echo "\" ";
                    echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->imageSize($this->getAttribute($context["item"], "image", array()));
                    echo ">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 105
                echo "\t\t\t";
                $context["style1"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 106
                echo "
\t\t\t";
                // line 107
                ob_start();
                // line 108
                echo "\t\t\t\t";
                if ($this->getAttribute($context["item"], "image", array())) {
                    // line 109
                    echo "\t\t\t\t\t<div class=\"g-gallery-item";
                    if ($this->getAttribute($context["item"], "class", array())) {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "class", array()));
                    }
                    echo "\" ";
                    if (((((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filters", array()), "disabled")) : ("disabled")) == "enabled") || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filters", array()), "disabled")) : ("disabled")) == "enabled2")) || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filters", array()), "disabled")) : ("disabled")) == "enabled3"))) {
                        echo "data-uk-filter=\"all";
                        if ($this->getAttribute($context["item"], "filter1", array())) {
                            echo ", filter1_";
                            echo twig_escape_filter($this->env, (isset($context["filterid"]) ? $context["filterid"] : null), "html", null, true);
                        }
                        if ($this->getAttribute($context["item"], "filter2", array())) {
                            echo ", filter2_";
                            echo twig_escape_filter($this->env, (isset($context["filterid"]) ? $context["filterid"] : null), "html", null, true);
                        }
                        if ($this->getAttribute($context["item"], "filter3", array())) {
                            echo ", filter3_";
                            echo twig_escape_filter($this->env, (isset($context["filterid"]) ? $context["filterid"] : null), "html", null, true);
                        }
                        if ($this->getAttribute($context["item"], "filter4", array())) {
                            echo ", filter4_";
                            echo twig_escape_filter($this->env, (isset($context["filterid"]) ? $context["filterid"] : null), "html", null, true);
                        }
                        if ($this->getAttribute($context["item"], "filter5", array())) {
                            echo ", filter5_";
                            echo twig_escape_filter($this->env, (isset($context["filterid"]) ? $context["filterid"] : null), "html", null, true);
                        }
                        echo "\"";
                    }
                    if ($this->getAttribute($context["item"], "extra", array())) {
                        echo (isset($context["attr_extra_item"]) ? $context["attr_extra_item"] : null);
                    }
                    echo ">
\t\t\t\t\t\t<div class=\"uk-overlay uk-overlay-hover\">
\t\t\t\t\t\t\t<div class=\"uk-overlay-panel uk-overlay-background uk-overlay-fade\">
\t\t\t\t\t\t\t\t<div class=\"gallery-item-buttons\">
\t\t\t\t\t\t\t\t\t<a class=\"magnifier-button\" href=\"";
                    // line 113
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", array()), false, 0), "html", null, true);
                    echo "\" ";
                    if ($this->getAttribute($context["item"], "title", array())) {
                        echo "title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()));
                        echo "\"";
                    }
                    echo " data-uk-lightbox=\"{group:'";
                    echo twig_escape_filter($this->env, (isset($context["galleryid"]) ? $context["galleryid"] : null), "html", null, true);
                    echo "'}\"><i class=\"fa fa-search\"></i></a>
\t\t\t\t\t\t\t\t\t";
                    // line 114
                    if ($this->getAttribute($context["item"], "description", array())) {
                        echo "<a class=\"info-button\" data-uk-modal=\"{target:'#gallery-modal-info-";
                        echo twig_escape_filter($this->env, (isset($context["indentifier"]) ? $context["indentifier"] : null));
                        echo "', center:true}\"><i class=\"fa fa-info-circle\"></i></a>";
                    }
                    // line 115
                    echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<img alt=\"";
                    // line 117
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "alt", array()));
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", array())), "html", null, true);
                    echo "\" ";
                    echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->imageSize($this->getAttribute($context["item"], "image", array()));
                    echo ">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    // line 119
                    if ($this->getAttribute($context["item"], "description", array())) {
                        // line 120
                        echo "\t\t\t\t\t\t\t<div id=\"gallery-modal-info-";
                        echo twig_escape_filter($this->env, (isset($context["indentifier"]) ? $context["indentifier"] : null));
                        echo "\" class=\"uk-modal\">
\t\t\t\t\t\t\t\t<div class=\"uk-modal-dialog\">
\t\t\t\t\t\t\t\t\t<a class=\"uk-modal-close uk-close\"></a>
\t\t\t\t\t\t\t\t\t\t";
                        // line 123
                        echo $this->getAttribute($context["item"], "description", array());
                        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    // line 127
                    echo "\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 129
                echo "\t\t\t";
                $context["style2"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 130
                echo "
\t\t\t";
                // line 131
                if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "style1")) : ("style1")) == "style1")) {
                    echo twig_escape_filter($this->env, (isset($context["style1"]) ? $context["style1"] : null), "html", null, true);
                }
                // line 132
                echo "\t\t\t";
                if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "style1")) : ("style1")) == "style2")) {
                    echo twig_escape_filter($this->env, (isset($context["style2"]) ? $context["style2"] : null), "html", null, true);
                }
                // line 133
                echo "
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        $context["gallery_items"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 138
    public function block_particle($context, array $blocks = array())
    {
        // line 139
        echo "
\t<div class=\"g-gallery";
        // line 140
        if ($this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "css", array()), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "css", array()), "class", array()));
        }
        echo " ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "style1")) : ("style1")));
        if (((((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filters", array()), "disabled")) : ("disabled")) == "enabled") || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filters", array()), "disabled")) : ("disabled")) == "enabled2")) || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filters", array()), "disabled")) : ("disabled")) == "enabled3"))) {
            echo " filters-enabled";
        } else {
            echo " filters-disabled";
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
\t\t";
        // line 141
        if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mainheading", array()) || $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array()))) {
            // line 142
            echo "\t\t\t";
            echo twig_escape_filter($this->env, (isset($context["particleheading"]) ? $context["particleheading"] : null), "html", null, true);
            echo "
\t\t";
        }
        // line 144
        echo "
\t\t";
        // line 145
        if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filters", array()), "disabled")) : ("disabled")) == "enabled")) {
            echo twig_escape_filter($this->env, (isset($context["gallery_filter"]) ? $context["gallery_filter"] : null), "html", null, true);
        }
        // line 146
        echo "\t\t";
        if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filters", array()), "disabled")) : ("disabled")) == "enabled2")) {
            echo twig_escape_filter($this->env, (isset($context["gallery_filter_s2"]) ? $context["gallery_filter_s2"] : null), "html", null, true);
        }
        // line 147
        echo "\t\t";
        if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filters", array()), "disabled")) : ("disabled")) == "enabled3")) {
            echo twig_escape_filter($this->env, (isset($context["gallery_filter_s3"]) ? $context["gallery_filter_s3"] : null), "html", null, true);
        }
        // line 148
        echo "
\t\t<div class=\"uk-grid-width-small-1-2 uk-grid-width-medium-1-3 uk-grid-width-large-1-";
        // line 149
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "columns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "columns", array()), "3")) : ("3")));
        echo "\" data-uk-grid=\"{ ";
        if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "gutter", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "gutter", array()), "enabled")) : ("enabled")) == "enabled")) {
            echo "gutter: 30,";
        }
        if (((((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filters", array()), "disabled")) : ("disabled")) == "enabled") || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filters", array()), "disabled")) : ("disabled")) == "enabled2")) || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filters", array()), "disabled")) : ("disabled")) == "enabled3"))) {
            echo "controls: '#g-gallery-filter_";
            echo twig_escape_filter($this->env, (isset($context["filterid"]) ? $context["filterid"] : null), "html", null, true);
            echo "'";
        }
        echo " }\">
\t\t\t";
        // line 150
        echo twig_escape_filter($this->env, (isset($context["gallery_items"]) ? $context["gallery_items"] : null), "html", null, true);
        echo "
\t\t</div>
\t</div>
";
    }

    // line 155
    public function block_javascript_footer($context, array $blocks = array())
    {
        // line 156
        echo "\t";
        $this->displayParentBlock("javascript_footer", $context, $blocks);
        echo "
\t<script type=\"text/javascript\">
\t\t(function(\$) {
\t\t\t\$(document).ready(function() { 
\t\t\t\t\$(\"[data-uk-filter]\").on(\"click\", function() {
\t\t\t\t\tfunction gridAfterFilter() {
\t\t\t\t\t\t\$('[data-uk-grid]').trigger('display.uk.check');
\t\t\t\t\t}
\t\t\t\t\tsetTimeout(gridAfterFilter, 450);
\t\t\t\t})
\t\t\t});
\t\t})(jQuery);
\t</script>
";
    }

    public function getTemplateName()
    {
        return "@particles/gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  718 => 156,  715 => 155,  707 => 150,  694 => 149,  691 => 148,  686 => 147,  681 => 146,  677 => 145,  674 => 144,  668 => 142,  666 => 141,  643 => 140,  640 => 139,  637 => 138,  633 => 1,  626 => 135,  619 => 133,  614 => 132,  610 => 131,  607 => 130,  604 => 129,  600 => 127,  593 => 123,  586 => 120,  584 => 119,  575 => 117,  571 => 115,  565 => 114,  553 => 113,  514 => 109,  511 => 108,  509 => 107,  506 => 106,  503 => 105,  492 => 101,  479 => 99,  443 => 98,  440 => 97,  438 => 96,  435 => 95,  433 => 94,  430 => 93,  424 => 92,  421 => 91,  416 => 90,  413 => 89,  408 => 88,  403 => 87,  400 => 86,  398 => 85,  394 => 82,  383 => 81,  372 => 80,  361 => 79,  350 => 78,  340 => 77,  334 => 76,  329 => 75,  323 => 74,  318 => 73,  313 => 72,  308 => 71,  303 => 70,  298 => 69,  295 => 68,  290 => 67,  287 => 66,  284 => 65,  281 => 64,  278 => 63,  275 => 62,  272 => 61,  270 => 60,  266 => 57,  255 => 56,  244 => 55,  233 => 54,  222 => 53,  212 => 52,  206 => 51,  201 => 50,  195 => 49,  190 => 48,  185 => 47,  180 => 46,  175 => 45,  170 => 44,  167 => 43,  162 => 42,  159 => 41,  156 => 40,  153 => 39,  150 => 38,  147 => 37,  144 => 36,  142 => 35,  138 => 32,  129 => 31,  120 => 30,  111 => 29,  102 => 28,  94 => 27,  90 => 26,  85 => 25,  83 => 24,  81 => 22,  77 => 19,  71 => 18,  68 => 17,  61 => 16,  56 => 15,  54 => 14,  51 => 13,  49 => 12,  38 => 7,  34 => 6,  30 => 5,  28 => 4,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@particles/gallery.html.twig", "/home3/menmwen/public_html/home/templates/it_mighty/particles/gallery.html.twig");
    }
}
