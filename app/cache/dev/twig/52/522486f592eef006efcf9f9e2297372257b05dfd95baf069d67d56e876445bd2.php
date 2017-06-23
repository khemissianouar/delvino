<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_a8a31bc8516fb7003214808bc65c5e73d4c7e7bb1c0d6e743697f4f5f90345d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e2659d5bee86cd494ccceafc5bae00db4208eb260b914e153e4434840da36faa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2659d5bee86cd494ccceafc5bae00db4208eb260b914e153e4434840da36faa->enter($__internal_e2659d5bee86cd494ccceafc5bae00db4208eb260b914e153e4434840da36faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        // line 2
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_e2659d5bee86cd494ccceafc5bae00db4208eb260b914e153e4434840da36faa->leave($__internal_e2659d5bee86cd494ccceafc5bae00db4208eb260b914e153e4434840da36faa_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_12a1607614cbc22d78a99b42f2a3699f5723944965fbb9af4839324d5e931978 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12a1607614cbc22d78a99b42f2a3699f5723944965fbb9af4839324d5e931978->enter($__internal_12a1607614cbc22d78a99b42f2a3699f5723944965fbb9af4839324d5e931978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"row\">
    <div class=\"span12\">
        <h2>Mot de passe perdu</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">
                <div class=\"span4\">
                    <h4>Vous avez perdu votre mot de passe ?</h4>
                    <em>
                        Compléter le formulaire, un email vous seras envoyé.<br />
                        Il contiendra la procèdure à suivre pour récupérer votre mot de passe.
                    </em>
                </div>

                <div class=\"span4 offset2\">
                    <form action=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
                        <label for=\"username\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
                        <br />
                        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_12a1607614cbc22d78a99b42f2a3699f5723944965fbb9af4839324d5e931978->leave($__internal_12a1607614cbc22d78a99b42f2a3699f5723944965fbb9af4839324d5e931978_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  61 => 21,  55 => 18,  51 => 17,  35 => 3,  23 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block body %}
<div class=\"row\">
    <div class=\"span12\">
        <h2>Mot de passe perdu</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">
                <div class=\"span4\">
                    <h4>Vous avez perdu votre mot de passe ?</h4>
                    <em>
                        Compléter le formulaire, un email vous seras envoyé.<br />
                        Il contiendra la procèdure à suivre pour récupérer votre mot de passe.
                    </em>
                </div>

                <div class=\"span4 offset2\">
                    <form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
                        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
                        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
                        <br />
                        <input class=\"btn btn-primary\" type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "FOSUserBundle:Resetting:request_content.html.twig", "C:\\xampp\\htdocs\\Delvino\\app/Resources/FOSUserBundle/views/Resetting/request_content.html.twig");
    }
}
