<?php

/* listing.twig */
class __TwigTemplate_a6f5a337605340823ec26760e8b8e20c3d3bfdf1f9b283bf797d8942fa0af8f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->loadTemplate("_header.twig", "listing.twig", 1)->display($context);
        // line 2
        echo "
<!-- Main Page Content and Sidebar -->

    <!-- Main Blog Content -->
    <div class=\"large-8 columns\" role=\"content\">

        ";
        // line 13
        echo "
        ";
        // line 15
        echo "        ";
        if (array_key_exists("taxonomytype", $context)) {
            // line 16
            echo "            <h1>
                ";
            // line 17
            echo $this->env->getExtension('Bolt')->trans("Overview for");
            echo "
                ";
            // line 18
            if ($this->getAttribute($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "options", array(), "any", false, true), (isset($context["slug"]) ? $context["slug"] : null), array(), "array", true, true)) {
                // line 19
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "options", array()), (isset($context["slug"]) ? $context["slug"] : null), array(), "array"), "html", null, true);
                echo "
                ";
            } else {
                // line 21
                echo "                    ";
                echo twig_escape_filter($this->env, (isset($context["slug"]) ? $context["slug"] : null), "html", null, true);
                echo "
                ";
            }
            // line 23
            echo "            </h1>
            ";
            // line 25
            echo "            ";
            $context["records"] = $this->env->getExtension('Bolt')->order((isset($context["records"]) ? $context["records"] : null), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/listing_sort"), "method"));
            // line 26
            echo "        ";
        }
        // line 27
        echo "
        ";
        // line 32
        echo "        ";
        if (array_key_exists("search", $context)) {
            // line 33
            echo "            <h1>
                ";
            // line 34
            echo $this->env->getExtension('Bolt')->trans("Search results for <b> %search% </b>.", array("%search%" => twig_escape_filter($this->env, (isset($context["search"]) ? $context["search"] : null))));
            echo "
            </h1>
        ";
        }
        // line 37
        echo "

        ";
        // line 39
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["records"]) ? $context["records"] : null));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 40
            echo "            <article>

                <h2><a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "link", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "title", array()), "html", null, true);
            echo "</a></h2>

                ";
            // line 44
            if (($this->getAttribute($context["record"], "image", array()) != "")) {
                // line 45
                echo "                    <div class=\"large-4 imageholder\">
                        <a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($this->getAttribute($context["record"], "image", array())), "html", null, true);
                echo "\">
                            <img src=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->thumbnail($this->getAttribute($context["record"], "image", array()), 400, 260), "html", null, true);
                echo "\">
                        </a>
                    </div>
                ";
            }
            // line 51
            echo "
                ";
            // line 53
            echo "                ";
            if ($this->getAttribute($context["record"], "introduction", array())) {
                // line 54
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "introduction", array()), "html", null, true);
                echo "
                ";
            } elseif ($this->getAttribute(            // line 55
$context["record"], "teaser", array())) {
                // line 56
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "teaser", array()), "html", null, true);
                echo "
                ";
            } else {
                // line 58
                echo "                    <p>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "excerpt", array(0 => 300), "method"), "html", null, true);
                echo "</p>
                ";
            }
            // line 60
            echo "
                ";
            // line 61
            $this->loadTemplate("_recordfooter.twig", "listing.twig", 61)->display(array_merge($context, array("record" => $context["record"])));
            // line 62
            echo "
            </article>

            <hr>

        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 68
            echo "            <article>


                ";
            // line 71
            if (array_key_exists("search", $context)) {
                // line 72
                echo "
                    <p>
                        ";
                // line 74
                echo $this->env->getExtension('Bolt')->trans("No results found for '%search%'. Please try another search.", array("%search%" => twig_escape_filter($this->env, (isset($context["search"]) ? $context["search"] : null))));
                echo "
                    </p>

                ";
            } else {
                // line 78
                echo "
                    <h2>";
                // line 79
                echo $this->env->getExtension('Bolt')->trans("No content found.");
                echo "</h2>

                    <p>
                        ";
                // line 82
                echo $this->env->getExtension('Bolt')->trans("Unfortunately, no content could be found. Try another page, or go to the <a href=\"%paths_root%\">homepage</a>.", array("%paths_root%" => $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root", array())));
                echo "
                    </p>

                ";
            }
            // line 86
            echo "
                ";
            // line 91
            echo "
            </article>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "
        ";
        // line 96
        echo "        ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->pager($this->env), "html", null, true);
        echo "


    </div>

    <!-- End Main Content -->

    ";
        // line 103
        $this->loadTemplate("_aside.twig", "listing.twig", 103)->display($context);
        // line 104
        echo "
<!-- End Main Content and Sidebar -->



";
        // line 109
        $this->loadTemplate("_footer.twig", "listing.twig", 109)->display($context);
    }

    public function getTemplateName()
    {
        return "listing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 109,  238 => 104,  236 => 103,  225 => 96,  222 => 94,  214 => 91,  211 => 86,  204 => 82,  198 => 79,  195 => 78,  188 => 74,  184 => 72,  182 => 71,  177 => 68,  159 => 62,  157 => 61,  154 => 60,  148 => 58,  142 => 56,  140 => 55,  135 => 54,  132 => 53,  129 => 51,  122 => 47,  118 => 46,  115 => 45,  113 => 44,  106 => 42,  102 => 40,  84 => 39,  80 => 37,  74 => 34,  71 => 33,  68 => 32,  65 => 27,  62 => 26,  59 => 25,  56 => 23,  50 => 21,  44 => 19,  42 => 18,  38 => 17,  35 => 16,  32 => 15,  29 => 13,  21 => 2,  19 => 1,);
    }
}
