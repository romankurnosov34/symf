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

/* admin/submissions/view.html.twig */
class __TwigTemplate_e8054109ca0e8080f816c8b8b6ec90a3 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/submissions/view.html.twig"));

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

        yield "Просмотр заявки #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["submission"] ?? null), "id", [], "any", false, false, false, 3), "html", null, true);
        
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

        yield "Просмотр заявки #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["submission"] ?? null), "id", [], "any", false, false, false, 4), "html", null, true);
        
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
        <h2 style=\"margin-bottom: 20px;\">Заявка #";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["submission"] ?? null), "id", [], "any", false, false, false, 8), "html", null, true);
        yield "</h2>
        
        <div style=\"margin-bottom: 20px;\">
            <table style=\"width: auto;\">
                <tr>
                    <th style=\"padding-right: 20px;\">ID:</th>
                    <td>";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["submission"] ?? null), "id", [], "any", false, false, false, 14), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td>";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["submission"] ?? null), "email", [], "any", false, false, false, 18), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Цвет:</th>
                    <td>";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["submission"] ?? null), "getColorName", [], "method", false, false, false, 22), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Фигура:</th>
                    <td>";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["submission"] ?? null), "getShapeName", [], "method", false, false, false, 26), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Дата создания:</th>
                    <td>";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["submission"] ?? null), "createdAt", [], "any", false, false, false, 30), "Y-m-d H:i:s"), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Кол-во изображений:</th>
                    <td>";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["submission"] ?? null), "getImagesCount", [], "method", false, false, false, 34), "html", null, true);
        yield "</td>
                </tr>
            </table>
        </div>
        
        <div style=\"margin-bottom: 20px;\">
            <h3>Текст сообщения:</h3>
            <div style=\"border: 1px solid #ddd; padding: 15px; border-radius: 4px; background: #f9f9f9;\">
                ";
        // line 42
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["submission"] ?? null), "text", [], "any", false, false, false, 42), "html", null, true));
        yield "
            </div>
        </div>
        
        ";
        // line 46
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["submission"] ?? null), "getImagesCount", [], "method", false, false, false, 46) > 0)) {
            // line 47
            yield "        <div style=\"margin-bottom: 20px;\">
            <h3>Изображения:</h3>
            <div style=\"display: flex; flex-wrap: wrap; gap: 10px; margin-top: 10px;\">
                ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["submission"] ?? null), "images", [], "any", false, false, false, 50));
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
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 51
                yield "                <div>
                    <a href=\"";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . $context["image"])), "html", null, true);
                yield "\" target=\"_blank\">
                        <img src=\"";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . $context["image"])), "html", null, true);
                yield "\" alt=\"Изображение ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 53), "html", null, true);
                yield "\" style=\"max-width: 150px; max-height: 150px; border: 1px solid #ddd;\">
                    </a>
                </div>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            yield "            </div>
        </div>
        ";
        }
        // line 60
        yield "        
        <div style=\"margin-top: 20px;\">
            <a href=\"";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_submissions");
        yield "\" class=\"btn\">← Назад к списку</a>
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
        return "admin/submissions/view.html.twig";
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
        return array (  230 => 62,  226 => 60,  221 => 57,  201 => 53,  197 => 52,  194 => 51,  177 => 50,  172 => 47,  170 => 46,  163 => 42,  152 => 34,  145 => 30,  138 => 26,  131 => 22,  124 => 18,  117 => 14,  108 => 8,  105 => 7,  95 => 6,  77 => 4,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Просмотр заявки #{{ submission.id }}{% endblock %}
{% block header_title %}Просмотр заявки #{{ submission.id }}{% endblock %}

{% block body %}
    <div class=\"card\">
        <h2 style=\"margin-bottom: 20px;\">Заявка #{{ submission.id }}</h2>
        
        <div style=\"margin-bottom: 20px;\">
            <table style=\"width: auto;\">
                <tr>
                    <th style=\"padding-right: 20px;\">ID:</th>
                    <td>{{ submission.id }}</td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td>{{ submission.email }}</td>
                </tr>
                <tr>
                    <th>Цвет:</th>
                    <td>{{ submission.getColorName() }}</td>
                </tr>
                <tr>
                    <th>Фигура:</th>
                    <td>{{ submission.getShapeName() }}</td>
                </tr>
                <tr>
                    <th>Дата создания:</th>
                    <td>{{ submission.createdAt|date('Y-m-d H:i:s') }}</td>
                </tr>
                <tr>
                    <th>Кол-во изображений:</th>
                    <td>{{ submission.getImagesCount() }}</td>
                </tr>
            </table>
        </div>
        
        <div style=\"margin-bottom: 20px;\">
            <h3>Текст сообщения:</h3>
            <div style=\"border: 1px solid #ddd; padding: 15px; border-radius: 4px; background: #f9f9f9;\">
                {{ submission.text|nl2br }}
            </div>
        </div>
        
        {% if submission.getImagesCount() > 0 %}
        <div style=\"margin-bottom: 20px;\">
            <h3>Изображения:</h3>
            <div style=\"display: flex; flex-wrap: wrap; gap: 10px; margin-top: 10px;\">
                {% for image in submission.images %}
                <div>
                    <a href=\"{{ asset('images/' ~ image) }}\" target=\"_blank\">
                        <img src=\"{{ asset('images/' ~ image) }}\" alt=\"Изображение {{ loop.index }}\" style=\"max-width: 150px; max-height: 150px; border: 1px solid #ddd;\">
                    </a>
                </div>
                {% endfor %}
            </div>
        </div>
        {% endif %}
        
        <div style=\"margin-top: 20px;\">
            <a href=\"{{ path('app_admin_submissions') }}\" class=\"btn\">← Назад к списку</a>
        </div>
    </div>
{% endblock %}
", "admin/submissions/view.html.twig", "/home/roman/symfony_tz_final/templates/admin/submissions/view.html.twig");
    }
}
