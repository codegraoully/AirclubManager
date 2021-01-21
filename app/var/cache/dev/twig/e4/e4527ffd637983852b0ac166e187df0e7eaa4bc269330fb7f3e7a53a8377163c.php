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

/* menu.html.twig */
class __TwigTemplate_2224b023dd62304cacc4b891a3abd03eaadc0e5776e7887ba42946b618634366 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'menu' => [$this, 'block_menu'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu.html.twig"));

        // line 1
        $this->displayBlock('menu', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 2
        echo "    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <a class=\"navbar-brand\" href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Airclub Manager</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
                aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav mr-auto\">

                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\"
                       role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Reservation
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_index");
        echo "\">Lister les reservations</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_new");
        echo "\">Ajouter une reservation</a>
                    </div>
                </li>

                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\"
                       role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Avion
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item\" href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("avion_index");
        echo "\">Lister les avions</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("avion_new");
        echo "\">Ajouter un avion</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("type_avion_index");
        echo "\">Ajouter un type d'avion</a>
                    </div>
                </li>

                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\"
                       data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Pilote
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item\" href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pilote_index");
        echo "\">Lister les pilotes</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pilote_new");
        echo "\">Ajouter un pilote</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("qualification_index");
        echo "\">Qualification</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("brevet_index");
        echo "\">Brevet</a>
                    </div>
                </li>
            </ul>
            <form class=\"form-inline my-2 my-lg-0\" action=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo "\" name=\"search\" method=\"get\">
                <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Recherche par nom\" aria-label=\"Search\"
                       name=\"search[pilote]\">
                <input class=\"btn btn-outline-dark my-2 my-sm-0\" type=\"submit\" name=\"search[research]\"
                       value=\"Recherche\">
                <input name=\"_method\" value=\"GET\" type=\"hidden\">
            </form>
        </div>
    </nav>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  143 => 50,  136 => 46,  131 => 44,  126 => 42,  122 => 41,  109 => 31,  105 => 30,  101 => 29,  88 => 19,  84 => 18,  66 => 3,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block menu %}
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <a class=\"navbar-brand\" href=\"{{ path('home') }}\">Airclub Manager</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
                aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav mr-auto\">

                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\"
                       role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Reservation
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item\" href=\"{{ path('reservation_index') }}\">Lister les reservations</a>
                        <a class=\"dropdown-item\" href=\"{{ path('reservation_new') }}\">Ajouter une reservation</a>
                    </div>
                </li>

                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\"
                       role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Avion
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item\" href=\"{{ path('avion_index') }}\">Lister les avions</a>
                        <a class=\"dropdown-item\" href=\"{{ path('avion_new') }}\">Ajouter un avion</a>
                        <a class=\"dropdown-item\" href=\"{{ path('type_avion_index') }}\">Ajouter un type d'avion</a>
                    </div>
                </li>

                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\"
                       data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Pilote
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item\" href=\"{{ path('pilote_index') }}\">Lister les pilotes</a>
                        <a class=\"dropdown-item\" href=\"{{ path('pilote_new') }}\">Ajouter un pilote</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"{{ path('qualification_index') }}\">Qualification</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"{{ path('brevet_index') }}\">Brevet</a>
                    </div>
                </li>
            </ul>
            <form class=\"form-inline my-2 my-lg-0\" action=\"{{ path('search') }}\" name=\"search\" method=\"get\">
                <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Recherche par nom\" aria-label=\"Search\"
                       name=\"search[pilote]\">
                <input class=\"btn btn-outline-dark my-2 my-sm-0\" type=\"submit\" name=\"search[research]\"
                       value=\"Recherche\">
                <input name=\"_method\" value=\"GET\" type=\"hidden\">
            </form>
        </div>
    </nav>
{% endblock %}
", "menu.html.twig", "/home/michel/Documents/CNAM/UTC504_MERISE_UML/Projet/airclub_manager/templates/menu.html.twig");
    }
}
