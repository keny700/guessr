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
        $__internal_b8835f99269a17b744ff6f1a964d949a3abf276ae81158670466bce4b9d51c1f = $this->env->getExtension("native_profiler");
        $__internal_b8835f99269a17b744ff6f1a964d949a3abf276ae81158670466bce4b9d51c1f->enter($__internal_b8835f99269a17b744ff6f1a964d949a3abf276ae81158670466bce4b9d51c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" ></script>
        <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://code.highcharts.com/highcharts.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://code.highcharts.com/modules/exporting.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/onglet.js"), "html", null, true);
        echo "\" ></script>   
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 23
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
              <a class=\"navbar-brand\" href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Home</a>
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
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 49
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 50
        echo "    </body>
</html>
";
        
        $__internal_b8835f99269a17b744ff6f1a964d949a3abf276ae81158670466bce4b9d51c1f->leave($__internal_b8835f99269a17b744ff6f1a964d949a3abf276ae81158670466bce4b9d51c1f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b271740731476febc93ab750bb503bbd64eac3de9b4f77a9ebc1acc70a04fde7 = $this->env->getExtension("native_profiler");
        $__internal_b271740731476febc93ab750bb503bbd64eac3de9b4f77a9ebc1acc70a04fde7->enter($__internal_b271740731476febc93ab750bb503bbd64eac3de9b4f77a9ebc1acc70a04fde7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome to Survirvor!";
        
        $__internal_b271740731476febc93ab750bb503bbd64eac3de9b4f77a9ebc1acc70a04fde7->leave($__internal_b271740731476febc93ab750bb503bbd64eac3de9b4f77a9ebc1acc70a04fde7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_504b93321f57927e492ee32ccdeb156f62671062822b4534617d68f8da2fbf22 = $this->env->getExtension("native_profiler");
        $__internal_504b93321f57927e492ee32ccdeb156f62671062822b4534617d68f8da2fbf22->enter($__internal_504b93321f57927e492ee32ccdeb156f62671062822b4534617d68f8da2fbf22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_504b93321f57927e492ee32ccdeb156f62671062822b4534617d68f8da2fbf22->leave($__internal_504b93321f57927e492ee32ccdeb156f62671062822b4534617d68f8da2fbf22_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_384aa60677566cbe8139ac69b34375617a8fbb9459e3976f4322b81d6ad33854 = $this->env->getExtension("native_profiler");
        $__internal_384aa60677566cbe8139ac69b34375617a8fbb9459e3976f4322b81d6ad33854->enter($__internal_384aa60677566cbe8139ac69b34375617a8fbb9459e3976f4322b81d6ad33854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_384aa60677566cbe8139ac69b34375617a8fbb9459e3976f4322b81d6ad33854->leave($__internal_384aa60677566cbe8139ac69b34375617a8fbb9459e3976f4322b81d6ad33854_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5eee52b0f173f3e74311e0738915ce21b916e2f4e9d07b72ccf8488491675daf = $this->env->getExtension("native_profiler");
        $__internal_5eee52b0f173f3e74311e0738915ce21b916e2f4e9d07b72ccf8488491675daf->enter($__internal_5eee52b0f173f3e74311e0738915ce21b916e2f4e9d07b72ccf8488491675daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5eee52b0f173f3e74311e0738915ce21b916e2f4e9d07b72ccf8488491675daf->leave($__internal_5eee52b0f173f3e74311e0738915ce21b916e2f4e9d07b72ccf8488491675daf_prof);

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
        return array (  157 => 49,  146 => 48,  135 => 6,  123 => 5,  114 => 50,  111 => 49,  109 => 48,  91 => 33,  79 => 23,  73 => 17,  69 => 16,  65 => 15,  61 => 14,  57 => 13,  52 => 11,  47 => 9,  43 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
/*         <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>*/
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
/*               <a class="navbar-brand" href="{{ path('home') }}">Home</a>*/
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
