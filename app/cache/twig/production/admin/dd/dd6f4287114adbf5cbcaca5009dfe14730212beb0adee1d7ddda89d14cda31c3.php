<?php

/* __string_template__72314f2aa3adeb97d731b126ed4a051b965e863e01c0a785e8a6b8e35701af1d */
class __TwigTemplate_16a28050bf26f6d92a8a75a37146460f22bbee3f29601ffac838f4a3a580721a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 23
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__72314f2aa3adeb97d731b126ed4a051b965e863e01c0a785e8a6b8e35701af1d", 23);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sub_title' => array($this, 'block_sub_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 25
        $context["menus"] = array(0 => "setting", 1 => "system", 2 => "log");
        // line 23
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_title($context, array $blocks = array())
    {
        echo "システム設定";
    }

    // line 28
    public function block_sub_title($context, array $blocks = array())
    {
        echo "EC-CUBE ログ表示";
    }

    // line 30
    public function block_main($context, array $blocks = array())
    {
        // line 31
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div id=\"log_box\" class=\"box\">
                <div id=\"log_box__header\" class=\"box-header\">
                    <h3 class=\"box-title\">EC-CUBE ログ表示</h3>
                </div><!-- /.box-header -->

                <div id=\"log_box__body\" class=\"box-body\">
                    <div id=\"log_conditions_box\">
                        <form name=\"form1\" id=\"form1\" method=\"post\">
                            ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "_token", array()), 'widget');
        echo "
                            <div id=\"log_conditions_box__body\" class=\"form-inline form-group\">
                                <div  id=\"log_conditions_box__files\" class=\"form-group\">
                                    ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "files", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                                <div id=\"log_conditions_box__line_max\" class=\"form-group\">
                                    直近の";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "line_max", array()), 'widget', array("id" => "line-max", "attr" => array("class" => "form-control")));
        echo "行を
                                </div>
                                <div id=\"log_conditions_box__confirm_button\" class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-default\">読み込む</button>
                                </div>
                            </div>
                            <div class=\"extra-form clearfix\">
                                ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "getIterator", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 55
            echo "                                    ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 56
                echo "                                        <div class=\"form-group\">
                                            ";
                // line 57
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'label');
                echo "
                                            ";
                // line 58
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'widget');
                echo "
                                            ";
                // line 59
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'errors');
                echo "
                                        </div>
                                    ";
            }
            // line 62
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                            </div>
                        </form>
                    </div>
                    <div id=\"log_view\">
<textarea id=\"log\" class=\"form-control\" rows=\"20\"  wrap=\"off\" readonly>
";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["log"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
            // line 69
            echo twig_escape_filter($this->env, $context["line"], "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "</textarea>
                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__72314f2aa3adeb97d731b126ed4a051b965e863e01c0a785e8a6b8e35701af1d";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 71,  123 => 69,  119 => 68,  112 => 63,  106 => 62,  100 => 59,  96 => 58,  92 => 57,  89 => 56,  86 => 55,  82 => 54,  72 => 47,  66 => 44,  60 => 41,  48 => 31,  45 => 30,  39 => 28,  33 => 27,  29 => 23,  27 => 25,  11 => 23,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__72314f2aa3adeb97d731b126ed4a051b965e863e01c0a785e8a6b8e35701af1d", "");
    }
}
