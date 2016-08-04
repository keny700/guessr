<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e5b974a4b5546c791367808bce423fab5a2958d08d58730647f8c5e38382a5a7 extends Twig_Template
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
        $__internal_8fcc42fccfe335a34aad31c3f1441c5b827a68e40c562facc43bd2376425f6ee = $this->env->getExtension("native_profiler");
        $__internal_8fcc42fccfe335a34aad31c3f1441c5b827a68e40c562facc43bd2376425f6ee->enter($__internal_8fcc42fccfe335a34aad31c3f1441c5b827a68e40c562facc43bd2376425f6ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fcc42fccfe335a34aad31c3f1441c5b827a68e40c562facc43bd2376425f6ee->leave($__internal_8fcc42fccfe335a34aad31c3f1441c5b827a68e40c562facc43bd2376425f6ee_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c11c05308fc986b8539d34f9eab848d872f012dc8a493158adbc9c5e8e050960 = $this->env->getExtension("native_profiler");
        $__internal_c11c05308fc986b8539d34f9eab848d872f012dc8a493158adbc9c5e8e050960->enter($__internal_c11c05308fc986b8539d34f9eab848d872f012dc8a493158adbc9c5e8e050960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c11c05308fc986b8539d34f9eab848d872f012dc8a493158adbc9c5e8e050960->leave($__internal_c11c05308fc986b8539d34f9eab848d872f012dc8a493158adbc9c5e8e050960_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e0f9fa98a4f4e92006fbaf8480127429f10b349c5ac6357f547e30376a96b8f5 = $this->env->getExtension("native_profiler");
        $__internal_e0f9fa98a4f4e92006fbaf8480127429f10b349c5ac6357f547e30376a96b8f5->enter($__internal_e0f9fa98a4f4e92006fbaf8480127429f10b349c5ac6357f547e30376a96b8f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e0f9fa98a4f4e92006fbaf8480127429f10b349c5ac6357f547e30376a96b8f5->leave($__internal_e0f9fa98a4f4e92006fbaf8480127429f10b349c5ac6357f547e30376a96b8f5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cc088da8d712b32533b0aa2f2e9bf157029687c454ce090e55d983a8daa29921 = $this->env->getExtension("native_profiler");
        $__internal_cc088da8d712b32533b0aa2f2e9bf157029687c454ce090e55d983a8daa29921->enter($__internal_cc088da8d712b32533b0aa2f2e9bf157029687c454ce090e55d983a8daa29921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cc088da8d712b32533b0aa2f2e9bf157029687c454ce090e55d983a8daa29921->leave($__internal_cc088da8d712b32533b0aa2f2e9bf157029687c454ce090e55d983a8daa29921_prof);

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
