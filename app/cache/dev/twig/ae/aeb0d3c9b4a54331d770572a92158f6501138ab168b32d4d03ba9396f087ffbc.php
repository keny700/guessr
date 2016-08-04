<?php

/* base.html.twig */
class __TwigTemplate_306f915f772006fca994d07717a54124b8c809a3e4bfd2b2770b92115e4858e0 extends Twig_Template
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
        $__internal_b12dbf9228d4317aa4b5c8888161fceb1619043b92c95c4365610cac89ceb90b = $this->env->getExtension("native_profiler");
        $__internal_b12dbf9228d4317aa4b5c8888161fceb1619043b92c95c4365610cac89ceb90b->enter($__internal_b12dbf9228d4317aa4b5c8888161fceb1619043b92c95c4365610cac89ceb90b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_b12dbf9228d4317aa4b5c8888161fceb1619043b92c95c4365610cac89ceb90b->leave($__internal_b12dbf9228d4317aa4b5c8888161fceb1619043b92c95c4365610cac89ceb90b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c61fea3b0ac26c8e65352d9f861af2e6d3122b0085744f9bfd6f9a7ac36fae23 = $this->env->getExtension("native_profiler");
        $__internal_c61fea3b0ac26c8e65352d9f861af2e6d3122b0085744f9bfd6f9a7ac36fae23->enter($__internal_c61fea3b0ac26c8e65352d9f861af2e6d3122b0085744f9bfd6f9a7ac36fae23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome to Survirvor!";
        
        $__internal_c61fea3b0ac26c8e65352d9f861af2e6d3122b0085744f9bfd6f9a7ac36fae23->leave($__internal_c61fea3b0ac26c8e65352d9f861af2e6d3122b0085744f9bfd6f9a7ac36fae23_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_08eb6d2d2eadbcf4206902ef79cbef62cc8f8f122179eba8b27f3130f13442b9 = $this->env->getExtension("native_profiler");
        $__internal_08eb6d2d2eadbcf4206902ef79cbef62cc8f8f122179eba8b27f3130f13442b9->enter($__internal_08eb6d2d2eadbcf4206902ef79cbef62cc8f8f122179eba8b27f3130f13442b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_08eb6d2d2eadbcf4206902ef79cbef62cc8f8f122179eba8b27f3130f13442b9->leave($__internal_08eb6d2d2eadbcf4206902ef79cbef62cc8f8f122179eba8b27f3130f13442b9_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec2eaf7b407df83dfd9df01288b90f4958adf5b84186197f01705c64ad430467 = $this->env->getExtension("native_profiler");
        $__internal_ec2eaf7b407df83dfd9df01288b90f4958adf5b84186197f01705c64ad430467->enter($__internal_ec2eaf7b407df83dfd9df01288b90f4958adf5b84186197f01705c64ad430467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ec2eaf7b407df83dfd9df01288b90f4958adf5b84186197f01705c64ad430467->leave($__internal_ec2eaf7b407df83dfd9df01288b90f4958adf5b84186197f01705c64ad430467_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_73d2e952252fc5206b7dbd292fca4c9b81629b9569857c30090e92372dc4396b = $this->env->getExtension("native_profiler");
        $__internal_73d2e952252fc5206b7dbd292fca4c9b81629b9569857c30090e92372dc4396b->enter($__internal_73d2e952252fc5206b7dbd292fca4c9b81629b9569857c30090e92372dc4396b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_73d2e952252fc5206b7dbd292fca4c9b81629b9569857c30090e92372dc4396b->leave($__internal_73d2e952252fc5206b7dbd292fca4c9b81629b9569857c30090e92372dc4396b_prof);

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
