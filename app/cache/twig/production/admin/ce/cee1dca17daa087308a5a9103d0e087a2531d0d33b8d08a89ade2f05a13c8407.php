<?php

/* Setting/System/authority_prototype.twig */
class __TwigTemplate_95b975d04f99ca228298b38899f41e4995a5afa36089af3d3df4b9f7d1ae0e64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "    <tr>
        <td>
            ";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "Authority", array()), 'widget', array("attr" => array("class" => "input-authority")));
        echo "
            ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "Authority", array()), 'errors');
        echo "
        </td>
        <td>
            ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "deny_url", array()), 'widget', array("attr" => array("class" => "input-deny-url")));
        echo "
            ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "deny_url", array()), 'errors');
        echo "
        </td>
        <td class=\"text-center\">
            <button type=\"button\" class=\"btn btn-default delete\">削除</button>
        </td>
    </tr>
";
    }

    public function getTemplateName()
    {
        return "Setting/System/authority_prototype.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 8,  33 => 7,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Setting/System/authority_prototype.twig", "/var/www/html/eccube3/src/Eccube/Resource/template/admin/Setting/System/authority_prototype.twig");
    }
}
