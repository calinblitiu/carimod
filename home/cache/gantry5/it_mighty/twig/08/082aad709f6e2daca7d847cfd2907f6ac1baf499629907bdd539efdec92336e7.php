<?php

/* @particles/content-pro-joomla.html.twig */
class __TwigTemplate_d385f56dfa57d5f20d9cf5b21d16491b1760d42544d3061a97e14c04b97b763f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/content-pro-joomla.html.twig", 1);
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
        $context["article_settings"] = $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "article", array());
        // line 13
        $context["filter"] = $this->getAttribute((isset($context["article_settings"]) ? $context["article_settings"] : null), "filter", array());
        // line 14
        $context["sort"] = $this->getAttribute((isset($context["article_settings"]) ? $context["article_settings"] : null), "sort", array());
        // line 15
        $context["limit"] = $this->getAttribute((isset($context["article_settings"]) ? $context["article_settings"] : null), "limit", array());
        // line 16
        $context["display"] = $this->getAttribute((isset($context["article_settings"]) ? $context["article_settings"] : null), "display", array());
        // line 19
        $context["category_options"] = (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "categories", array())) ? (array("id" => array(0 => twig_split_filter($this->env, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "categories", array()), ","), 1 => 0))) : (array()));
        // line 20
        $context["categories"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["joomla"]) ? $context["joomla"] : null), "finder", array(0 => "category", 1 => (isset($context["category_options"]) ? $context["category_options"] : null)), "method"), "published", array(0 => 1), "method"), "language", array(), "method"), "limit", array(0 => 0), "method"), "find", array(), "method");
        // line 23
        if ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "articles", array())) {
            // line 24
            $context["article_options"] = (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "articles", array())) ? (array("id" => array(0 => twig_split_filter($this->env, twig_replace_filter($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "articles", array()), " ", ""), ",")))) : (array()));
            // line 25
            $context["article_finder"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["joomla"]) ? $context["joomla"] : null), "finder", array(0 => "content", 1 => (isset($context["article_options"]) ? $context["article_options"] : null)), "method"), "published", array(0 => 1), "method"), "language", array(), "method");
        } else {
            // line 27
            $context["article_finder"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["joomla"]) ? $context["joomla"] : null), "finder", array(0 => "content"), "method"), "category", array(0 => (isset($context["categories"]) ? $context["categories"] : null)), "method"), "published", array(0 => 1), "method"), "language", array(), "method");
        }
        // line 30
        $context["featured"] = (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "featured", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "featured", array()), "include")) : ("include"));
        // line 31
        if (((isset($context["featured"]) ? $context["featured"] : null) == "exclude")) {
            // line 32
            $this->getAttribute((isset($context["article_finder"]) ? $context["article_finder"] : null), "featured", array(0 => false), "method");
        } elseif ((        // line 33
(isset($context["featured"]) ? $context["featured"] : null) == "only")) {
            // line 34
            $this->getAttribute((isset($context["article_finder"]) ? $context["article_finder"] : null), "featured", array(0 => true), "method");
        }
        // line 37
        $context["articles"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["article_finder"]) ? $context["article_finder"] : null), "order", array(0 => $this->getAttribute((isset($context["sort"]) ? $context["sort"] : null), "orderby", array()), 1 => $this->getAttribute((isset($context["sort"]) ? $context["sort"] : null), "ordering", array())), "method"), "limit", array(0 => $this->getAttribute((isset($context["limit"]) ? $context["limit"] : null), "total", array())), "method"), "start", array(0 => $this->getAttribute((isset($context["limit"]) ? $context["limit"] : null), "start", array())), "method"), "find", array(), "method");
        // line 39
        ob_start();
        // line 40
        echo "\t<div class=\"g-particle-intro\">
\t\t";
        // line 41
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mainheading", array())) {
            // line 42
            echo "\t\t\t<h3 class=\"g-title g-main-title\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mainheading", array());
            echo "</h3>
\t\t\t<div class=\"g-title-separator ";
            // line 43
            if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array()) == false)) {
                echo "no-intro-text";
            }
            echo "\"></div>
\t\t";
        }
        // line 44
        echo "\t
\t\t";
        // line 45
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array())) {
            echo "<p class=\"g-introtext\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array());
            echo "</p>";
        }
        // line 46
        echo "\t</div>
";
        $context["particleheading"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 49
        ob_start();
        // line 50
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["articles"]) ? $context["articles"] : null), twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "columns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "columns", array()), "3")) : ("3")))));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 51
            echo "\t\t";
            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array()), "static")) : ("static")) == "static")) {
                echo "<div class=\"g-grid\">";
            }
            // line 52
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 53
                echo "
\t\t\t\t";
                // line 54
                if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "height", array())) {
                    // line 55
                    echo "\t\t\t\t\t";
                    ob_start();
                    // line 56
                    echo "\t\t\t\t\t\t";
                    if (($this->getAttribute($this->getAttribute($context["article"], "images", array()), "image_intro", array()) && ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "image", array()), "enabled", array()) == "intro"))) {
                        // line 57
                        echo "\t\t\t\t\t\t\tbackground-image: url(";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($this->getAttribute($context["article"], "images", array()), "image_intro", array())), "html", null, true);
                        echo ")
\t\t\t\t\t\t";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 58
$context["article"], "images", array()), "image_fulltext", array()) && ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "image", array()), "enabled", array()) == "full"))) {
                        // line 59
                        echo "\t\t\t\t\t\t\tbackground-image: url(";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($this->getAttribute($context["article"], "images", array()), "image_fulltext", array())), "html", null, true);
                        echo ")
\t\t\t\t\t\t";
                    }
                    // line 61
                    echo "\t\t\t\t\t";
                    $context["articleimage"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                    // line 62
                    echo "
\t\t\t\t\t";
                    // line 63
                    ob_start();
                    // line 64
                    echo "\t\t\t\t\t\theight: ";
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "height", array()), "")) : ("")));
                    echo "px
\t\t\t\t\t";
                    $context["imageheight"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                    // line 66
                    echo "\t\t\t\t";
                }
                // line 67
                echo "
\t\t\t\t";
                // line 68
                ob_start();
                // line 69
                echo "\t\t\t\t\t<div class=\"g-content-pro-item\">
\t\t\t\t\t\t";
                // line 70
                if (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "image", array()), "enabled", array()) && ($this->getAttribute($this->getAttribute($context["article"], "images", array()), "image_intro", array()) || $this->getAttribute($this->getAttribute($context["article"], "images", array()), "image_fulltext", array())))) {
                    // line 71
                    echo "\t\t\t\t\t\t\t";
                    if (($this->getAttribute($this->getAttribute($context["article"], "images", array()), "image_intro", array()) && (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "image", array()), "enabled", array()) == "intro") || ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "image", array()), "enabled", array()) == "show")))) {
                        // line 72
                        echo "\t\t\t\t\t\t\t\t<div class=\"g-content-pro-image\"";
                        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "height", array())) {
                            echo " style=\"";
                            echo twig_escape_filter($this->env, (isset($context["articleimage"]) ? $context["articleimage"] : null), "html", null, true);
                            echo "; ";
                            echo twig_escape_filter($this->env, (isset($context["imageheight"]) ? $context["imageheight"] : null), "html", null, true);
                            echo ";\"";
                        }
                        echo ">
