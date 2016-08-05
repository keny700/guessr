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
        $__internal_d5cb18fa1442e24ec70890e74ceaba09a8f0a849267b9f35c8cbe2a56e25716f = $this->env->getExtension("native_profiler");
        $__internal_d5cb18fa1442e24ec70890e74ceaba09a8f0a849267b9f35c8cbe2a56e25716f->enter($__internal_d5cb18fa1442e24ec70890e74ceaba09a8f0a849267b9f35c8cbe2a56e25716f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5cb18fa1442e24ec70890e74ceaba09a8f0a849267b9f35c8cbe2a56e25716f->leave($__internal_d5cb18fa1442e24ec70890e74ceaba09a8f0a849267b9f35c8cbe2a56e25716f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_53b2e49d4cbee9afae285bfa86c1852900dd5d1d4676baef905c39e4fa326a47 = $this->env->getExtension("native_profiler");
        $__internal_53b2e49d4cbee9afae285bfa86c1852900dd5d1d4676baef905c39e4fa326a47->enter($__internal_53b2e49d4cbee9afae285bfa86c1852900dd5d1d4676baef905c39e4fa326a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"page_choix_missions\">
    <h1>Choisis Ta Mission</h1>
    <div class=\"row container-fluid\">
    \t<div class=\"col-md-12 missions_line\">
    \t\t<div class=\"col-md-3 col-md-offset-2 mission_block\"><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("mission1");
        echo "\"><img style=\"position: relative; left:0;top:0;\"width=\"299\" height=\"144\"id=\"1\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/pizzeria.jpg"), "html", null, true);
        echo "\" /><p style=\"width: 250px; height: 150px; top: 100px; left: 32px; margin: 0; position: absolute; color: white; font-size:35px;\">
    \t\tPizzeria</p>
  \t\t\t</a></div>
    \t\t<div class=\"col-md-3 col-md-offset-2 mission_block\"><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("mission2");
        echo "\"><img style=\"position: relative; left:0;top:0;\"width=\"299\" height=\"144\"id=\"1\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/pharmacie.jpg"), "html", null, true);
        echo "\" /><p style=\"width: 250px; height: 150px; top: 100px; left: 32px; margin: 0; position: absolute; color: white; font-size:35px;\">
    \t\tPharmacie</p>
  \t\t\t</a></div>
\t\t</div>
\t\t<div class=\"col-md-12 vide1\"></div>
    \t<div class=\"col-md-12 missions_line\">
    \t\t<div class=\"col-md-3 col-md-offset-2 mission_block\"><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("mission3");
        echo "\"><img style=\"position: relative; left:0;top:0;\"width=\"299\" height=\"144\"id=\"1\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/banque.jpg"), "html", null, true);
        echo "\" /><p style=\"width: 250px; height: 150px; top: 100px; left: 32px; margin: 0; position: absolute; color: white; font-size:35px;\">
    \t\tBanque</p>
  \t\t\t</a></div>
    \t\t<div class=\"col-md-3 col-md-offset-2 mission_block\"><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("mission4");
        echo "\"><img style=\"position: relative; left:0;top:0;\"width=\"299\" height=\"144\"id=\"1\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/boulangerie.jpg"), "html", null, true);
        echo "\" /><p style=\"width: 250px; height: 150px; top: 100px; left: 32px; margin: 0; position: absolute; color: white; font-size:35px;\">
    \t\tBoulangerie</p>
  \t\t\t</a></div>
\t\t</div>
\t</div>
</div>

";
        
        $__internal_53b2e49d4cbee9afae285bfa86c1852900dd5d1d4676baef905c39e4fa326a47->leave($__internal_53b2e49d4cbee9afae285bfa86c1852900dd5d1d4676baef905c39e4fa326a47_prof);

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
/*     <h1>Choisis Ta Mission</h1>*/
/*     <div class="row container-fluid">*/
/*     	<div class="col-md-12 missions_line">*/
/*     		<div class="col-md-3 col-md-offset-2 mission_block"><a href="{{ path('mission1') }}"><img style="position: relative; left:0;top:0;"width="299" height="144"id="1" src="{{ asset ('img/pizzeria.jpg') }}" /><p style="width: 250px; height: 150px; top: 100px; left: 32px; margin: 0; position: absolute; color: white; font-size:35px;">*/
/*     		Pizzeria</p>*/
/*   			</a></div>*/
/*     		<div class="col-md-3 col-md-offset-2 mission_block"><a href="{{ path('mission2') }}"><img style="position: relative; left:0;top:0;"width="299" height="144"id="1" src="{{ asset ('img/pharmacie.jpg') }}" /><p style="width: 250px; height: 150px; top: 100px; left: 32px; margin: 0; position: absolute; color: white; font-size:35px;">*/
/*     		Pharmacie</p>*/
/*   			</a></div>*/
/* 		</div>*/
/* 		<div class="col-md-12 vide1"></div>*/
/*     	<div class="col-md-12 missions_line">*/
/*     		<div class="col-md-3 col-md-offset-2 mission_block"><a href="{{ path('mission3') }}"><img style="position: relative; left:0;top:0;"width="299" height="144"id="1" src="{{ asset ('img/banque.jpg') }}" /><p style="width: 250px; height: 150px; top: 100px; left: 32px; margin: 0; position: absolute; color: white; font-size:35px;">*/
/*     		Banque</p>*/
/*   			</a></div>*/
/*     		<div class="col-md-3 col-md-offset-2 mission_block"><a href="{{ path('mission4') }}"><img style="position: relative; left:0;top:0;"width="299" height="144"id="1" src="{{ asset ('img/boulangerie.jpg') }}" /><p style="width: 250px; height: 150px; top: 100px; left: 32px; margin: 0; position: absolute; color: white; font-size:35px;">*/
/*     		Boulangerie</p>*/
/*   			</a></div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* {% endblock %}*/
