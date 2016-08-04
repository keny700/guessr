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
        $__internal_ffd5ca1fd2648463909e2a8a2067c8037bb27d175c58595961548fdf1b6510ed = $this->env->getExtension("native_profiler");
        $__internal_ffd5ca1fd2648463909e2a8a2067c8037bb27d175c58595961548fdf1b6510ed->enter($__internal_ffd5ca1fd2648463909e2a8a2067c8037bb27d175c58595961548fdf1b6510ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffd5ca1fd2648463909e2a8a2067c8037bb27d175c58595961548fdf1b6510ed->leave($__internal_ffd5ca1fd2648463909e2a8a2067c8037bb27d175c58595961548fdf1b6510ed_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fafbbe56fbb6413ed4a5e971d1c2524771719cace170a977c3d3a0a9e13ec24b = $this->env->getExtension("native_profiler");
        $__internal_fafbbe56fbb6413ed4a5e971d1c2524771719cace170a977c3d3a0a9e13ec24b->enter($__internal_fafbbe56fbb6413ed4a5e971d1c2524771719cace170a977c3d3a0a9e13ec24b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"page_choix_missions\">
    <h1>Welcome to Survivor</h1>
    <div class=\"row container-fluid\">
    \t<div class=\"col-md-12 missions_line\">
    \t\t<div class=\"col-md-3 col-md-offset-2 mission_block\"></div>
    \t\t<div class=\"col-md-3 col-md-offset-2 mission_block\"></div>
\t\t</div>
    \t<div class=\"col-md-12 missions_line\">
    \t\t<div class=\"col-md-3 col-md-offset-2 mission_block\"></div>
    \t\t<div class=\"col-md-3 col-md-offset-2 mission_block\"></div>
\t\t</div>
\t</div>
</div>

";
        
        $__internal_fafbbe56fbb6413ed4a5e971d1c2524771719cace170a977c3d3a0a9e13ec24b->leave($__internal_fafbbe56fbb6413ed4a5e971d1c2524771719cace170a977c3d3a0a9e13ec24b_prof);

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
/* <div class="page_choix_missions">*/
/*     <h1>Welcome to Survivor</h1>*/
/*     <div class="row container-fluid">*/
/*     	<div class="col-md-12 missions_line">*/
/*     		<div class="col-md-3 col-md-offset-2 mission_block"></div>*/
/*     		<div class="col-md-3 col-md-offset-2 mission_block"></div>*/
/* 		</div>*/
/*     	<div class="col-md-12 missions_line">*/
/*     		<div class="col-md-3 col-md-offset-2 mission_block"></div>*/
/*     		<div class="col-md-3 col-md-offset-2 mission_block"></div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* {% endblock %}*/
