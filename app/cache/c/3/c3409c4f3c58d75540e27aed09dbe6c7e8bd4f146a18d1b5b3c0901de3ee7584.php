<?php

/* editcontent/fields/_image.twig */
class __TwigTemplate_c3409c4f3c58d75540e27aed09dbe6c7e8bd4f146a18d1b5b3c0901de3ee7584 extends Twig_Template
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
        $context["option"] = array("class" => (($this->getAttribute(        // line 4
(isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array()), "")) : ("")), "label" => (($this->getAttribute(        // line 5
(isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()), "")) : ("")), "extensions" => (($this->getAttribute(        // line 6
(isset($context["field"]) ? $context["field"] : null), "extensions", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "extensions", array()), array())) : (array())), "attrib" => ((($this->getAttribute(        // line 7
(isset($context["field"]) ? $context["field"] : null), "attrib", array(), "any", true, true) && twig_test_iterable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "attrib", array())))) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "attrib", array())) : (array(0 => (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "attrib", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "attrib", array()), null)) : (null))))), "upload" => (($this->getAttribute(        // line 8
(isset($context["field"]) ? $context["field"] : null), "upload", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "upload", array()), "")) : ("")), "can_upload" => $this->getAttribute(        // line 9
(isset($context["field"]) ? $context["field"] : null), "canUpload", array()), "info" => (($this->getAttribute(        // line 10
(isset($context["field"]) ? $context["field"] : null), "info", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "info", array()), "info.upload.image")) : ("info.upload.image")));
        // line 12
        echo "
";
        // line 14
        echo "
";
        // line 15
        $context["preview_w"] = 200;
        // line 16
        $context["preview_h"] = 150;
        // line 17
        echo "
