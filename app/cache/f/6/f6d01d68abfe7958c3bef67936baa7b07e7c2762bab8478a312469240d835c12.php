<?php

/* editcontent/editcontent.twig */
class __TwigTemplate_f6d01d68abfe7958c3bef67936baa7b07e7c2762bab8478a312469240d835c12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("_base/_page-nav.twig", "editcontent/editcontent.twig", 5);
        $this->blocks = array(
            'page_nav' => array($this, 'block_page_nav'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'messages' => array($this, 'block_messages'),
            'page_main' => array($this, 'block_page_main'),
            'page_main_extra_content' => array($this, 'block_page_main_extra_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_base/_page-nav.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["macro"] = $this->loadTemplate("_macro/_macro.twig", "editcontent/editcontent.twig", 3);
        // line 5
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_page_nav($context, array $blocks = array())
    {
        echo "Content/*";
    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $context["contenttype"] = array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array()));
        // line 11
        echo "    ";
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "title", array()))) {
            // line 12
            echo "        ";
            echo $this->env->getExtension('Bolt')->trans("contenttypes.generic.edit", (isset($context["contenttype"]) ? $context["contenttype"] : null));
            echo "
    ";
        } else {
            // line 14
            echo "        ";
            echo $this->env->getExtension('Bolt')->trans("contenttypes.generic.new", (isset($context["contenttype"]) ? $context["contenttype"] : null));
            echo "
    ";
        }
    }

    // line 18
    public function block_page_subtitle($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "title", array()), "")) : ("")), "html", null, true);
    }

    // line 21
    public function block_messages($context, array $blocks = array())
    {
        echo "";
    }

    // line 23
    public function block_page_main($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        $context["status_names"] = array("published" => $this->env->getExtension('Bolt')->trans("Published"), "held" => $this->env->getExtension('Bolt')->trans("Not published"), "timed" => $this->env->getExtension('Bolt')->trans("Timed publish"), "draft" => $this->env->getExtension('Bolt')->trans("Draft"));
        // line 25
        echo "
    ";
        // line 26
        ob_start();
        echo $context["macro"]->getdatetime($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "datechanged", array()));
        $context["dateChanged"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 27
        echo "
    ";
        // line 28
        $context["bind_data"] = array("savedon" => ((($this->env->getExtension('Bolt')->trans("Saved on:") . " <strong></strong> <small>(") .         // line 29
(isset($context["dateChanged"]) ? $context["dateChanged"] : null)) . ")</small></p>"), "newRecord" => ((($this->getAttribute($this->getAttribute(        // line 30
(isset($context["context"]) ? $context["context"] : null), "content", array()), "id", array()) != 0)) ? (false) : (true)), "msgNotSaved" => $this->env->getExtension('Bolt')->trans("contenttypes.generic.saving-impossible", array("%contenttype%" => $this->getAttribute($this->getAttribute(        // line 31
(isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array()))), "hasGroups" => $this->getAttribute($this->getAttribute(        // line 32
(isset($context["context"]) ? $context["context"] : null), "has", array()), "tabs", array()), "singularSlug" => $this->getAttribute($this->getAttribute(        // line 33
(isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "singular_slug", array()));
        // line 35
        echo "
    ";
        // line 36
        $context["attr_form"] = array("_bind" => array(0 => "editcontent", 1 =>         // line 37
(isset($context["bind_data"]) ? $context["bind_data"] : null)), "class" => ("form-horizontal" . (($this->getAttribute($this->getAttribute(        // line 38
(isset($context["context"]) ? $context["context"] : null), "has", array()), "tabs", array())) ? (" tab-content") : (""))), "enctype" => "multipart/form-data", "id" => "editcontent", "method" => "post", "role" => "form");
        // line 44
        echo "
    ";
        // line 45
        ob_start();
        // line 46
        echo "        <div id=\"%NOTICE_ID%\" class=\"alert alert-danger\">
            <button class=\"close\" data-dismiss=\"alert\">×</button>
            <label for=\"%FIELD_ID%\">";
        // line 48
        echo $this->env->getExtension('Bolt')->trans("Field “%FIELD_NAME%”:");
        echo "</label>
            %MESSAGE%
        </div>
    ";
        $context["alertbox"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 52
        echo "
    ";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->addData("validation", array("alertbox" => trim(        // line 54
(isset($context["alertbox"]) ? $context["alertbox"] : null)), "generic_msg" => $this->env->getExtension('Bolt')->trans("Is required or needs to match a pattern!"))), "html", null, true);
        // line 56
        echo "
    ";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->addData("editcontent.msg", array("change_quit" => $this->env->getExtension('Bolt')->trans("You have unfinished changes on this page. If you continue without saving, you will lose these changes."), "saving" => $this->env->getExtension('Bolt')->trans("Saving …"))), "html", null, true);
        // line 60
        echo "

    <div class=\"row\">
        <div class=\"col-md-8\">

            ";
        // line 65
        $this->loadTemplate("_sub/_messages.twig", "editcontent/editcontent.twig", 65)->display($context);
        // line 66
        echo "
            ";
        // line 68
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "has", array()), "tabs", array())) {
            // line 69
            echo "                <ul class=\"nav nav-tabs\" id=\"filtertabs\">
                    ";
            // line 70
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "groups", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 71
                echo "                        <li";
                echo (($this->getAttribute($context["group"], "is_active", array())) ? (" class=\"active\"") : (""));
                echo ">
                            <a href=\"#";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "label", array()), "html", null, true);
                echo "</a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "                </ul>
            ";
        }
        // line 77
        echo "
            <form";
        // line 78
        echo $context["macro"]->getattr((isset($context["attr_form"]) ? $context["attr_form"] : null));
        echo ">
                ";
        // line 79
        $this->loadTemplate("_sub/_csrf_token.twig", "editcontent/editcontent.twig", 79)->display($context);
        // line 80
        echo "
                ";
        // line 81
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "groups", array()));
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
        foreach ($context['_seq'] as $context["group_name"] => $context["group"]) {
            // line 82
            echo "
                    ";
            // line 83
            if ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "has", array()), "tabs", array())) {
                // line 84
                echo "                        <div class=\"tab-pane";
                echo (($this->getAttribute($context["group"], "is_active", array())) ? (" active") : (""));
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
                echo "\">
                    ";
            }
            // line 86
            echo "
                    ";
            // line 87
            if (($context["group_name"] == "relations")) {
                // line 88
                echo "                        ";
                $this->loadTemplate("editcontent/_relations.twig", "editcontent/editcontent.twig", 88)->display($context);
                // line 89
                echo "
                    ";
            } elseif ((            // line 90
$context["group_name"] == "taxonomy")) {
                // line 91
                echo "                        ";
                $this->loadTemplate("editcontent/_taxonomies.twig", "editcontent/editcontent.twig", 91)->display($context);
                // line 92
                echo "
                    ";
            } elseif ((            // line 93
$context["group_name"] == "meta")) {
                // line 94
                echo "                        ";
                $this->loadTemplate("editcontent/_meta.twig", "editcontent/editcontent.twig", 94)->display($context);
                // line 95
                echo "
                    ";
            } elseif ((            // line 96
$context["group_name"] == "template")) {
                // line 97
                echo "                        ";
                $this->loadTemplate("editcontent/_templatefields.twig", "editcontent/editcontent.twig", 97)->display($context);
                // line 98
                echo "
                    ";
            } else {
                // line 100
                echo "                        ";
                $this->loadTemplate("editcontent/_fields.twig", "editcontent/editcontent.twig", 100)->display($context);
                // line 101
                echo "                    ";
            }
            // line 102
            echo "
                    ";
            // line 103
            if ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "has", array()), "tabs", array())) {
                // line 104
                echo "                        </div>
                    ";
            }
            // line 106
            echo "
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_name'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "
                <input type=\"hidden\" name=\"_live-editor-preview\" value=\"\"/>

                ";
        // line 111
        $this->loadTemplate("editcontent/_buttons.twig", "editcontent/editcontent.twig", 111)->display($context);
        // line 112
        echo "            </form>

            ";
        // line 114
        $this->loadTemplate("editcontent/_includes-data.twig", "editcontent/editcontent.twig", 114)->display($context);
        // line 115
        echo "
        </div>

        <aside class=\"col-md-4 hidden-sm\">
            ";
        // line 119
        $this->loadTemplate("editcontent/_aside.twig", "editcontent/editcontent.twig", 119)->display($context);
        // line 120
        echo "        </aside>
    </div>

