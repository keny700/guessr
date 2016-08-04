<?php

/* base.html.twig */
class __TwigTemplate_5a5741d2589e2c5d169cab8a33c5a5fbfdad384d7bf9ff9f08391c87b5adb000 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c143ceb59ca2ee3fb58d505d45baf4f03652c18e3b440699c417ae7cda5666e2 = $this->env->getExtension("native_profiler");
        $__internal_c143ceb59ca2ee3fb58d505d45baf4f03652c18e3b440699c417ae7cda5666e2->enter($__internal_c143ceb59ca2ee3fb58d505d45baf4f03652c18e3b440699c417ae7cda5666e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/stylesheet.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://cdn.datatables.net/1.10.12/css/jquery.dataTables.css"), "html", null, true);
        echo "\">
  
        <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-2.2.3.min.js"), "html", null, true);
        echo "\" ></script>
        <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" ></script>
        <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://code.highcharts.com/highcharts.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://code.highcharts.com/modules/exporting.js"), "html", null, true);
        echo "\"></script>   
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 21
        echo "        <nav class=\"navbar navbar-default\">
          <div class=\"container-fluid\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
              <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
              </button>
              <a class=\"navbar-brand\" href=\"#\">Home</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
              <ul class=\"nav navbar-nav\">
              </ul>
              <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"#\">Bienvenue survivor</a></li>
                <li><a href=\"#\">LOGOUT</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

        ";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 48
        echo "    </body>
</html>
";
        
        $__internal_c143ceb59ca2ee3fb58d505d45baf4f03652c18e3b440699c417ae7cda5666e2->leave($__internal_c143ceb59ca2ee3fb58d505d45baf4f03652c18e3b440699c417ae7cda5666e2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_eeddae83c7883c0e03206fc16650cc526b24735bc45ec49e3cec54c03f3f8e19 = $this->env->getExtension("native_profiler");
        $__internal_eeddae83c7883c0e03206fc16650cc526b24735bc45ec49e3cec54c03f3f8e19->enter($__internal_eeddae83c7883c0e03206fc16650cc526b24735bc45ec49e3cec54c03f3f8e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome to Survirvor!";
        
        $__internal_eeddae83c7883c0e03206fc16650cc526b24735bc45ec49e3cec54c03f3f8e19->leave($__internal_eeddae83c7883c0e03206fc16650cc526b24735bc45ec49e3cec54c03f3f8e19_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a72b177d51a4f7a090fc7fd3dd1d0c30d91acb34f2083db3738078f046cc0308 = $this->env->getExtension("native_profiler");
        $__internal_a72b177d51a4f7a090fc7fd3dd1d0c30d91acb34f2083db3738078f046cc0308->enter($__internal_a72b177d51a4f7a090fc7fd3dd1d0c30d91acb34f2083db3738078f046cc0308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a72b177d51a4f7a090fc7fd3dd1d0c30d91acb34f2083db3738078f046cc0308->leave($__internal_a72b177d51a4f7a090fc7fd3dd1d0c30d91acb34f2083db3738078f046cc0308_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_b71237e5b5a5e786f937374b9f9a380d1408e2f31068e8fcf26d5354e58243d8 = $this->env->getExtension("native_profiler");
        $__internal_b71237e5b5a5e786f937374b9f9a380d1408e2f31068e8fcf26d5354e58243d8->enter($__internal_b71237e5b5a5e786f937374b9f9a380d1408e2f31068e8fcf26d5354e58243d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b71237e5b5a5e786f937374b9f9a380d1408e2f31068e8fcf26d5354e58243d8->leave($__internal_b71237e5b5a5e786f937374b9f9a380d1408e2f31068e8fcf26d5354e58243d8_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d80241e42447b0a095362ecd6d3074e52d795712d09ed3f94af3f319e4a072cb = $this->env->getExtension("native_profiler");
        $__internal_d80241e42447b0a095362ecd6d3074e52d795712d09ed3f94af3f319e4a072cb->enter($__internal_d80241e42447b0a095362ecd6d3074e52d795712d09ed3f94af3f319e4a072cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d80241e42447b0a095362ecd6d3074e52d795712d09ed3f94af3f319e4a072cb->leave($__internal_d80241e42447b0a095362ecd6d3074e52d795712d09ed3f94af3f319e4a072cb_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 47,  138 => 46,  127 => 6,  115 => 5,  106 => 48,  103 => 47,  101 => 46,  74 => 21,  68 => 15,  64 => 14,  60 => 13,  56 => 12,  52 => 11,  47 => 9,  43 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome to Survirvor!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('css/stylesheet.css') }}">*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('https://cdn.datatables.net/1.10.12/css/jquery.dataTables.css') }}">*/
/*   */
/*         <script type="text/javascript" src="{{ asset('js/jquery-2.2.3.min.js') }}" ></script>*/
/*         <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}" ></script>*/
/*         <script src="{{ asset('https://code.highcharts.com/highcharts.js')}}"></script>*/
/*         <script src="{{ asset('https://code.highcharts.com/modules/exporting.js')}}"></script>   */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {#*/
/*             My NavBAr*/
/*         #}*/
/*         <nav class="navbar navbar-default">*/
/*           <div class="container-fluid">*/
/*             <!-- Brand and toggle get grouped for better mobile display -->*/
/*             <div class="navbar-header">*/
/*               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*               </button>*/
/*               <a class="navbar-brand" href="#">Home</a>*/
/*             </div>*/
/* */
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*               <ul class="nav navbar-nav">*/
/*               </ul>*/
/*               <ul class="nav navbar-nav navbar-right">*/
/*                 <li><a href="#">Bienvenue survivor</a></li>*/
/*                 <li><a href="#">LOGOUT</a></li>*/
/*               </ul>*/
/*             </div><!-- /.navbar-collapse -->*/
/*           </div><!-- /.container-fluid -->*/
/*         </nav>*/
/* */
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
