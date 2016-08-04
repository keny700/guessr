<?php

/* default/mission.html.twig */
class __TwigTemplate_97049da608d58a8c7d16ee1eccfcad51f2d72f423b80c750b91310bd28d196d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/mission.html.twig", 1);
        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86da0eac4888af00cd10cf1aa5782e2b73d3116572a132dc984dcbad9c7df428 = $this->env->getExtension("native_profiler");
        $__internal_86da0eac4888af00cd10cf1aa5782e2b73d3116572a132dc984dcbad9c7df428->enter($__internal_86da0eac4888af00cd10cf1aa5782e2b73d3116572a132dc984dcbad9c7df428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/mission.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86da0eac4888af00cd10cf1aa5782e2b73d3116572a132dc984dcbad9c7df428->leave($__internal_86da0eac4888af00cd10cf1aa5782e2b73d3116572a132dc984dcbad9c7df428_prof);

    }

    // line 3
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_c89e1fae836fd4d7878fa75e6635a8fd3a85ddac7a3df42341d451743481934e = $this->env->getExtension("native_profiler");
        $__internal_c89e1fae836fd4d7878fa75e6635a8fd3a85ddac7a3df42341d451743481934e->enter($__internal_c89e1fae836fd4d7878fa75e6635a8fd3a85ddac7a3df42341d451743481934e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $this->loadTemplate("navbar/navbar.html.twig", "default/mission.html.twig", 3)->display($context);
        
        $__internal_c89e1fae836fd4d7878fa75e6635a8fd3a85ddac7a3df42341d451743481934e->leave($__internal_c89e1fae836fd4d7878fa75e6635a8fd3a85ddac7a3df42341d451743481934e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_870cadf5b51c3b24eb9c53ac05dff1eb3596043e457498e21b28f340cc861b9f = $this->env->getExtension("native_profiler");
        $__internal_870cadf5b51c3b24eb9c53ac05dff1eb3596043e457498e21b28f340cc861b9f->enter($__internal_870cadf5b51c3b24eb9c53ac05dff1eb3596043e457498e21b28f340cc861b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<div class=\"container-fluid mission\">
\t<div class=\"col-md-12\">
\t\t<div class=\"col-md-7\"></div>
\t\t<div class=\"col-md-5\">
\t\t\t<div class=\"col-md-12 vide\"></div>
\t\t\t<div class=\"col-md-12 theme\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<h2>Mission</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"col-md-6\"><h3>OU :</h3></div>
\t\t\t\t\t<div class=\"col-md-6\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"col-md-6\"><h3>QUOI :</h3></div>
\t\t\t\t\t<div class=\"col-md-6\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"col-md-6\"><h3>EN :</h3></div>
\t\t\t\t\t<div class=\"col-md-6\"></div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
</div>


";
        
        $__internal_870cadf5b51c3b24eb9c53ac05dff1eb3596043e457498e21b28f340cc861b9f->leave($__internal_870cadf5b51c3b24eb9c53ac05dff1eb3596043e457498e21b28f340cc861b9f_prof);

    }

    public function getTemplateName()
    {
        return "default/mission.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 7,  47 => 6,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block navbar %}{% include ('navbar/navbar.html.twig') %}{% endblock %}*/
/* */
/* */
/* {% block body %}*/
/* <div class="container-fluid mission">*/
/* 	<div class="col-md-12">*/
/* 		<div class="col-md-7"></div>*/
/* 		<div class="col-md-5">*/
/* 			<div class="col-md-12 vide"></div>*/
/* 			<div class="col-md-12 theme">*/
/* 				<div class="col-md-12">*/
/* 					<h2>Mission</h2>*/
/* 				</div>*/
/* 				<div class="col-md-12">*/
/* 					<div class="col-md-6"><h3>OU :</h3></div>*/
/* 					<div class="col-md-6"></div>*/
/* 				</div>*/
/* 				<div class="col-md-12">*/
/* 					<div class="col-md-6"><h3>QUOI :</h3></div>*/
/* 					<div class="col-md-6"></div>*/
/* 				</div>*/
/* 				<div class="col-md-12">*/
/* 					<div class="col-md-6"><h3>EN :</h3></div>*/
/* 					<div class="col-md-6"></div>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 		</div>*/
/* </div>*/
/* */
/* */
/* {% endblock %}*/
