<?php

/* /home/users/clmnds/www/october/themes/zwiebl-zwiebl_stellar/partials/home_page/section_one.htm */
class __TwigTemplate_83a371f9484c77acdb36c8d994ef706dd8fc9a31510e117ab088329d79c5a5ae extends Twig_Template
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
        echo "<section id=\"one\" class=\"main\">
    <div class=\"spotlight\">
        <div class=\"content\">
            <header class=\"major\">
                <h2>First Section</h2>
            </header>
            <p>Sed lorem ipsum dolor sit amet nullam consequat feugiat consequat magna
                adipiscing magna etiam amet veroeros. Lorem ipsum dolor tempus sit cursus.
                Tempus nisl et nullam lorem ipsum dolor sit amet aliquam.</p>
            <ul class=\"actions\">
                <li><a href=\"";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("generic");
        echo "\" class=\"button\">Learn More</a></li>
            </ul>
        </div>
        <span class=\"image\"><img src=\"";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/pic01.jpg");
        echo "\" alt=\"image\" /></span>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/home/users/clmnds/www/october/themes/zwiebl-zwiebl_stellar/partials/home_page/section_one.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 14,  31 => 11,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"one\" class=\"main\">
    <div class=\"spotlight\">
        <div class=\"content\">
            <header class=\"major\">
                <h2>First Section</h2>
            </header>
            <p>Sed lorem ipsum dolor sit amet nullam consequat feugiat consequat magna
                adipiscing magna etiam amet veroeros. Lorem ipsum dolor tempus sit cursus.
                Tempus nisl et nullam lorem ipsum dolor sit amet aliquam.</p>
            <ul class=\"actions\">
                <li><a href=\"{{'generic'|page}}\" class=\"button\">Learn More</a></li>
            </ul>
        </div>
        <span class=\"image\"><img src=\"{{'assets/images/pic01.jpg'|theme}}\" alt=\"image\" /></span>
    </div>
</section>", "/home/users/clmnds/www/october/themes/zwiebl-zwiebl_stellar/partials/home_page/section_one.htm", "");
    }
}
