<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d69b3032bd1bf0b94c91a335fe0c848cfe5aba853d8a207f665bfac94bd0a641 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c6877bfce0e86c060954b2f942e4eae3b16dfeef85671e765545377e904a9daa = $this->env->getExtension("native_profiler");
        $__internal_c6877bfce0e86c060954b2f942e4eae3b16dfeef85671e765545377e904a9daa->enter($__internal_c6877bfce0e86c060954b2f942e4eae3b16dfeef85671e765545377e904a9daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6877bfce0e86c060954b2f942e4eae3b16dfeef85671e765545377e904a9daa->leave($__internal_c6877bfce0e86c060954b2f942e4eae3b16dfeef85671e765545377e904a9daa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_44b678b91b8571c59877031da2092a3c873b15681d47a67de62b05cb3f3f26e4 = $this->env->getExtension("native_profiler");
        $__internal_44b678b91b8571c59877031da2092a3c873b15681d47a67de62b05cb3f3f26e4->enter($__internal_44b678b91b8571c59877031da2092a3c873b15681d47a67de62b05cb3f3f26e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_44b678b91b8571c59877031da2092a3c873b15681d47a67de62b05cb3f3f26e4->leave($__internal_44b678b91b8571c59877031da2092a3c873b15681d47a67de62b05cb3f3f26e4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_52d0ac4fe4cde5e70450aac2de349b85001371e79a4fabe4e9be50e2a85c44a4 = $this->env->getExtension("native_profiler");
        $__internal_52d0ac4fe4cde5e70450aac2de349b85001371e79a4fabe4e9be50e2a85c44a4->enter($__internal_52d0ac4fe4cde5e70450aac2de349b85001371e79a4fabe4e9be50e2a85c44a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_52d0ac4fe4cde5e70450aac2de349b85001371e79a4fabe4e9be50e2a85c44a4->leave($__internal_52d0ac4fe4cde5e70450aac2de349b85001371e79a4fabe4e9be50e2a85c44a4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_44a4765dcbebcec4cbfdcb913069b6965e64b7728cc33a797cac06b5a7ca13dd = $this->env->getExtension("native_profiler");
        $__internal_44a4765dcbebcec4cbfdcb913069b6965e64b7728cc33a797cac06b5a7ca13dd->enter($__internal_44a4765dcbebcec4cbfdcb913069b6965e64b7728cc33a797cac06b5a7ca13dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_44a4765dcbebcec4cbfdcb913069b6965e64b7728cc33a797cac06b5a7ca13dd->leave($__internal_44a4765dcbebcec4cbfdcb913069b6965e64b7728cc33a797cac06b5a7ca13dd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
