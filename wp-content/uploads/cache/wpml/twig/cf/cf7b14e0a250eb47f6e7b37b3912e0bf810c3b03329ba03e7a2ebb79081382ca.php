<?php

/* status.twig */
class __TwigTemplate_f5a6e3ad36ae4174677a7870f044ae7be3a828a568e0701b0163657e32f91deb extends Twig_Template
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
        // line 1
        echo (isset($context["conf_warnings"]) ? $context["conf_warnings"] : null);
        echo "

";
        // line 3
        echo (isset($context["store_pages"]) ? $context["store_pages"] : null);
        echo "

";
        // line 5
        echo (isset($context["products"]) ? $context["products"] : null);
        echo "

";
        // line 7
        echo (isset($context["taxonomies"]) ? $context["taxonomies"] : null);
        echo "

";
        // line 9
        echo (isset($context["multi_currency"]) ? $context["multi_currency"] : null);
        echo "

";
        // line 11
        echo (isset($context["plugins_status"]) ? $context["plugins_status"] : null);
        echo "

";
        // line 13
        echo (isset($context["media"]) ? $context["media"] : null);
        echo "

<a class=\"alignright wpml-margin-top-sm\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["troubl_url"]) ? $context["troubl_url"] : null), "html", null, true);
        echo "\">
    ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "troubl", array()), "html", null, true);
        echo "
</a>";
    }

    public function getTemplateName()
    {
        return "status.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 16,  54 => 15,  49 => 13,  44 => 11,  39 => 9,  34 => 7,  29 => 5,  24 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "status.twig", "C:\\OSPanel\\domains\\papir.local\\wp-content\\plugins\\woocommerce-multilingual\\templates\\status\\status.twig");
    }
}