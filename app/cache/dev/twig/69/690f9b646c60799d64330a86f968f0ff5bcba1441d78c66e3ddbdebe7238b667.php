<?php

/* default/index.html.twig */
class __TwigTemplate_d8a24dfd9306102afa78f356ded5c72fb481e44313fbf5c89c36033986170b86 extends Twig_Template
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
        $__internal_ec2be5db874dcefcc0cff634e180c2b21b71c0ae65756eca95c340b98c9a2323 = $this->env->getExtension("native_profiler");
        $__internal_ec2be5db874dcefcc0cff634e180c2b21b71c0ae65756eca95c340b98c9a2323->enter($__internal_ec2be5db874dcefcc0cff634e180c2b21b71c0ae65756eca95c340b98c9a2323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

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
    <body>
        <div class=\"container-fluid rambo\">
            <div class=\"col-md-12 vide\"></div>
            <div class=\"col-md-12\">
                
                <div class=\"col-md-4 blanc\">
                    <div class=\"col-md-12\">
                        <h2 class=\"log-title\">CONNEXION</h2>
                    </div>
                    <div class=\"col-md-12\">
                        ";
        // line 23
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 24
            echo "                            <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                        ";
        }
        // line 26
        echo "                    </div>
                <div>
                    <form action=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("user_login");
        echo "\" method=\"post\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                        <div class=\"col-md-12\">
                            <div class=\"col-md-6\">
                                <label for=\"username\"><span>Pseudo :</span></label>
                            </div>
                            <div class=\"col-md-6\">
                                <input class=\"champ-log\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 35
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
        // line 62
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
        
        $__internal_ec2be5db874dcefcc0cff634e180c2b21b71c0ae65756eca95c340b98c9a2323->leave($__internal_ec2be5db874dcefcc0cff634e180c2b21b71c0ae65756eca95c340b98c9a2323_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_357cea9d0fbd5398d646934b6be97d04cb6dbc6210e15736d59b68e724a19fa7 = $this->env->getExtension("native_profiler");
        $__internal_357cea9d0fbd5398d646934b6be97d04cb6dbc6210e15736d59b68e724a19fa7->enter($__internal_357cea9d0fbd5398d646934b6be97d04cb6dbc6210e15736d59b68e724a19fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Guessr";
        
        $__internal_357cea9d0fbd5398d646934b6be97d04cb6dbc6210e15736d59b68e724a19fa7->leave($__internal_357cea9d0fbd5398d646934b6be97d04cb6dbc6210e15736d59b68e724a19fa7_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 5,  123 => 62,  93 => 35,  84 => 29,  80 => 28,  76 => 26,  70 => 24,  68 => 23,  53 => 11,  49 => 10,  45 => 9,  41 => 8,  37 => 7,  33 => 6,  29 => 5,  23 => 1,);
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
/*     <body>*/
/*         <div class="container-fluid rambo">*/
/*             <div class="col-md-12 vide"></div>*/
/*             <div class="col-md-12">*/
/*                 */
/*                 <div class="col-md-4 blanc">*/
/*                     <div class="col-md-12">*/
/*                         <h2 class="log-title">CONNEXION</h2>*/
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
