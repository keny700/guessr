<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_1826579f8aa9acda77d781cdb1b8dc14d21609f5d327da38c962429f7d7953ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_559a555fb766af640b96ea777aad35e2bec7dc9ebc5995b8fff67c91fe2770eb = $this->env->getExtension("native_profiler");
        $__internal_559a555fb766af640b96ea777aad35e2bec7dc9ebc5995b8fff67c91fe2770eb->enter($__internal_559a555fb766af640b96ea777aad35e2bec7dc9ebc5995b8fff67c91fe2770eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_559a555fb766af640b96ea777aad35e2bec7dc9ebc5995b8fff67c91fe2770eb->leave($__internal_559a555fb766af640b96ea777aad35e2bec7dc9ebc5995b8fff67c91fe2770eb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_677045885bb9d5571cd5277f7ccfe01fe4a0f8f6af5478e2572fd2254964ba04 = $this->env->getExtension("native_profiler");
        $__internal_677045885bb9d5571cd5277f7ccfe01fe4a0f8f6af5478e2572fd2254964ba04->enter($__internal_677045885bb9d5571cd5277f7ccfe01fe4a0f8f6af5478e2572fd2254964ba04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_677045885bb9d5571cd5277f7ccfe01fe4a0f8f6af5478e2572fd2254964ba04->leave($__internal_677045885bb9d5571cd5277f7ccfe01fe4a0f8f6af5478e2572fd2254964ba04_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
