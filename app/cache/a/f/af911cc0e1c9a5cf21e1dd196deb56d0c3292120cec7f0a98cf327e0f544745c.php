<?php

/* editcontent/_live-editor.twig */
class __TwigTemplate_af911cc0e1c9a5cf21e1dd196deb56d0c3292120cec7f0a98cf327e0f544745c extends Twig_Template
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
        if (( !$this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "liveeditor", array(), "any", true, true) || $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "liveeditor", array()))) {
            // line 2
            echo "<div class=\"live-editor\">
    <iframe id=\"live-editor-iframe\" name=\"live-editor-iframe\"></iframe>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "editcontent/_live-editor.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }
}