\t\t\t\t\t\t\t\t\t";
                        // line 73
                        if ((((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array()), "enable")) : ("enable")) == "enable") || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array()), "enable")) : ("enable")) == "disable"))) {
                            // line 74
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array()), "enable")) : ("enable")) == "enable")) {
                                // line 75
                                echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($this->getAttribute($context["article"], "images", array()), "image_intro", array()), false, 0), "html", null, true);
                                echo "\" data-uk-lightbox class=\"uk-overlay uk-overlay-hover\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"uk-overlay-panel uk-overlay-background uk-overlay-icon uk-overlay-fade\"></span>
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 78
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "height", array()) == 0)) {
                                // line 79
                                echo "\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($this->getAttribute($context["article"], "images", array()), "image_intro", array())), "html", null, true);
                                echo "\" ";
                                echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->imageSize($this->getAttribute($this->getAttribute($context["article"], "images", array()), "image_intro", array()));
                                echo " alt=\"";
                                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array()), "limit", array())) ? ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateText($this->getAttribute($context["article"], "title", array()), $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array()), "limit", array()))) : ($this->getAttribute($context["article"], "title", array()))), "html", null, true);
                                echo "\" />
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 81
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array()), "enable")) : ("enable")) == "enable")) {
                                // line 82
                                echo "\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 84
                            echo "\t\t\t\t\t\t\t\t\t";
                        }
                        // line 85
                        echo "
\t\t\t\t\t\t\t\t\t";
                        // line 86
                        if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array()), "enable")) : ("enable")) == "disablelink")) {
                            // line 87
                            echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "route", array()), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 88
                            if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "height", array()) == 0)) {
                                // line 89
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($this->getAttribute($context["article"], "images", array()), "image_intro", array())), "html", null, true);
                                echo "\" ";
                                echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->imageSize($this->getAttribute($this->getAttribute($context["article"], "images", array()), "image_intro", array()));
                                echo " alt=\"";
                                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array()), "limit", array())) ? ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateText($this->getAttribute($context["article"], "title", array()), $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array()), "limit", array()))) : ($this->getAttribute($context["article"], "title", array()))), "html", null, true);
                                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 90
                            echo "\t
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 93
                        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 94
$context["article"], "images", array()), "image_fulltext", array()) && ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "image", array()), "enabled", array()) == "full"))) {
                        // line 95
                        echo "\t\t\t\t\t\t\t\t<div class=\"g-content-pro-image\"";
                        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "height", array())) {
                            echo " style=\"";
                            echo twig_escape_filter($this->env, (isset($context["articleimage"]) ? $context["articleimage"] : null), "html", null, true);
                            echo "; ";
                            echo twig_escape_filter($this->env, (isset($context["imageheight"]) ? $context["imageheight"] : null), "html", null, true);
                            echo ";\"";
                        }
                        echo ">
\t\t\t\t\t\t\t\t\t";
                        // line 96
                        if ((((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array()), "enable")) : ("enable")) == "enable") || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array()), "enable")) : ("enable")) == "disable"))) {
                            // line 97
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array()), "enable")) : ("enable")) == "enable")) {
                                // line 98
                                echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($this->getAttribute($context["article"], "images", array()), "image_fulltext", array()), false, 0), "html", null, true);
                                echo "\" data-uk-lightbox class=\"uk-overlay uk-overlay-hover\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"uk-overlay-panel uk-overlay-background uk-overlay-icon uk-overlay-fade\"></span>
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 101
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "height", array()) == 0)) {
                                // line 102
                                echo "\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($this->getAttribute($context["article"], "images", array()), "image_fulltext", array())), "html", null, true);
                                echo "\" ";
                                echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->imageSize($this->getAttribute($this->getAttribute($context["article"], "images", array()), "image_fulltext", array()));
                                echo " alt=\"";
                                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array()), "limit", array())) ? ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateText($this->getAttribute($context["article"], "title", array()), $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array()), "limit", array()))) : ($this->getAttribute($context["article"], "title", array()))), "html", null, true);
                                echo "\" />
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 104
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array()), "enable")) : ("enable")) == "enable")) {
                                // line 105
                                echo "\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 107
                            echo "\t\t\t\t\t\t\t\t\t";
                        }
                        // line 108
                        echo "
\t\t\t\t\t\t\t\t\t";
                        // line 109
                        if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array()), "enable")) : ("enable")) == "disablelink")) {
                            // line 110
                            echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "route", array()), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 111
                            if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "height", array()) == 0)) {
                                // line 112
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($this->getAttribute($context["article"], "images", array()), "image_intro", array())), "html", null, true);
                                echo "\" ";
                                echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->imageSize($this->getAttribute($this->getAttribute($context["article"], "images", array()), "image_intro", array()));
                                echo " alt=\"";
                                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array()), "limit", array())) ? ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateText($this->getAttribute($context["article"], "title", array()), $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array()), "limit", array()))) : ($this->getAttribute($context["article"], "title", array()))), "html", null, true);
                                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 114
                            echo "\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 116
                        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 118
                    echo "\t\t\t\t\t\t";
                }
                // line 119
                echo "\t\t\t\t\t\t";
                if ((((((($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array()), "enabled", array()) || $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "date", array()), "enabled", array())) || $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "author", array()), "enabled", array())) || $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "category", array()), "enabled", array())) || $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "hits", array()), "enabled", array())) || $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "text", array()), "type", array())) || $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "read_more", array()), "enabled", array()))) {
                    // line 120
                    echo "\t\t\t\t\t\t\t<div class=\"g-info-container\">
\t\t\t\t\t\t\t\t";
                    // line 121
                    if ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array()), "enabled", array())) {
                        // line 122
                        echo "\t\t\t\t\t\t\t\t\t<h4 class=\"g-content-pro-title\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 123
                        echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "route", array()), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 124
                        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array()), "limit", array())) ? ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateText($this->getAttribute($context["article"], "title", array()), $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array()), "limit", array()))) : ($this->getAttribute($context["article"], "title", array()))), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t";
                    }
                    // line 128
                    echo "\t\t                        ";
                    if (((($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "date", array()), "enabled", array()) || $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "author", array()), "enabled", array())) || $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "category", array()), "enabled", array())) || $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "hits", array()), "enabled", array()))) {
                        // line 129
                        echo "\t\t                            <div class=\"g-article-details\">
\t\t                                ";
                        // line 130
                        if ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "date", array()), "enabled", array())) {
                            // line 131
                            echo "\t\t                                    <span class=\"g-article-date\">
\t\t                                        ";
                            // line 132
                            if (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "date", array()), "enabled", array()) == "published")) {
                                // line 133
                                echo "\t\t                                            <i class=\"fa fa-clock-o\"></i>";
                                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "publish_up", array()), $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "date", array()), "format", array())), "html", null, true);
                                echo "
\t\t                                        ";
                            } elseif (($this->getAttribute($this->getAttribute(                            // line 134
(isset($context["display"]) ? $context["display"] : null), "date", array()), "enabled", array()) == "modified")) {
                                // line 135
                                echo "\t\t                                            <i class=\"fa fa-clock-o\"></i>";
                                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "modified", array()), $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "date", array()), "format", array())), "html", null, true);
                                echo "
