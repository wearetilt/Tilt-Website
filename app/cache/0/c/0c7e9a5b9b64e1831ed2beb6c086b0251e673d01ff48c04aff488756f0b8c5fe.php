<?php

/* _aside.twig */
class __TwigTemplate_0c7e9a5b9b64e1831ed2beb6c086b0251e673d01ff48c04aff488756f0b8c5fe extends Twig_Template
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
        echo "<!-- Sidebar -->

<aside class=\"large-4 columns\">

    <div class=\"panel\">
        ";
        // line 8
        echo "        ";
        $template_storage = new Bolt\Storage($context['app']);
        $context['about'] =         $template_storage->getContent("page/about", array() );
        // line 9
        echo "
        ";
        // line 12
        echo "        ";
        if ($this->getAttribute((isset($context["about"]) ? $context["about"] : null), "title", array(), "any", true, true)) {
            // line 13
            echo "
            <h5>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["about"]) ? $context["about"] : null), "title", array()), "html", null, true);
            echo "</h5>
            ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["about"]) ? $context["about"] : null), "teaser", array()), "html", null, true);
            echo "

            <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["about"]) ? $context["about"] : null), "link", array()), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Bolt')->trans("Read more");
            echo " &raquo;</a>

        ";
        } else {
            // line 20
            echo "
            <h5>";
            // line 21
            echo $this->env->getExtension('Bolt')->trans("Alas, no about!");
            echo "</h5>

            <p>";
            // line 23
            echo $this->env->getExtension('Bolt')->trans("If there was a Page with 'about' for a slug, it would've been shown here. But there isn't one, so that's why you're seeing this placeholder.");
            echo "</p>

        ";
        }
        // line 26
        echo "
    </div>

    ";
        // line 37
        echo "
    ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "contenttypes"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["ct"]) {
            if ( !(($this->getAttribute($context["ct"], "viewless", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["ct"], "viewless", array()), false)) : (false))) {
                // line 39
                echo "
        ";
                // line 40
                $template_storage = new Bolt\Storage($context['app']);
                $context['records'] =                 $template_storage->getContent(($this->getAttribute((isset($context["ct"]) ? $context["ct"] : null), "slug", array()) . "/latest/5"), array() );
                // line 41
                echo "
        <h5>";
                // line 42
                echo $this->env->getExtension('Bolt')->trans("contenttypes.generic.recent", array("%contenttypes%" => $this->getAttribute($context["ct"], "slug", array())));
                echo "</h5>
        <ul>
            ";
                // line 44
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["records"]) ? $context["records"] : null));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
                    // line 45
                    echo "                <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "link", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "title", array()), "html", null, true);
                    echo "</a></li>
            ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 47
                    echo "                <li>";
                    echo $this->env->getExtension('Bolt')->trans("contenttypes.generic.no-recent", array("%contenttype%" => $this->getAttribute($context["ct"], "slug", array())));
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "        </ul>
        <p><a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root", array()), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["ct"], "slug", array()), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Bolt')->trans("contenttypes.generic.overview", array("%contenttypes%" => $this->getAttribute($context["ct"], "slug", array())));
                echo " &raquo;</a></p>


    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ct'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "

</aside>

<!-- End Sidebar -->
";
    }

    public function getTemplateName()
    {
        return "_aside.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 54,  124 => 50,  121 => 49,  112 => 47,  102 => 45,  97 => 44,  92 => 42,  89 => 41,  86 => 40,  83 => 39,  78 => 38,  75 => 37,  70 => 26,  64 => 23,  59 => 21,  56 => 20,  48 => 17,  43 => 15,  39 => 14,  36 => 13,  33 => 12,  30 => 9,  26 => 8,  19 => 1,);
    }
}
