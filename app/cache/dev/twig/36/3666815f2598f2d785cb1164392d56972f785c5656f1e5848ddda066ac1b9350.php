<?php

/* default/map1.html.twig */
class __TwigTemplate_94f79eba3dfe831376a88b80af0d44c8670364b76b7e9f9b687ccb3846c94694 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/map1.html.twig", 1);
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
        $__internal_8579d2b4830fc681005000d4722b8886f8d87b72b29e59200564d511cb080178 = $this->env->getExtension("native_profiler");
        $__internal_8579d2b4830fc681005000d4722b8886f8d87b72b29e59200564d511cb080178->enter($__internal_8579d2b4830fc681005000d4722b8886f8d87b72b29e59200564d511cb080178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/map1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8579d2b4830fc681005000d4722b8886f8d87b72b29e59200564d511cb080178->leave($__internal_8579d2b4830fc681005000d4722b8886f8d87b72b29e59200564d511cb080178_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_146e8599ec06ca003b321bf651c8011ec19bc3cad764b0a606166ae8e111e8d5 = $this->env->getExtension("native_profiler");
        $__internal_146e8599ec06ca003b321bf651c8011ec19bc3cad764b0a606166ae8e111e8d5->enter($__internal_146e8599ec06ca003b321bf651c8011ec19bc3cad764b0a606166ae8e111e8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t\t\t<h3>Pizzeria</h3>
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
  var fenway = {lat: 48.44711, lng: 1.48751};
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
                        duree=\"180\";
                        t();
                </script>


";
        
        $__internal_146e8599ec06ca003b321bf651c8011ec19bc3cad764b0a606166ae8e111e8d5->leave($__internal_146e8599ec06ca003b321bf651c8011ec19bc3cad764b0a606166ae8e111e8d5_prof);

    }

    public function getTemplateName()
    {
        return "default/map1.html.twig";
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
/* 				<h3>Pizzeria</h3>*/
/*         <h3>Indice :</h3>*/
/*         <h3>Temps restant:*/
/*             <div id="compteur"></div>*/
/*         </h3>*/
/* 			</div>*/
/* */
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* <script>*/
/* */
/* function initialize() {*/
/*   var fenway = {lat: 48.44711, lng: 1.48751};*/
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
/*  */
/*   <script language="JavaScript">*/
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
/*                         duree="180";*/
/*                         t();*/
/*                 </script>*/
/* */
/* */
/* {% endblock %}*/
