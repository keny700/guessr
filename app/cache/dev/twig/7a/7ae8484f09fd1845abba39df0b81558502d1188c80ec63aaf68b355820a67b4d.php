<?php

/* default/map4.html.twig */
class __TwigTemplate_7503bebcf4cf0b6cd3519ad8f135cbdc18e841c4e2d8d4fb2a9e44f475a1785c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/map4.html.twig", 1);
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
        $__internal_329cf18fd0fd481c8ad218460b094c95770536d715b2d8fdb75e89766bf381b0 = $this->env->getExtension("native_profiler");
        $__internal_329cf18fd0fd481c8ad218460b094c95770536d715b2d8fdb75e89766bf381b0->enter($__internal_329cf18fd0fd481c8ad218460b094c95770536d715b2d8fdb75e89766bf381b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/map4.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_329cf18fd0fd481c8ad218460b094c95770536d715b2d8fdb75e89766bf381b0->leave($__internal_329cf18fd0fd481c8ad218460b094c95770536d715b2d8fdb75e89766bf381b0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0429612b958005e76a933916e91d6cb8433a4c329a76e8980336d804b75d8f02 = $this->env->getExtension("native_profiler");
        $__internal_0429612b958005e76a933916e91d6cb8433a4c329a76e8980336d804b75d8f02->enter($__internal_0429612b958005e76a933916e91d6cb8433a4c329a76e8980336d804b75d8f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container-fluid map\">
\t<div class=\"col-md-12\">
\t\t<div class=\"col-md-9 street\">
\t\t\t<div></div>
    \t\t<div id=\"pano\"></div>

\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t\t<div id=\"map\" class=\"col-md-12 carte\">
\t\t\t</div>
\t\t\t<div class=\"col-md-12 tableau\">
\t\t\t\t<h3>Boulangerie</h3>
        <h3>Indice :</h3>
        <h3>Temps restant:
          <div id=\"compteur\"></div>
        </h3>
\t\t\t</div>

\t\t</div>
\t</div>
</div>
<script>

function initialize() {
  var fenway = {lat: 48.448035, lng: 1.49276};
  var map = new google.maps.Map(document.getElementById('map'), {
    center: fenway,
    zoom: 14
  });
  var panorama = new google.maps.StreetViewPanorama(
      document.getElementById('pano'), {
        position: fenway,
        pov: {
          heading: 34,
          pitch: 10
        }
      });
  map.setStreetView(panorama);
}

</script>
<script async defer
        src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBKoRwoiN_pQDL5up1z4KcoLA-cBHkekn8&signed_in=true&callback=initialize\">
</script>

<script language=\"JavaScript\">
                
                function t()
                {
            var compteur=document.getElementById('compteur');
            s=duree;
            m=0;h=0;
            if(s<0)
                        {
                                compteur.innerHTML=\"terminé<br />\"+\"<a href=http://lien1.fr>continuer</a>\"
            }
                        else
                        {
                                if(s>59)
                                {
                                        m=Math.floor(s/60);
                                        s=s-m*60
                }
                                if(m>59)
                                {
                                        h=Math.floor(m/60);
                    m=m-h*60
                                }
                if(s<10)
                                {
                                        s=\"0\"+s
                }
                if(m<10)
                                {
                    m=\"0\"+m
                }
                  compteur.innerHTML=h+\":\"+m+\":\"+s+\"<br /><a href=http://lien2.fr></a>\"
            }
            duree=duree-1;
            window.setTimeout(\"t();\",999);

        }
                
                </script>
                 <script language=\"JavaScript\">
                        duree=\"300\";
                        t();
                </script>

  

";
        
        $__internal_0429612b958005e76a933916e91d6cb8433a4c329a76e8980336d804b75d8f02->leave($__internal_0429612b958005e76a933916e91d6cb8433a4c329a76e8980336d804b75d8f02_prof);

    }

    public function getTemplateName()
    {
        return "default/map4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* */
/* */
/* {% block body %}*/
/* <div class="container-fluid map">*/
/* 	<div class="col-md-12">*/
/* 		<div class="col-md-9 street">*/
/* 			<div></div>*/
/*     		<div id="pano"></div>*/
/* */
/* 		</div>*/
/* 		<div class="col-md-3">*/
/* 			<div id="map" class="col-md-12 carte">*/
/* 			</div>*/
/* 			<div class="col-md-12 tableau">*/
/* 				<h3>Boulangerie</h3>*/
/*         <h3>Indice :</h3>*/
/*         <h3>Temps restant:*/
/*           <div id="compteur"></div>*/
/*         </h3>*/
/* 			</div>*/
/* */
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* <script>*/
/* */
/* function initialize() {*/
/*   var fenway = {lat: 48.448035, lng: 1.49276};*/
/*   var map = new google.maps.Map(document.getElementById('map'), {*/
/*     center: fenway,*/
/*     zoom: 14*/
/*   });*/
/*   var panorama = new google.maps.StreetViewPanorama(*/
/*       document.getElementById('pano'), {*/
/*         position: fenway,*/
/*         pov: {*/
/*           heading: 34,*/
/*           pitch: 10*/
/*         }*/
/*       });*/
/*   map.setStreetView(panorama);*/
/* }*/
/* */
/* </script>*/
/* <script async defer*/
/*         src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKoRwoiN_pQDL5up1z4KcoLA-cBHkekn8&signed_in=true&callback=initialize">*/
/* </script>*/
/* */
/* <script language="JavaScript">*/
/*                 */
/*                 function t()*/
/*                 {*/
/*             var compteur=document.getElementById('compteur');*/
/*             s=duree;*/
/*             m=0;h=0;*/
/*             if(s<0)*/
/*                         {*/
/*                                 compteur.innerHTML="terminé<br />"+"<a href=http://lien1.fr>continuer</a>"*/
/*             }*/
/*                         else*/
/*                         {*/
/*                                 if(s>59)*/
/*                                 {*/
/*                                         m=Math.floor(s/60);*/
/*                                         s=s-m*60*/
/*                 }*/
/*                                 if(m>59)*/
/*                                 {*/
/*                                         h=Math.floor(m/60);*/
/*                     m=m-h*60*/
/*                                 }*/
/*                 if(s<10)*/
/*                                 {*/
/*                                         s="0"+s*/
/*                 }*/
/*                 if(m<10)*/
/*                                 {*/
/*                     m="0"+m*/
/*                 }*/
/*                   compteur.innerHTML=h+":"+m+":"+s+"<br /><a href=http://lien2.fr></a>"*/
/*             }*/
/*             duree=duree-1;*/
/*             window.setTimeout("t();",999);*/
/* */
/*         }*/
/*                 */
/*                 </script>*/
/*                  <script language="JavaScript">*/
/*                         duree="300";*/
/*                         t();*/
/*                 </script>*/
/* */
/*   */
/* */
/* {% endblock %}*/
