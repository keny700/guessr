<?php

/* default/home.html.twig */
class __TwigTemplate_9912e35b9ce3a8863e89b6e6aab42088c4a13110bdf978891bbfc54ba7a19516 extends Twig_Template
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
        $__internal_a9ac4cdba40480a86379007df8791f831b80301df102c988b02cc1134db834e3 = $this->env->getExtension("native_profiler");
        $__internal_a9ac4cdba40480a86379007df8791f831b80301df102c988b02cc1134db834e3->enter($__internal_a9ac4cdba40480a86379007df8791f831b80301df102c988b02cc1134db834e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9ac4cdba40480a86379007df8791f831b80301df102c988b02cc1134db834e3->leave($__internal_a9ac4cdba40480a86379007df8791f831b80301df102c988b02cc1134db834e3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e2de0f8d51dbfaaa5c22480799f21940ed0b5beb7e120ea18472e4cacb6a466d = $this->env->getExtension("native_profiler");
        $__internal_e2de0f8d51dbfaaa5c22480799f21940ed0b5beb7e120ea18472e4cacb6a466d->enter($__internal_e2de0f8d51dbfaaa5c22480799f21940ed0b5beb7e120ea18472e4cacb6a466d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h1>Welcome to Survivor</h1>

";
        
        $__internal_e2de0f8d51dbfaaa5c22480799f21940ed0b5beb7e120ea18472e4cacb6a466d->leave($__internal_e2de0f8d51dbfaaa5c22480799f21940ed0b5beb7e120ea18472e4cacb6a466d_prof);

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
