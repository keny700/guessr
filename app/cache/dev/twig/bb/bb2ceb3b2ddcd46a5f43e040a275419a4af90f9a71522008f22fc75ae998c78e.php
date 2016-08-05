<?php

/* default/map3.html.twig */
class __TwigTemplate_042e8d51e9a049ac177d37295541f59ff3390c8086cba7e62e32605819048a2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/map3.html.twig", 1);
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
        $__internal_5767fdaf6f49a32edc9fe6ce71eafc3e0c8ad95fb3ff7bab56b749ecb56279da = $this->env->getExtension("native_profiler");
        $__internal_5767fdaf6f49a32edc9fe6ce71eafc3e0c8ad95fb3ff7bab56b749ecb56279da->enter($__internal_5767fdaf6f49a32edc9fe6ce71eafc3e0c8ad95fb3ff7bab56b749ecb56279da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/map3.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5767fdaf6f49a32edc9fe6ce71eafc3e0c8ad95fb3ff7bab56b749ecb56279da->leave($__internal_5767fdaf6f49a32edc9fe6ce71eafc3e0c8ad95fb3ff7bab56b749ecb56279da_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4793499e6c019f0b94add2b3e500895547eae01029c07ec115bf4cca00114793 = $this->env->getExtension("native_profiler");
        $__internal_4793499e6c019f0b94add2b3e500895547eae01029c07ec115bf4cca00114793->enter($__internal_4793499e6c019f0b94add2b3e500895547eae01029c07ec115bf4cca00114793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t\t\t<h3>Banque</h3>
        <h3>Indice :</h3>
        <h3>Temps restant :
          <div id=\"compteur\"></div>
        </h3>
\t\t\t</div>

\t\t</div>
\t</div>
</div>
<script>

function initialize() {
  var fenway = {lat: 48.44423, lng: 1.48368};
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
                                compteur.innerHTML=\"terminé<br />\"+\"<a href=http://lien1.fr></a>\"
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
                        duree=\"120\";
                        t();
                </script>

  

";
        
        $__internal_4793499e6c019f0b94add2b3e500895547eae01029c07ec115bf4cca00114793->leave($__internal_4793499e6c019f0b94add2b3e500895547eae01029c07ec115bf4cca00114793_prof);

    }

    public function getTemplateName()
    {
        return "default/map3.html.twig";
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
/* 				<h3>Banque</h3>*/
/*         <h3>Indice :</h3>*/
/*         <h3>Temps restant :*/
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
/*   var fenway = {lat: 48.44423, lng: 1.48368};*/
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
/*                                 compteur.innerHTML="terminé<br />"+"<a href=http://lien1.fr></a>"*/
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
/*                         duree="120";*/
/*                         t();*/
/*                 </script>*/
/* */
/*   */
/* */
/* {% endblock %}*/
