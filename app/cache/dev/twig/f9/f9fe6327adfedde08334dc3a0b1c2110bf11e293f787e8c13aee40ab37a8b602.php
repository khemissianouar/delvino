<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_56a8a1a4153a527054ff2048e925595009a1bd2cf46fd0d6ca7caec56d8344f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_24ff861d4778cf5d0a0fd4562f452cf5ee0f2feac606bf3f69542b62c1b10eaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24ff861d4778cf5d0a0fd4562f452cf5ee0f2feac606bf3f69542b62c1b10eaa->enter($__internal_24ff861d4778cf5d0a0fd4562f452cf5ee0f2feac606bf3f69542b62c1b10eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 1
        echo "

";
        // line 4
        echo "<div class=\"row\">
    <div class=\"span12\">
        <h2>Connexion</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">
                <div class=\"span4\">
                    <h4>Pas encore inscrit ?</h4>
                    <em>
                        nous vous invitons à vous inscrire<br />
                        afin de passer votre commande et de manger équilibré.
                    </em>
                </div>

                <div class=\"span4 offset2\">
                    <h4>Inscription</h4>
                    <form action=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
                        ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), 'widget');
        echo "
                        <br />
                        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                    </form>
                </div>
            </div>
        </div>
    </div>

      </div>
</div>
";
        
        $__internal_24ff861d4778cf5d0a0fd4562f452cf5ee0f2feac606bf3f69542b62c1b10eaa->leave($__internal_24ff861d4778cf5d0a0fd4562f452cf5ee0f2feac606bf3f69542b62c1b10eaa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 22,  49 => 20,  43 => 19,  26 => 4,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("

{% trans_default_domain 'FOSUserBundle' %}
<div class=\"row\">
    <div class=\"span12\">
        <h2>Connexion</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">
                <div class=\"span4\">
                    <h4>Pas encore inscrit ?</h4>
                    <em>
                        nous vous invitons à vous inscrire<br />
                        afin de passer votre commande et de manger équilibré.
                    </em>
                </div>

                <div class=\"span4 offset2\">
                    <h4>Inscription</h4>
                    <form action=\"{{ path('fos_user_registration_register') }}\" {{ form_enctype(form) }} method=\"POST\" class=\"fos_user_registration_register\">
                        {{ form_widget(form) }}
                        <br />
                        <input class=\"btn btn-primary\" type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
                    </form>
                </div>
            </div>
        </div>
    </div>

      </div>
</div>
", "FOSUserBundle:Registration:register_content.html.twig", "C:\\xampp\\htdocs\\Delvino\\app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}