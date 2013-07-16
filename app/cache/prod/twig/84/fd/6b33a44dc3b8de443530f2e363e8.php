<?php

/* PressenterAgendaBundle:Default:index.html.twig */
class __TwigTemplate_84fd6b33a44dc3b8de443530f2e363e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PressenterAgendaBundle::base.html.twig");

        $this->blocks = array(
            'maincontent' => array($this, 'block_maincontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PressenterAgendaBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_maincontent($context, array $blocks = array())
    {
        // line 3
        echo "Hello!
";
    }

    public function getTemplateName()
    {
        return "PressenterAgendaBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,);
    }
}