\t\t                                        ";
                            } else {
                                // line 137
                                echo "\t\t                                            <i class=\"fa fa-clock-o\"></i>";
                                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "created", array()), $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "date", array()), "format", array())), "html", null, true);
                                echo "
\t\t                                        ";
                            }
                            // line 139
                            echo "\t\t                                    </span>
\t\t                                ";
                        }
                        // line 141
                        echo "
\t\t                                ";
                        // line 142
                        if ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "author", array()), "enabled", array())) {
                            // line 143
                            echo "\t\t                                    <span class=\"g-article-author\">
\t\t                                        <i class=\"fa fa-user\"></i>";
                            // line 144
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "author", array()), "name", array()), "html", null, true);
                            echo "
\t\t                                    </span>
\t\t                                ";
                        }
                        // line 147
                        echo "
\t\t                                ";
                        // line 148
                        if ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "category", array()), "enabled", array())) {
                            // line 149
                            echo "\t\t                                    ";
                            $context["category_link"] = ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "category", array()), "enabled", array()) == "link");
                            // line 150
                            echo "\t\t                                    <span class=\"g-article-category\">
\t\t                                        ";
                            // line 151
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["article"], "categories", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                                // line 152
                                echo "\t\t                                            ";
                                if ((isset($context["category_link"]) ? $context["category_link"] : null)) {
                                    // line 153
                                    echo "\t\t                                                <a href=\"";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "route", array()), "html", null, true);
                                    echo "\">
\t\t                                                    <i class=\"fa fa-folder-open\"></i>";
                                    // line 154
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "title", array()), "html", null, true);
                                    echo "
\t\t                                                </a>
\t\t                                            ";
                                } else {
                                    // line 157
                                    echo "\t\t                                                <i class=\"fa fa-folder-open\"></i>";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "title", array()), "html", null, true);
                                    echo "
\t\t                                            ";
                                }
                                // line 159
                                echo "\t\t                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 160
                            echo "\t\t                                    </span>
\t\t                                ";
                        }
                        // line 162
                        echo "
\t\t                                ";
                        // line 163
                        if ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "hits", array()), "enabled", array())) {
                            // line 164
                            echo "\t\t                                    <span class=\"g-article-hits\">
\t\t                                        <i class=\"fa fa-eye\"></i>";
                            // line 165
                            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "hits", array()), "html", null, true);
                            echo "
\t\t                                    </span>
\t\t                                ";
                        }
                        // line 168
                        echo "\t\t                            </div>
\t\t                        ";
                    }
                    // line 170
                    echo "\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "text", array()), "type", array())) {
                        // line 171
                        echo "\t\t\t\t\t\t\t\t\t";
                        $context["article_text"] = ((($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "text", array()), "type", array()) == "intro")) ? ($this->getAttribute($context["article"], "introtext", array())) : ($this->getAttribute($context["article"], "text", array())));
                        // line 172
                        echo "\t\t\t\t\t\t\t\t\t<p class=\"g-content-pro-desc\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 173
                        if (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "text", array()), "formatting", array()) == "text")) {
                            // line 174
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateText((isset($context["article_text"]) ? $context["article_text"] : null), $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "text", array()), "limit", array()));
                            echo "
\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 176
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateHtml((isset($context["article_text"]) ? $context["article_text"] : null), $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "text", array()), "limit", array()));
                            echo "
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 178
                        echo "\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t";
                    }
                    // line 180
                    echo "\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "read_more", array()), "enabled", array())) {
                        // line 181
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"g-article-read-more\">
\t\t\t\t\t\t\t\t\t\t<a class=\"button\" href=\"";
                        // line 182
                        echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "route", array()), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 183
                        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "read_more", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "read_more", array(), "any", false, true), "label", array()), "Read More...")) : ("Read More...")), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 187
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 189
                echo "\t\t\t\t\t</div>
\t\t\t\t";
                $context["style1"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 191
                echo "
\t\t\t\t";
                // line 192
                ob_start();
                // line 193
                echo "\t\t\t\t\t<div class=\"g-content-pro-item uk-overlay uk-overlay-hover\">
\t\t\t\t\t\t";
                // line 194
                if (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "image", array()), "enabled", array()) && ($this->getAttribute($this->getAttribute($context["article"], "images", array()), "image_intro", array()) || $this->getAttribute($this->getAttribute($context["article"], "images", array()), "image_fulltext", array())))) {
                    // line 195
                    echo "\t\t\t\t\t\t\t";
                    if (($this->getAttribute($this->getAttribute($context["article"], "images", array()), "image_intro", array()) && (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "image", array()), "enabled", array()) == "intro") || ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "image", array()), "enabled", array()) == "show")))) {
                        // line 196
                        echo "\t\t\t\t\t\t\t\t<div class=\"g-content-pro-image\"";
                        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "height", array())) {
                            echo " style=\"";
                            echo twig_escape_filter($this->env, (isset($context["articleimage"]) ? $context["articleimage"] : null), "html", null, true);
                            echo "; ";
                            echo twig_escape_filter($this->env, (isset($context["imageheight"]) ? $context["imageheight"] : null), "html", null, true);
                            echo ";\"";
                        }
                        echo ">
\t\t\t\t\t\t\t\t\t";
                        // line 197
                        if ((((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array()), "enable")) : ("enable")) == "enable") || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array()), "enable")) : ("enable")) == "disable"))) {
                            // line 198
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array()), "enable")) : ("enable")) == "enable")) {
                                // line 199
                                echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($this->getAttribute($context["article"], "images", array()), "image_intro", array()), false, 0), "html", null, true);
                                echo "\" data-uk-lightbox class=\"uk-overlay\">
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 201
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "height", array()) == 0)) {
                                // line 202
                                echo "\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($this->getAttribute($context["article"], "images", array()), "image_intro", array())), "html", null, true);
                                echo "\" ";
                                echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->imageSize($this->getAttribute($this->getAttribute($context["article"], "images", array()), "image_intro", array()));
                                echo " alt=\"";
                                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array()), "limit", array())) ? ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateText($this->getAttribute($context["article"], "title", array()), $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array()), "limit", array()))) : ($this->getAttribute($context["article"], "title", array()))), "html", null, true);
                                echo "\" />
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 203
                            echo "\t
\t\t\t\t\t\t\t\t\t\t";
                            // line 204
                            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array()), "enable")) : ("enable")) == "enable")) {
                                // line 205
                                echo "\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 207
                            echo "\t\t\t\t\t\t\t\t\t";
                        }
                        // line 208
                        echo "
\t\t\t\t\t\t\t\t\t";
                        // line 209
                        if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array()), "enable")) : ("enable")) == "disablelink")) {
                            // line 210
                            echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "route", array()), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 211
                            if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "height", array()) == 0)) {
                                // line 212
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($this->getAttribute($context["article"], "images", array()), "image_intro", array())), "html", null, true);
                                echo "\" ";
                                echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->imageSize($this->getAttribute($this->getAttribute($context["article"], "images", array()), "image_intro", array()));
                                echo " alt=\"";
                                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array()), "limit", array())) ? ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateText($this->getAttribute($context["article"], "title", array()), $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array()), "limit", array()))) : ($this->getAttribute($context["article"], "title", array()))), "html", null, true);
                                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 214
                            echo "\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 216
                        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 217
