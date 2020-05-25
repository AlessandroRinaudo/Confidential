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

/* pages/home.html.twig */
class __TwigTemplate_639d6447a80ae1b3e746f232b32bab137e13dcbb3188adb01e6d0c1593e94134 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1 style=\"text-align: center;margin-top: 120px;columns: #b1b0b0;\"> Message aux membres</h1>
    <div class=\"all-posts\">
        <p style=\"overflow: hidden;white-space: nowrap;text-overflow: ellipsis;\">
            Laboris nisi ut aliquip ex ea commodo consequat. Quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.Laboris nisi ut aliquip ex ea commodo consequat. Quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.
            Laboris nisi ut aliquip ex ea commodo consequat. Quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.
            Laboris nisi uts dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.
        </p>
        <a href=\"#\">Lire tout</a>
    </div>
    <h1 style=\"text-align: center;margin-top: 30px\"> Tous les posts</h1>
    <div class=\"row\">
        ";
        // line 15
        echo twig_include($this->env, $context, "pages/post.html.twig");
        echo "
        ";
        // line 16
        echo twig_include($this->env, $context, "pages/post.html.twig");
        echo "
        ";
        // line 17
        echo twig_include($this->env, $context, "pages/post.html.twig");
        echo "
        ";
        // line 18
        echo twig_include($this->env, $context, "pages/post.html.twig");
        echo "
        ";
        // line 19
        echo twig_include($this->env, $context, "pages/post.html.twig");
        echo "
        ";
        // line 20
        echo twig_include($this->env, $context, "pages/post.html.twig");
        echo "


    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 20,  97 => 19,  93 => 18,  89 => 17,  85 => 16,  81 => 15,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1 style=\"text-align: center;margin-top: 120px;columns: #b1b0b0;\"> Message aux membres</h1>
    <div class=\"all-posts\">
        <p style=\"overflow: hidden;white-space: nowrap;text-overflow: ellipsis;\">
            Laboris nisi ut aliquip ex ea commodo consequat. Quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.Laboris nisi ut aliquip ex ea commodo consequat. Quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.
            Laboris nisi ut aliquip ex ea commodo consequat. Quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.
            Laboris nisi uts dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.
        </p>
        <a href=\"#\">Lire tout</a>
    </div>
    <h1 style=\"text-align: center;margin-top: 30px\"> Tous les posts</h1>
    <div class=\"row\">
        {{ include ('pages/post.html.twig') }}
        {{ include ('pages/post.html.twig') }}
        {{ include ('pages/post.html.twig') }}
        {{ include ('pages/post.html.twig') }}
        {{ include ('pages/post.html.twig') }}
        {{ include ('pages/post.html.twig') }}


    </div>
{% endblock %}", "pages/home.html.twig", "/Users/alessandro/Documents/secret_forum/templates/pages/home.html.twig");
    }
}
