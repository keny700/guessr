<?php

/* default/home.html.twig */
class __TwigTemplate_331d2125f5af8998edfdd9c1cfaf4e80a13cbf2a4344bc7316ecded65cff131c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/home.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b8a192af1582d2c5d24236a919e4994600738aead836d662dbc9964cbd79e3d = $this->env->getExtension("native_profiler");
        $__internal_2b8a192af1582d2c5d24236a919e4994600738aead836d662dbc9964cbd79e3d->enter($__internal_2b8a192af1582d2c5d24236a919e4994600738aead836d662dbc9964cbd79e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b8a192af1582d2c5d24236a919e4994600738aead836d662dbc9964cbd79e3d->leave($__internal_2b8a192af1582d2c5d24236a919e4994600738aead836d662dbc9964cbd79e3d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b95713e2ba0fce38a31408b0a970328dd96dc8d620fc4ccb69011ab644938da3 = $this->env->getExtension("native_profiler");
        $__internal_b95713e2ba0fce38a31408b0a970328dd96dc8d620fc4ccb69011ab644938da3->enter($__internal_b95713e2ba0fce38a31408b0a970328dd96dc8d620fc4ccb69011ab644938da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h1>Welcome to Survivor</h1>

";
        
        $__internal_b95713e2ba0fce38a31408b0a970328dd96dc8d620fc4ccb69011ab644938da3->leave($__internal_b95713e2ba0fce38a31408b0a970328dd96dc8d620fc4ccb69011ab644938da3_prof);

    }

    public function getTemplateName()
    {
        return "default/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <h1>Welcome to Survivor</h1>*/
/* */
/* {% endblock %}*/
