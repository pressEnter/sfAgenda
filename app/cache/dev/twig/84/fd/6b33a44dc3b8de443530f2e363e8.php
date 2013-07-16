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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["search"]) ? $context["search"] : $this->getContext($context, "search")), 'form_start');
        echo "
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["search"]) ? $context["search"] : $this->getContext($context, "search")), 'errors');
        echo "

    <div>
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search"]) ? $context["search"] : $this->getContext($context, "search")), "q"), 'errors');
        echo "
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search"]) ? $context["search"] : $this->getContext($context, "search")), "q"), 'widget');
        echo "
    </div>

<input type=\"submit\" />

";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["search"]) ? $context["search"] : $this->getContext($context, "search")), 'form_end');
        echo "
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
        return array (  53 => 13,  45 => 8,  41 => 7,  35 => 4,  31 => 3,  28 => 2,);
    }
}
