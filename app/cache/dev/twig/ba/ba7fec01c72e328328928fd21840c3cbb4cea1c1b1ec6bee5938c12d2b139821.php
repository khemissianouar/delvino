<?php

/* EcommerceBundle:Default:region/modulesUsed/menu.html.twig */
class __TwigTemplate_ba362ae876cdc4766ec1ae7390e176a5e067b2ecb8e7a9bf6093165a47be6710 extends Twig_Template
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
        $__internal_c515306576b0a93536b2ae891e935208cb40eb0a99c78ae32c765f1ad3f78280 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c515306576b0a93536b2ae891e935208cb40eb0a99c78ae32c765f1ad3f78280->enter($__internal_c515306576b0a93536b2ae891e935208cb40eb0a99c78ae32c765f1ad3f78280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:region/modulesUsed/menu.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["regions"]) || array_key_exists("regions", $context) ? $context["regions"] : (function () { throw new Twig_Error_Runtime('Variable "regions" does not exist.', 1, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
            // line 2
            echo "
    <li>
        <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("regionProduits", array("region" => twig_get_attribute($this->env, $this->getSourceContext(), $context["region"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["region"], "nom", array()), "html", null, true);
            echo "</a>
    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['region'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_c515306576b0a93536b2ae891e935208cb40eb0a99c78ae32c765f1ad3f78280->leave($__internal_c515306576b0a93536b2ae891e935208cb40eb0a99c78ae32c765f1ad3f78280_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:region/modulesUsed/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  26 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for region in regions %}

    <li>
        <a href=\"{{ path('regionProduits',{'region':region.id})}}\">{{ region.nom }}</a>
    </li>
{% endfor %}
", "EcommerceBundle:Default:region/modulesUsed/menu.html.twig", "C:\\xampp\\htdocs\\Delvino\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/region/modulesUsed/menu.html.twig");
    }
}
