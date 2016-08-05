<?php

/* default/mission2.html.twig */
class __TwigTemplate_46be1254ebd5322a80f9301e28f1df116d8be4913352deed2e6a8e6083e8ce43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/mission2.html.twig", 1);
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
        $__internal_89b57e9852c7c10a39cf0b11e0a2603e391b535dca57b01da3008ad74c42c6f2 = $this->env->getExtension("native_profiler");
        $__internal_89b57e9852c7c10a39cf0b11e0a2603e391b535dca57b01da3008ad74c42c6f2->enter($__internal_89b57e9852c7c10a39cf0b11e0a2603e391b535dca57b01da3008ad74c42c6f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/mission2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89b57e9852c7c10a39cf0b11e0a2603e391b535dca57b01da3008ad74c42c6f2->leave($__internal_89b57e9852c7c10a39cf0b11e0a2603e391b535dca57b01da3008ad74c42c6f2_prof);

    }

    // line 3
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_fbb5527bf5d53ea9e0278d0c96bbdb91039bcde2db577c80bff8a89a4e38fdf4 = $this->env->getExtension("native_profiler");
        $__internal_fbb5527bf5d53ea9e0278d0c96bbdb91039bcde2db577c80bff8a89a4e38fdf4->enter($__internal_fbb5527bf5d53ea9e0278d0c96bbdb91039bcde2db577c80bff8a89a4e38fdf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $this->loadTemplate("navbar/navbar.html.twig", "default/mission2.html.twig", 3)->display($context);
        
        $__internal_fbb5527bf5d53ea9e0278d0c96bbdb91039bcde2db577c80bff8a89a4e38fdf4->leave($__internal_fbb5527bf5d53ea9e0278d0c96bbdb91039bcde2db577c80bff8a89a4e38fdf4_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c33e54bfbb49b63ad744119eac0fff8f085ba6a0703963cfb02c288651deb97 = $this->env->getExtension("native_profiler");
        $__internal_1c33e54bfbb49b63ad744119eac0fff8f085ba6a0703963cfb02c288651deb97->enter($__internal_1c33e54bfbb49b63ad744119eac0fff8f085ba6a0703963cfb02c288651deb97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<div class=\"container-fluid mission\">
\t<div class=\"col-md-12\">
\t\t<div class=\"col-md-6\"></div>
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"col-md-12 vide\"></div>
\t\t\t<div class=\"col-md-12 theme\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<h2>Mission 2</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"col-md-6\"><h3>OÙ : </h3></div>
\t\t\t\t\t<div class=\"col-md-6\"><h3>CHARTRES</h3></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"col-md-3\"><h3>QUOI:</h3></div>
\t\t\t\t\t<div class=\"col-md-9\"><h3>TROUVER UNE PHARMACIE</h3></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"col-md-6\"><h3>EN : </h3></div>
\t\t\t\t\t<div class=\"col-md-6\"><h3> 4 MINUTES</h3></div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div><div class=\"col-md-12\">
\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-7\"><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("map2");
        echo "\"><input type=\"submit\" class=\"btn-lg btn-primary\" value=\"GO\"/>
\t\t\t\t</a></div>
\t\t\t\t</div>

\t\t</div>
</div>


";
        
        $__internal_1c33e54bfbb49b63ad744119eac0fff8f085ba6a0703963cfb02c288651deb97->leave($__internal_1c33e54bfbb49b63ad744119eac0fff8f085ba6a0703963cfb02c288651deb97_prof);

    }

    public function getTemplateName()
    {
        return "default/mission2.html.twig";
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
/* 					<h2>Mission 2</h2>*/
/* 				</div>*/
/* 				<div class="col-md-12">*/
/* 					<div class="col-md-6"><h3>OÙ : </h3></div>*/
/* 					<div class="col-md-6"><h3>CHARTRES</h3></div>*/
/* 				</div>*/
/* 				<div class="col-md-12">*/
/* 					<div class="col-md-3"><h3>QUOI:</h3></div>*/
/* 					<div class="col-md-9"><h3>TROUVER UNE PHARMACIE</h3></div>*/
/* 				</div>*/
/* 				<div class="col-md-12">*/
/* 					<div class="col-md-6"><h3>EN : </h3></div>*/
/* 					<div class="col-md-6"><h3> 4 MINUTES</h3></div>*/
/* 				</div>*/
/* 				*/
/* 			</div><div class="col-md-12">*/
/* 					<div class="col-md-5">*/
/* 					</div>*/
/* 					<div class="col-md-7"><a href="{{ path('map2') }}"><input type="submit" class="btn-lg btn-primary" value="GO"/>*/
/* 				</a></div>*/
/* 				</div>*/
/* */
/* 		</div>*/
/* </div>*/
/* */
/* */
/* {% endblock %}*/
