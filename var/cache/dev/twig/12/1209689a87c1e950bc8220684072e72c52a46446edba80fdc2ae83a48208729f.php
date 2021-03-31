<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* pages/team.html.twig */
class __TwigTemplate_92dc20d5fa7eb952e63916d78174515441d5210a21e09b1f36d1488615bf33f4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/team.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/team.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/team.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello MENTIONS PAGE!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
<div class=\"container\">

    \t<h1 class=\"p-3\">Chaque épopée a ses héros...</h1>
    <div class=\"card mt-4 \">
  <div class=\"row g-0\">
    <div class=\"col-md-4\">
      <img src=\"img/femme.jpg\" alt=\"femme\" width=\"266px\">
    </div>
    <div class=\"col-md-8\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">Card title</h5>
        <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class=\"card-text\"><small class=\"text-muted\">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
<div class=\"card mt-4 \">
  <div class=\"row g-0\">
    <div class=\"col-md-8\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">Card title</h5>
        <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class=\"card-text\"><small class=\"text-muted\">Last updated 3 mins ago</small></p>
      </div>
    </div>
    <div class=\"col-md-4\">
      <img src=\"img/femme.jpg\" alt=\"...\" width=\"266px\">
    </div>
  </div>
</div>
<div class=\"card mt-4\">
  <div class=\"row g-0\">
    <div class=\"col-md-4\">
      <img src=\"img/femme.jpg\" alt=\"...\" width=\"266px\">
    </div>
    <div class=\"col-md-8\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">Card title</h5>
        <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class=\"card-text\"><small class=\"text-muted\">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello MENTIONS PAGE!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
<div class=\"container\">

    \t<h1 class=\"p-3\">Chaque épopée a ses héros...</h1>
    <div class=\"card mt-4 \">
  <div class=\"row g-0\">
    <div class=\"col-md-4\">
      <img src=\"img/femme.jpg\" alt=\"femme\" width=\"266px\">
    </div>
    <div class=\"col-md-8\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">Card title</h5>
        <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class=\"card-text\"><small class=\"text-muted\">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
<div class=\"card mt-4 \">
  <div class=\"row g-0\">
    <div class=\"col-md-8\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">Card title</h5>
        <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class=\"card-text\"><small class=\"text-muted\">Last updated 3 mins ago</small></p>
      </div>
    </div>
    <div class=\"col-md-4\">
      <img src=\"img/femme.jpg\" alt=\"...\" width=\"266px\">
    </div>
  </div>
</div>
<div class=\"card mt-4\">
  <div class=\"row g-0\">
    <div class=\"col-md-4\">
      <img src=\"img/femme.jpg\" alt=\"...\" width=\"266px\">
    </div>
    <div class=\"col-md-8\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">Card title</h5>
        <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class=\"card-text\"><small class=\"text-muted\">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>

{% endblock %}", "pages/team.html.twig", "C:\\wamp64\\www\\ODD\\templates\\pages\\team.html.twig");
    }
}