$context["article"], "images", array()), "image_fulltext", array()) && ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "image", array()), "enabled", array()) == "full"))) {
                        // line 218
                        echo "\t\t\t\t\t\t\t\t<div class=\"g-content-pro-image\"";
                        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "height", array())) {
                            echo " style=\"";
                            echo twig_escape_filter($this->env, (isset($context["articleimage"]) ? $context["articleimage"] : null), "html", null, true);
                            echo "; ";
                            echo twig_escape_filter($this->env, (isset($context["imageheight"]) ? $context["imageheight"] : null), "html", null, true);
                            echo ";\"";
                        }
                        echo ">
\t\t\t\t\t\t\t\t\t";
                        // line 219
                        if ((((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array()), "enable")) : ("enable")) == "enable") || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array()), "enable")) : ("enable")) == "disable"))) {
                            // line 220
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array()), "enable")) : ("enable")) == "enable")) {
                                // line 221
                                echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($this->getAttribute($context["article"], "images", array()), "image_fulltext", array()), false, 0), "html", null, true);
                                echo "\" data-uk-lightbox class=\"uk-overlay\">
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 223
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "height", array()) == 0)) {
                                // line 224
                                echo "\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($this->getAttribute($context["article"], "images", array()), "image_fulltext", array())), "html", null, true);
                                echo "\" ";
                                echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->imageSize($this->getAttribute($this->getAttribute($context["article"], "images", array()), "image_fulltext", array()));
                                echo " alt=\"";
                                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array()), "limit", array())) ? ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateText($this->getAttribute($context["article"], "title", array()), $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array()), "limit", array()))) : ($this->getAttribute($context["article"], "title", array()))), "html", null, true);
                                echo "\" />
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 225
                            echo "\t
\t\t\t\t\t\t\t\t\t\t";
                            // line 226
                            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array()), "enable")) : ("enable")) == "enable")) {
                                // line 227
                                echo "\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 229
                            echo "\t\t\t\t\t\t\t\t\t";
                        }
                        // line 230
                        echo "
\t\t\t\t\t\t\t\t\t";
                        // line 231
                        if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array()), "enable")) : ("enable")) == "disablelink")) {
                            // line 232
                            echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "route", array()), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 233
                            if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "height", array()) == 0)) {
                                // line 234
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($this->getAttribute($context["article"], "images", array()), "image_intro", array())), "html", null, true);
                                echo "\" ";
                                echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->imageSize($this->getAttribute($this->getAttribute($context["article"], "images", array()), "image_intro", array()));
                                echo " alt=\"";
                                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array()), "limit", array())) ? ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateText($this->getAttribute($context["article"], "title", array()), $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array()), "limit", array()))) : ($this->getAttribute($context["article"], "title", array()))), "html", null, true);
                                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 235
                            echo "\t
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 238
                        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 240
                    echo "\t\t\t\t\t\t";
                }
                // line 241
                echo "
\t\t\t\t\t\t";
                // line 242
                if ((((((($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array()), "enabled", array()) || $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "date", array()), "enabled", array())) || $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "author", array()), "enabled", array())) || $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "category", array()), "enabled", array())) || $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "hits", array()), "enabled", array())) || $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "text", array()), "type", array())) || $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "read_more", array()), "enabled", array()))) {
                    // line 243
                    echo "\t\t\t\t\t\t\t<div class=\"g-info-container-style2 uk-overlay-panel uk-overlay-background uk-overlay-bottom uk-overlay-slide-bottom\">
\t\t\t\t\t\t\t\t";
                    // line 244
                    if ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array()), "enabled", array())) {
                        // line 245
                        echo "\t\t\t\t\t\t\t\t\t<h4 class=\"g-content-pro-title\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 246
                        echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "route", array()), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 247
                        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array()), "limit", array())) ? ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateText($this->getAttribute($context["article"], "title", array()), $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array()), "limit", array()))) : ($this->getAttribute($context["article"], "title", array()))), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t";
                    }
                    // line 251
                    echo "\t\t                        ";
                    if (((($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "date", array()), "enabled", array()) || $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "author", array()), "enabled", array())) || $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "category", array()), "enabled", array())) || $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "hits", array()), "enabled", array()))) {
                        // line 252
                        echo "\t\t                            <div class=\"g-article-details\">
\t\t                                ";
                        // line 253
                        if ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "date", array()), "enabled", array())) {
                            // line 254
                            echo "\t\t                                    <span class=\"g-article-date\">
\t\t                                        ";
                            // line 255
                            if (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "date", array()), "enabled", array()) == "published")) {
                                // line 256
                                echo "\t\t                                            <i class=\"fa fa-clock-o\"></i>";
                                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "publish_up", array()), $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "date", array()), "format", array())), "html", null, true);
                                echo "
\t\t                                        ";
                            } elseif (($this->getAttribute($this->getAttribute(                            // line 257
(isset($context["display"]) ? $context["display"] : null), "date", array()), "enabled", array()) == "modified")) {
                                // line 258
                                echo "\t\t                                            <i class=\"fa fa-clock-o\"></i>";
                                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "modified", array()), $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "date", array()), "format", array())), "html", null, true);
                                echo "
\t\t                                        ";
                            } else {
                                // line 260
                                echo "\t\t                                            <i class=\"fa fa-clock-o\"></i>";
                                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "created", array()), $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "date", array()), "format", array())), "html", null, true);
                                echo "
\t\t                                        ";
                            }
                            // line 262
                            echo "\t\t                                    </span>
\t\t                                ";
                        }
                        // line 264
                        echo "
\t\t                                ";
                        // line 265
                        if ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "author", array()), "enabled", array())) {
                            // line 266
                            echo "\t\t                                    <span class=\"g-article-author\">
\t\t                                        <i class=\"fa fa-user\"></i>";
                            // line 267
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "author", array()), "name", array()), "html", null, true);
                            echo "
\t\t                                    </span>
\t\t                                ";
                        }
                        // line 270
                        echo "
\t\t                                ";
                        // line 271
                        if ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "category", array()), "enabled", array())) {
                            // line 272
                            echo "\t\t                                    ";
                            $context["category_link"] = ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "category", array()), "enabled", array()) == "link");
                            // line 273
                            echo "\t\t                                    <span class=\"g-article-category\">
\t\t                                        ";
                            // line 274
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["article"], "categories", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                                // line 275
                                echo "\t\t                                            ";
                                if ((isset($context["category_link"]) ? $context["category_link"] : null)) {
                                    // line 276
                                    echo "\t\t                                                <a href=\"";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "route", array()), "html", null, true);
                                    echo "\">
\t\t                                                    <i class=\"fa fa-folder-open\"></i>";
                                    // line 277
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "title", array()), "html", null, true);
                                    echo "
\t\t                                                </a>
\t\t                                            ";
                                } else {
                                    // line 280
                                    echo "\t\t                                                <i class=\"fa fa-folder-open\"></i>";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "title", array()), "html", null, true);
                                    echo "
