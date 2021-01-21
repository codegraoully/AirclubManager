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

/* pilote/show.html.twig */
class __TwigTemplate_58c40d8f0c200dba8f5ea3932349223fc7b06ceb6563553336919877d6682fef extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pilote/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pilote/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pilote/show.html.twig", 1);
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

        echo "Pilote";
        
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
        echo "    <h1>Pilote</h1>

    <table class=\"table\">
        <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pilote"]) || array_key_exists("pilote", $context) ? $context["pilote"] : (function () { throw new RuntimeError('Variable "pilote" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Nom</th>
            <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pilote"]) || array_key_exists("pilote", $context) ? $context["pilote"] : (function () { throw new RuntimeError('Variable "pilote" does not exist.', 16, $this->source); })()), "nom", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Prenom</th>
            <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pilote"]) || array_key_exists("pilote", $context) ? $context["pilote"] : (function () { throw new RuntimeError('Variable "pilote" does not exist.', 20, $this->source); })()), "prenom", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Brevet</th>
            <td>
                ";
        // line 25
        echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, (isset($context["pilote"]) || array_key_exists("pilote", $context) ? $context["pilote"] : (function () { throw new RuntimeError('Variable "pilote" does not exist.', 25, $this->source); })()), "brevet", [], "any", false, false, false, 25), ", "), "html", null, true);
        echo "
            </td>
        </tr>
        <tr>
            <th>Qualifications</th>
            <td>
                ";
        // line 31
        echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, (isset($context["pilote"]) || array_key_exists("pilote", $context) ? $context["pilote"] : (function () { throw new RuntimeError('Variable "pilote" does not exist.', 31, $this->source); })()), "qualification", [], "any", false, false, false, 31), ", "), "html", null, true);
        echo "
            </td>
        </tr>
        </tbody>
    </table>

    <div class=\"btn-group\" role=\"group\" aria-label=\"actions\">
        <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pilote_index");
        echo "\" class=\"btn btn-primary\">Retour</a>
        <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pilote_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["pilote"]) || array_key_exists("pilote", $context) ? $context["pilote"] : (function () { throw new RuntimeError('Variable "pilote" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39)]), "html", null, true);
        echo "\" class=\"btn-primary btn\">Modifier</a>
        ";
        // line 40
        echo twig_include($this->env, $context, "pilote/_delete_form.html.twig");
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pilote/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 40,  141 => 39,  137 => 38,  127 => 31,  118 => 25,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Pilote{% endblock %}

{% block body %}
    <h1>Pilote</h1>

    <table class=\"table\">
        <tbody>
        <tr>
            <th>Id</th>
            <td>{{ pilote.id }}</td>
        </tr>
        <tr>
            <th>Nom</th>
            <td>{{ pilote.nom }}</td>
        </tr>
        <tr>
            <th>Prenom</th>
            <td>{{ pilote.prenom }}</td>
        </tr>
        <tr>
            <th>Brevet</th>
            <td>
                {{ pilote.brevet|join(', ') }}
            </td>
        </tr>
        <tr>
            <th>Qualifications</th>
            <td>
                {{ pilote.qualification|join(', ') }}
            </td>
        </tr>
        </tbody>
    </table>

    <div class=\"btn-group\" role=\"group\" aria-label=\"actions\">
        <a href=\"{{ path('pilote_index') }}\" class=\"btn btn-primary\">Retour</a>
        <a href=\"{{ path('pilote_edit', {'id': pilote.id}) }}\" class=\"btn-primary btn\">Modifier</a>
        {{ include('pilote/_delete_form.html.twig') }}
    </div>
{% endblock %}
", "pilote/show.html.twig", "/home/michel/Documents/CNAM/UTC504_MERISE_UML/Projet/airclub_manager/templates/pilote/show.html.twig");
    }
}
