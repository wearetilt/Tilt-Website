<?php

/* _recordfooter.twig */
class __TwigTemplate_c2fa8b84d587aabab820e2743e6c9ee2677fdb9ff28e7b1f3dbfcebeaa9b1aea extends Twig_Template
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
        // line 2
        echo "<h6>
    ";
        // line 3
        if ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "editlink", array(), "method")) {
            // line 4
            echo "        <span class=\"edit-link\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "editlink", array(), "method"), "html", null, true);
            echo "\"><strong>Edit</strong></a></span> -
    ";
        }
        // line 6
        echo "    ";
        $context["recdate"] = $this->env->getExtension('Bolt')->localeDateTime($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "datepublish", array()), "%A %B %e, %Y");
        // line 7
        echo "    ";
        echo $this->env->getExtension('Bolt')->trans("Written by <em>%name%</em> on %date%", array("%name%" => $this->getAttribute($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "user", array()), "displayname", array()), "%date%" => (isset($context["recdate"]) ? $context["recdate"] : null)));
        echo " <br>
    <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "link", array()), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Bolt')->trans("Permalink");
        echo "</a> -
    ";
        // line 11
        echo "    ";
        $this->loadTemplate("_sub_taxonomylinks.twig", "_recordfooter.twig", 11)->display(array_merge($context, array("record" => (isset($context["record"]) ? $context["record"] : null))));
        // line 12
        echo "</h6>
";
    }

    public function getTemplateName()
    {
        return "_recordfooter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 12,  44 => 11,  38 => 8,  33 => 7,  30 => 6,  24 => 4,  22 => 3,  19 => 2,);
    }
}
