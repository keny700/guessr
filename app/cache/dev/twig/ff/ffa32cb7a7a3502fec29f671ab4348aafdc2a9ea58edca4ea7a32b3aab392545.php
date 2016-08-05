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
        $__internal_74430347cb3fe0302e932e30a75576892cb72f7d5aed5202e018c09dee2e9126 = $this->env->getExtension("native_profiler");
        $__internal_74430347cb3fe0302e932e30a75576892cb72f7d5aed5202e018c09dee2e9126->enter($__internal_74430347cb3fe0302e932e30a75576892cb72f7d5aed5202e018c09dee2e9126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74430347cb3fe0302e932e30a75576892cb72f7d5aed5202e018c09dee2e9126->leave($__internal_74430347cb3fe0302e932e30a75576892cb72f7d5aed5202e018c09dee2e9126_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ebfad1ac21d60231836ababd5b0eb85504f449d7747026d4d90681cfc70ed54a = $this->env->getExtension("native_profiler");
        $__internal_ebfad1ac21d60231836ababd5b0eb85504f449d7747026d4d90681cfc70ed54a->enter($__internal_ebfad1ac21d60231836ababd5b0eb85504f449d7747026d4d90681cfc70ed54a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"page_choix_missions\">
    <h1>Choisis ta Mission</h1>
    <div class=\"row container-fluid\">
    \t<div class=\"col-md-12 missions_line\">
    \t\t<div class=\"col-md-3 col-md-offset-2 mission_block\"><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("mission1");
        echo "\"><img style=\"position: relative; left:0;top:0;\"width=\"303\" height=\"148\"id=\"1\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/mission1.png"), "html", null, true);
        echo "\" /><p style=\"width: 250px; height: 150px; top: 100px; left: 32px; margin: 0; position: absolute; color: white; font-size:35px;\">
    \t\tPizzeria</p>
  \t\t\t</a></div>
    \t\t<div class=\"col-md-3 col-md-offset-2 mission_block\"><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("mission2");
        echo "\"><img style=\"position: relative; left:0;top:0;\"width=\"303\" height=\"148\"id=\"1\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/mission2.png"), "html", null, true);
        echo "\" /><p style=\"width: 250px; height: 150px; top: 100px; left: 32px; margin: 0; position: absolute; color: white; font-size:35px;\">
    \t\tPharmacie</p>
  \t\t\t</a></div>
\t\t</div>
\t\t<div class=\"col-md-12 vide1\"></div>
    \t<div class=\"col-md-12 missions_line\">
    \t\t<div class=\"col-md-3 col-md-offset-2 mission_block\"><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("mission3");
        echo "\"><img style=\"position: relative; left:0;top:0;\"width=\"303\" height=\"148\"id=\"1\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/mission3.png"), "html", null, true);
        echo "\" /><p style=\"width: 250px; height: 150px; top: 100px; left: 32px; margin: 0; position: absolute; color: white; font-size:35px;\">
    \t\tBanque</p>
  \t\t\t</a></div>
    \t\t<div class=\"col-md-3 col-md-offset-2 mission_block\"><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("mission4");
        echo "\"><img style=\"position: relative; left:0;top:0;\"width=\"303\" height=\"148\"id=\"1\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/mission4.png"), "html", null, true);
        echo "\" /><p style=\"width: 250px; height: 150px; top: 100px; left: 32px; margin: 0; position: absolute; color: white; font-size:35px;\">
    \t\tBoulangerie</p>
  \t\t\t</a></div>
\t\t</div>
\t</div>
</div>

";
        
        $__internal_ebfad1ac21d60231836ababd5b0eb85504f449d7747026d4d90681cfc70ed54a->leave($__internal_ebfad1ac21d60231836ababd5b0eb85504f449d7747026d4d90681cfc70ed54a_prof);

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
        return array (  74 => 21,  66 => 18,  55 => 12,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* <div class="page_choix_missions">*/
/*     <h1>Choisis ta Mission</h1>*/
/*     <div class="row container-fluid">*/
/*     	<div class="col-md-12 missions_line">*/
/*     		<div class="col-md-3 col-md-offset-2 mission_block"><a href="{{ path('mission1') }}"><img style="position: relative; left:0;top:0;"width="303" height="148"id="1" src="{{ asset ('img/mission1.png') }}" /><p style="width: 250px; height: 150px; top: 100px; left: 32px; margin: 0; position: absolute; color: white; font-size:35px;">*/
/*     		Pizzeria</p>*/
/*   			</a></div>*/
/*     		<div class="col-md-3 col-md-offset-2 mission_block"><a href="{{ path('mission2') }}"><img style="position: relative; left:0;top:0;"width="303" height="148"id="1" src="{{ asset ('img/mission2.png') }}" /><p style="width: 250px; height: 150px; top: 100px; left: 32px; margin: 0; position: absolute; color: white; font-size:35px;">*/
/*     		Pharmacie</p>*/
/*   			</a></div>*/
/* 		</div>*/
/* 		<div class="col-md-12 vide1"></div>*/
/*     	<div class="col-md-12 missions_line">*/
/*     		<div class="col-md-3 col-md-offset-2 mission_block"><a href="{{ path('mission3') }}"><img style="position: relative; left:0;top:0;"width="303" height="148"id="1" src="{{ asset ('img/mission3.png') }}" /><p style="width: 250px; height: 150px; top: 100px; left: 32px; margin: 0; position: absolute; color: white; font-size:35px;">*/
/*     		Banque</p>*/
/*   			</a></div>*/
/*     		<div class="col-md-3 col-md-offset-2 mission_block"><a href="{{ path('mission4') }}"><img style="position: relative; left:0;top:0;"width="303" height="148"id="1" src="{{ asset ('img/mission4.png') }}" /><p style="width: 250px; height: 150px; top: 100px; left: 32px; margin: 0; position: absolute; color: white; font-size:35px;">*/
/*     		Boulangerie</p>*/
/*   			</a></div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* {% endblock %}*/