\t\t                                            ";
                                }
                                // line 282
                                echo "\t\t                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 283
                            echo "\t\t                                    </span>
\t\t                                ";
                        }
                        // line 285
                        echo "
\t\t                                ";
                        // line 286
                        if ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "hits", array()), "enabled", array())) {
                            // line 287
                            echo "\t\t                                    <span class=\"g-article-hits\">
\t\t                                        <i class=\"fa fa-eye\"></i>";
                            // line 288
                            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "hits", array()), "html", null, true);
                            echo "
\t\t                                    </span>
\t\t                                ";
                        }
                        // line 291
                        echo "\t\t                            </div>
\t\t                        ";
                    }
                    // line 293
                    echo "\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "text", array()), "type", array())) {
                        // line 294
                        echo "\t\t\t\t\t\t\t\t\t";
                        $context["article_text"] = ((($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "text", array()), "type", array()) == "intro")) ? ($this->getAttribute($context["article"], "introtext", array())) : ($this->getAttribute($context["article"], "text", array())));
                        // line 295
                        echo "\t\t\t\t\t\t\t\t\t<p class=\"g-content-pro-desc\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 296
                        if (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "text", array()), "formatting", array()) == "text")) {
                            // line 297
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateText((isset($context["article_text"]) ? $context["article_text"] : null), $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "text", array()), "limit", array()));
                            echo "
\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 299
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateHtml((isset($context["article_text"]) ? $context["article_text"] : null), $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "text", array()), "limit", array()));
                            echo "
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 301
                        echo "\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t";
                    }
                    // line 303
                    echo "\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "read_more", array()), "enabled", array())) {
                        // line 304
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"g-article-read-more\">
\t\t\t\t\t\t\t\t\t\t<a class=\"button\" href=\"";
                        // line 305
                        echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "route", array()), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 306
                        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "read_more", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "read_more", array(), "any", false, true), "label", array()), "Read More...")) : ("Read More...")), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 310
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 312
                echo "\t\t\t\t\t</div>
\t\t\t\t";
                $context["style2"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 314
                echo "
\t\t\t\t";
                // line 315
                ob_start();
                // line 316
                echo "\t\t\t\t\t<div class=\"g-content-pro-item uk-overlay\">
\t\t\t\t\t\t";
                // line 317
                if (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "image", array()), "enabled", array()) && ($this->getAttribute($this->getAttribute($context["article"], "images", array()), "image_intro", array()) || $this->getAttribute($this->getAttribute($context["article"], "images", array()), "image_fulltext", array())))) {
                    // line 318
                    echo "\t\t\t\t\t\t\t";
                    if (($this->getAttribute($this->getAttribute($context["article"], "images", array()), "image_intro", array()) && (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "image", array()), "enabled", array()) == "intro") || ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "image", array()), "enabled", array()) == "show")))) {
                        // line 319
                        echo "\t\t\t\t\t\t\t\t<div class=\"g-content-pro-image\"";
                        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "height", array())) {
                            echo " style=\"";
                            echo twig_escape_filter($this->env, (isset($context["articleimage"]) ? $context["articleimage"] : null), "html", null, true);
                            echo "; ";
                            echo twig_escape_filter($this->env, (isset($context["imageheight"]) ? $context["imageheight"] : null), "html", null, true);
                            echo ";\"";
                        }
                        echo ">
\t\t\t\t\t\t\t\t\t";
                        // line 320
                        if ((((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array()), "enable")) : ("enable")) == "enable") || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array()), "enable")) : ("enable")) == "disable"))) {
                            // line 321
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array()), "enable")) : ("enable")) == "enable")) {
                                // line 322
                                echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($this->getAttribute($context["article"], "images", array()), "image_intro", array()), false, 0), "html", null, true);
                                echo "\" data-uk-lightbox class=\"uk-overlay\">
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 324
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "height", array()) == 0)) {
                                // line 325
                                echo "\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($this->getAttribute($context["article"], "images", array()), "image_intro", array())), "html", null, true);
                                echo "\" ";
                                echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->imageSize($this->getAttribute($this->getAttribute($context["article"], "images", array()), "image_intro", array()));
                                echo " alt=\"";
                                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array()), "limit", array())) ? ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateText($this->getAttribute($context["article"], "title", array()), $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array()), "limit", array()))) : ($this->getAttribute($context["article"], "title", array()))), "html", null, true);
                                echo "\" />
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 327
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array()), "enable")) : ("enable")) == "enable")) {
                                // line 328
                                echo "\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 330
                            echo "\t\t\t\t\t\t\t\t\t";
                        }
                        // line 331
                        echo "
\t\t\t\t\t\t\t\t\t";
                        // line 332
                        if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array()), "enable")) : ("enable")) == "disablelink")) {
                            // line 333
                            echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "route", array()), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 334
                            if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "height", array()) == 0)) {
                                // line 335
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($this->getAttribute($context["article"], "images", array()), "image_intro", array())), "html", null, true);
                                echo "\" ";
                                echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->imageSize($this->getAttribute($this->getAttribute($context["article"], "images", array()), "image_intro", array()));
                                echo " alt=\"";
                                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array()), "limit", array())) ? ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateText($this->getAttribute($context["article"], "title", array()), $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array()), "limit", array()))) : ($this->getAttribute($context["article"], "title", array()))), "html", null, true);
                                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 337
                            echo "\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 339
                        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 340
$context["article"], "images", array()), "image_fulltext", array()) && ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "image", array()), "enabled", array()) == "full"))) {
                        // line 341
                        echo "\t\t\t\t\t\t\t\t<div class=\"g-content-pro-image\"";
                        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "height", array())) {
                            echo " style=\"";
                            echo twig_escape_filter($this->env, (isset($context["articleimage"]) ? $context["articleimage"] : null), "html", null, true);
                            echo "; ";
                            echo twig_escape_filter($this->env, (isset($context["imageheight"]) ? $context["imageheight"] : null), "html", null, true);
                            echo ";\"";
                        }
                        echo ">
\t\t\t\t\t\t\t\t\t";
                        // line 342
                        if ((((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array()), "enable")) : ("enable")) == "enable") || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array()), "enable")) : ("enable")) == "disable"))) {
                            // line 343
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array()), "enable")) : ("enable")) == "enable")) {
                                // line 344
                                echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($this->getAttribute($context["article"], "images", array()), "image_fulltext", array()), false, 0), "html", null, true);
                                echo "\" data-uk-lightbox class=\"uk-overlay\">
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 346
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "height", array()) == 0)) {
                                // line 347
                                echo "\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($this->getAttribute($context["article"], "images", array()), "image_fulltext", array())), "html", null, true);
                                echo "\" ";
                                echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->imageSize($this->getAttribute($this->getAttribute($context["article"], "images", array()), "image_fulltext", array()));
                                echo " alt=\"";
                                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array()), "limit", array())) ? ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateText($this->getAttribute($context["article"], "title", array()), $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array()), "limit", array()))) : ($this->getAttribute($context["article"], "title", array()))), "html", null, true);
                                echo "\" />
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 349
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array()), "enable")) : ("enable")) == "enable")) {
                                // line 350
                                echo "\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 352
                            echo "\t\t\t\t\t\t\t\t\t";
                        }
                        // line 353
                        echo "
