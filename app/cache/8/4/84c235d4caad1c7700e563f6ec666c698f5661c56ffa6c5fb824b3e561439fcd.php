<?php

/* overview/_panel-actions_overview.twig */
class __TwigTemplate_84c235d4caad1c7700e563f6ec666c698f5661c56ffa6c5fb824b3e561439fcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("_base/_panel.twig", "overview/_panel-actions_overview.twig", 4);
        $this->blocks = array(
            'panel_class' => array($this, 'block_panel_class'),
            'panel_icon' => array($this, 'block_panel_icon'),
            'panel_head' => array($this, 'block_panel_head'),
            'panel_body' => array($this, 'block_panel_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_base/_panel.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_panel_class($context, array $blocks = array())
    {
        echo "panel-news";
    }

    // line 8
    public function block_panel_icon($context, array $blocks = array())
    {
        echo "fa-cog";
    }

    // line 10
    public function block_panel_head($context, array $blocks = array())
    {
        echo $this->env->getExtension('Bolt')->trans("contenttypes.generic.actions-all", array("%contenttypes%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())));
    }

    // line 12
    public function block_panel_body($context, array $blocks = array())
    {
        // line 13
        echo "    <a class=\"btn btn-primary\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array()))), "html", null, true);
        echo "\">
        <i class=\"fa fa-plus\"></i> ";
        // line 14
        echo $this->env->getExtension('Bolt')->trans("contenttypes.generic.new", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())));
        echo "
    </a>

    <p style=\"margin-top: 15px;\"><strong>";
        // line 17
        echo $this->env->getExtension('Bolt')->trans("Filter");
        echo "</strong></p>

    <form class=\"form-inline\">

        ";
        // line 21
        $context["taxonomyfilter"] = false;
        // line 22
        echo "
        <div class=\"form-group\">
        ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "taxonomy", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "taxonomy", array()), array())) : (array())));
        foreach ($context['_seq'] as $context["_key"] => $context["taxonomy"]) {
            // line 25
            echo "            ";
            if (twig_test_iterable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => (("taxonomy/" . $context["taxonomy"]) . "/options")), "method"))) {
                // line 26
                echo "                ";
                if ($this->env->getExtension('Bolt')->request(("taxonomy-" . $context["taxonomy"]))) {
                    // line 27
                    echo "                    ";
                    $context["taxonomyfilter"] = true;
                    // line 28
                    echo "                ";
                }
                // line 29
                echo "                <select name='taxonomy-";
                echo twig_escape_filter($this->env, $context["taxonomy"], "html", null, true);
                echo "' class='form-control'>
                    <option value=''>
                        (";
                // line 31
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array(), "any", false, true), "get", array(0 => (("taxonomy/" . $context["taxonomy"]) . "/name")), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array(), "any", false, true), "get", array(0 => (("taxonomy/" . $context["taxonomy"]) . "/name")), "method"), $context["taxonomy"])) : ($context["taxonomy"])), "html", null, true);
                echo ")
                    </option>
                ";
                // line 33
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => (("taxonomy/" . $context["taxonomy"]) . "/options")), "method"));
                foreach ($context['_seq'] as $context["slug"] => $context["name"]) {
                    // line 34
                    echo "                    <option value='";
                    echo twig_escape_filter($this->env, $context["slug"], "html", null, true);
                    echo "' ";
                    if (($this->env->getExtension('Bolt')->request(("taxonomy-" . $context["taxonomy"])) == $context["slug"])) {
                        echo "selected";
                    }
                    echo ">
                        ";
                    // line 35
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "
                    </option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['slug'], $context['name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "                </select>
                ";
                // line 39
                echo $this->env->getExtension('Bolt')->trans("or");
                echo "
            ";
            }
            // line 41
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxonomy'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            <input type=\"text\" class=\"form-control\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->request("filter", "", true), "html", null, true);
        echo "\" name=\"filter\" style=\"width: 110px;\" placeholder=\"";
        echo $this->env->getExtension('Bolt')->trans("Keyword …");
        echo "\">
        </div>

        <div class=\"form-group\" style=\"display: block; margin-top: 12px;\">
            <button type=\"submit\" class=\"btn btn-tertiary\"><i class=\"fa fa-filter\"></i> ";
        // line 46
        echo $this->env->getExtension('Bolt')->trans("Filter");
        echo "</button>

            ";
        // line 48
        if ((($this->env->getExtension('Bolt')->request("filter") || $this->env->getExtension('Bolt')->request("order")) || (isset($context["taxonomyfilter"]) ? $context["taxonomyfilter"] : null))) {
            // line 49
            echo "                <a class=\"btn btn-tertiary\" href=\"?\"><i class=\"fa fa-close\"></i> ";
            echo $this->env->getExtension('Bolt')->trans("Clear sort/filter");
            echo "</a>
            ";
        }
        // line 51
        echo "        </div>

    </form>


    ";
        // line 56
        $context["description"] = $this->env->getExtension('Bolt')->trans(array(0 => "contenttypes", 1 => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array()), 2 => "description"), array("DEFAULT" => (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "description", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "description", array()))) : (""))));
        // line 57
        echo "    <div class=\"description\">
        ";
        // line 58
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 59
            echo "            ";
            echo $this->env->getExtension('Bolt')->markdown((isset($context["description"]) ? $context["description"] : null));
            echo "
        ";
        }
        // line 61
        echo "    </div>

    <p><strong>";
        // line 63
        echo $this->env->getExtension('Bolt')->trans("Details");
        echo "</strong></p>
    <ul>
        <li>";
        // line 65
        echo $this->env->getExtension('Bolt')->trans("Default status");
        echo ": ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "default_status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "default_status", array()), "published")) : ("published")), "html", null, true);
        echo "</li>
        <li>";
        // line 66
        echo $this->env->getExtension('Bolt')->trans("Listing template");
        echo ": <code>";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "listing_template", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "listing_template", array()), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/listing_template"), "method"))) : ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/listing_template"), "method"))), "html", null, true);
        echo "</code></li>
        <li>";
        // line 67
        echo $this->env->getExtension('Bolt')->trans("Detail template");
        echo ": <code>";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "record_template", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "record_template", array()), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/record_template"), "method"))) : ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/record_template"), "method"))), "html", null, true);
        echo "</code></li>
        ";
        // line 68
        if (twig_test_iterable((($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "taxonomy", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "taxonomy", array()), "")) : ("")))) {
            // line 69
            echo "            <li>";
            echo $this->env->getExtension('Bolt')->trans("Taxonomy");
            echo ": ";
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "taxonomy", array()), ", "), "html", null, true);
            echo "</li>
        ";
        }
        // line 71
        echo "        ";
        if (twig_test_iterable((($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "relations", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "relations", array()), "")) : ("")))) {
            // line 72
            echo "            <li>
                ";
            // line 73
            echo $this->env->getExtension('Bolt')->trans("Relationships");
            echo ":
                ";
            // line 74
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "relations", array()));
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
            foreach ($context['_seq'] as $context["rel"] => $context["data"]) {
                // line 75
                echo "                    ";
                echo twig_escape_filter($this->env, $context["rel"], "html", null, true);
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 76
                echo "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['rel'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "            </li>
        ";
        }
        // line 79
        echo "    </ul>

";
    }

    public function getTemplateName()
    {
        return "overview/_panel-actions_overview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 79,  266 => 77,  252 => 76,  246 => 75,  229 => 74,  225 => 73,  222 => 72,  219 => 71,  211 => 69,  209 => 68,  203 => 67,  197 => 66,  191 => 65,  186 => 63,  182 => 61,  176 => 59,  174 => 58,  171 => 57,  169 => 56,  162 => 51,  156 => 49,  154 => 48,  149 => 46,  139 => 42,  133 => 41,  128 => 39,  125 => 38,  116 => 35,  107 => 34,  103 => 33,  98 => 31,  92 => 29,  89 => 28,  86 => 27,  83 => 26,  80 => 25,  76 => 24,  72 => 22,  70 => 21,  63 => 17,  57 => 14,  52 => 13,  49 => 12,  43 => 10,  37 => 8,  31 => 6,  11 => 4,);
    }
}
