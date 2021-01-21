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

/* avion/show.html.twig */
class __TwigTemplate_79640d9f4af2533dfc3d1a0efebaeaba4c09a3ed0c3ce984eaea21f34b896559 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avion/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avion/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "avion/show.html.twig", 1);
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

        echo "Avion";
        
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
        echo "    <h1>Avion</h1>

    <table class=\"table\">
        <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["avion"]) || array_key_exists("avion", $context) ? $context["avion"] : (function () { throw new RuntimeError('Variable "avion" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Immatriculation</th>
            <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["avion"]) || array_key_exists("avion", $context) ? $context["avion"] : (function () { throw new RuntimeError('Variable "avion" does not exist.', 16, $this->source); })()), "immatriculation", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Nombre de places</th>
            <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["avion"]) || array_key_exists("avion", $context) ? $context["avion"] : (function () { throw new RuntimeError('Variable "avion" does not exist.', 20, $this->source); })()), "nombrePlaces", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Heures de vol</th>
            <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["avion"]) || array_key_exists("avion", $context) ? $context["avion"] : (function () { throw new RuntimeError('Variable "avion" does not exist.', 24, $this->source); })()), "nombreHeuresVol", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Prix</th>
            <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, (isset($context["avion"]) || array_key_exists("avion", $context) ? $context["avion"] : (function () { throw new RuntimeError('Variable "avion" does not exist.', 28, $this->source); })()), "prix", [], "any", false, false, false, 28), "EUR"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Type</th>
            <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["avion"]) || array_key_exists("avion", $context) ? $context["avion"] : (function () { throw new RuntimeError('Variable "avion" does not exist.', 32, $this->source); })()), "typeAvion", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
        </tr>
        </tbody>
    </table>
    <div class=\"btn-group\" role=\"group\" aria-label=\"actions\">
        <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("avion_index");
        echo "\" class=\"btn btn-primary\">Retour</a>
        <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("avion_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["avion"]) || array_key_exists("avion", $context) ? $context["avion"] : (function () { throw new RuntimeError('Variable "avion" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38)]), "html", null, true);
        echo "\" class=\"btn-primary btn\">Modifier</a>
        ";
        // line 39
        echo twig_include($this->env, $context, "avion/_delete_form.html.twig");
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "avion/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 39,  143 => 38,  139 => 37,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Avion{% endblock %}

{% block body %}
    <h1>Avion</h1>

    <table class=\"table\">
        <tbody>
        <tr>
            <th>Id</th>
            <td>{{ avion.id }}</td>
        </tr>
        <tr>
            <th>Immatriculation</th>
            <td>{{ avion.immatriculation }}</td>
        </tr>
        <tr>
            <th>Nombre de places</th>
            <td>{{ avion.nombrePlaces }}</td>
        </tr>
        <tr>
            <th>Heures de vol</th>
            <td>{{ avion.nombreHeuresVol }}</td>
        </tr>
        <tr>
            <th>Prix</th>
            <td>{{ avion.prix|format_currency('EUR') }}</td>
        </tr>
        <tr>
            <th>Type</th>
            <td>{{ avion.typeAvion }}</td>
        </tr>
        </tbody>
    </table>
    <div class=\"btn-group\" role=\"group\" aria-label=\"actions\">
        <a href=\"{{ path('avion_index') }}\" class=\"btn btn-primary\">Retour</a>
        <a href=\"{{ path('avion_edit', {'id': avion.id}) }}\" class=\"btn-primary btn\">Modifier</a>
        {{ include('avion/_delete_form.html.twig') }}
    </div>
{% endblock %}
", "avion/show.html.twig", "/home/michel/Documents/CNAM/UTC504_MERISE_UML/Projet/airclub_manager/templates/avion/show.html.twig");
    }
}
