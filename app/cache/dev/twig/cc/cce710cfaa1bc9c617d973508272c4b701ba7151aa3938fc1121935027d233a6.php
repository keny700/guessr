<?php

/* default/login.html.twig */
class __TwigTemplate_9caba4f140d97c75d4ed5908fc1336b50e864c5579018513f02d4e9afbf26de0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3379d68f19fe461a5737ecec3e2fd401cd0b3546bc224fdc69ae9800540091a9 = $this->env->getExtension("native_profiler");
        $__internal_3379d68f19fe461a5737ecec3e2fd401cd0b3546bc224fdc69ae9800540091a9->enter($__internal_3379d68f19fe461a5737ecec3e2fd401cd0b3546bc224fdc69ae9800540091a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("yourFavIcon.png"), "html", null, true);
        echo "\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/stylesheet.css"), "html", null, true);
        echo "\">
        <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\" ></script>
        <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" ></script> 
    </head>

";
        // line 15
        echo "
    <body>
        <div class=\"container-fluid rambo\">
            <div class=\"col-md-12 vide\"></div>
            <div class=\"col-md-12\">
                
                <div class=\"col-md-4 blanc\">
                    <div class=\"col-md-12\">
                        <h2 class=\"log-title\">GUESSR</h2>
                    </div>
                    <div class=\"col-md-12\">
                        ";
        // line 26
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 27
            echo "                            <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                        ";
        }
        // line 29
        echo "                    </div>
                <div>
                    <form action=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("user_login");
        echo "\" method=\"post\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                        <div class=\"col-md-12\">
                            <div class=\"col-md-6\">
                                <label for=\"username\"><span>Pseudo :</span></label>
                            </div>
                            <div class=\"col-md-6\">
                                <input class=\"champ-log\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
                            </div>
                        </div>
                        <div class\"col-md-12\">
                            <div class=\"col-md-6\">
                                <label for=\"password\"><span>Mot de Passe :</span></label>
                            </div>
                            <div class=\"col-md-6\">
                                <input class=\"champ-log\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            
                            <div class=\"col-md-6\">
                                <label for=\"remember_me\"><span>Se souvenir de moi :</span></label>
                            </div>
                            <div class=\"col-md-5\">
                                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"col-md-8\"></div>
                            <div class=\"col-md-4\">
                                <input type=\"submit\" class=\"btnlogin\" id=\"_submit\" name=\"_submit\" value=\"Envoyer\" />
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <p>Nouveau ?<a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("user_register");
        echo "\">
                                    <input type=\"submit\" class=\"btnlogin\" id=\"_submit\" name=\"_submit\" value=\"Inscription\" />
                                </a></p> 
                        </div>
                    </form>
                </div>
        </div>
    </body>
</html>";
        
        $__internal_3379d68f19fe461a5737ecec3e2fd401cd0b3546bc224fdc69ae9800540091a9->leave($__internal_3379d68f19fe461a5737ecec3e2fd401cd0b3546bc224fdc69ae9800540091a9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2a6e345199e3c7c2a46f1a479b63e03b20abb76ce871cfd9fbde4b03c3dba06b = $this->env->getExtension("native_profiler");
        $__internal_2a6e345199e3c7c2a46f1a479b63e03b20abb76ce871cfd9fbde4b03c3dba06b->enter($__internal_2a6e345199e3c7c2a46f1a479b63e03b20abb76ce871cfd9fbde4b03c3dba06b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Guessr";
        
        $__internal_2a6e345199e3c7c2a46f1a479b63e03b20abb76ce871cfd9fbde4b03c3dba06b->leave($__internal_2a6e345199e3c7c2a46f1a479b63e03b20abb76ce871cfd9fbde4b03c3dba06b_prof);

    }

    public function getTemplateName()
    {
        return "default/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 5,  127 => 65,  97 => 38,  88 => 32,  84 => 31,  80 => 29,  74 => 27,  72 => 26,  59 => 15,  53 => 11,  49 => 10,  45 => 9,  41 => 8,  37 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Guessr{% endblock %}</title>*/
/*         <link rel="icon" type="image/png" href="{{ asset('yourFavIcon.png') }}">*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('css/stylesheet.css') }}">*/
/*         <script type="text/javascript" src="{{ asset('js/jquery.js') }}" ></script>*/
/*         <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}" ></script> */
/*     </head>*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/*     <body>*/
/*         <div class="container-fluid rambo">*/
/*             <div class="col-md-12 vide"></div>*/
/*             <div class="col-md-12">*/
/*                 */
/*                 <div class="col-md-4 blanc">*/
/*                     <div class="col-md-12">*/
/*                         <h2 class="log-title">GUESSR</h2>*/
/*                     </div>*/
/*                     <div class="col-md-12">*/
/*                         {% if error %}*/
/*                             <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 <div>*/
/*                     <form action="{{ path("user_login") }}" method="post">*/
/*                         <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*                         <div class="col-md-12">*/
/*                             <div class="col-md-6">*/
/*                                 <label for="username"><span>Pseudo :</span></label>*/
/*                             </div>*/
/*                             <div class="col-md-6">*/
/*                                 <input class="champ-log" type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class"col-md-12">*/
/*                             <div class="col-md-6">*/
/*                                 <label for="password"><span>Mot de Passe :</span></label>*/
/*                             </div>*/
/*                             <div class="col-md-6">*/
/*                                 <input class="champ-log" type="password" id="password" name="_password" required="required" />*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-md-12">*/
/*                             */
/*                             <div class="col-md-6">*/
/*                                 <label for="remember_me"><span>Se souvenir de moi :</span></label>*/
/*                             </div>*/
/*                             <div class="col-md-5">*/
/*                                 <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-md-12">*/
/*                             <div class="col-md-8"></div>*/
/*                             <div class="col-md-4">*/
/*                                 <input type="submit" class="btnlogin" id="_submit" name="_submit" value="Envoyer" />*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-md-12">*/
/*                             <p>Nouveau ?<a href="{{ path('user_register') }}">*/
/*                                     <input type="submit" class="btnlogin" id="_submit" name="_submit" value="Inscription" />*/
/*                                 </a></p> */
/*                         </div>*/
/*                     </form>*/
/*                 </div>*/
/*         </div>*/
/*     </body>*/
/* </html>*/
