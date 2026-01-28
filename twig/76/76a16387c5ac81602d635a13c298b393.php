<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* admin/dashboard.html.twig */
class __TwigTemplate_cd8450f45ed8bd3022219d6918ec2661 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'header_title' => [$this, 'block_header_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Панель администратора";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_title"));

        yield "Панель администратора";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "    <div class=\"card\">
        <h2 style=\"margin-bottom: 30px;\">Статистика</h2>
        
        <div style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 20px;\">
            <div style=\"border: 1px solid #ddd; border-radius: 8px; padding: 20px; text-align: center;\">
                <h3 style=\"margin-bottom: 10px;\">Всего заявок</h3>
                <p style=\"font-size: 2rem; color: #007bff;\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total_submissions"] ?? null), "html", null, true);
        yield "</p>
            </div>
            
            <div style=\"border: 1px solid #ddd; border-radius: 8px; padding: 20px; text-align: center;\">
                <h3 style=\"margin-bottom: 10px;\">Всего пользователей</h3>
                <p style=\"font-size: 2rem; color: #007bff;\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total_users"] ?? null), "html", null, true);
        yield "</p>
            </div>
        </div>
        
        <div style=\"margin-top: 30px; display: flex; flex-direction: column; gap: 10px;\">
            <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_submissions");
        yield "\" class=\"btn btn-primary\">Просмотр заявок</a>
            <a href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
        yield "\" class=\"btn\">Управление пользователями</a>
            <a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_form");
        yield "\" class=\"btn\">На сайт</a>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/dashboard.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  135 => 25,  131 => 24,  127 => 23,  119 => 18,  111 => 13,  103 => 7,  93 => 6,  76 => 4,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Панель администратора{% endblock %}
{% block header_title %}Панель администратора{% endblock %}

{% block body %}
    <div class=\"card\">
        <h2 style=\"margin-bottom: 30px;\">Статистика</h2>
        
        <div style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 20px;\">
            <div style=\"border: 1px solid #ddd; border-radius: 8px; padding: 20px; text-align: center;\">
                <h3 style=\"margin-bottom: 10px;\">Всего заявок</h3>
                <p style=\"font-size: 2rem; color: #007bff;\">{{ total_submissions }}</p>
            </div>
            
            <div style=\"border: 1px solid #ddd; border-radius: 8px; padding: 20px; text-align: center;\">
                <h3 style=\"margin-bottom: 10px;\">Всего пользователей</h3>
                <p style=\"font-size: 2rem; color: #007bff;\">{{ total_users }}</p>
            </div>
        </div>
        
        <div style=\"margin-top: 30px; display: flex; flex-direction: column; gap: 10px;\">
            <a href=\"{{ path('app_admin_submissions') }}\" class=\"btn btn-primary\">Просмотр заявок</a>
            <a href=\"{{ path('app_admin_users') }}\" class=\"btn\">Управление пользователями</a>
            <a href=\"{{ path('app_form') }}\" class=\"btn\">На сайт</a>
        </div>
    </div>
{% endblock %}
", "admin/dashboard.html.twig", "/home/roman/symfony_tz_final/templates/admin/dashboard.html.twig");
    }
}