";
    }

    // line 125
    public function block_page_main_extra_content($context, array $blocks = array())
    {
        // line 126
        echo "    ";
        $this->loadTemplate("editcontent/_live-editor.twig", "editcontent/editcontent.twig", 126)->display($context);
    }

    public function getTemplateName()
    {
        return "editcontent/editcontent.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 126,  312 => 125,  305 => 120,  303 => 119,  297 => 115,  295 => 114,  291 => 112,  289 => 111,  284 => 108,  269 => 106,  265 => 104,  263 => 103,  260 => 102,  257 => 101,  254 => 100,  250 => 98,  247 => 97,  245 => 96,  242 => 95,  239 => 94,  237 => 93,  234 => 92,  231 => 91,  229 => 90,  226 => 89,  223 => 88,  221 => 87,  218 => 86,  210 => 84,  208 => 83,  205 => 82,  188 => 81,  185 => 80,  183 => 79,  179 => 78,  176 => 77,  172 => 75,  161 => 72,  156 => 71,  152 => 70,  149 => 69,  146 => 68,  143 => 66,  141 => 65,  134 => 60,  132 => 57,  129 => 56,  127 => 54,  126 => 53,  123 => 52,  116 => 48,  112 => 46,  110 => 45,  107 => 44,  105 => 38,  104 => 37,  103 => 36,  100 => 35,  98 => 33,  97 => 32,  96 => 31,  95 => 30,  94 => 29,  93 => 28,  90 => 27,  86 => 26,  83 => 25,  80 => 24,  77 => 23,  71 => 21,  65 => 18,  57 => 14,  51 => 12,  48 => 11,  45 => 10,  42 => 9,  36 => 7,  32 => 5,  30 => 3,  11 => 5,);
    }
}
