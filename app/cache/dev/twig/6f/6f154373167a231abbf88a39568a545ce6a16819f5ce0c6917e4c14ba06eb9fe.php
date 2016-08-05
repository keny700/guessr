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
        $__internal_21a1a30dcbf517282aa194d39b9224def4d7b3ffcf841878b5b021f332140404 = $this->env->getExtension("native_profiler");
        $__internal_21a1a30dcbf517282aa194d39b9224def4d7b3ffcf841878b5b021f332140404->enter($__internal_21a1a30dcbf517282aa194d39b9224def4d7b3ffcf841878b5b021f332140404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/mission2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21a1a30dcbf517282aa194d39b9224def4d7b3ffcf841878b5b021f332140404->leave($__internal_21a1a30dcbf517282aa194d39b9224def4d7b3ffcf841878b5b021f332140404_prof);

    }

    // line 3
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_d1486ed672c8028a196495ebf8ebe7ba40c21be7697b37ac18358d776320a050 = $this->env->getExtension("native_profiler");
        $__internal_d1486ed672c8028a196495ebf8ebe7ba40c21be7697b37ac18358d776320a050->enter($__internal_d1486ed672c8028a196495ebf8ebe7ba40c21be7697b37ac18358d776320a050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $this->loadTemplate("navbar/navbar.html.twig", "default/mission2.html.twig", 3)->display($context);
        
        $__internal_d1486ed672c8028a196495ebf8ebe7ba40c21be7697b37ac18358d776320a050->leave($__internal_d1486ed672c8028a196495ebf8ebe7ba40c21be7697b37ac18358d776320a050_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_70b6096e1eb536966daaa7a5accca19fc824de0a979de95f3602034e14e56ce4 = $this->env->getExtension("native_profiler");
        $__internal_70b6096e1eb536966daaa7a5accca19fc824de0a979de95f3602034e14e56ce4->enter($__internal_70b6096e1eb536966daaa7a5accca19fc824de0a979de95f3602034e14e56ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo "\"><input type=\"submit\" class=\"btn-lg btn-info\" value=\"GO\"/>
\t\t\t\t</a></div>
\t\t\t\t</div>

\t\t</div>
</div>


";
        
        $__internal_70b6096e1eb536966daaa7a5accca19fc824de0a979de95f3602034e14e56ce4->leave($__internal_70b6096e1eb536966daaa7a5accca19fc824de0a979de95f3602034e14e56ce4_prof);

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
/* 					<div class="col-md-7"><a href="{{ path('map2') }}"><input type="submit" class="btn-lg btn-info" value="GO"/>*/
/* 				</a></div>*/
/* 				</div>*/
/* */
/* 		</div>*/
/* </div>*/
/* */
/* */
/* {% endblock %}*/
