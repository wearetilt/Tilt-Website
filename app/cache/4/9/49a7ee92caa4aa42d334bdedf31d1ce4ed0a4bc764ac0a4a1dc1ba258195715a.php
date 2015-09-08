<?php

/* editcontent/_meta.twig */
class __TwigTemplate_49a7ee92caa4aa42d334bdedf31d1ce4ed0a4bc764ac0a4a1dc1ba258195715a extends Twig_Template
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
        echo "
";
        // line 3
        $context["macro"] = $this->loadTemplate("_macro/_macro.twig", "editcontent/_meta.twig", 3);
        // line 4
        echo "
";
        // line 5
        $context["magic_date"] = "1900-01-01 00:00:00";
        // line 6
        $context["can_publish"] = $this->env->getExtension('Bolt')->isAllowed(((("contenttype:" . $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())) . ":publish:") . $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "id", array())));
        // line 7
        $context["can_depublish"] = $this->env->getExtension('Bolt')->isAllowed(((("contenttype:" . $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())) . ":depublish:") . $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "id", array())));
        // line 8
        echo "
";
        // line 9
        $context["attr_editreferrer"] = array("name_id" => "editreferrer", "type" => "hidden", "value" => ((        // line 12
array_key_exists("editreferrer", $context)) ? (_twig_default_filter((isset($context["editreferrer"]) ? $context["editreferrer"] : null), "")) : ("")));
        // line 14
        echo "
";
        // line 15
        $context["attr_id"] = array("class" => "form-control narrow", "id" => "id", "name" => "id", "readonly" => true, "type" => "text", "value" => $this->getAttribute($this->getAttribute(        // line 21
(isset($context["context"]) ? $context["context"] : null), "content", array()), "id", array()));
        // line 23
        echo "
";
        // line 24
        $context["attr_contenttype"] = array("id" => "contenttype", "name" => "contenttype", "readonly" => true, "type" => "hidden", "value" => $this->getAttribute($this->getAttribute(        // line 29
(isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array()));
        // line 31
        echo "
";
        // line 32
        $context["attr_publish"] = array("disabled" =>  !        // line 33
(isset($context["can_publish"]) ? $context["can_publish"] : null), "id" => "datepublish", "value" => ((($this->getAttribute($this->getAttribute(        // line 35
(isset($context["context"]) ? $context["context"] : null), "content", array()), "datepublish", array()) == (isset($context["magic_date"]) ? $context["magic_date"] : null))) ? ("") : (((($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "datepublish", array()) == "")) ? (twig_date_format_filter($this->env, "now", "Y-m-d H:i:s")) : ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "datepublish", array()))))));
        // line 37
        echo "
";
        // line 38
        $context["attr_depublish"] = array("disabled" =>  !        // line 39
(isset($context["can_depublish"]) ? $context["can_depublish"] : null), "id" => "datedepublish", "value" => ((($this->getAttribute($this->getAttribute(        // line 41
(isset($context["context"]) ? $context["context"] : null), "content", array()), "datedepublish", array()) == (isset($context["magic_date"]) ? $context["magic_date"] : null))) ? ("") : ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "datedepublish", array()))), "notice" => $this->env->getExtension('Bolt')->trans("Depublish date is in the past. Change the status if you want to depublish now"));
        // line 44
        echo "
";
        // line 45
        $context["attr_status"] = array("class" => "form-control narrow", "disabled" => (twig_length_filter($this->env, $this->getAttribute(        // line 47
(isset($context["context"]) ? $context["context"] : null), "allowed_status", array())) <= 1), "id" => "statusselect", "name" => "status");
        // line 51
        echo "
";
        // line 52
        $context["attr_ownerid"] = array("class" => "form-control narrow", "disabled" =>  !$this->env->getExtension('Bolt')->isAllowed(((("contenttype:" . $this->getAttribute($this->getAttribute(        // line 54
(isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())) . ":change-ownership:") . $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "id", array()))), "name" => "ownerid");
        // line 57
        echo "
";
        // line 58
        $context["attr_comment"] = array("class" => "form-control", "disabled" =>  !$this->env->getExtension('Bolt')->isAllowed(((("contenttype:" . $this->getAttribute($this->getAttribute(        // line 60
(isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())) . ":change-ownership:") . $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "id", array()))), "name_id" => "changelog-comment", "placeholder" => $this->env->getExtension('Bolt')->trans("Add a brief, optional comment to describe what's changed."), "type" => "text");
        // line 65
        echo "
";
        // line 67
        echo "
<h3>
    ";
        // line 69
        echo $this->env->getExtension('Bolt')->trans("Meta information");
        echo "
</h3>

<input";
        // line 72
        echo $context["macro"]->getattr((isset($context["attr_editreferrer"]) ? $context["attr_editreferrer"] : null));
        echo ">

<div class=\"form-group\">
    ";
        // line 75
        echo $context["macro"]->getlabel("Id (№)", "", "col-sm-4 control-label");
        echo "
    <div class=\"col-sm-8\">
        <input";
        // line 77
        echo $context["macro"]->getattr((isset($context["attr_id"]) ? $context["attr_id"] : null));
        echo ">
        <input";
        // line 78
        echo $context["macro"]->getattr((isset($context["attr_contenttype"]) ? $context["attr_contenttype"] : null));
        echo ">
    </div>
</div>

<div class=\"form-group\">
    ";
        // line 83
        echo $context["macro"]->getlabel($this->env->getExtension('Bolt')->trans("Publication date:"), "", "col-sm-4 control-label");
        echo "
    <div class=\"col-sm-8\">
        ";
        // line 85
        echo $context["macro"]->getinput_datetime((isset($context["attr_publish"]) ? $context["attr_publish"] : null));
        echo "
    </div>
</div>

<div class=\"form-group depublish-group\">
    ";
        // line 90
        echo $context["macro"]->getlabel($this->env->getExtension('Bolt')->trans("Depublication date:"), "", "col-sm-4 control-label");
        echo "
    <div class=\"col-sm-8\">
        ";
        // line 92
        echo $context["macro"]->getinput_datetime((isset($context["attr_depublish"]) ? $context["attr_depublish"] : null));
        echo "
    </div>
</div>

";
        // line 96
        if (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "datecreated", array()) > "1970-01-01 01:01:01")) {
            // line 97
            echo "    <p>
        ";
            // line 98
            echo $this->env->getExtension('Bolt')->trans("contenttypes.generic.created", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())));
            echo "
        ";
            // line 99
            echo $context["macro"]->gettimemoment($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "datecreated", array()));
            echo "
        ";
            // line 100
            echo $this->env->getExtension('Bolt')->trans("and edited");
            echo "
        ";
            // line 101
            echo $context["macro"]->gettimemoment($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "datechanged", array()));
            echo ".
    </p>
