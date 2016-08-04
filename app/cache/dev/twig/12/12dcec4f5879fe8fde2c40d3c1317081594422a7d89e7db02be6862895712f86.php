<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1c4017dfe6f1b2b55ba2ea26a0badc444c16baff44e7a938c5269dd94072bdda extends Twig_Template
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
        $__internal_470a2e96acd10294e3581033603eb9565d44c320fec447616a80ff9b76ae0d14 = $this->env->getExtension("native_profiler");
        $__internal_470a2e96acd10294e3581033603eb9565d44c320fec447616a80ff9b76ae0d14->enter($__internal_470a2e96acd10294e3581033603eb9565d44c320fec447616a80ff9b76ae0d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_470a2e96acd10294e3581033603eb9565d44c320fec447616a80ff9b76ae0d14->leave($__internal_470a2e96acd10294e3581033603eb9565d44c320fec447616a80ff9b76ae0d14_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c45a40591c9dfaf1835c5138c56abd59bcf408b76b0880ed015a00dc0ae6945c = $this->env->getExtension("native_profiler");
        $__internal_c45a40591c9dfaf1835c5138c56abd59bcf408b76b0880ed015a00dc0ae6945c->enter($__internal_c45a40591c9dfaf1835c5138c56abd59bcf408b76b0880ed015a00dc0ae6945c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c45a40591c9dfaf1835c5138c56abd59bcf408b76b0880ed015a00dc0ae6945c->leave($__internal_c45a40591c9dfaf1835c5138c56abd59bcf408b76b0880ed015a00dc0ae6945c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_059b5941749814e123a4bdac9c700d22d132404fbae45fd3d3e01ef3a6a5a305 = $this->env->getExtension("native_profiler");
        $__internal_059b5941749814e123a4bdac9c700d22d132404fbae45fd3d3e01ef3a6a5a305->enter($__internal_059b5941749814e123a4bdac9c700d22d132404fbae45fd3d3e01ef3a6a5a305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_059b5941749814e123a4bdac9c700d22d132404fbae45fd3d3e01ef3a6a5a305->leave($__internal_059b5941749814e123a4bdac9c700d22d132404fbae45fd3d3e01ef3a6a5a305_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_da8a94ebe3f1e4cb264879340e831761534f56873e7b23938c2d99dfce9ec851 = $this->env->getExtension("native_profiler");
        $__internal_da8a94ebe3f1e4cb264879340e831761534f56873e7b23938c2d99dfce9ec851->enter($__internal_da8a94ebe3f1e4cb264879340e831761534f56873e7b23938c2d99dfce9ec851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_da8a94ebe3f1e4cb264879340e831761534f56873e7b23938c2d99dfce9ec851->leave($__internal_da8a94ebe3f1e4cb264879340e831761534f56873e7b23938c2d99dfce9ec851_prof);

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
