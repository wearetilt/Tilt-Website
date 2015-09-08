<?php

/* _sub_pager.twig */
class __TwigTemplate_9c699e7221be93480fbe5eafc70e8240bca331e6fa68b2ba70c3867ee588bda9 extends Twig_Template
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
        $context["link"] = $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "makelink", array(), "method");
        // line 2
        echo "
";
        // line 3
        if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages", array()) > 1)) {
            // line 4
            echo "<div class=\"pagination pagination-centered ";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
            echo "\">
  <ul class=\"pagination\">
";
            // line 7
            if ((($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current", array()) > 1) && ((isset($context["class"]) ? $context["class"] : null) != "narrow"))) {
                // line 8
                echo "    <li><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current", array()) - 1), "html", null, true);
                echo "\" rel=\"noindex, follow\">&lsaquo; </a></li>
";
            }
            // line 10
            if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current", array()) > ((isset($context["surr"]) ? $context["surr"] : null) + 1))) {
                // line 11
                echo "    <li><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo 1;
                echo "\">&laquo; 1</a></li>
";
            }
            // line 13
            echo "
";
            // line 15
            if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current", array()) > ((isset($context["surr"]) ? $context["surr"] : null) + 2))) {
                // line 16
                echo "    <li class=\"disabled\"><a href=\"#\">...</a></li>
";
            }
            // line 18
            echo "
";
            // line 19
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(max(1, ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current", array()) - (isset($context["surr"]) ? $context["surr"] : null))), min(($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current", array()) + (isset($context["surr"]) ? $context["surr"] : null)), $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages", array()))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 20
                echo "    <li ";
                if (($context["i"] == $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current", array()))) {
                    echo "class='active'";
                }
                echo "><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" ";
                if (($context["i"] != 1)) {
                    echo "rel=\"noindex, follow\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a></li>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "
";
            // line 24
            if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current", array()) < (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages", array()) - (isset($context["surr"]) ? $context["surr"] : null)) - 1))) {
                // line 25
                echo "    <li class=\"disabled\"><a href=\"#\">...</a></li>
";
            }
            // line 27
            echo "
";
            // line 29
            if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current", array()) < ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages", array()) - (isset($context["surr"]) ? $context["surr"] : null)))) {
                // line 30
                echo "    <li><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages", array()), "html", null, true);
                echo "\" rel=\"noindex, follow\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages", array()), "html", null, true);
                echo " &raquo; </a></li>
";
            }
            // line 32
            if ((($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current", array()) < $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages", array())) && ((isset($context["class"]) ? $context["class"] : null) != "narrow"))) {
                // line 33
                echo "    <li><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current", array()) + 1), "html", null, true);
                echo "\" rel=\"noindex, follow\">&rsaquo;</a></li>
";
            }
            // line 35
            echo "  </ul>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "_sub_pager.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 35,  111 => 33,  109 => 32,  100 => 30,  98 => 29,  95 => 27,  91 => 25,  89 => 24,  86 => 22,  66 => 20,  62 => 19,  59 => 18,  55 => 16,  53 => 15,  50 => 13,  43 => 11,  41 => 10,  34 => 8,  32 => 7,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
