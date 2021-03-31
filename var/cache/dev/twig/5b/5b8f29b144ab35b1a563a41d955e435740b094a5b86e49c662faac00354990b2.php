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

/* pages/index.html.twig */
class __TwigTemplate_6a9fb94912c7631d9770dd4fe94721237e3f4320fe24d1ca45f86fda9cdc9926 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/index.html.twig", 1);
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

        echo "Hello HOME PAGE!";
        
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
        echo "<!-- This example requires Tailwind CSS v2.0+ -->
<div class=\"relative bg-white overflow-hidden\">
  <div class=\"max-w-7xl mx-auto\">
    <div class=\"relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32\">
      <svg class=\"hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2\" fill=\"currentColor\" viewBox=\"0 0 100 100\" preserveAspectRatio=\"none\" aria-hidden=\"true\">
        <polygon points=\"50,0 100,0 50,100 0,100\" />
      </svg>

      <div class=\"relative pt-6 px-4 sm:px-6 lg:px-8\">
        <nav class=\"relative flex items-center justify-between sm:h-10 lg:justify-start\" aria-label=\"Global\">
          <div class=\"flex items-center flex-grow flex-shrink-0 lg:flex-grow-0\">
            <div class=\"flex items-center justify-between w-full md:w-auto\">
              <a href=\"#\">
                <span class=\"sr-only\">Workflow</span>
                <img class=\"h-8 w-auto sm:h-10\" src=\"https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg\">
              </a>
              <div class=\"-mr-2 flex items-center md:hidden\">
                <button type=\"button\" class=\"bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500\" id=\"main-menu\" aria-haspopup=\"true\">
                  <span class=\"sr-only\">Open main menu</span>
                  <!-- Heroicon name: menu -->
                  <svg class=\"h-6 w-6\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" aria-hidden=\"true\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 6h16M4 12h16M4 18h16\" />
                  </svg>
                </button>
              </div>
            </div>
          </div>
          <div class=\"hidden md:block md:ml-10 md:pr-4 md:space-x-8\">
            <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"font-medium text-gray-500 hover:text-gray-900\">Home</a>

            <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" class=\"font-medium text-gray-500 hover:text-gray-900\">Contact</a>
          </div>
        </nav>
      </div>

      <main class=\"mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28\">
        <div class=\"sm:text-center lg:text-left\">
          <h1 class=\"text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl\">
            <span class=\"block xl:inline\">UBO</span>
            <span class=\"block text-indigo-600 xl:inline\">Symfony</span>
          </h1>
          <p class=\"mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0\">
            Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.
          </p>
          <div class=\"mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start\">
            <div class=\"rounded-md shadow\">
              <a href=\"#\" class=\"w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10\">
                Découvrir
              </a>
            </div>
            <div class=\"mt-3 sm:mt-0 sm:ml-3\">
              <a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" class=\"w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10\">
                Contact
              </a>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
  <div class=\"lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2\">
    <img class=\"h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full\" src=\"https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2850&amp;q=80\" alt=\"\">
  </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 57,  123 => 36,  118 => 34,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HOME PAGE!{% endblock %}

{% block body %}
<!-- This example requires Tailwind CSS v2.0+ -->
<div class=\"relative bg-white overflow-hidden\">
  <div class=\"max-w-7xl mx-auto\">
    <div class=\"relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32\">
      <svg class=\"hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2\" fill=\"currentColor\" viewBox=\"0 0 100 100\" preserveAspectRatio=\"none\" aria-hidden=\"true\">
        <polygon points=\"50,0 100,0 50,100 0,100\" />
      </svg>

      <div class=\"relative pt-6 px-4 sm:px-6 lg:px-8\">
        <nav class=\"relative flex items-center justify-between sm:h-10 lg:justify-start\" aria-label=\"Global\">
          <div class=\"flex items-center flex-grow flex-shrink-0 lg:flex-grow-0\">
            <div class=\"flex items-center justify-between w-full md:w-auto\">
              <a href=\"#\">
                <span class=\"sr-only\">Workflow</span>
                <img class=\"h-8 w-auto sm:h-10\" src=\"https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg\">
              </a>
              <div class=\"-mr-2 flex items-center md:hidden\">
                <button type=\"button\" class=\"bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500\" id=\"main-menu\" aria-haspopup=\"true\">
                  <span class=\"sr-only\">Open main menu</span>
                  <!-- Heroicon name: menu -->
                  <svg class=\"h-6 w-6\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" aria-hidden=\"true\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 6h16M4 12h16M4 18h16\" />
                  </svg>
                </button>
              </div>
            </div>
          </div>
          <div class=\"hidden md:block md:ml-10 md:pr-4 md:space-x-8\">
            <a href=\"{{ path('home') }}\" class=\"font-medium text-gray-500 hover:text-gray-900\">Home</a>

            <a href=\"{{ path('contact') }}\" class=\"font-medium text-gray-500 hover:text-gray-900\">Contact</a>
          </div>
        </nav>
      </div>

      <main class=\"mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28\">
        <div class=\"sm:text-center lg:text-left\">
          <h1 class=\"text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl\">
            <span class=\"block xl:inline\">UBO</span>
            <span class=\"block text-indigo-600 xl:inline\">Symfony</span>
          </h1>
          <p class=\"mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0\">
            Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.
          </p>
          <div class=\"mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start\">
            <div class=\"rounded-md shadow\">
              <a href=\"#\" class=\"w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10\">
                Découvrir
              </a>
            </div>
            <div class=\"mt-3 sm:mt-0 sm:ml-3\">
              <a href=\"{{ path('contact') }}\" class=\"w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10\">
                Contact
              </a>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
  <div class=\"lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2\">
    <img class=\"h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full\" src=\"https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2850&amp;q=80\" alt=\"\">
  </div>
</div>
{% endblock %}
", "pages/index.html.twig", "/Users/fabiencanu/___KOALITY/___COURS/ubo-2021/ubo-sf-2021/templates/pages/index.html.twig");
    }
}
