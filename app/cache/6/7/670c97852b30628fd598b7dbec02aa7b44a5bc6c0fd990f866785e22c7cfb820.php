<?php

/* _header.twig */
class __TwigTemplate_670c97852b30628fd598b7dbec02aa7b44a5bc6c0fd990f866785e22c7cfb820 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html class=\"no-js\" lang=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->htmlLang(), "html", null, true);
        echo "\">
<head>
    <meta charset=\"utf-8\" />

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    ";
        // line 9
        echo "    <title>
        ";
        // line 10
        if ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, strip_tags($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array())), "html", null, true);
            echo " | ";
        }
        // line 11
        echo "            ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/sitename"), "method"), "html", null, true);
        echo "
        ";
        // line 12
        if (( !$this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/payoff"), "method"))) {
            echo " | ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/payoff"), "method"), "html", null, true);
        }
        // line 13
        echo "    </title>

    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>

    ";
        // line 19
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "css/foundation.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "css/app.css\">
    ";
        // line 23
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "css/magnific-popup.css\">


    ";
        // line 27
        echo "
</head>
<body>

";
        // line 35
        echo "
<div class=\"row\">
    <header>
        <nav class=\"top-bar\" data-topbar>
            <ul class=\"title-area\">
                <li class=\"name\"><h1><a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/sitename"), "method"), "html", null, true);
        echo "</a></h1></li>
                <li class=\"toggle-topbar menu-icon\"><a href=\"#\">☰ menu</a></li>
            </ul>

            <section class=\"top-bar-section\">
                <!-- Right Nav Section -->
                <ul class=\"right\">
                    ";
        // line 48
        echo "                    ";
        echo $this->env->getExtension('Bolt')->menu($this->env, "main", "_sub_menu.twig");
        echo "

                    ";
        // line 51
        echo "                    ";
        $this->loadTemplate("_sub_searchbox.twig", "_header.twig", 51)->display($context);
        // line 52
        echo "                </ul>
            </section>
        </nav>

        <!-- Header bar -->
        <div class=\"headerphoto\">

            ";
        // line 62
        echo "            ";
        $context["headerimage"] = (($this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()) . "images/") . twig_random($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "headerimage", array())));
        // line 63
        echo "            <img src=\"";
        echo twig_escape_filter($this->env, (isset($context["headerimage"]) ? $context["headerimage"] : null), "html", null, true);
        echo " \" alt=\"\" />

            ";
        // line 66
        echo "            <p><span>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/sitename"), "method"), "html", null, true);
        echo "</span>
                ";
        // line 67
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/payoff"), "method")) {
            // line 68
            echo "                    <br><small>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/payoff"), "method"), "html", null, true);
            echo "</small>
                ";
        }
        // line 70
        echo "            </p>
        </div>

        <!-- End header -->

    </header>
</div>



<div class=\"row\">
    <div class=\"container large-12 columns\">
";
    }

    public function getTemplateName()
    {
        return "_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 70,  129 => 68,  127 => 67,  122 => 66,  116 => 63,  113 => 62,  104 => 52,  101 => 51,  95 => 48,  83 => 40,  76 => 35,  70 => 27,  63 => 23,  59 => 20,  54 => 19,  48 => 13,  43 => 12,  38 => 11,  33 => 10,  30 => 9,  22 => 2,  19 => 1,);
    }
}
