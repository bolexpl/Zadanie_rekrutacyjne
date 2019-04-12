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

/* surveys/list.html.twig */
class __TwigTemplate_cca52688e0bde5c23e103863ef6d1055d3125bf9422544226eb669ae39a06f4b extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "surveys/list.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "surveys/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "surveys/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Lista wyników";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "  <style>

  </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
  <div class=\"row\">
    <div class=\"col-12\">
      <h1>Wyniki</h1>

      ";
        // line 18
        echo "      ";
        if (((isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 18, $this->source); })()) > 1)) {
            // line 19
            echo "        <ul class=\"pagination pagination-sm\">
          ";
            // line 21
            echo "          <li class=\"page-item ";
            echo ((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 21, $this->source); })()) == 1)) ? ("disabled") : (""));
            echo "\">
            <a class=\"page-link\"
               href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_surveys2", ["page" => ((((            // line 24
(isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 24, $this->source); })()) - 1) < 1)) ? (1) : (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 24, $this->source); })()) - 1))), "limit" => (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 24, $this->source); })()), "sort" => (isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 24, $this->source); })()), "direction" => (isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 24, $this->source); })())]), "html", null, true);
            echo "\">«</a>
          </li>

          ";
            // line 28
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 28, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 29
                echo "            <li class=\"page-item ";
                echo ((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 29, $this->source); })()) == $context["i"])) ? ("disabled") : (""));
                echo "\">
              <a class=\"page-link\"
                 href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_surveys2", ["page" =>                 // line 32
$context["i"], "limit" => (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 32, $this->source); })()), "sort" => (isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 32, $this->source); })()), "direction" => (isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 32, $this->source); })())]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a>
            </li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "
          ";
            // line 37
            echo "          <li class=\"page-item ";
            echo ((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 37, $this->source); })()) == (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 37, $this->source); })()))) ? ("disabled") : (""));
            echo "\">
            <a class=\"page-link\"
               href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_surveys2", ["page" => ((((            // line 40
(isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 40, $this->source); })()) + 1) <= (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 40, $this->source); })()))) ? (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 40, $this->source); })()) + 1)) : ((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 40, $this->source); })()))), "limit" => (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 40, $this->source); })()), "sort" => (isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 40, $this->source); })()), "direction" => (isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 40, $this->source); })())]), "html", null, true);
            echo "\">»</a>
          </li>
        </ul>
      ";
        }
        // line 44
        echo "
      <ul class=\"pagination pagination-sm\">
        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => 10, 1 => 20, 2 => 30]);
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 47
            echo "          <li class=\"page-item ";
            echo ((((isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 47, $this->source); })()) == $context["i"])) ? ("disabled") : (""));
            echo "\">
            <a class=\"page-link\"
               href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_surveys2", ["page" =>             // line 50
(isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 50, $this->source); })()), "sort" => (isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 50, $this->source); })()), "limit" => $context["i"], "direction" => (isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 50, $this->source); })())]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</a>
          </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "      </ul>

      ";
        // line 56
        echo "      <table class=\"table\">
        <thead>
        <tr>
          <th scope=\"col\">#</th>
          <th scope=\"col\">Użytkownik</th>
          <th scope=\"col\">
            <a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_surveys2", ["page" =>         // line 63
(isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 63, $this->source); })()), "limit" => (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 63, $this->source); })()), "sort" => "first_name", "direction" => ((((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 63, $this->source); })()) == "asc")) ? ("desc") : ("asc"))]), "html", null, true);
        echo "\">
              Imię";
        // line 64
        echo ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 64, $this->source); })()) == "first_name")) ? (((((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 64, $this->source); })()) == "asc")) ? ("&uarr;") : ("&darr;"))) : (""));
        echo "
            </a>
          </th>
          <th scope=\"col\"><a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_surveys2", ["page" =>         // line 68
(isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 68, $this->source); })()), "limit" => (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 68, $this->source); })()), "sort" => "last_name", "direction" => ((((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 68, $this->source); })()) == "asc")) ? ("desc") : ("asc"))]), "html", null, true);
        echo "\">
              Nazwisko ";
        // line 69
        echo ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 69, $this->source); })()) == "last_name")) ? (((((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 69, $this->source); })()) == "asc")) ? ("&uarr;") : ("&darr;"))) : (""));
        echo "
            </a></th>
          <th scope=\"col\"><a href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_surveys2", ["page" =>         // line 72
(isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 72, $this->source); })()), "limit" => (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 72, $this->source); })()), "sort" => "age", "direction" => ((((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 72, $this->source); })()) == "asc")) ? ("desc") : ("asc"))]), "html", null, true);
        echo "\">
              Wiek ";
        // line 73
        echo ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 73, $this->source); })()) == "age")) ? (((((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 73, $this->source); })()) == "asc")) ? ("&uarr;") : ("&darr;"))) : (""));
        echo "
            </a></th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["surveys"]) || array_key_exists("surveys", $context) ? $context["surveys"] : (function () { throw new RuntimeError('Variable "surveys" does not exist.', 78, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 79
            echo "          <tr>
            <th scope=\"row\">";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", []), "html", null, true);
            echo "</th>
            <td>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["s"], "user", []), "username", []), "html", null, true);
            echo "</td>
            <td>";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "firstName", []), "html", null, true);
            echo "</td>
            <td>";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "lastName", []), "html", null, true);
            echo "</td>
            <td>";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "age", []), "html", null, true);
            echo "</td>
          </tr>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "        </tbody>
      </table>

    </div>
  </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "surveys/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 87,  281 => 84,  277 => 83,  273 => 82,  269 => 81,  265 => 80,  262 => 79,  245 => 78,  237 => 73,  233 => 72,  232 => 71,  227 => 69,  223 => 68,  222 => 67,  216 => 64,  212 => 63,  211 => 62,  203 => 56,  199 => 53,  188 => 50,  187 => 49,  181 => 47,  177 => 46,  173 => 44,  166 => 40,  165 => 39,  159 => 37,  156 => 35,  145 => 32,  144 => 31,  138 => 29,  133 => 28,  127 => 24,  126 => 23,  120 => 21,  117 => 19,  114 => 18,  107 => 12,  98 => 11,  85 => 6,  76 => 5,  58 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Lista wyników{% endblock %}

