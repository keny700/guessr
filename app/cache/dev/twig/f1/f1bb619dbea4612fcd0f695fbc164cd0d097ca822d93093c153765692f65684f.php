<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_72b01c32ab41c385498ed4836fd9cb5790720a116911d81a5b292810d3674d53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7eae508f695ecea4e658488d4f6ff6f949cbd930bc4df42a334c2986397fb2d3 = $this->env->getExtension("native_profiler");
        $__internal_7eae508f695ecea4e658488d4f6ff6f949cbd930bc4df42a334c2986397fb2d3->enter($__internal_7eae508f695ecea4e658488d4f6ff6f949cbd930bc4df42a334c2986397fb2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7eae508f695ecea4e658488d4f6ff6f949cbd930bc4df42a334c2986397fb2d3->leave($__internal_7eae508f695ecea4e658488d4f6ff6f949cbd930bc4df42a334c2986397fb2d3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_34d0f7adab7a58a19c3b19b5844869bd3ddf222d05db28a4b293d826c3f32ce7 = $this->env->getExtension("native_profiler");
        $__internal_34d0f7adab7a58a19c3b19b5844869bd3ddf222d05db28a4b293d826c3f32ce7->enter($__internal_34d0f7adab7a58a19c3b19b5844869bd3ddf222d05db28a4b293d826c3f32ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_34d0f7adab7a58a19c3b19b5844869bd3ddf222d05db28a4b293d826c3f32ce7->leave($__internal_34d0f7adab7a58a19c3b19b5844869bd3ddf222d05db28a4b293d826c3f32ce7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4036dab04126919b09bc952b73d3337f8aef904f9e4e5273eb5f6eb0bd2a4396 = $this->env->getExtension("native_profiler");
        $__internal_4036dab04126919b09bc952b73d3337f8aef904f9e4e5273eb5f6eb0bd2a4396->enter($__internal_4036dab04126919b09bc952b73d3337f8aef904f9e4e5273eb5f6eb0bd2a4396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4036dab04126919b09bc952b73d3337f8aef904f9e4e5273eb5f6eb0bd2a4396->leave($__internal_4036dab04126919b09bc952b73d3337f8aef904f9e4e5273eb5f6eb0bd2a4396_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7bb4f82c952e7e4d956aefbbdb204267f1cf1ac4f1675a6e130c34ad35f91979 = $this->env->getExtension("native_profiler");
        $__internal_7bb4f82c952e7e4d956aefbbdb204267f1cf1ac4f1675a6e130c34ad35f91979->enter($__internal_7bb4f82c952e7e4d956aefbbdb204267f1cf1ac4f1675a6e130c34ad35f91979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7bb4f82c952e7e4d956aefbbdb204267f1cf1ac4f1675a6e130c34ad35f91979->leave($__internal_7bb4f82c952e7e4d956aefbbdb204267f1cf1ac4f1675a6e130c34ad35f91979_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
