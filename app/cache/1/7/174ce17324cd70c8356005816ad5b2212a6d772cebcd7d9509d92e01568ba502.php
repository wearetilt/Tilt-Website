<?php

/* _sub/_editable_record_list.twig */
class __TwigTemplate_174ce17324cd70c8356005816ad5b2212a6d772cebcd7d9509d92e01568ba502 extends Twig_Template
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
    }

    // line 1
    public function geteditable_record_list($__contenttype__ = null, $__multiplecontent__ = null, $__permissions__ = null, $__extra_classes__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "contenttype" => $__contenttype__,
            "multiplecontent" => $__multiplecontent__,
            "permissions" => $__permissions__,
            "extra_classes" => $__extra_classes__,
            "varargs" => func_num_args() > 4 ? array_slice(func_get_args(), 4) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            $context["lastgroup"] = "----";
            // line 3
            $context["any_deletable"] = false;
            // line 4
            $context["any_editable"] = false;
            // line 5
            $context["includes"] = array(0 => (("custom/listing/" . $this->getAttribute(            // line 6
(isset($context["contenttype"]) ? $context["contenttype"] : null), "slug", array())) . ".twig"), 1 => "_sub/_listing.twig");
            // line 9
            echo "
";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->addData("recordlisting", array("delete_one" => $this->env->getExtension('Bolt')->trans("Are you sure you wish to delete this record? There is no undo."), "delete_mult" => $this->env->getExtension('Bolt')->trans("Are you sure you wish to delete these records? There is no undo."))), "html", null, true);
            // line 13
            echo "

<table class=\"";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["extra_classes"]) ? $context["extra_classes"] : null), "html", null, true);
            echo " dashboardlisting\" data-contenttype=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "slug", array()), "html", null, true);
            echo "\" data-bolt_csrf_token=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->token(), "html", null, true);
            echo "\">
    ";
            // line 16
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["multiplecontent"]) ? $context["multiplecontent"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                // line 17
                echo "        ";
                $context["editable"] = $this->getAttribute((isset($context["permissions"]) ? $context["permissions"] : null), "edit", array());
                // line 18
                echo "        ";
                if ((isset($context["editable"]) ? $context["editable"] : null)) {
                    // line 19
                    echo "            ";
                    $context["any_editable"] = true;
                    // line 20
                    echo "        ";
                }
                // line 21
                echo "        ";
                $context["deletable"] = $this->getAttribute((isset($context["permissions"]) ? $context["permissions"] : null), "delete", array());
                // line 22
                echo "        ";
                if ((isset($context["deletable"]) ? $context["deletable"] : null)) {
                    // line 23
                    echo "            ";
                    $context["any_deletable"] = true;
                    // line 24
                    echo "        ";
                }
                // line 25
                echo "        ";
                $this->loadTemplate((isset($context["includes"]) ? $context["includes"] : null), "_sub/_editable_record_list.twig", 25)->display(array_merge($context, array("excerptlength" => 380, "thumbsize" => 80, "compact" => false)));
                // line 26
                echo "        ";
                if (($this->getAttribute($this->getAttribute($context["content"], "group", array(), "any", false, true), "name", array(), "any", true, true) && ($this->getAttribute($context["loop"], "first", array()) || ($this->getAttribute($this->getAttribute($context["content"], "group", array()), "name", array()) != (isset($context["lastgroup"]) ? $context["lastgroup"] : null))))) {
                    // line 27
                    echo "            ";
                    $context["lastgroup"] = $this->getAttribute($this->getAttribute($context["content"], "group", array()), "name", array());
                    // line 28
                    echo "        ";
                }
                // line 29
                echo "    ";
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
                // line 30
                echo "        ";
                echo $this->env->getExtension('Bolt')->trans("contenttypes.generic.none-available", array("%contenttypes%" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "slug", array())));
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "</table>

";
            // line 34
            if ((isset($context["any_deletable"]) ? $context["any_deletable"] : null)) {
                // line 35
                echo "    <div class=\"btn-group\">
        <a href=\"#\" class=\"btn btn-silent-danger deletechosen showifchosen\" style=\"display:none;\">
            <i class=\"fa fa-trash\"></i>
            ";
                // line 38
                echo $this->env->getExtension('Bolt')->trans("Delete selected");
                echo "
        </a>
    </div>
";
            }
            // line 42
            echo "
";
            // line 59
            echo "
";
            // line 60
            $context["__internal_32749e0b789338eb01e029b92987f60cb236e10f65d4756a4981e3a491e749bb"] = $this->loadTemplate("_macro/_pager.twig", "_sub/_editable_record_list.twig", 60);
            // line 61
            echo $context["__internal_32749e0b789338eb01e029b92987f60cb236e10f65d4756a4981e3a491e749bb"]->getpager($this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "slug", array()));
            echo "

";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "_sub/_editable_record_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 61,  162 => 60,  159 => 59,  156 => 42,  149 => 38,  144 => 35,  142 => 34,  138 => 32,  129 => 30,  116 => 29,  113 => 28,  110 => 27,  107 => 26,  104 => 25,  101 => 24,  98 => 23,  95 => 22,  92 => 21,  89 => 20,  86 => 19,  83 => 18,  80 => 17,  62 => 16,  54 => 15,  50 => 13,  48 => 10,  45 => 9,  43 => 6,  42 => 5,  40 => 4,  38 => 3,  36 => 2,  21 => 1,);
    }
}
