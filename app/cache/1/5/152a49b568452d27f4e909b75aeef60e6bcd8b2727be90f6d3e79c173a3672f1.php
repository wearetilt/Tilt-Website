<?php

/* _sub/_listing.twig */
class __TwigTemplate_152a49b568452d27f4e909b75aeef60e6bcd8b2727be90f6d3e79c173a3672f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_base/_listing.twig", "_sub/_listing.twig", 1);
        $this->blocks = array(
            'listing_columns' => array($this, 'block_listing_columns'),
            'listing_header' => array($this, 'block_listing_header'),
            'listing_id' => array($this, 'block_listing_id'),
            'listing_content' => array($this, 'block_listing_content'),
            'listing_meta' => array($this, 'block_listing_meta'),
            'listing_actions' => array($this, 'block_listing_actions'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_base/_listing.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_listing_columns($context, array $blocks = array())
    {
        $this->displayParentBlock("listing_columns", $context, $blocks);
    }

    // line 5
    public function block_listing_header($context, array $blocks = array())
    {
        $this->displayParentBlock("listing_header", $context, $blocks);
    }

    // line 7
    public function block_listing_id($context, array $blocks = array())
    {
        $this->displayParentBlock("listing_id", $context, $blocks);
    }

    // line 9
    public function block_listing_content($context, array $blocks = array())
    {
        $this->displayParentBlock("listing_content", $context, $blocks);
    }

    // line 11
    public function block_listing_meta($context, array $blocks = array())
    {
        $this->displayParentBlock("listing_meta", $context, $blocks);
    }

    // line 13
    public function block_listing_actions($context, array $blocks = array())
    {
        $this->displayParentBlock("listing_actions", $context, $blocks);
    }

    public function getTemplateName()
    {
        return "_sub/_listing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 13,  57 => 11,  51 => 9,  45 => 7,  39 => 5,  33 => 3,  11 => 1,);
    }
}
