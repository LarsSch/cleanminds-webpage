<?php

/* /home/users/clmnds/www/october/themes/zwiebl-zwiebl_stellar/partials/home_page/section_two.htm */
class __TwigTemplate_dd147107990be4c5a10c0e154e16889ad7337765159701b1c66665698b490997 extends Twig_Template
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
        echo "<section id=\"two\" class=\"main\">
    <header class=\"major\">
        <h2>Second Section</h2>
    </header>
    <ul class=\"features\">
        <li>
            <span class=\"icon major style1 fa-code\"></span>
            <h3>Ipsum consequat</h3>
            <p>Sed lorem amet ipsum dolor et amet nullam consequat a feugiat consequat tempus veroeros sed consequat.</p>
        </li>
        <li>
            <span class=\"icon major style3 fa-copy\"></span>
            <h3>Amed sed feugiat</h3>
            <p>Sed lorem amet ipsum dolor et amet nullam consequat a feugiat consequat tempus veroeros sed consequat.</p>
        </li>
        <li>
            <span class=\"icon major style5 fa-diamond\"></span>
            <h3>Dolor nullam</h3>
            <p>Sed lorem amet ipsum dolor et amet nullam consequat a feugiat consequat tempus veroeros sed consequat.</p>
        </li>
    </ul>
    <footer class=\"major\">
        <ul class=\"actions\">
            <li><a href=\"";
        // line 24
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("generic");
        echo "\" class=\"button\">Learn More</a></li>
        </ul>
    </footer>
</section>";
    }

    public function getTemplateName()
    {
        return "/home/users/clmnds/www/october/themes/zwiebl-zwiebl_stellar/partials/home_page/section_two.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 24,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"two\" class=\"main\">
    <header class=\"major\">
        <h2>Second Section</h2>
    </header>
    <ul class=\"features\">
        <li>
            <span class=\"icon major style1 fa-code\"></span>
            <h3>Ipsum consequat</h3>
            <p>Sed lorem amet ipsum dolor et amet nullam consequat a feugiat consequat tempus veroeros sed consequat.</p>
        </li>
        <li>
            <span class=\"icon major style3 fa-copy\"></span>
            <h3>Amed sed feugiat</h3>
            <p>Sed lorem amet ipsum dolor et amet nullam consequat a feugiat consequat tempus veroeros sed consequat.</p>
        </li>
        <li>
            <span class=\"icon major style5 fa-diamond\"></span>
            <h3>Dolor nullam</h3>
            <p>Sed lorem amet ipsum dolor et amet nullam consequat a feugiat consequat tempus veroeros sed consequat.</p>
        </li>
    </ul>
    <footer class=\"major\">
        <ul class=\"actions\">
            <li><a href=\"{{'generic'|page}}\" class=\"button\">Learn More</a></li>
        </ul>
    </footer>
</section>", "/home/users/clmnds/www/october/themes/zwiebl-zwiebl_stellar/partials/home_page/section_two.htm", "");
    }
}