\t\t\t\t\t\t\t\t\t";
                        // line 354
                        if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array()), "enable")) : ("enable")) == "disablelink")) {
                            // line 355
                            echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "route", array()), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 356
                            if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "height", array()) == 0)) {
                                // line 357
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($this->getAttribute($context["article"], "images", array()), "image_intro", array())), "html", null, true);
                                echo "\" ";
                                echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->imageSize($this->getAttribute($this->getAttribute($context["article"], "images", array()), "image_intro", array()));
                                echo " alt=\"";
                                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array()), "limit", array())) ? ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateText($this->getAttribute($context["article"], "title", array()), $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array()), "limit", array()))) : ($this->getAttribute($context["article"], "title", array()))), "html", null, true);
                                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 359
                            echo "\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 361
                        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 363
                    echo "\t\t\t\t\t\t";
                }
                // line 364
                echo "
\t\t\t\t\t\t";
                // line 365
                if ((((((($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array()), "enabled", array()) || $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "date", array()), "enabled", array())) || $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "author", array()), "enabled", array())) || $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "category", array()), "enabled", array())) || $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "hits", array()), "enabled", array())) || $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "text", array()), "type", array())) || $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "read_more", array()), "enabled", array()))) {
                    // line 366
                    echo "\t\t\t\t\t\t\t<div class=\"g-info-container-style2 uk-overlay-panel uk-overlay-background uk-overlay-bottom\">
\t\t\t\t\t\t\t\t";
                    // line 367
                    if ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array()), "enabled", array())) {
                        // line 368
                        echo "\t\t\t\t\t\t\t\t\t<h4 class=\"g-content-pro-title\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 369
                        echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "route", array()), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 370
                        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array()), "limit", array())) ? ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateText($this->getAttribute($context["article"], "title", array()), $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array()), "limit", array()))) : ($this->getAttribute($context["article"], "title", array()))), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t";
                    }
                    // line 374
                    echo "\t\t                        ";
                    if (((($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "date", array()), "enabled", array()) || $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "author", array()), "enabled", array())) || $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "category", array()), "enabled", array())) || $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "hits", array()), "enabled", array()))) {
                        // line 375
                        echo "\t\t                            <div class=\"g-article-details\">
\t\t                                ";
                        // line 376
                        if ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "date", array()), "enabled", array())) {
                            // line 377
                            echo "\t\t                                    <span class=\"g-article-date\">
\t\t                                        ";
                            // line 378
                            if (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "date", array()), "enabled", array()) == "published")) {
                                // line 379
                                echo "\t\t                                            <i class=\"fa fa-clock-o\"></i>";
                                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "publish_up", array()), $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "date", array()), "format", array())), "html", null, true);
                                echo "
\t\t                                        ";
                            } elseif (($this->getAttribute($this->getAttribute(                            // line 380
(isset($context["display"]) ? $context["display"] : null), "date", array()), "enabled", array()) == "modified")) {
                                // line 381
                                echo "\t\t                                            <i class=\"fa fa-clock-o\"></i>";
                                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "modified", array()), $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "date", array()), "format", array())), "html", null, true);
                                echo "
\t\t                                        ";
                            } else {
                                // line 383
                                echo "\t\t                                            <i class=\"fa fa-clock-o\"></i>";
                                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "created", array()), $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "date", array()), "format", array())), "html", null, true);
                                echo "
\t\t                                        ";
                            }
                            // line 385
                            echo "\t\t                                    </span>
\t\t                                ";
                        }
                        // line 387
                        echo "
\t\t                                ";
                        // line 388
                        if ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "author", array()), "enabled", array())) {
                            // line 389
                            echo "\t\t                                    <span class=\"g-article-author\">
\t\t                                        <i class=\"fa fa-user\"></i>";
                            // line 390
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "author", array()), "name", array()), "html", null, true);
                            echo "
\t\t                                    </span>
\t\t                                ";
                        }
                        // line 393
                        echo "
\t\t                                ";
                        // line 394
                        if ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "category", array()), "enabled", array())) {
                            // line 395
                            echo "\t\t                                    ";
                            $context["category_link"] = ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "category", array()), "enabled", array()) == "link");
                            // line 396
                            echo "\t\t                                    <span class=\"g-article-category\">
\t\t                                        ";
                            // line 397
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["article"], "categories", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                                // line 398
                                echo "\t\t                                            ";
                                if ((isset($context["category_link"]) ? $context["category_link"] : null)) {
                                    // line 399
                                    echo "\t\t                                                <a href=\"";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "route", array()), "html", null, true);
                                    echo "\">
\t\t                                                    <i class=\"fa fa-folder-open\"></i>";
                                    // line 400
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "title", array()), "html", null, true);
                                    echo "
\t\t                                                </a>
\t\t                                            ";
                                } else {
                                    // line 403
                                    echo "\t\t                                                <i class=\"fa fa-folder-open\"></i>";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "title", array()), "html", null, true);
                                    echo "
\t\t                                            ";
                                }
                                // line 405
                                echo "\t\t                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 406
                            echo "\t\t                                    </span>
\t\t                                ";
                        }
                        // line 408
                        echo "
\t\t                                ";
                        // line 409
                        if ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "hits", array()), "enabled", array())) {
                            // line 410
                            echo "\t\t                                    <span class=\"g-article-hits\">
\t\t                                        <i class=\"fa fa-eye\"></i>";
                            // line 411
                            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "hits", array()), "html", null, true);
                            echo "
\t\t                                    </span>
\t\t                                ";
                        }
                        // line 414
                        echo "\t\t                            </div>
\t\t                        ";
                    }
                    // line 416
                    echo "\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "text", array()), "type", array())) {
                        // line 417
                        echo "\t\t\t\t\t\t\t\t\t";
                        $context["article_text"] = ((($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "text", array()), "type", array()) == "intro")) ? ($this->getAttribute($context["article"], "introtext", array())) : ($this->getAttribute($context["article"], "text", array())));
                        // line 418
                        echo "\t\t\t\t\t\t\t\t\t<p class=\"g-content-pro-desc\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 419
                        if (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "text", array()), "formatting", array()) == "text")) {
                            // line 420
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateText((isset($context["article_text"]) ? $context["article_text"] : null), $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "text", array()), "limit", array()));
                            echo "
\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 422
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateHtml((isset($context["article_text"]) ? $context["article_text"] : null), $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "text", array()), "limit", array()));
                            echo "
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 424
                        echo "\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t";
                    }
                    // line 426
                    echo "\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "read_more", array()), "enabled", array())) {
                        // line 427
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"g-article-read-more\">
\t\t\t\t\t\t\t\t\t\t<a class=\"button\" href=\"";
                        // line 428
                        echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "route", array()), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 429
                        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "read_more", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "read_more", array(), "any", false, true), "label", array()), "Read More...")) : ("Read More...")), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 433
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 435
                echo "\t\t\t\t\t</div>