";
        // line 19
        $context["image"] = ((twig_test_iterable($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method"))) ? ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method")) : (array("file" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method"))));
        // line 20
        echo "
";
        // line 21
        $context["attr_inp"] = array("class" => ($this->getAttribute(        // line 22
(isset($context["option"]) ? $context["option"] : null), "class", array()) . " imageinput wide"), "id" => ("field-" .         // line 23
(isset($context["key"]) ? $context["key"] : null)), "name" => (        // line 24
(isset($context["name"]) ? $context["name"] : null) . "[file]"), "type" => "text", "placeholder" => ((($this->env->getExtension('Bolt')->trans("field.general.allowed-filetypes") . " ") . twig_join_filter($this->getAttribute(        // line 26
(isset($context["option"]) ? $context["option"] : null), "extensions", array()), ", ")) . " …"), "value" => (($this->getAttribute(        // line 27
(isset($context["image"]) ? $context["image"] : null), "file", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "file", array()), "")) : ("")));
        // line 29
        echo "
";
        // line 30
        $context["attr_upload"] = array("accept" => (($this->getAttribute(        // line 31
(isset($context["option"]) ? $context["option"] : null), "extensions", array())) ? (("." . twig_join_filter($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "extensions", array()), ",."))) : ("")), "data_upload" => twig_jsonencode_filter(array("type" => "Image", "key" =>         // line 32
(isset($context["key"]) ? $context["key"] : null), "width" => (isset($context["preview_w"]) ? $context["preview_w"] : null), "height" => (isset($context["preview_h"]) ? $context["preview_h"] : null))), "data_url" => $this->env->getExtension('routing')->getUrl("upload", array("handler" => $this->getAttribute(        // line 33
(isset($context["option"]) ? $context["option"] : null), "upload", array()))), "id" => ("fileupload-" .         // line 34
(isset($context["key"]) ? $context["key"] : null)), "name" => "files[]", "type" => "file");
        // line 38
        echo "

";
        // line 41
        echo "
";
        // line 42
        $context["block"] = $this;
        // line 43
        echo "
";
        // line 54
        echo "
";
        // line 81
        echo "
";
        // line 87
        echo "
";
        // line 96
        echo "
";
        // line 98
        echo "
<fieldset class=\"image\">
    <div class=\"dropzone clearfix\" id=\"dropzone-";
        // line 100
        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
        echo "\">
    <label class=\"col-xs-12 control-label\">";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "infopop", array(0 => (isset($context["labelkey"]) ? $context["labelkey"] : null), 1 => $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "info", array())), "method"), "html", null, true);
        echo "</label>
    <div class=\"col-xs-8\">
        <div class=\"form-group\">
            <div class=\"col-sm-12\">
                ";
        // line 105
        echo $context["block"]->getimagepath((isset($context["labelkey"]) ? $context["labelkey"] : null), (isset($context["option"]) ? $context["option"] : null), (isset($context["image"]) ? $context["image"] : null), (isset($context["attr_inp"]) ? $context["attr_inp"] : null));
        echo "
            </div>
        </div>
        ";
        // line 108
        echo $context["block"]->getattributes((isset($context["key"]) ? $context["key"] : null), (isset($context["option"]) ? $context["option"] : null), (isset($context["image"]) ? $context["image"] : null));
        echo "
        ";
        // line 109
        $context["can_upload"] = ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "can_upload", array()) && $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "can_upload", array()));
        // line 110
        echo "        ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "upload_buttons", array(0 => "image", 1 => (isset($context["key"]) ? $context["key"] : null), 2 => (isset($context["attr_upload"]) ? $context["attr_upload"] : null), 3 => $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "upload", array()), 4 => (isset($context["can_upload"]) ? $context["can_upload"] : null)), "method"), "html", null, true);
        echo "
        ";
        // line 111
        echo $context["block"]->getprogress((isset($context["key"]) ? $context["key"] : null));
        echo "
        ";
        // line 112
        echo $context["block"]->getserverselect((isset($context["key"]) ? $context["key"] : null), $this->env->getExtension('Bolt')->trans("Cancel"));
        echo "
    </div>

    <div class=\"col-xs-4\">
        <div class=\"right-on-large\">";
        // line 117
        echo "            <label>";
        echo $this->env->getExtension('Bolt')->trans("Preview");
        echo "</label>
            <div class=\"content-preview imageholder\" id=\"thumbnail-";
        // line 118
        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
        echo "\" style=\"max-width:";
        echo twig_escape_filter($this->env, (isset($context["preview_w"]) ? $context["preview_w"] : null), "html", null, true);
        echo "px;max-height:";
        echo twig_escape_filter($this->env, (isset($context["preview_h"]) ? $context["preview_h"] : null), "html", null, true);
        echo "px\">
                ";
        // line 119
        if (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method") != "")) {
            // line 120
            echo "                    ";
            $context["preview_path"] = $this->env->getExtension('Bolt')->thumbnail($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "file", array()), (isset($context["preview_w"]) ? $context["preview_w"] : null), (isset($context["preview_h"]) ? $context["preview_h"] : null), "c");
            // line 121
            echo "                ";
        } else {
            // line 122
            echo "                    ";
            $context["preview_path"] = ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "paths", array()), "app", array()) . "view/img/default_empty_4x3.png");
            // line 123
            echo "                ";
        }
        // line 124
        echo "                ";
        // line 125
        echo "                <img src=\"";
        echo twig_escape_filter($this->env, (isset($context["preview_path"]) ? $context["preview_path"] : null), "html", null, true);
        echo "\" alt=\"Preview\">
            </div>
        </div>
    </div>
</div>

