<?php

/* changelog/_macros.twig */
class __TwigTemplate_baa3d71d7344c7f6a70ee39f2b70cb32dfb260073bd7ac4aba9113e4430f2600 extends Twig_Template
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
        // line 23
        echo "
";
        // line 229
        echo "

";
    }

    // line 1
    public function getchangelog_pager($__currentpage__ = null, $__pagecount__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "currentpage" => $__currentpage__,
            "pagecount" => $__pagecount__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "        <ul class=\"pagination pagination-centered\">
            ";
            // line 3
            if (((isset($context["currentpage"]) ? $context["currentpage"] : null) > 1)) {
                // line 4
                echo "                <li><a href=\"?page=1\"><i style=\"font-weight: bold\" class=\"fa fa-angle-double-left\"></i></a></li>
                <li><a href=\"?page=";
                // line 5
                echo twig_escape_filter($this->env, ((isset($context["currentpage"]) ? $context["currentpage"] : null) - 1), "html", null, true);
                echo "\"><i style=\"font-weight: bold\" class=\"fa fa-angle-left\"></i></a></li>
            ";
            } else {
                // line 7
                echo "                <li class=\"disabled\"><span><i style=\"font-weight: bold\" class=\"fa fa-angle-double-left\"></i></span></li>
                <li class=\"disabled\"><span><i style=\"font-weight: bold\" class=\"fa fa-angle-left\"></i></span></li>
            ";
            }
            // line 10
            echo "
            <li><span>";
            // line 11
            echo $this->env->getExtension('Bolt')->trans("component.changelog-pager.page");
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["currentpage"]) ? $context["currentpage"] : null), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, (isset($context["pagecount"]) ? $context["pagecount"] : null), "html", null, true);
            echo "</span></li>

            ";
            // line 13
            if (((isset($context["currentpage"]) ? $context["currentpage"] : null) < (isset($context["pagecount"]) ? $context["pagecount"] : null))) {
                // line 14
                echo "                <li><a href=\"?page=";
                echo twig_escape_filter($this->env, ((isset($context["currentpage"]) ? $context["currentpage"] : null) + 1), "html", null, true);
                echo "\"><i style=\"font-weight: bold\" class=\"fa fa-angle-right\"></i></a></li>
                <li><a href=\"?page=";
                // line 15
                echo twig_escape_filter($this->env, (isset($context["pagecount"]) ? $context["pagecount"] : null), "html", null, true);
                echo "\"><i style=\"font-weight: bold\" class=\"fa fa-angle-double-right\"></i></a></li>
            ";
            } else {
                // line 17
                echo "                <li class=\"disabled\"><span><i style=\"font-weight: bold\" class=\"fa fa-angle-right\"></i></span></li>
                <li class=\"disabled\"><span><i style=\"font-weight: bold\" class=\"fa fa-angle-double-right\"></i></span></li>
            ";
            }
            // line 20
            echo "        </ul>

