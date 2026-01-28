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

/* form/index.html.twig */
class __TwigTemplate_c458cc3a4b4afdd059321a0b6157d2c9 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "    <div class=\"card\">
        <h2 style=\"margin-bottom: 20px;\">Форма для заполнения</h2>
        
        ";
        // line 7
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["enctype" => "multipart/form-data"]]);
        yield "
        
        <div class=\"form-group\">
            ";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "text", [], "any", false, false, false, 10), 'label');
        yield "
            ";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "text", [], "any", false, false, false, 11), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            <div class=\"error\">";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "text", [], "any", false, false, false, 12), 'errors');
        yield "</div>
        </div>
        
        <div class=\"form-group\">
            ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 16), 'label');
        yield "
            ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            <div class=\"error\">";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 18), 'errors');
        yield "</div>
        </div>
        
        <div style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 20px;\">
            <div class=\"form-group\">
                ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "color", [], "any", false, false, false, 23), 'label');
        yield "
                ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "color", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                <div class=\"error\">";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "color", [], "any", false, false, false, 25), 'errors');
        yield "</div>
            </div>
            
            <div class=\"form-group\">
                ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "shape", [], "any", false, false, false, 29), 'label');
        yield "
                ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "shape", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                <div class=\"error\">";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "shape", [], "any", false, false, false, 31), 'errors');
        yield "</div>
            </div>
        </div>
        
        <div class=\"form-group\">
            ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "images", [], "any", false, false, false, 36), 'label');
        yield "
            ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "images", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            <div class=\"error\">";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "images", [], "any", false, false, false, 38), 'errors');
        yield "</div>
            <div class=\"help-text\">Можно загрузить до 4 изображений в формате JPG или PNG.</div>
        </div>
        
        <button type=\"submit\" class=\"btn btn-primary\" style=\"width: 100%; padding: 12px;\">Отправить</button>
        
        ";
        // line 44
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
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
        return "form/index.html.twig";
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
        return array (  157 => 44,  148 => 38,  144 => 37,  140 => 36,  132 => 31,  128 => 30,  124 => 29,  117 => 25,  113 => 24,  109 => 23,  101 => 18,  97 => 17,  93 => 16,  86 => 12,  82 => 11,  78 => 10,  72 => 7,  67 => 4,  57 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"card\">
        <h2 style=\"margin-bottom: 20px;\">Форма для заполнения</h2>
        
        {{ form_start(form, {'attr': {'enctype': 'multipart/form-data'}}) }}
        
        <div class=\"form-group\">
            {{ form_label(form.text) }}
            {{ form_widget(form.text, {'attr': {'class': 'form-control'}}) }}
            <div class=\"error\">{{ form_errors(form.text) }}</div>
        </div>
        
        <div class=\"form-group\">
            {{ form_label(form.email) }}
            {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}
            <div class=\"error\">{{ form_errors(form.email) }}</div>
        </div>
        
        <div style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 20px;\">
            <div class=\"form-group\">
                {{ form_label(form.color) }}
                {{ form_widget(form.color, {'attr': {'class': 'form-select'}}) }}
                <div class=\"error\">{{ form_errors(form.color) }}</div>
            </div>
            
            <div class=\"form-group\">
                {{ form_label(form.shape) }}
                {{ form_widget(form.shape, {'attr': {'class': 'form-select'}}) }}
                <div class=\"error\">{{ form_errors(form.shape) }}</div>
            </div>
        </div>
        
        <div class=\"form-group\">
            {{ form_label(form.images) }}
            {{ form_widget(form.images, {'attr': {'class': 'form-control'}}) }}
            <div class=\"error\">{{ form_errors(form.images) }}</div>
            <div class=\"help-text\">Можно загрузить до 4 изображений в формате JPG или PNG.</div>
        </div>
        
        <button type=\"submit\" class=\"btn btn-primary\" style=\"width: 100%; padding: 12px;\">Отправить</button>
        
        {{ form_end(form) }}
    </div>
{% endblock %}
", "form/index.html.twig", "/home/roman/symfony_tz_final/templates/form/index.html.twig");
    }
}
