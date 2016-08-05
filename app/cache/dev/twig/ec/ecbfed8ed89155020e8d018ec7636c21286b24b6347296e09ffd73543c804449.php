<?php

/* default/mission1.html.twig */
class __TwigTemplate_077c136267f0181ac17a8db556d83625072c4203be4da7957759dc90880edffa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/mission1.html.twig", 1);
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
        $__internal_7665bd16697ca7990593a5bd8abc5e7e1c65669821ca8bd2bc48715a329deca3 = $this->env->getExtension("native_profiler");
        $__internal_7665bd16697ca7990593a5bd8abc5e7e1c65669821ca8bd2bc48715a329deca3->enter($__internal_7665bd16697ca7990593a5bd8abc5e7e1c65669821ca8bd2bc48715a329deca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/mission1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7665bd16697ca7990593a5bd8abc5e7e1c65669821ca8bd2bc48715a329deca3->leave($__internal_7665bd16697ca7990593a5bd8abc5e7e1c65669821ca8bd2bc48715a329deca3_prof);

    }

    // line 3
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_aae33066a4e57f4fa7149a4e1d6e625c5c0b277d24580a93b137ae424d10fc60 = $this->env->getExtension("native_profiler");
        $__internal_aae33066a4e57f4fa7149a4e1d6e625c5c0b277d24580a93b137ae424d10fc60->enter($__internal_aae33066a4e57f4fa7149a4e1d6e625c5c0b277d24580a93b137ae424d10fc60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $this->loadTemplate("navbar/navbar.html.twig", "default/mission1.html.twig", 3)->display($context);
        
        $__internal_aae33066a4e57f4fa7149a4e1d6e625c5c0b277d24580a93b137ae424d10fc60->leave($__internal_aae33066a4e57f4fa7149a4e1d6e625c5c0b277d24580a93b137ae424d10fc60_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d34d9ade6e757dc51525b98f8312a74860b202ccaba1c73a9609cc7a6816c96 = $this->env->getExtension("native_profiler");
        $__internal_9d34d9ade6e757dc51525b98f8312a74860b202ccaba1c73a9609cc7a6816c96->enter($__internal_9d34d9ade6e757dc51525b98f8312a74860b202ccaba1c73a9609cc7a6816c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<div class=\"container-fluid mission\">
\t<div class=\"col-md-12\">
\t\t<div class=\"col-md-6\"></div>
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"col-md-12 vide\"></div>
\t\t\t<div class=\"col-md-12 theme\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<h2>Mission 1</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"col-md-6\"><h3>OÙ : </h3></div>
\t\t\t\t\t<div class=\"col-md-6\"><h3>CHARTRES</h3></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"col-md-3\"><h3>QUOI:</h3></div>
\t\t\t\t\t<div class=\"col-md-9\"><h3>TROUVER UNE PIZZERIA</h3></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"col-md-6\"><h3>EN : </h3></div>
\t\t\t\t\t<div class=\"col-md-6\"><h3> 3 MINUTES</h3></div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div><div class=\"col-md-12\">
\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-7\"><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("map1");
        echo "\"><input type=\"submit\" class=\"btn-lg btn-primary\" value=\"GO\"/>
\t\t\t\t</a></div>
\t\t\t\t</div>

\t\t</div>
</div>


";
        
        $__internal_9d34d9ade6e757dc51525b98f8312a74860b202ccaba1c73a9609cc7a6816c96->leave($__internal_9d34d9ade6e757dc51525b98f8312a74860b202ccaba1c73a9609cc7a6816c96_prof);

    }

    public function getTemplateName()
    {
        return "default/mission1.html.twig";
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
/* 					<h2>Mission 1</h2>*/
/* 				</div>*/
/* 				<div class="col-md-12">*/
/* 					<div class="col-md-6"><h3>OÙ : </h3></div>*/
/* 					<div class="col-md-6"><h3>CHARTRES</h3></div>*/
/* 				</div>*/
/* 				<div class="col-md-12">*/
/* 					<div class="col-md-3"><h3>QUOI:</h3></div>*/
/* 					<div class="col-md-9"><h3>TROUVER UNE PIZZERIA</h3></div>*/
/* 				</div>*/
/* 				<div class="col-md-12">*/
/* 					<div class="col-md-6"><h3>EN : </h3></div>*/
/* 					<div class="col-md-6"><h3> 3 MINUTES</h3></div>*/
/* 				</div>*/
/* 				*/
/* 			</div><div class="col-md-12">*/
/* 					<div class="col-md-5">*/
/* 					</div>*/
/* 					<div class="col-md-7"><a href="{{ path('map1') }}"><input type="submit" class="btn-lg btn-primary" value="GO"/>*/
/* 				</a></div>*/
/* 				</div>*/
/* */
/* 		</div>*/
/* </div>*/
/* */
/* */
/* {% endblock %}*/
