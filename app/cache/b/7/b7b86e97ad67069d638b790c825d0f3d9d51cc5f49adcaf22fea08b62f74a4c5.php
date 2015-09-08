<?php

/* editcontent/_aside-save.twig */
class __TwigTemplate_b7b86e97ad67069d638b790c825d0f3d9d51cc5f49adcaf22fea08b62f74a4c5 extends Twig_Template
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
        echo "<div class=\"btn-group\">
    <button type=\"button\" class=\"btn btn-primary\" id=\"sidebarsavecontinuebutton\">
        <i class=\"fa fa-flag\"></i> ";
        // line 3
        echo $this->env->getExtension('Bolt')->trans("contenttypes.generic.save", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())));
        echo "
    </button>

    <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
        <span class=\"caret\"></span>
        <span class=\"sr-only\">Toggle Dropdown</span>
    </button>

    <ul class=\"dropdown-menu\" role=\"menu\">
        <li>
            <button type=\"submit\" class=\"btn btn-link\" id=\"sidebarsavebutton\">
                <i class=\"fa fa-flag\"></i> ";
        // line 14
        echo $this->env->getExtension('Bolt')->trans("Save & return to overview");
        echo "
            </button>
        </li>

        <li>
            <button type=\"submit\" class=\"btn btn-link\" id=\"sidebarsavenewbutton\">
                <i class=\"fa fa-flag\"></i> ";
        // line 20
        echo $this->env->getExtension('Bolt')->trans("Save & create new record");
        echo "
            </button>
        </li>
    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "editcontent/_aside-save.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 20,  37 => 14,  23 => 3,  19 => 1,);
    }
}
