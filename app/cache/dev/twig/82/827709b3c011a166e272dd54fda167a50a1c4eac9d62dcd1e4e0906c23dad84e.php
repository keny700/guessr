<?php

/* default/map.html.twig */
class __TwigTemplate_3548374c42c095e31080d63a7d1d2d642dd55285a99012e9a94ae141f6a02cfb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/map.html.twig", 1);
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
        $__internal_17a0aa303710ef59fdd7ed3a5e290d14de06805be75186ecfecec1ac1d13e34e = $this->env->getExtension("native_profiler");
        $__internal_17a0aa303710ef59fdd7ed3a5e290d14de06805be75186ecfecec1ac1d13e34e->enter($__internal_17a0aa303710ef59fdd7ed3a5e290d14de06805be75186ecfecec1ac1d13e34e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/map.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17a0aa303710ef59fdd7ed3a5e290d14de06805be75186ecfecec1ac1d13e34e->leave($__internal_17a0aa303710ef59fdd7ed3a5e290d14de06805be75186ecfecec1ac1d13e34e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4490b6deaaa867e26f845ff649d58d37d3768cc247ec9d219d1dc106feed9bcb = $this->env->getExtension("native_profiler");
        $__internal_4490b6deaaa867e26f845ff649d58d37d3768cc247ec9d219d1dc106feed9bcb->enter($__internal_4490b6deaaa867e26f845ff649d58d37d3768cc247ec9d219d1dc106feed9bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t\t\t
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
  

";
        
        $__internal_4490b6deaaa867e26f845ff649d58d37d3768cc247ec9d219d1dc106feed9bcb->leave($__internal_4490b6deaaa867e26f845ff649d58d37d3768cc247ec9d219d1dc106feed9bcb_prof);

    }

    public function getTemplateName()
    {
        return "default/map.html.twig";
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
/* 				*/
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
/*   */
/* */
/* {% endblock %}*/
