<?php

/* PressenterAgendaBundle::base.html.twig */
class __TwigTemplate_098ef6fdbb03a99f3a4fded9583d10b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'toolbar' => array($this, 'block_toolbar'),
            'maincontent' => array($this, 'block_maincontent'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
  </head>
  <body>
  ";
        // line 15
        $this->displayBlock('toolbar', $context, $blocks);
        echo "    
  ";
        // line 16
        $this->displayBlock('maincontent', $context, $blocks);
        // line 17
        echo "  </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pressenteragenda/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    ";
    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        // line 10
        echo "      <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js\"></script>
    ";
    }

    // line 15
    public function block_toolbar($context, array $blocks = array())
    {
    }

    // line 16
    public function block_maincontent($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "PressenterAgendaBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 16,  81 => 15,  76 => 10,  73 => 9,  66 => 7,  63 => 6,  58 => 5,  52 => 17,  50 => 16,  46 => 15,  39 => 12,  36 => 9,  34 => 6,  30 => 5,  24 => 1,  53 => 13,  45 => 8,  41 => 7,  35 => 4,  31 => 3,  28 => 2,);
    }
}
