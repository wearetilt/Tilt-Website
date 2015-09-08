<?php

/* dashboard/dashboard.twig */
class __TwigTemplate_2d52f69bce897f3f44653947d3ec9d8b9943245bf75e3fde77a9a31a3c6e4388 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("_base/_page-nav.twig", "dashboard/dashboard.twig", 3);
        $this->blocks = array(
            'page_nav' => array($this, 'block_page_nav'),
            'page_title' => array($this, 'block_page_title'),
            'messages' => array($this, 'block_messages'),
            'page_main' => array($this, 'block_page_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_base/_page-nav.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_page_nav($context, array $blocks = array())
    {
        echo "Dashboard";
    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('Bolt')->trans("page.dashboard.title");
    }

    // line 10
    public function block_messages($context, array $blocks = array())
    {
        echo "";
    }

    // line 12
    public function block_page_main($context, array $blocks = array())
    {
        // line 13
        echo "
    <div class=\"row\">
        <div class=\"col-md-8\">

            ";
        // line 17
        $this->loadTemplate("_sub/_messages.twig", "dashboard/dashboard.twig", 17)->display($context);
        // line 18
        echo "
            ";
        // line 19
        if ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "suggestloripsum", array())) {
            // line 20
            echo "                ";
            $this->loadTemplate("dashboard/_suggestloripsum.twig", "dashboard/dashboard.twig", 20)->display($context);
            // line 21
            echo "            ";
        }
        // line 22
        echo "
            <div class=\"quicklinks\">
                ";
        // line 24
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "contenttypes"), "method")) > 3)) {
            // line 25
            echo "                    ";
            $this->loadTemplate("dashboard/_quicklinks-dropdown.twig", "dashboard/dashboard.twig", 25)->display($context);
            // line 26
            echo "                ";
        } else {
            // line 27
            echo "                    ";
            $this->loadTemplate("dashboard/_quicklinks-buttons.twig", "dashboard/dashboard.twig", 27)->display($context);
            // line 28
            echo "                ";
        }
        // line 29
        echo "            </div>

            ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "latest", array()));
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
        foreach ($context['_seq'] as $context["contenttype"] => $context["multiplecontent"]) {
            // line 32
            echo "                ";
            if ($context["multiplecontent"]) {
                // line 33
                echo "                    ";
                $this->loadTemplate("dashboard/_recently_edited.twig", "dashboard/dashboard.twig", 33)->display($context);
                // line 34
                echo "                ";
            }
            // line 35
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['contenttype'], $context['multiplecontent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
        </div>

        <aside class=\"col-md-4\">
            ";
        // line 40
        $this->loadTemplate("dashboard/_aside.twig", "dashboard/dashboard.twig", 40)->display($context);
        // line 41
        echo "        </aside>

    </div>

";
    }

    public function getTemplateName()
    {
        return "dashboard/dashboard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 41,  139 => 40,  133 => 36,  119 => 35,  116 => 34,  113 => 33,  110 => 32,  93 => 31,  89 => 29,  86 => 28,  83 => 27,  80 => 26,  77 => 25,  75 => 24,  71 => 22,  68 => 21,  65 => 20,  63 => 19,  60 => 18,  58 => 17,  52 => 13,  49 => 12,  43 => 10,  37 => 7,  31 => 5,  11 => 3,);
    }
}
