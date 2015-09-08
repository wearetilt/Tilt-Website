<?php

/* components/panel-stack.twig */
class __TwigTemplate_f8a624067483eb1bed5de56097213f29f7a4e7727c739ecd1e3131f6e1226df3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("_base/_panel.twig", "components/panel-stack.twig", 5);
        $this->blocks = array(
            'panel_class' => array($this, 'block_panel_class'),
            'panel_icon' => array($this, 'block_panel_icon'),
            'panel_head' => array($this, 'block_panel_head'),
            'panel_body' => array($this, 'block_panel_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_base/_panel.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_panel_class($context, array $blocks = array())
    {
        echo "panel-stack";
    }

    // line 9
    public function block_panel_icon($context, array $blocks = array())
    {
        echo "fa-paperclip";
    }

    // line 11
    public function block_panel_head($context, array $blocks = array())
    {
        echo $this->env->getExtension('Bolt')->trans("Files on the stack");
    }

    // line 13
    public function block_panel_body($context, array $blocks = array())
    {
        // line 14
        echo "    <div id=\"stackholder\">
        ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "stack", array()));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 16
            echo "            <div class=\"stackitem item-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "type", array()), "html", null, true);
            echo " info-pop\"
                 data-placement=\"bottom\" data-html=\"true\" data-title=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "basename", array()), "html", null, true);
            echo "\" data-content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "info", array()), "html", null, true);
            echo "\">
                ";
            // line 18
            if (($this->getAttribute($context["item"], "type", array()) == "image")) {
                // line 19
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->thumbnail($this->getAttribute($context["item"], "filepath", array()), 100, 100), "html", null, true);
                echo "\" width=\"100\" height=\"100\" alt=\"";
                echo $this->env->getExtension('Bolt')->trans("Thumbnail");
                echo "\">
                ";
            } else {
                // line 21
                echo "                   <strong>";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["item"], "extension", array())), "html", null, true);
                echo "</strong>
                   <small>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "basename", array()), "html", null, true);
                echo "</small>
                ";
            }
            // line 24
            echo "            </div>
        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 26
            echo "            <div class=\"nostackitems\">";
            echo $this->env->getExtension('Bolt')->trans("There are no items on the Stack, yet.");
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    </div>

    <div class=\"stack-buttons\">
        ";
        // line 31
        if ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "canUpload", array())) {
            // line 32
            echo "        <div class=\"btn-group\">
            <span class=\"btn btn-tertiary fileinput-button\">
                <i class=\"fa fa-upload\"></i>
                <span>";
            // line 35
            echo $this->env->getExtension('Bolt')->trans("Upload");
            echo "</span>
                <input id=\"fileupload-stack\"
                       type=\"file\"
                       name=\"files[]\"
                       data-url=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("upload", array("namespace" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array()))), "html", null, true);
            echo "\"
                       accept=\".";
            // line 40
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filetypes", array()), ",."), "html", null, true);
            echo "\">
            </span>
        </div>
        ";
        }
        // line 44
        echo "
        <div class=\"btn-group\">
            <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "async", array()), "html", null, true);
        echo "browse/files?key=stack\" class=\"btn btn-tertiary\" data-toggle=\"modal\" data-target=\"#selectModal-stack\">
                <i class=\"fa fa-download\"></i>
                ";
        // line 48
        echo $this->env->getExtension('Bolt')->trans("Select");
        echo "
            </a>
        </div>
    </div>

    <div id=\"protostack\">
        <div class=\"stackitem image info-pop item-1\" data-placement=\"bottom\" data-html=\"true\" data-title=\"\" data-content=\"\">
            <img src=\"data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACwAAAAAAQABAAACAkQBADs=\" width=\"100\" height=\"100\" alt=\"";
        // line 55
        echo $this->env->getExtension('Bolt')->trans("Thumbnail");
        echo "\">
        </div>

        <div class=\"stackitem other info-pop item-1\" data-placement=\"bottom\" data-html=\"true\" data-title=\"\" data-content=\"\">
            <strong>HTML</strong>
            <small>index.html</small>
        </div>
    </div>

    ";
        // line 65
        echo "    <div class=\"modal fade\" id=\"selectModal-stack\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\"></div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "components/panel-stack.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 65,  178 => 55,  168 => 48,  163 => 46,  159 => 44,  152 => 40,  148 => 39,  141 => 35,  136 => 32,  134 => 31,  129 => 28,  120 => 26,  106 => 24,  101 => 22,  96 => 21,  88 => 19,  86 => 18,  80 => 17,  73 => 16,  55 => 15,  52 => 14,  49 => 13,  43 => 11,  37 => 9,  31 => 7,  11 => 5,);
    }
}
