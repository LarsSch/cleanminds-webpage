<?php

/* /home/users/clmnds/www/october/themes/zwiebl-zwiebl_stellar/partials/all_pages/header.htm */
class __TwigTemplate_b25b24620e73d23b41f90ba5169ab7210d9ae63d583285a0417a67eef01af8fd extends Twig_Template
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
        echo "<!-- Header -->
<header id=\"header\" class=\"alt\">
    <span class=\"logo\"><img src=\"";
        // line 3
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/logo.svg");
        echo "\" alt=\"Logo\" /></span>
    <h1>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</h1>
    <p>";
        // line 5
        echo twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "description", array());
        echo "</p>
</header>";
    }

    public function getTemplateName()
    {
        return "/home/users/clmnds/www/october/themes/zwiebl-zwiebl_stellar/partials/all_pages/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Header -->
<header id=\"header\" class=\"alt\">
    <span class=\"logo\"><img src=\"{{'assets/images/logo.svg'|theme}}\" alt=\"Logo\" /></span>
    <h1>{{ this.page.title }}</h1>
    <p>{{ this.page.description|raw }}</p>
</header>", "/home/users/clmnds/www/october/themes/zwiebl-zwiebl_stellar/partials/all_pages/header.htm", "");
    }
}