\t\t\t\t";
                $context["style3"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 437
                echo "
\t\t\t\t";
                // line 438
                if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array()), "static")) : ("static")) == "static")) {
                    // line 439
                    echo "\t\t\t\t\t<div class=\"g-block\">
\t\t\t\t\t\t<div ";
                    // line 440
                    if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "gutter", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "gutter", array()), "enabled")) : ("enabled")) == "enabled")) {
                        echo "class=\"g-content\"";
                    }
                    echo ">
\t\t\t\t\t\t\t";
                    // line 441
                    if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "style1")) : ("style1")) == "style1")) {
                        echo twig_escape_filter($this->env, (isset($context["style1"]) ? $context["style1"] : null), "html", null, true);
                    }
                    // line 442
                    echo "\t\t\t\t\t\t\t";
                    if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "style1")) : ("style1")) == "style2")) {
                        echo twig_escape_filter($this->env, (isset($context["style2"]) ? $context["style2"] : null), "html", null, true);
                    }
                    // line 443
                    echo "\t\t\t\t\t\t\t";
                    if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "style1")) : ("style1")) == "style3")) {
                        echo twig_escape_filter($this->env, (isset($context["style3"]) ? $context["style3"] : null), "html", null, true);
                    }
                    // line 444
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 447
                echo "
\t\t\t\t";
                // line 448
                if ((((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array()), "static")) : ("static")) == "slider") || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array()), "static")) : ("static")) == "slideset"))) {
                    // line 449
                    echo "\t\t\t\t\t<li>
\t\t\t\t\t\t";
                    // line 450
                    if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "style1")) : ("style1")) == "style1")) {
                        echo twig_escape_filter($this->env, (isset($context["style1"]) ? $context["style1"] : null), "html", null, true);
                    }
                    // line 451
                    echo "\t\t\t\t\t\t";
                    if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "style1")) : ("style1")) == "style2")) {
                        echo twig_escape_filter($this->env, (isset($context["style2"]) ? $context["style2"] : null), "html", null, true);
                    }
                    // line 452
                    echo "\t\t\t\t\t\t";
                    if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "style", array()), "style1")) : ("style1")) == "style3")) {
                        echo twig_escape_filter($this->env, (isset($context["style3"]) ? $context["style3"] : null), "html", null, true);
                    }
                    // line 453
                    echo "\t\t\t\t\t</li>
\t\t\t\t";
                }
                // line 455
                echo "
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 457
            echo "\t\t";
            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array()), "static")) : ("static")) == "static")) {
                echo "</div>";
            }
            // line 458
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        $context["contentproitems"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 461
    public function block_particle($context, array $blocks = array())
    {
        // line 462
        echo "\t
\t";
        // line 463
        if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array()), "static")) : ("static")) == "static")) {
            // line 464
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
            // line 465
            if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mainheading", array()) || $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array()))) {
                // line 466
                echo "\t\t\t\t";
                echo twig_escape_filter($this->env, (isset($context["particleheading"]) ? $context["particleheading"] : null), "html", null, true);
                echo "
\t\t\t";
            }
            // line 468
            echo "\t\t\t";
            echo twig_escape_filter($this->env, (isset($context["contentproitems"]) ? $context["contentproitems"] : null), "html", null, true);
            echo "
\t\t</div>
\t";
        }
        // line 471
        echo "\t";
        if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array()), "static")) : ("static")) == "slider")) {
            // line 472
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
            // line 473
            if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mainheading", array()) || $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array()))) {
                // line 474
                echo "\t\t\t\t";
                echo twig_escape_filter($this->env, (isset($context["particleheading"]) ? $context["particleheading"] : null), "html", null, true);
                echo "
\t\t\t";
            }
            // line 475
            echo "\t\t    \t
\t\t\t<div class=\"uk-slidenav-position\" data-uk-slider";
            // line 476
            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "autoplay", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "autoplay", array()), "disable")) : ("disable")) == "enable")) {
                echo "=\"{autoplay:true, autoplayInterval: ";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "autoplayInterval", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "autoplayInterval", array()), 7000)) : (7000)));
                echo "}\"";
            }
            echo ">
\t\t\t\t<div class=\"uk-slider-container\">
\t\t\t\t\t<ul class=\"uk-slider";
            // line 478
            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "gutter", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "gutter", array()), "enabled")) : ("enabled")) == "enabled")) {
                echo " uk-grid";
            }
            echo " uk-grid-width-medium-1-";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "columns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "columns", array()), "3")) : ("3")));
            echo "\">
\t\t\t\t\t\t";
            // line 479
            echo twig_escape_filter($this->env, (isset($context["contentproitems"]) ? $context["contentproitems"] : null), "html", null, true);
            echo "
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t";
            // line 482
            if ((((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array()), "arrows")) : ("arrows")) == "arrows") || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array()), "arrows")) : ("arrows")) == "both"))) {
                // line 483
                echo "\t\t\t\t\t<a href=\"\" class=\"uk-slidenav uk-slidenav-previous\" data-uk-slider-item=\"previous\"></a>
\t\t\t\t\t<a href=\"\" class=\"uk-slidenav uk-slidenav-next\" data-uk-slider-item=\"next\"></a>
\t\t\t\t";
            }
            // line 486
            echo "\t\t\t</div>\t\t    \t
\t\t</div>
\t";
        }
        // line 489
        echo "\t";
        if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "behaviour", array()), "static")) : ("static")) == "slideset")) {
            // line 490
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
            // line 491
            if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mainheading", array()) || $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array()))) {
                // line 492
                echo "\t\t\t\t";
                echo twig_escape_filter($this->env, (isset($context["particleheading"]) ? $context["particleheading"] : null), "html", null, true);
                echo "
\t\t\t";
            }
            // line 493
            echo "\t    \t
\t\t\t<div class=\"uk-slidenav-position\" data-uk-slideset=\"{small: 1, medium: ";
            // line 494
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
            // line 497
            echo twig_escape_filter($this->env, (isset($context["contentproitems"]) ? $context["contentproitems"] : null), "html", null, true);
            echo "
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t";
            // line 500
            if ((((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array()), "arrows")) : ("arrows")) == "arrows") || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array()), "arrows")) : ("arrows")) == "both"))) {
                // line 501
                echo "\t\t\t\t\t<a href=\"\" class=\"uk-slidenav uk-slidenav-previous\" data-uk-slideset-item=\"previous\"></a>
\t\t\t\t\t<a href=\"\" class=\"uk-slidenav uk-slidenav-next\" data-uk-slideset-item=\"next\"></a>
\t\t\t\t";
            }
            // line 504
            echo "\t\t\t\t";
            if ((((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array()), "arrows")) : ("arrows")) == "dots") || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array()), "arrows")) : ("arrows")) == "both"))) {
                // line 505
                echo "\t\t\t\t\t<ul class=\"uk-slideset-nav uk-dotnav uk-flex-center\">
\t    \t\t\t";
                // line 506
                $context["counter"] = 0;
                // line 507
                echo "\t    \t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                    // line 508
                    echo "\t    \t\t\t\t<li data-uk-slideset-item=\"";
                    echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : null), "html", null, true);
                    echo "\"><a href=\"\"></a></li>
