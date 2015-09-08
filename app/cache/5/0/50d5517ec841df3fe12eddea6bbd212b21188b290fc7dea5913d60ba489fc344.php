<?php

/* _footer.twig */
class __TwigTemplate_50d5517ec841df3fe12eddea6bbd212b21188b290fc7dea5913d60ba489fc344 extends Twig_Template
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
        echo "
<!-- Footer -->
        <footer class=\"large-12 columns\">
            <hr />
            <div class=\"large-6 columns\">
                <p>";
        // line 6
        echo $this->env->getExtension('Bolt')->trans("This website is <a href='%url%' target='_blank' title='Sophisticated, lightweight & simple CMS'>Built with Bolt</a>.", array("%url%" => "http://bolt.cm"));
        echo "
                </p>
            </div>
            <div class=\"large-6 columns\">
                <ul class=\"inline-list\">
                    ";
        // line 11
        echo $this->env->getExtension('Bolt')->menu($this->env);
        echo "
                </ul>
            </div>
        </footer>
    </div>
</div>

    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "javascripts/jquery-2.1.0.min.js\"></script>
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "javascripts/foundation.min.js\"></script>
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "javascripts/modernizr.js\"></script>

    ";
        // line 24
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "javascripts/jquery.magnific-popup.min.js\"></script>

    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "javascripts/app.js\" async defer></script>

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "_footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 26,  57 => 24,  52 => 20,  48 => 19,  44 => 18,  34 => 11,  26 => 6,  19 => 1,);
    }
}