{% block stylesheets %}
  <style>

  </style>
{% endblock %}

{% block body %}

  <div class=\"row\">
    <div class=\"col-12\">
      <h1>Wyniki</h1>

      {# paginacja #}
      {% if maxPages > 1 %}
        <ul class=\"pagination pagination-sm\">
          {# `«` arrow  #}
          <li class=\"page-item {{ thisPage == 1 ? 'disabled' }}\">
            <a class=\"page-link\"
               href=\"{{ path('app_surveys2',
                 {page: thisPage-1 < 1 ? 1 : thisPage-1,'limit':limit, 'sort':sort, 'direction':direction}) }}\">«</a>
          </li>

          {# each page number #}
          {% for i in 1..maxPages %}
            <li class=\"page-item {{ thisPage == i ? 'disabled' }}\">
              <a class=\"page-link\"
                 href=\"{{ path('app_surveys2',
                   {page: i,'limit':limit, 'sort':sort, 'direction':direction}) }}\">{{ i }}</a>
            </li>
          {% endfor %}

          {# `»` arrow #}
          <li class=\"page-item {{ thisPage == maxPages ? 'disabled' }}\">
            <a class=\"page-link\"
               href=\"{{ path('app_surveys2',
                 {page: thisPage+1 <= maxPages ? thisPage+1 : thisPage,'limit':limit, 'sort':sort, 'direction':direction}) }}\">»</a>
          </li>
        </ul>
      {% endif %}

      <ul class=\"pagination pagination-sm\">
        {% for i in [10, 20, 30] %}
          <li class=\"page-item {{ limit == i ? 'disabled' }}\">
            <a class=\"page-link\"
               href=\"{{ path('app_surveys2',
                 {'page': thisPage, 'sort':sort,'limit':i, 'direction':direction}) }}\">{{ i }}</a>
          </li>
        {% endfor %}
      </ul>

      {# tabela #}
      <table class=\"table\">
        <thead>
        <tr>
          <th scope=\"col\">#</th>
          <th scope=\"col\">Użytkownik</th>
          <th scope=\"col\">
            <a href=\"{{ path('app_surveys2',
              {'page': thisPage,'limit':limit,'sort':'first_name','direction': direction=='asc'?'desc':'asc'}) }}\">
              Imię{{ sort=='first_name'? (direction=='asc'?'&uarr;':'&darr;') }}
            </a>
          </th>
          <th scope=\"col\"><a href=\"{{ path('app_surveys2',
              {'page': thisPage,'limit':limit,'sort':'last_name','direction': direction=='asc'?'desc':'asc'}) }}\">
              Nazwisko {{ sort=='last_name'? (direction=='asc'?'&uarr;':'&darr;') }}
            </a></th>
          <th scope=\"col\"><a href=\"{{ path('app_surveys2',
              {'page': thisPage,'limit':limit,'sort':'age','direction': direction=='asc'?'desc':'asc'}) }}\">
              Wiek {{ sort=='age'? (direction=='asc'?'&uarr;':'&darr;') }}
            </a></th>
        </tr>
        </thead>
        <tbody>
        {% for s in surveys %}
          <tr>
            <th scope=\"row\">{{ loop.index }}</th>
            <td>{{ s.user.username }}</td>
            <td>{{ s.firstName }}</td>
            <td>{{ s.lastName }}</td>
            <td>{{ s.age }}</td>
          </tr>
        {% endfor %}
        </tbody>
      </table>

    </div>
  </div>

{% endblock %}
", "surveys/list.html.twig", "/opt/lampp/htdocs/rekrutacja/templates/surveys/list.html.twig");
    }
}
