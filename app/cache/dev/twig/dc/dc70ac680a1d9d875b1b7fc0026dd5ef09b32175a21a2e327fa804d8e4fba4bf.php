<?php

/* default/mission4.html.twig */
class __TwigTemplate_dc3698388a781cc5d9d3f50f4dd05ef6388570b998ea9d3abbb318a2c65c347b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/mission4.html.twig", 1);
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
        $__internal_837ee12350f02f2aff072c0f3a75db033b25aeeded21f068c6895aee6de0a196 = $this->env->getExtension("native_profiler");
        $__internal_837ee12350f02f2aff072c0f3a75db033b25aeeded21f068c6895aee6de0a196->enter($__internal_837ee12350f02f2aff072c0f3a75db033b25aeeded21f068c6895aee6de0a196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/mission4.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_837ee12350f02f2aff072c0f3a75db033b25aeeded21f068c6895aee6de0a196->leave($__internal_837ee12350f02f2aff072c0f3a75db033b25aeeded21f068c6895aee6de0a196_prof);

    }

    // line 3
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_47552fa201a0180f11a29dd2f26add563842fe70bef496a1df839cc25a4c9bb6 = $this->env->getExtension("native_profiler");
        $__internal_47552fa201a0180f11a29dd2f26add563842fe70bef496a1df839cc25a4c9bb6->enter($__internal_47552fa201a0180f11a29dd2f26add563842fe70bef496a1df839cc25a4c9bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $this->loadTemplate("navbar/navbar.html.twig", "default/mission4.html.twig", 3)->display($context);
        
        $__internal_47552fa201a0180f11a29dd2f26add563842fe70bef496a1df839cc25a4c9bb6->leave($__internal_47552fa201a0180f11a29dd2f26add563842fe70bef496a1df839cc25a4c9bb6_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_688db9e0cd5121fe49c9e02f81c773c77cc9620ec027bc5d40f6337311d1e4be = $this->env->getExtension("native_profiler");
        $__internal_688db9e0cd5121fe49c9e02f81c773c77cc9620ec027bc5d40f6337311d1e4be->enter($__internal_688db9e0cd5121fe49c9e02f81c773c77cc9620ec027bc5d40f6337311d1e4be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<div class=\"container-fluid mission\">
\t<div class=\"col-md-12\">
\t\t<div class=\"col-md-6\"></div>
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"col-md-12 vide\"></div>
\t\t\t<div class=\"col-md-12 theme\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<h2>Mission 4</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"col-md-6\"><h3>OÙ : </h3></div>
\t\t\t\t\t<div class=\"col-md-6\"><h3>CHARTRES</h3></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"col-md-3\"><h3>QUOI : </h3></div>
\t\t\t\t\t<div class=\"col-md-9\"><h3>TROUVER UNE BOULANGERIE</h3></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"col-md-6\"><h3>EN : </h3></div>
\t\t\t\t\t<div class=\"col-md-6\"><h3> 5 MINUTES</h3></div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div><div class=\"col-md-12\">
\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-7\"><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("map4");
        echo "\"><input type=\"submit\" class=\"btn-lg btn-info\" value=\"GO\"/>
\t\t\t\t</a></div>
\t\t\t\t</div>

\t\t</div>
</div>


";
        
        $__internal_688db9e0cd5121fe49c9e02f81c773c77cc9620ec027bc5d40f6337311d1e4be->leave($__internal_688db9e0cd5121fe49c9e02f81c773c77cc9620ec027bc5d40f6337311d1e4be_prof);

    }

    public function getTemplateName()
    {
        return "default/mission4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 32,  53 => 7,  47 => 6,  35 => 3,  11 => 1,);
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
/* 		<div class="col-md-6"></div>*/
/* 		<div class="col-md-6">*/
/* 			<div class="col-md-12 vide"></div>*/
/* 			<div class="col-md-12 theme">*/
/* 				<div class="col-md-12">*/
/* 					<h2>Mission 4</h2>*/
/* 				</div>*/
/* 				<div class="col-md-12">*/
/* 					<div class="col-md-6"><h3>OÙ : </h3></div>*/
/* 					<div class="col-md-6"><h3>CHARTRES</h3></div>*/
/* 				</div>*/
/* 				<div class="col-md-12">*/
/* 					<div class="col-md-3"><h3>QUOI : </h3></div>*/
/* 					<div class="col-md-9"><h3>TROUVER UNE BOULANGERIE</h3></div>*/
/* 				</div>*/
/* 				<div class="col-md-12">*/
/* 					<div class="col-md-6"><h3>EN : </h3></div>*/
/* 					<div class="col-md-6"><h3> 5 MINUTES</h3></div>*/
/* 				</div>*/
/* 				*/
/* 			</div><div class="col-md-12">*/
/* 					<div class="col-md-5">*/
/* 					</div>*/
/* 					<div class="col-md-7"><a href="{{ path('map4') }}"><input type="submit" class="btn-lg btn-info" value="GO"/>*/
/* 				</a></div>*/
/* 				</div>*/
/* */
/* 		</div>*/
/* </div>*/
/* */
/* */
/* {% endblock %}*/
