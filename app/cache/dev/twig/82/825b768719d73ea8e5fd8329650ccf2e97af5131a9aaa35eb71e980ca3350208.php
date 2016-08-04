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
        $__internal_5e0d9c6592d02b30f5a20b24ab2308fca34a6c3c7858f9f0dc00a9760b38f11d = $this->env->getExtension("native_profiler");
        $__internal_5e0d9c6592d02b30f5a20b24ab2308fca34a6c3c7858f9f0dc00a9760b38f11d->enter($__internal_5e0d9c6592d02b30f5a20b24ab2308fca34a6c3c7858f9f0dc00a9760b38f11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/onglet.js"), "html", null, true);
        echo "\" ></script>   
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 22
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
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 49
        echo "    </body>
</html>
";
        
        $__internal_5e0d9c6592d02b30f5a20b24ab2308fca34a6c3c7858f9f0dc00a9760b38f11d->leave($__internal_5e0d9c6592d02b30f5a20b24ab2308fca34a6c3c7858f9f0dc00a9760b38f11d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e70a6f4ccc599d8d795df6a8072a00211f9ec176f0969d2200842b065d2ea539 = $this->env->getExtension("native_profiler");
        $__internal_e70a6f4ccc599d8d795df6a8072a00211f9ec176f0969d2200842b065d2ea539->enter($__internal_e70a6f4ccc599d8d795df6a8072a00211f9ec176f0969d2200842b065d2ea539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome to Survirvor!";
        
        $__internal_e70a6f4ccc599d8d795df6a8072a00211f9ec176f0969d2200842b065d2ea539->leave($__internal_e70a6f4ccc599d8d795df6a8072a00211f9ec176f0969d2200842b065d2ea539_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9393451e6df7490c9aa9489020e71f225072a18b84033b87a6103a773ccf96cd = $this->env->getExtension("native_profiler");
        $__internal_9393451e6df7490c9aa9489020e71f225072a18b84033b87a6103a773ccf96cd->enter($__internal_9393451e6df7490c9aa9489020e71f225072a18b84033b87a6103a773ccf96cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9393451e6df7490c9aa9489020e71f225072a18b84033b87a6103a773ccf96cd->leave($__internal_9393451e6df7490c9aa9489020e71f225072a18b84033b87a6103a773ccf96cd_prof);

    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        $__internal_a730180fc2c1f2917857ece85fcd0cf185ff6536c7664ab10b380b33ca8500ef = $this->env->getExtension("native_profiler");
        $__internal_a730180fc2c1f2917857ece85fcd0cf185ff6536c7664ab10b380b33ca8500ef->enter($__internal_a730180fc2c1f2917857ece85fcd0cf185ff6536c7664ab10b380b33ca8500ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a730180fc2c1f2917857ece85fcd0cf185ff6536c7664ab10b380b33ca8500ef->leave($__internal_a730180fc2c1f2917857ece85fcd0cf185ff6536c7664ab10b380b33ca8500ef_prof);

    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a87cfab8046415df0f8cd271f96681686f0b2de244efcafc5afb383d4d4243eb = $this->env->getExtension("native_profiler");
        $__internal_a87cfab8046415df0f8cd271f96681686f0b2de244efcafc5afb383d4d4243eb->enter($__internal_a87cfab8046415df0f8cd271f96681686f0b2de244efcafc5afb383d4d4243eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a87cfab8046415df0f8cd271f96681686f0b2de244efcafc5afb383d4d4243eb->leave($__internal_a87cfab8046415df0f8cd271f96681686f0b2de244efcafc5afb383d4d4243eb_prof);

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
        return array (  153 => 48,  142 => 47,  131 => 6,  119 => 5,  110 => 49,  107 => 48,  105 => 47,  78 => 22,  72 => 16,  68 => 15,  64 => 14,  60 => 13,  56 => 12,  52 => 11,  47 => 9,  43 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
/*         <script src="{{ asset('https://code.highcharts.com/modules/exporting.js')}}"></script>*/
/*         <script type="text/javascript" src="{{ asset('js/onglet.js') }}" ></script>   */
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