\t    \t\t\t\t";
                    // line 509
                    $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : null) + 1);
                    // line 510
                    echo "\t    \t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 511
                echo "\t\t\t\t\t</ul>
\t\t\t\t";
            }
            // line 513
            echo "\t\t\t</div>\t\t    \t
\t\t</div>
\t";
        }
    }

    public function getTemplateName()
    {
        return "@particles/content-pro-joomla.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1541 => 513,  1537 => 511,  1531 => 510,  1529 => 509,  1524 => 508,  1519 => 507,  1517 => 506,  1514 => 505,  1511 => 504,  1506 => 501,  1504 => 500,  1498 => 497,  1480 => 494,  1477 => 493,  1471 => 492,  1469 => 491,  1448 => 490,  1445 => 489,  1440 => 486,  1435 => 483,  1433 => 482,  1427 => 479,  1419 => 478,  1410 => 476,  1407 => 475,  1401 => 474,  1399 => 473,  1378 => 472,  1375 => 471,  1368 => 468,  1362 => 466,  1360 => 465,  1339 => 464,  1337 => 463,  1334 => 462,  1331 => 461,  1327 => 1,  1320 => 458,  1315 => 457,  1308 => 455,  1304 => 453,  1299 => 452,  1294 => 451,  1290 => 450,  1287 => 449,  1285 => 448,  1282 => 447,  1277 => 444,  1272 => 443,  1267 => 442,  1263 => 441,  1257 => 440,  1254 => 439,  1252 => 438,  1249 => 437,  1245 => 435,  1241 => 433,  1234 => 429,  1230 => 428,  1227 => 427,  1224 => 426,  1220 => 424,  1214 => 422,  1208 => 420,  1206 => 419,  1203 => 418,  1200 => 417,  1197 => 416,  1193 => 414,  1187 => 411,  1184 => 410,  1182 => 409,  1179 => 408,  1175 => 406,  1169 => 405,  1163 => 403,  1157 => 400,  1152 => 399,  1149 => 398,  1145 => 397,  1142 => 396,  1139 => 395,  1137 => 394,  1134 => 393,  1128 => 390,  1125 => 389,  1123 => 388,  1120 => 387,  1116 => 385,  1110 => 383,  1104 => 381,  1102 => 380,  1097 => 379,  1095 => 378,  1092 => 377,  1090 => 376,  1087 => 375,  1084 => 374,  1077 => 370,  1073 => 369,  1070 => 368,  1068 => 367,  1065 => 366,  1063 => 365,  1060 => 364,  1057 => 363,  1053 => 361,  1049 => 359,  1039 => 357,  1037 => 356,  1032 => 355,  1030 => 354,  1027 => 353,  1024 => 352,  1020 => 350,  1017 => 349,  1007 => 347,  1004 => 346,  998 => 344,  995 => 343,  993 => 342,  982 => 341,  980 => 340,  977 => 339,  973 => 337,  963 => 335,  961 => 334,  956 => 333,  954 => 332,  951 => 331,  948 => 330,  944 => 328,  941 => 327,  931 => 325,  928 => 324,  922 => 322,  919 => 321,  917 => 320,  906 => 319,  903 => 318,  901 => 317,  898 => 316,  896 => 315,  893 => 314,  889 => 312,  885 => 310,  878 => 306,  874 => 305,  871 => 304,  868 => 303,  864 => 301,  858 => 299,  852 => 297,  850 => 296,  847 => 295,  844 => 294,  841 => 293,  837 => 291,  831 => 288,  828 => 287,  826 => 286,  823 => 285,  819 => 283,  813 => 282,  807 => 280,  801 => 277,  796 => 276,  793 => 275,  789 => 274,  786 => 273,  783 => 272,  781 => 271,  778 => 270,  772 => 267,  769 => 266,  767 => 265,  764 => 264,  760 => 262,  754 => 260,  748 => 258,  746 => 257,  741 => 256,  739 => 255,  736 => 254,  734 => 253,  731 => 252,  728 => 251,  721 => 247,  717 => 246,  714 => 245,  712 => 244,  709 => 243,  707 => 242,  704 => 241,  701 => 240,  697 => 238,  692 => 235,  682 => 234,  680 => 233,  675 => 232,  673 => 231,  670 => 230,  667 => 229,  663 => 227,  661 => 226,  658 => 225,  648 => 224,  645 => 223,  639 => 221,  636 => 220,  634 => 219,  623 => 218,  621 => 217,  618 => 216,  614 => 214,  604 => 212,  602 => 211,  597 => 210,  595 => 209,  592 => 208,  589 => 207,  585 => 205,  583 => 204,  580 => 203,  570 => 202,  567 => 201,  561 => 199,  558 => 198,  556 => 197,  545 => 196,  542 => 195,  540 => 194,  537 => 193,  535 => 192,  532 => 191,  528 => 189,  524 => 187,  517 => 183,  513 => 182,  510 => 181,  507 => 180,  503 => 178,  497 => 176,  491 => 174,  489 => 173,  486 => 172,  483 => 171,  480 => 170,  476 => 168,  470 => 165,  467 => 164,  465 => 163,  462 => 162,  458 => 160,  452 => 159,  446 => 157,  440 => 154,  435 => 153,  432 => 152,  428 => 151,  425 => 150,  422 => 149,  420 => 148,  417 => 147,  411 => 144,  408 => 143,  406 => 142,  403 => 141,  399 => 139,  393 => 137,  387 => 135,  385 => 134,  380 => 133,  378 => 132,  375 => 131,  373 => 130,  370 => 129,  367 => 128,  360 => 124,  356 => 123,  353 => 122,  351 => 121,  348 => 120,  345 => 119,  342 => 118,  338 => 116,  334 => 114,  324 => 112,  322 => 111,  317 => 110,  315 => 109,  312 => 108,  309 => 107,  305 => 105,  302 => 104,  292 => 102,  289 => 101,  282 => 98,  279 => 97,  277 => 96,  266 => 95,  264 => 94,  261 => 93,  256 => 90,  246 => 89,  244 => 88,  239 => 87,  237 => 86,  234 => 85,  231 => 84,  227 => 82,  224 => 81,  214 => 79,  211 => 78,  204 => 75,  201 => 74,  199 => 73,  188 => 72,  185 => 71,  183 => 70,  180 => 69,  178 => 68,  175 => 67,  172 => 66,  166 => 64,  164 => 63,  161 => 62,  158 => 61,  152 => 59,  150 => 58,  145 => 57,  142 => 56,  139 => 55,  137 => 54,  134 => 53,  129 => 52,  124 => 51,  119 => 50,  117 => 49,  113 => 46,  107 => 45,  104 => 44,  97 => 43,  92 => 42,  90 => 41,  87 => 40,  85 => 39,  83 => 37,  80 => 34,  78 => 33,  76 => 32,  74 => 31,  72 => 30,  69 => 27,  66 => 25,  64 => 24,  62 => 23,  60 => 20,  58 => 19,  56 => 16,  54 => 15,  52 => 14,  50 => 13,  48 => 12,  37 => 7,  33 => 6,  29 => 5,  27 => 4,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@particles/content-pro-joomla.html.twig", "/home3/menmwen/public_html/home/templates/it_mighty/particles/content-pro-joomla.html.twig");
    }
}
