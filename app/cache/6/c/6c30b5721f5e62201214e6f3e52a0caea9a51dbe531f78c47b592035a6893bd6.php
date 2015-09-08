<?php

/* entry.twig */
class __TwigTemplate_6c30b5721f5e62201214e6f3e52a0caea9a51dbe531f78c47b592035a6893bd6 extends Twig_Template
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
        $this->loadTemplate("_header.twig", "entry.twig", 1)->display($context);
        // line 2
        echo "
<!-- Main Page Content and Sidebar -->

    <!-- Main Blog Content -->
    <div class=\"large-8 columns\">

        <article>

            <h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array()), "html", null, true);
        echo "</h2>

            ";
        // line 12
        if (($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "image", array()) != "")) {
            // line 13
            echo "                <div class=\"large-4 columns imageholder\">
                    <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "image", array())), "html", null, true);
            echo "\">
                        <img src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->thumbnail($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "image", array()), 400, 260), "html", null, true);
            echo "\">
                    </a>
                </div>
            ";
        }
        // line 19
        echo "
            ";
        // line 21
        echo "            ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "teaser", array()), "html", null, true);
        echo "

            ";
        // line 24
        echo "            ";
        if ( !twig_test_empty($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "video", array()))) {
            // line 25
            echo "                <div class=\"clearfix\"></div>
                ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "video", array()), "responsive", array()), "html", null, true);
            echo "
            ";
        }
        // line 28
        echo "
            ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "body", array()), "html", null, true);
        echo "

            ";
        // line 31
        $this->loadTemplate("_recordfooter.twig", "entry.twig", 31)->display(array_merge($context, array("record" => (isset($context["record"]) ? $context["record"] : null))));
        // line 32
        echo "
            ";
        // line 33
        if (array_key_exists("Disqus", $context)) {
            // line 34
            echo "                ";
            // line 35
            echo "                <h4>Leave a comment</h4>
                ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Disqus"]) ? $context["Disqus"] : null), "disqus", array(), "method"), "html", null, true);
            echo "
                <hr>
            ";
        } elseif (        // line 38
array_key_exists("FacebookComments", $context)) {
            // line 39
            echo "                ";
            // line 40
            echo "                <h4>Leave a comment</h4>
                ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["FacebookComments"]) ? $context["FacebookComments"] : null), "facebookComments", array(), "method"), "html", null, true);
            echo "
                <hr>
            ";
        }
        // line 44
        echo "
            <p class=\"meta\">
                ";
        // line 46
        $context["previous"] = $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "previous", array(0 => "id"), "method");
        // line 47
        echo "                ";
        if ((isset($context["previous"]) ? $context["previous"] : null)) {
            // line 48
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["previous"]) ? $context["previous"] : null), "link", array()), "html", null, true);
            echo "\">&laquo; ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["previous"]) ? $context["previous"] : null), "title", array()), "html", null, true);
            echo "</a>
                ";
        }
        // line 50
        echo "                -
                ";
        // line 51
        $context["next"] = $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "next", array(0 => "id"), "method");
        // line 52
        echo "                ";
        if ((isset($context["next"]) ? $context["next"] : null)) {
            // line 53
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["next"]) ? $context["next"] : null), "link", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["next"]) ? $context["next"] : null), "title", array()), "html", null, true);
            echo " &raquo;</a>
                ";
        }
        // line 55
        echo "            </p>

        </article>


    </div>

    <!-- End Main Content -->

    ";
        // line 64
        $this->loadTemplate("_aside.twig", "entry.twig", 64)->display($context);
        // line 65
        echo "
<!-- End Main Content and Sidebar -->



";
        // line 70
        $this->loadTemplate("_footer.twig", "entry.twig", 70)->display($context);
    }

    public function getTemplateName()
    {
        return "entry.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 70,  156 => 65,  154 => 64,  143 => 55,  135 => 53,  132 => 52,  130 => 51,  127 => 50,  119 => 48,  116 => 47,  114 => 46,  110 => 44,  104 => 41,  101 => 40,  99 => 39,  97 => 38,  92 => 36,  89 => 35,  87 => 34,  85 => 33,  82 => 32,  80 => 31,  75 => 29,  72 => 28,  67 => 26,  64 => 25,  61 => 24,  55 => 21,  52 => 19,  45 => 15,  41 => 14,  38 => 13,  36 => 12,  31 => 10,  21 => 2,  19 => 1,);
    }
}