";
        }
        // line 104
        echo "
<div class=\"form-group\">
    ";
        // line 106
        echo $context["macro"]->getlabel($this->env->getExtension('Bolt')->trans("Status:"), "", "col-sm-4 control-label");
        echo "
    <div class=\"col-sm-8\">
        <select";
        // line 108
        echo $context["macro"]->getattr((isset($context["attr_status"]) ? $context["attr_status"] : null));
        echo ">
            ";
        // line 109
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "allowed_status", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 110
            echo "                ";
            $context["attr_opt"] = array("value" =>             // line 111
$context["status"], "selected" => ($this->getAttribute($this->getAttribute(            // line 112
(isset($context["context"]) ? $context["context"] : null), "content", array()), "status", array()) == $context["status"]));
            // line 114
            echo "                <option";
            echo $context["macro"]->getattr((isset($context["attr_opt"]) ? $context["attr_opt"] : null));
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["status_names"]) ? $context["status_names"] : null), $context["status"], array(), "array"), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "        </select>
    </div>
</div>

<div class=\"form-group\">
    ";
        // line 121
        echo $context["macro"]->getlabel($this->env->getExtension('Bolt')->trans("Owner:"), "", "col-sm-4 control-label");
        echo "
    <div class=\"col-sm-8\">
        <select";
        // line 123
        echo $context["macro"]->getattr((isset($context["attr_ownerid"]) ? $context["attr_ownerid"] : null));
        echo ">
            ";
        // line 124
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 125
            echo "                ";
            $context["attr_opt"] = array("value" => $this->getAttribute(            // line 126
$context["user"], "id", array()), "selected" => ($this->getAttribute(            // line 127
(isset($context["context"]) ? $context["context"] : null), "contentowner", array()) && ($this->getAttribute($context["user"], "id", array()) == $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contentowner", array()), "id", array()))));
            // line 129
            echo "                <option";
            echo $context["macro"]->getattr((isset($context["attr_opt"]) ? $context["attr_opt"] : null));
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "displayname", array()), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "        </select>
    </div>
</div>

";
        // line 135
        if ($this->env->getExtension('Bolt')->isChangelogEnabled()) {
            // line 136
            echo "    <div class=\"form-group\">
        ";
            // line 137
            echo $context["macro"]->getlabel($this->env->getExtension('Bolt')->trans("Add a comment:"), "", "col-sm-4 control-label");
            echo "
        <div class=\"col-sm-8\">
            <input";
            // line 139
            echo $context["macro"]->getattr((isset($context["attr_comment"]) ? $context["attr_comment"] : null));
            echo ">
        </div>
    </div>
";
        }
        // line 143
        echo "
";
        // line 144
        if ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "has", array()), "tabs", array())) {
            // line 145
            echo "    ";
            $this->loadTemplate("editcontent/_fields.twig", "editcontent/_meta.twig", 145)->display($context);
        }
    }

    public function getTemplateName()
    {
        return "editcontent/_meta.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 145,  262 => 144,  259 => 143,  252 => 139,  247 => 137,  244 => 136,  242 => 135,  236 => 131,  225 => 129,  223 => 127,  222 => 126,  220 => 125,  216 => 124,  212 => 123,  207 => 121,  200 => 116,  189 => 114,  187 => 112,  186 => 111,  184 => 110,  180 => 109,  176 => 108,  171 => 106,  167 => 104,  161 => 101,  157 => 100,  153 => 99,  149 => 98,  146 => 97,  144 => 96,  137 => 92,  132 => 90,  124 => 85,  119 => 83,  111 => 78,  107 => 77,  102 => 75,  96 => 72,  90 => 69,  86 => 67,  83 => 65,  81 => 60,  80 => 58,  77 => 57,  75 => 54,  74 => 52,  71 => 51,  69 => 47,  68 => 45,  65 => 44,  63 => 41,  62 => 39,  61 => 38,  58 => 37,  56 => 35,  55 => 33,  54 => 32,  51 => 31,  49 => 29,  48 => 24,  45 => 23,  43 => 21,  42 => 15,  39 => 14,  37 => 12,  36 => 9,  33 => 8,  31 => 7,  29 => 6,  27 => 5,  24 => 4,  22 => 3,  19 => 2,);
    }
}
