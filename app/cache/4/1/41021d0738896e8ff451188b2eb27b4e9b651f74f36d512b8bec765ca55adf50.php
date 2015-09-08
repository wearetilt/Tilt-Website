<?php

/* editcontent/_buttons.twig */
class __TwigTemplate_41021d0738896e8ff451188b2eb27b4e9b651f74f36d512b8bec765ca55adf50 extends Twig_Template
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
        echo "<div class=\"form-group\" style=\"margin-top: 40px;\">
    <div class=\"col-sm-12\">

        <div class=\"btn-group\">
            <button type=\"button\" class=\"btn btn-primary\" id=\"savecontinuebutton\">
                <i class=\"fa fa-flag\"></i> ";
        // line 6
        echo $this->env->getExtension('Bolt')->trans("contenttypes.generic.save", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())));
        echo "
            </button>
            <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
                <span class=\"caret\"></span>
                <span class=\"sr-only\">Toggle Dropdown</span>
            </button>
            <ul class=\"dropdown-menu\" role=\"menu\">
                <li>
                    <button type=\"submit\" class=\"btn btn-link\" id=\"savebutton\">
                        <i class=\"fa fa-flag\"></i> ";
        // line 15
        echo $this->env->getExtension('Bolt')->trans("Save & return to overview");
        echo "
                    </button>
                </li>
                <li>
                    <button type=\"submit\" class=\"btn btn-link\" id=\"savenewbutton\">
                        <i class=\"fa fa-flag\"></i> ";
        // line 20
        echo $this->env->getExtension('Bolt')->trans("Save & create new record");
        echo "
                    </button>
                </li>
            </ul>
        </div>

        ";
        // line 26
        if (( !$this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "liveeditor", array(), "any", true, true) || $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "liveeditor", array()))) {
            // line 27
            echo "            <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-tertiary\" id=\"live-editor-button\">
                    <i class=\"fa fa-pencil\"></i> ";
            // line 29
            echo $this->env->getExtension('Bolt')->trans("Live Edit");
            echo "
                </button>
            </div>
        ";
        }
        // line 33
        echo "        
        ";
        // line 34
        if ( !(($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "viewless", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "viewless", array()), false)) : (false))) {
            // line 35
            echo "            <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-default\" id=\"previewbutton\">
                    <i class=\"fa fa-external-link-square\"></i> ";
            // line 37
            echo $this->env->getExtension('Bolt')->trans("Preview");
            echo "
                </button>
                ";
            // line 39
            if ((($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "status", array()) == "published") && $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "link", array(), "any", true, true))) {
                // line 40
                echo "                    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                        <span class=\"caret\"></span>
                        <span class=\"sr-only\">Toggle Dropdown</span>
                    </button>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                        <li>
                            <a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "link", array()), "html", null, true);
                echo "\" target=\"_blank\">
                                <i class=\"fa fa-external-link-square\"></i> ";
                // line 47
                echo $this->env->getExtension('Bolt')->trans("View (saved version) on site");
                echo "</a></li>
                        </a>
                        </li>
                    </ul>
                ";
            }
            // line 52
            echo "            </div>
        ";
        }
        // line 54
        echo "

        <p class=\"lastsaved\" style=\"margin-top: 12px;\">
            ";
        // line 57
        if (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "id", array()) != 0)) {
            // line 58
            echo "                ";
            echo $this->env->getExtension('Bolt')->trans("Saved on:");
            echo " <strong>";
            echo $this->env->getExtension('Bolt')->localeDateTime($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "datechanged", array()), "%b %e, %H:%M");
            echo "</strong> <small>(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "datetime", array(0 => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "datechanged", array())), "method"), "html", null, true);
            echo ")</small></p>
            ";
        } else {
            // line 60
            echo "                ";
            echo $this->env->getExtension('Bolt')->trans("contenttypes.generic.not-saved-yet", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())));
            echo "
            ";
        }
        // line 62
        echo "        </p>

    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "editcontent/_buttons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 62,  125 => 60,  115 => 58,  113 => 57,  108 => 54,  104 => 52,  96 => 47,  92 => 46,  84 => 40,  82 => 39,  77 => 37,  73 => 35,  71 => 34,  68 => 33,  61 => 29,  57 => 27,  55 => 26,  46 => 20,  38 => 15,  26 => 6,  19 => 1,);
    }
}