";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 24
    public function getchangelog_details($__entry__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "entry" => $__entry__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 25
            echo "    ";
            $context["macro"] = $this->loadTemplate("_macro/_macro.twig", "changelog/_macros.twig", 25);
            // line 26
            echo "
    ";
            // line 27
            $context["preview_w"] = 200;
            // line 28
            echo "    ";
            $context["preview_h"] = 150;
            // line 29
            echo "
    <h3>
        \"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "title", array()), "html", null, true);
            echo "\"
        ";
            // line 32
            echo $this->getAttribute($this, "changelog_mutation", array(0 => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "mutation_type", array())), "method");
            echo "
        ";
            // line 33
            echo $this->env->getExtension('Bolt')->trans("component.changelog-detail.by");
            echo " <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "username", array()), "html", null, true);
            echo "</strong>
    </h3>

    <div class=\"changelog-details\">
        <div class=\"user\">
           <i class=\"icon icon-user\"></i>
        </div>

        <div class=\"body\">
            <div class=\"time\">
                <p>
                    <span>";
            // line 44
            echo $this->getAttribute($this, "changelog_mutation", array(0 => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "mutation_type", array())), "method");
            echo " ";
            echo $context["macro"]->getdatetime($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "date", array()));
            echo "</span>
                    ";
            // line 45
            echo $this->env->getExtension('Bolt')->trans("component.changelog-detail.by");
            echo " <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "username", array()), "html", null, true);
            echo "</strong>
                </p>
                ";
            // line 47
            if ($this->env->getExtension('Bolt')->isChangelogEnabled()) {
                // line 48
                echo "                    ";
                if ((($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "comment", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "comment", array()), false)) : (false))) {
                    echo "<h4><strong>Comment</strong>: ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "comment", array()), "html", null, true);
                    echo "</h4>";
                }
                // line 49
                echo "                ";
            }
            // line 50
            echo "            </div>


            <table class=\"table table-bordered table-condensed table-changelog-details\">
                <thead>
                    <tr>
                        <th>";
            // line 56
            echo $this->env->getExtension('Bolt')->trans("component.changelog-detail.field");
            echo "</th>
                        <th>";
            // line 57
            echo $this->env->getExtension('Bolt')->trans("component.changelog-detail.value-old");
            echo "</th>
                        <th>";
            // line 58
            echo $this->env->getExtension('Bolt')->trans("component.changelog-detail.value-new");
            echo "</th>
                    </tr>
                </thead>
                <tbody>
                ";
            // line 62
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "changedfields", array()));
            foreach ($context['_seq'] as $context["key"] => $context["field"]) {
                // line 63
                echo "                    <tr>
                        <td><strong>";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "label", array()), "html", null, true);
                echo "</strong></td>

                        ";
                // line 66
                if (($this->getAttribute($context["field"], "type", array()) == "normal")) {
                    // line 67
                    echo "                            <td class=\"change-log-item\">
                                ";
                    // line 68
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "html", null, true);
                    echo "
                            </td>
                            <td class=\"change-log-item\">
                                ";
                    // line 71
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "html", null, true);
                    echo "
                            </td>
                        ";
                } elseif (($this->getAttribute(                // line 73
$context["field"], "type", array()) == "html")) {
                    // line 74
                    echo "                            <td class=\"change-log-item\">
                                ";
                    // line 75
                    echo $this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array());
                    echo "
                            </td>
                            <td class=\"change-log-item\">
                                ";
                    // line 78
                    echo $this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array());
                    echo "
                            </td>
                        ";
                } elseif (($this->getAttribute(                // line 80
$context["field"], "type", array()) == "filelist")) {
                    // line 81
                    echo "                            <td class=\"change-log-item\">
                                ";
                    // line 82
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                        // line 83
                        echo "                                    <strong>File:</strong> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "filename", array()), "html", null, true);
                        echo "<br>
                                    <strong>Title:</strong> ";
                        // line 84
                        echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "title", array()), "html", null, true);
                        echo "

                                    ";
                        // line 86
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            // line 87
                            echo "                                    <br><br>
                                    ";
                        }
                        // line 89
                        echo "                                ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 90
                    echo "                            </td>
                            <td class=\"change-log-item\">
                                ";
                    // line 92
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                        // line 93
                        echo "                                    <strong>File:</strong> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "filename", array()), "html", null, true);
                        echo "<br>
                                    <strong>Title:</strong> ";
                        // line 94
                        echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "title", array()), "html", null, true);
                        echo "

                                    ";
                        // line 96
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            // line 97
                            echo "                                    <br><br>
                                    ";
                        }
                        // line 99
                        echo "                                ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 100
                    echo "                            </td>
                        ";
                } elseif (($this->getAttribute(                // line 101
$context["field"], "type", array()) == "geolocation")) {
                    // line 102
                    echo "                            <td class=\"change-log-item\">
                                <strong>Address:</strong> ";
                    // line 103
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "address", array()), "html", null, true);
                    echo "<br>
                                <strong>Latitude:</strong> ";
                    // line 104
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "latitude", array()), "html", null, true);
                    echo "<br>
                                <strong>Longitude:</strong> ";
                    // line 105
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "longitude", array()), "html", null, true);
                    echo "<br>
                                <strong>Matched address:</strong> ";
                    // line 106
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "formatted_address", array()), "html", null, true);
                    echo "
                            </td>
                            <td class=\"change-log-item\">
                                <strong>Address:</strong> ";
                    // line 109
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "address", array()), "html", null, true);
                    echo "<br>
                                <strong>Latitude:</strong> ";
                    // line 110
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "latitude", array()), "html", null, true);
                    echo "<br>
                                <strong>Longitude:</strong> ";
                    // line 111
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "longitude", array()), "html", null, true);
                    echo "<br>
                                <strong>Matched address:</strong> ";
                    // line 112
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "formatted_address", array()), "html", null, true);
                    echo "
                            </td>
                        ";
                } elseif (($this->getAttribute(                // line 114
$context["field"], "type", array()) == "image")) {
                    // line 115
                    echo "                            <td class=\"change-log-item\">
                                <strong>File:</strong> ";
                    // line 116
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "file", array()), "html", null, true);
                    echo "<br>
                                <strong>Title:</strong> ";
                    // line 117
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "title", array()), "html", null, true);
                    echo "<br>
                                <div class=\"content-preview imageholder\" id=\"thumbnail-";
                    // line 118
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">
                                ";
                    // line 119
                    if (($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "file", array()) != "")) {
                        // line 120
                        echo "                                    ";
                        $context["preview_path"] = $this->env->getExtension('Bolt')->thumbnail($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "file", array()), (isset($context["preview_w"]) ? $context["preview_w"] : null), (isset($context["preview_h"]) ? $context["preview_h"] : null), "c");
                        // line 121
                        echo "                                    <img src=\"";
                        echo twig_escape_filter($this->env, (isset($context["preview_path"]) ? $context["preview_path"] : null), "html", null, true);
                        echo "\" alt=\"Preview\" width=\"";
                        echo twig_escape_filter($this->env, (isset($context["preview_w"]) ? $context["preview_w"] : null), "html", null, true);
                        echo "\" height=\"";
                        echo twig_escape_filter($this->env, (isset($context["preview_h"]) ? $context["preview_h"] : null), "html", null, true);
                        echo "\">
                                ";
                    }
                    // line 123
                    echo "                                </div>
                            </td>
                            <td class=\"change-log-item\">
                                <strong>File:</strong> ";
                    // line 126
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "file", array()), "html", null, true);
                    echo "<br>
                                <strong>Title:</strong> ";
                    // line 127
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "title", array()), "html", null, true);
                    echo "<br>
                                <div class=\"content-preview imageholder\" id=\"thumbnail-";
                    // line 128
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">
                                ";
                    // line 129
                    if (($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "file", array()) != "")) {
                        // line 130
                        echo "                                    ";
                        $context["preview_path"] = $this->env->getExtension('Bolt')->thumbnail($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "file", array()), (isset($context["preview_w"]) ? $context["preview_w"] : null), (isset($context["preview_h"]) ? $context["preview_h"] : null), "c");
                        // line 131
                        echo "                                    <img src=\"";
                        echo twig_escape_filter($this->env, (isset($context["preview_path"]) ? $context["preview_path"] : null), "html", null, true);
                        echo "\" alt=\"Preview\" width=\"";
                        echo twig_escape_filter($this->env, (isset($context["preview_w"]) ? $context["preview_w"] : null), "html", null, true);
                        echo "\" height=\"";
                        echo twig_escape_filter($this->env, (isset($context["preview_h"]) ? $context["preview_h"] : null), "html", null, true);
                        echo "\">
                                ";
                    }
                    // line 133
                    echo "                                </div>
                            </td>
                        ";
                } elseif (($this->getAttribute(                // line 135
$context["field"], "type", array()) == "imagelist")) {
                    // line 136
                    echo "                            <td class=\"change-log-item\">
                                ";
                    // line 137
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 138
                        echo "                                    <strong>File:</strong> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "filename", array()), "html", null, true);
                        echo "<br>
                                    <strong>Title:</strong> ";
                        // line 139
                        echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "title", array()), "html", null, true);
                        echo "<br>
                                    <div class=\"content-preview imageholder\" id=\"thumbnail-";
                        // line 140
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "\">
                                    ";
                        // line 141
                        if (($this->getAttribute($context["image"], "filename", array()) != "")) {
                            // line 142
                            echo "                                        ";
                            $context["preview_path"] = $this->env->getExtension('Bolt')->thumbnail($this->getAttribute($context["image"], "filename", array()), (isset($context["preview_w"]) ? $context["preview_w"] : null), (isset($context["preview_h"]) ? $context["preview_h"] : null), "c");
                            // line 143
                            echo "                                        <img src=\"";
                            echo twig_escape_filter($this->env, (isset($context["preview_path"]) ? $context["preview_path"] : null), "html", null, true);
                            echo "\" alt=\"Preview\" width=\"";
                            echo twig_escape_filter($this->env, (isset($context["preview_w"]) ? $context["preview_w"] : null), "html", null, true);
                            echo "\" height=\"";
                            echo twig_escape_filter($this->env, (isset($context["preview_h"]) ? $context["preview_h"] : null), "html", null, true);
                            echo "\">
                                    ";
                        }
                        // line 145
                        echo "                                    </div>

                                    ";
                        // line 147
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            // line 148
                            echo "                                    <br>
                                    ";
                        }
                        // line 150
                        echo "                                ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 151
                    echo "                            </td>
                            <td class=\"change-log-item\">
                                ";
                    // line 153
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 154
                        echo "                                    <strong>File:</strong> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "filename", array()), "html", null, true);
                        echo "<br>
                                    <strong>Title:</strong> ";
                        // line 155
                        echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "title", array()), "html", null, true);
                        echo "<br>
                                    <div class=\"content-preview imageholder\" id=\"thumbnail-";
                        // line 156
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "\">
                                    ";
                        // line 157
                        if (($this->getAttribute($context["image"], "filename", array()) != "")) {
                            // line 158
                            echo "                                        ";
                            $context["preview_path"] = $this->env->getExtension('Bolt')->thumbnail($this->getAttribute($context["image"], "filename", array()), (isset($context["preview_w"]) ? $context["preview_w"] : null), (isset($context["preview_h"]) ? $context["preview_h"] : null), "c");
                            // line 159
                            echo "                                        <img src=\"";
                            echo twig_escape_filter($this->env, (isset($context["preview_path"]) ? $context["preview_path"] : null), "html", null, true);
                            echo "\" alt=\"Preview\" width=\"";
                            echo twig_escape_filter($this->env, (isset($context["preview_w"]) ? $context["preview_w"] : null), "html", null, true);
                            echo "\" height=\"";
                            echo twig_escape_filter($this->env, (isset($context["preview_h"]) ? $context["preview_h"] : null), "html", null, true);
                            echo "\">
                                    ";
                        }
                        // line 161
                        echo "                                    </div>

                                    ";
                        // line 163
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            // line 164
                            echo "                                    <br>
                                    ";
                        }
                        // line 166
                        echo "                                ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 167
                    echo "                            </td>
                        ";
                } elseif ((($this->getAttribute(                // line 168
$context["field"], "type", array()) == "markdown") || ($this->getAttribute($context["field"], "type", array()) == "textarea"))) {
                    // line 169
                    echo "                            <td class=\"change-log-item\">
                                <pre style=\"white-space: pre-wrap; background-color: inherit; border: 0;\">";
                    // line 170
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "html", null, true);
                    echo "</pre>
                            </td>
                            <td class=\"change-log-item\">
                                <pre style=\"white-space: pre-wrap; background-color: inherit; border: 0;\">";
                    // line 173
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "html", null, true);
                    echo "</pre>
                            </td>
                        ";
                } elseif (($this->getAttribute(                // line 175
$context["field"], "type", array()) == "select")) {
                    // line 176
                    echo "                            <td class=\"change-log-item\">
                                ";
                    // line 177
                    if (twig_test_iterable($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()))) {
                        // line 178
                        echo "                                    <ul>
                                    ";
                        // line 179
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["select"]) {
                            // line 180
                            echo "                                        <li>";
                            echo twig_escape_filter($this->env, $context["select"], "html", null, true);
                            echo "</li>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['select'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 182
                        echo "                                    </ul>
                                ";
                    } else {
                        // line 184
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "html", null, true);
                        echo "
                                ";
                    }
                    // line 186
                    echo "                            </td>
                            <td class=\"change-log-item\">
                                ";
                    // line 188
                    if (twig_test_iterable($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()))) {
                        // line 189
                        echo "                                    <ul>
                                    ";
                        // line 190
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["select"]) {
                            // line 191
                            echo "                                        <li>";
                            echo twig_escape_filter($this->env, $context["select"], "html", null, true);
                            echo "</li>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['select'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 193
                        echo "                                    </ul>
                                ";
                    } else {
                        // line 195
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "html", null, true);
                        echo "
                                ";
                    }
                    // line 197
                    echo "                            </td>
                        ";
                } elseif (($this->getAttribute(                // line 198
$context["field"], "type", array()) == "video")) {
                    // line 199
                    echo "                            <td class=\"change-log-item\">
                                <strong>Title:</strong> ";
                    // line 200
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "title", array()), "html", null, true);
                    echo "<br>
                                <strong>URL:</strong> ";
                    // line 201
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "url", array()), "html", null, true);
                    echo "<br>
                                <strong>Size:</strong> ";
                    // line 202
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "width", array()), "html", null, true);
                    echo " x ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "height", array()), "html", null, true);
                    echo "<br>
                                <div class=\"imageholder\" id=\"thumbnail-";
                    // line 203
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">
                                    ";
                    // line 204
                    if ((($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array(), "any", false, true), "render", array(), "any", false, true), "thumbnail", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array(), "any", false, true), "render", array(), "any", false, true), "thumbnail", array()), "")) : (""))) {
                        // line 205
                        echo "                                        <img src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "thumbnail", array()), "html", null, true);
                        echo "\" width=\"200\" height=\"150\">
                                    ";
                    }
                    // line 207
                    echo "                                </div>
                                <div class=\"hidden video\" id=\"";
                    // line 208
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "html", array());
                    echo "</div>
                            </td>
                            <td class=\"change-log-item\">
                                <strong>Title:</strong> ";
                    // line 211
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "title", array()), "html", null, true);
                    echo "<br>
                                <strong>URL:</strong> ";
                    // line 212
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "url", array()), "html", null, true);
                    echo "<br>
                                <strong>Size:</strong> ";
                    // line 213
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "width", array()), "html", null, true);
                    echo " x ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "height", array()), "html", null, true);
                    echo "<br>
                                <div class=\"imageholder\" id=\"thumbnail-";
                    // line 214
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">
                                    ";
                    // line 215
                    if ((($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array(), "any", false, true), "render", array(), "any", false, true), "thumbnail", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array(), "any", false, true), "render", array(), "any", false, true), "thumbnail", array()), "")) : (""))) {
                        // line 216
                        echo "                                        <img src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "thumbnail", array()), "html", null, true);
                        echo "\" width=\"";
                        echo twig_escape_filter($this->env, (isset($context["preview_w"]) ? $context["preview_w"] : null), "html", null, true);
                        echo "\" height=\"";
                        echo twig_escape_filter($this->env, (isset($context["preview_h"]) ? $context["preview_h"] : null), "html", null, true);
                        echo "\">
                                    ";
                    }
                    // line 218
                    echo "                                </div>
                                <div class=\"hidden video\" id=\"";
                    // line 219
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "html", array());
                    echo "</div>
                            </td>
                        ";
                }
                // line 222
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 224
            echo "                </tbody>
            </table>
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 231
    public function getchangelog_mutation($__raw__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "raw" => $__raw__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 232
            echo "    ";
            $context["mapping"] = array("UPDATE" => "changed", "INSERT" => "created", "DELETE" => "deleted", "HOLD" => "put on hold", "PUBLISH" => "published", "DRAFT" => "depublished");
            // line 233
            echo "    ";
            if ($this->getAttribute((isset($context["mapping"]) ? $context["mapping"] : null), (isset($context["raw"]) ? $context["raw"] : null), array(), "array", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mapping"]) ? $context["mapping"] : null), (isset($context["raw"]) ? $context["raw"] : null), array(), "array"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, (isset($context["raw"]) ? $context["raw"] : null), "html", null, true);
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "changelog/_macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  812 => 233,  809 => 232,  797 => 231,  782 => 224,  775 => 222,  767 => 219,  764 => 218,  754 => 216,  752 => 215,  748 => 214,  742 => 213,  738 => 212,  734 => 211,  726 => 208,  723 => 207,  717 => 205,  715 => 204,  711 => 203,  705 => 202,  701 => 201,  697 => 200,  694 => 199,  692 => 198,  689 => 197,  683 => 195,  679 => 193,  670 => 191,  666 => 190,  663 => 189,  661 => 188,  657 => 186,  651 => 184,  647 => 182,  638 => 180,  634 => 179,  631 => 178,  629 => 177,  626 => 176,  624 => 175,  619 => 173,  613 => 170,  610 => 169,  608 => 168,  605 => 167,  591 => 166,  587 => 164,  585 => 163,  581 => 161,  571 => 159,  568 => 158,  566 => 157,  562 => 156,  558 => 155,  553 => 154,  536 => 153,  532 => 151,  518 => 150,  514 => 148,  512 => 147,  508 => 145,  498 => 143,  495 => 142,  493 => 141,  489 => 140,  485 => 139,  480 => 138,  463 => 137,  460 => 136,  458 => 135,  454 => 133,  444 => 131,  441 => 130,  439 => 129,  435 => 128,  431 => 127,  427 => 126,  422 => 123,  412 => 121,  409 => 120,  407 => 119,  403 => 118,  399 => 117,  395 => 116,  392 => 115,  390 => 114,  385 => 112,  381 => 111,  377 => 110,  373 => 109,  367 => 106,  363 => 105,  359 => 104,  355 => 103,  352 => 102,  350 => 101,  347 => 100,  333 => 99,  329 => 97,  327 => 96,  322 => 94,  317 => 93,  300 => 92,  296 => 90,  282 => 89,  278 => 87,  276 => 86,  271 => 84,  266 => 83,  249 => 82,  246 => 81,  244 => 80,  239 => 78,  233 => 75,  230 => 74,  228 => 73,  223 => 71,  217 => 68,  214 => 67,  212 => 66,  207 => 64,  204 => 63,  200 => 62,  193 => 58,  189 => 57,  185 => 56,  177 => 50,  174 => 49,  167 => 48,  165 => 47,  158 => 45,  152 => 44,  136 => 33,  132 => 32,  128 => 31,  124 => 29,  121 => 28,  119 => 27,  116 => 26,  113 => 25,  101 => 24,  88 => 20,  83 => 17,  78 => 15,  73 => 14,  71 => 13,  62 => 11,  59 => 10,  54 => 7,  49 => 5,  46 => 4,  44 => 3,  41 => 2,  28 => 1,  22 => 229,  19 => 23,);
    }
}