</fieldset>
";
    }

    // line 44
    public function getimagepath($__labelkey__ = null, $__option__ = null, $__image__ = null, $__attr_inp__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "labelkey" => $__labelkey__,
            "option" => $__option__,
            "image" => $__image__,
            "attr_inp" => $__attr_inp__,
            "varargs" => func_num_args() > 4 ? array_slice(func_get_args(), 4) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 45
            echo "    ";
            $context["macro"] = $this->loadTemplate("_macro/_macro.twig", "editcontent/fields/_image.twig", 45);
            // line 46
            echo "    ";
            // line 51
            echo "    <label>";
            echo $this->env->getExtension('Bolt')->trans("Path to image file");
            echo "</label>
    <input";
            // line 52
            echo $context["macro"]->getattr((isset($context["attr_inp"]) ? $context["attr_inp"] : null));
            echo ">
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 55
    public function getattributes($__key__ = null, $__option__ = null, $__image__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "key" => $__key__,
            "option" => $__option__,
            "image" => $__image__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 56
            echo "    ";
            if ($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "attrib", array())) {
                // line 57
                echo "        ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "attrib", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attrib"]) {
                    // line 58
                    echo "            ";
                    if ((twig_lower_filter($this->env, $context["attrib"]) == "title")) {
                        // line 59
                        echo "                <div class=\"form-group\">
                    <div class=\"col-sm-2\">
                        <label for=\"";
                        // line 61
                        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                        echo "[title]\">";
                        echo $this->env->getExtension('Bolt')->trans("Title");
                        echo "</label>
                    </div>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"";
                        // line 64
                        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                        echo "[title]\" id=\"";
                        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                        echo "-title\" value=\"";
                        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "title", array()), "")) : ("")), "html", null, true);
                        echo "\" class=\"form-control\">
                    </div>
                </div>
            ";
                    }
                    // line 68
                    echo "            ";
                    if (twig_in_filter(twig_lower_filter($this->env, $context["attrib"]), array(0 => "alt text", 1 => "alt"))) {
                        // line 69
                        echo "                <div class=\"form-group\">
                    <div class=\"col-sm-2\">
                        <label for=\"";
                        // line 71
                        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                        echo "[alt]\">";
                        echo $this->env->getExtension('Bolt')->trans("Alt");
                        echo "</label>
                    </div>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"";
                        // line 74
                        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                        echo "[alt]\" id=\"";
                        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                        echo "-alt\" value=\"";
                        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "alt", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "alt", array()), "")) : ("")), "html", null, true);
                        echo "\" class=\"form-control\">
                    </div>
                </div>
            ";
                    }
                    // line 78
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attrib'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 79
                echo "    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 82
    public function getprogress($__key__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "key" => $__key__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 83
            echo "    <div class=\"progress file-progress progress-striped active\" id=\"progress-";
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
            echo "\">
        <div class=\"progress-bar\" style=\"width: 0%;\"></div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 89
    public function getserverselect($__key__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "key" => $__key__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 90
            echo "    <div class=\"modal fade\" id=\"selectModal-";
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\"></div>
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "editcontent/fields/_image.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 90,  332 => 89,  316 => 83,  304 => 82,  292 => 79,  286 => 78,  275 => 74,  267 => 71,  263 => 69,  260 => 68,  249 => 64,  241 => 61,  237 => 59,  234 => 58,  229 => 57,  226 => 56,  212 => 55,  199 => 52,  194 => 51,  192 => 46,  189 => 45,  174 => 44,  161 => 125,  159 => 124,  156 => 123,  153 => 122,  150 => 121,  147 => 120,  145 => 119,  137 => 118,  132 => 117,  125 => 112,  121 => 111,  116 => 110,  114 => 109,  110 => 108,  104 => 105,  97 => 101,  93 => 100,  89 => 98,  86 => 96,  83 => 87,  80 => 81,  77 => 54,  74 => 43,  72 => 42,  69 => 41,  65 => 38,  63 => 34,  62 => 33,  61 => 32,  60 => 31,  59 => 30,  56 => 29,  54 => 27,  53 => 26,  52 => 24,  51 => 23,  50 => 22,  49 => 21,  46 => 20,  44 => 19,  41 => 17,  39 => 16,  37 => 15,  34 => 14,  31 => 12,  29 => 10,  28 => 9,  27 => 8,  26 => 7,  25 => 6,  24 => 5,  23 => 4,  22 => 3,  19 => 2,);
    }
}
