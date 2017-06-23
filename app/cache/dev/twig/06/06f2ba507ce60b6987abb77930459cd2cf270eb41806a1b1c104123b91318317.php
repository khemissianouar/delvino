<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_2b8cd97dcb2559bb3c7736dd98e90c8f4c65fbae1239163e2028e5a81a742575 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8689ec6d0190142ab527ab3c8ef539d03159632428c83c8fba6aff63bfb64e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8689ec6d0190142ab527ab3c8ef539d03159632428c83c8fba6aff63bfb64e4->enter($__internal_e8689ec6d0190142ab527ab3c8ef539d03159632428c83c8fba6aff63bfb64e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8689ec6d0190142ab527ab3c8ef539d03159632428c83c8fba6aff63bfb64e4->leave($__internal_e8689ec6d0190142ab527ab3c8ef539d03159632428c83c8fba6aff63bfb64e4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1450dfb66b5b50ac8e663f9b33635519db085a32ab290e3cf2f0675320113dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1450dfb66b5b50ac8e663f9b33635519db085a32ab290e3cf2f0675320113dd->enter($__internal_a1450dfb66b5b50ac8e663f9b33635519db085a32ab290e3cf2f0675320113dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 5, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 6
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 7
                echo "            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                <strong>";
                // line 8
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</strong>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
    ";
        // line 13
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 15
        echo "</div>
";
        
        $__internal_a1450dfb66b5b50ac8e663f9b33635519db085a32ab290e3cf2f0675320113dd->leave($__internal_a1450dfb66b5b50ac8e663f9b33635519db085a32ab290e3cf2f0675320113dd_prof);

    }

    // line 13
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_55d61da424632a33a3626cef0bbc1e08767395343845d0c58c46e6cb2cd3e56b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55d61da424632a33a3626cef0bbc1e08767395343845d0c58c46e6cb2cd3e56b->enter($__internal_55d61da424632a33a3626cef0bbc1e08767395343845d0c58c46e6cb2cd3e56b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 14
        echo "    ";
        
        $__internal_55d61da424632a33a3626cef0bbc1e08767395343845d0c58c46e6cb2cd3e56b->leave($__internal_55d61da424632a33a3626cef0bbc1e08767395343845d0c58c46e6cb2cd3e56b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 14,  86 => 13,  78 => 15,  76 => 13,  73 => 12,  67 => 11,  58 => 8,  53 => 7,  48 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout/layout.html.twig\" %}

{% block body %}
<div class=\"container\">
    {% for type, messages in app.session.flashbag.all() %}
        {% for message in messages %}
            <div class=\"alert alert-{{ type }}\">
                <strong>{{ message }}</strong>
            </div>
        {% endfor %}
    {% endfor %}

    {% block fos_user_content %}
    {% endblock fos_user_content %}
</div>
{% endblock %}
", "FOSUserBundle::layout.html.twig", "C:\\xampp\\htdocs\\Delvino\\app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
