<?php

/* default/mission3.html.twig */
class __TwigTemplate_b2ac4a44f7a9a4db05725c74dc42c71f6d2cebe6cf1a9f237d661b62558ddb80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/mission3.html.twig", 1);
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
        $__internal_59fddf69be49ebcd00374f8b51820ca37ff2d9adab9f3dfd9960a531c0bda1c3 = $this->env->getExtension("native_profiler");
        $__internal_59fddf69be49ebcd00374f8b51820ca37ff2d9adab9f3dfd9960a531c0bda1c3->enter($__internal_59fddf69be49ebcd00374f8b51820ca37ff2d9adab9f3dfd9960a531c0bda1c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/mission3.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59fddf69be49ebcd00374f8b51820ca37ff2d9adab9f3dfd9960a531c0bda1c3->leave($__internal_59fddf69be49ebcd00374f8b51820ca37ff2d9adab9f3dfd9960a531c0bda1c3_prof);

    }

    // line 3
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_7b4568adef8682974ecd947878c62af750a332755166de5bed90617d1eac4239 = $this->env->getExtension("native_profiler");
        $__internal_7b4568adef8682974ecd947878c62af750a332755166de5bed90617d1eac4239->enter($__internal_7b4568adef8682974ecd947878c62af750a332755166de5bed90617d1eac4239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $this->loadTemplate("navbar/navbar.html.twig", "default/mission3.html.twig", 3)->display($context);
        
        $__internal_7b4568adef8682974ecd947878c62af750a332755166de5bed90617d1eac4239->leave($__internal_7b4568adef8682974ecd947878c62af750a332755166de5bed90617d1eac4239_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_86004d182fcaae4145cf3a261b953600fb546bb3f2eef9f63d1c29b05af37442 = $this->env->getExtension("native_profiler");
        $__internal_86004d182fcaae4145cf3a261b953600fb546bb3f2eef9f63d1c29b05af37442->enter($__internal_86004d182fcaae4145cf3a261b953600fb546bb3f2eef9f63d1c29b05af37442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<div class=\"container-fluid mission\">
\t<div class=\"col-md-12\">
\t\t<div class=\"col-md-6\"></div>
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"col-md-12 vide\"></div>
\t\t\t<div class=\"col-md-12 theme\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<h2>Mission 3</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"col-md-6\"><h3>OÙ : </h3></div>
\t\t\t\t\t<div class=\"col-md-6\"><h3>CHARTRES</h3></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"col-md-3\"><h3>QUOI: </h3></div>
\t\t\t\t\t<div class=\"col-md-9\"><h3>TROUVER UNE BANQUE</h3></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"col-md-6\"><h3>EN : </h3></div>
\t\t\t\t\t<div class=\"col-md-6\"><h3> 2 MINUTES</h3></div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div><div class=\"col-md-12\">
\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-7\"><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("map3");
        echo "\"><input type=\"submit\" class=\"btn-lg btn-info\" value=\"GO\"/>
\t\t\t\t</a></div>
\t\t\t\t</div>

\t\t</div>
</div>


";
        
        $__internal_86004d182fcaae4145cf3a261b953600fb546bb3f2eef9f63d1c29b05af37442->leave($__internal_86004d182fcaae4145cf3a261b953600fb546bb3f2eef9f63d1c29b05af37442_prof);

    }

    public function getTemplateName()
    {
        return "default/mission3.html.twig";
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
/* 					<h2>Mission 3</h2>*/
/* 				</div>*/
/* 				<div class="col-md-12">*/
/* 					<div class="col-md-6"><h3>OÙ : </h3></div>*/
/* 					<div class="col-md-6"><h3>CHARTRES</h3></div>*/
/* 				</div>*/
/* 				<div class="col-md-12">*/
/* 					<div class="col-md-3"><h3>QUOI: </h3></div>*/
/* 					<div class="col-md-9"><h3>TROUVER UNE BANQUE</h3></div>*/
/* 				</div>*/
/* 				<div class="col-md-12">*/
/* 					<div class="col-md-6"><h3>EN : </h3></div>*/
/* 					<div class="col-md-6"><h3> 2 MINUTES</h3></div>*/
/* 				</div>*/
/* 				*/
/* 			</div><div class="col-md-12">*/
/* 					<div class="col-md-5">*/
/* 					</div>*/
/* 					<div class="col-md-7"><a href="{{ path('map3') }}"><input type="submit" class="btn-lg btn-info" value="GO"/>*/
/* 				</a></div>*/
/* 				</div>*/
/* */
/* 		</div>*/
/* </div>*/
/* */
/* */
/* {% endblock %}*/
