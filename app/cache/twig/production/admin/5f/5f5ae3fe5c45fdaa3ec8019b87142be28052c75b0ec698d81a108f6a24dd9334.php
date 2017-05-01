<?php

/* __string_template__f6f211a6d2e1d2f7e678e298e37abf909f4c707afe5fc648101efef8bce00f9b */
class __TwigTemplate_8dd71ef21c1baebe2ec654d031b3399b785a9943f5c7bef6ce52c09e0a5810a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 23
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__f6f211a6d2e1d2f7e678e298e37abf909f4c707afe5fc648101efef8bce00f9b", 23);
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
        $context["menus"] = array(0 => "setting", 1 => "system", 2 => "masterdata");
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
        echo "マスターデータ管理";
    }

    // line 30
    public function block_main($context, array $blocks = array())
    {
        // line 31
        echo "<form id=\"form1\" name=\"form1\" method=\"post\" action=\"";
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_setting_system_masterdata");
        echo "\">
<div class=\"row\">
    ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "_token", array()), 'widget');
        echo "
        <div id=\"master_edit\" class=\"col-md-12\">
            <div id=\"master_edit_box\" class=\"box\">
                <div id=\"master_edit_box__header\" class=\"box-header\">
                    <h3 class=\"box-title\">マスターデータ管理</h3>
                </div><!-- /.box-header -->
                <div id=\"master_edit_box__body\" class=\"box-body\">
                    <div id=\"master_edit_box__body_inner\" class=\"form-inline form-group\">
                        <div id=\"master_edit_box__masterdata\" class=\"form-group\">
                            ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "masterdata", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "masterdata", array()), 'errors');
        echo "
                        </div>
                        <div id=\"master_edit_box__confirm_button\" class=\"form-group\">
                            <button class=\"btn btn-primary btn-block\" type=\"submit\">選択</button>
                        </div>
                    </div>
                    <div class=\"extra-form clearfix\">
                        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "getIterator", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 51
            echo "                            ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 52
                echo "                                <div class=\"form-group\">
                                    ";
                // line 53
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'label');
                echo "
                                    ";
                // line 54
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'widget');
                echo "
                                    ";
                // line 55
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'errors');
                echo "
                                </div>
                            ";
            }
            // line 58
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>
</form>

";
        // line 66
        if ( !twig_test_empty($this->getAttribute(($context["form2"] ?? null), "data", array()))) {
            // line 67
            echo "<div class=\"row\" id=\"aside_wrap\">
<form id=\"form2\" name=\"form2\" method=\"post\" action=\"";
            // line 68
            echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_setting_system_masterdata_edit");
            echo "\">
    ";
            // line 69
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form2"] ?? null), "masterdata_name", array()), 'widget');
            echo "
    ";
            // line 70
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form2"] ?? null), "_token", array()), 'widget');
            echo "
        <div id=\"result_list_box\" class=\"col-md-9\">
            <div id=\"result_list_box__body\" class=\"box\">
                <div id=\"result_list_box__header\" class=\"box-header\">
                    <div class=\"read\">
                        マスターデータの値を設定できます。<br />
                        重複したIDを登録することはできません。<br />
                        空のIDを登録すると、値は削除されます。<br />
                        設定値によってはサイトが機能しなくなる場合もありますので、十分ご注意下さい。
                    </div>
                </div>

                <div id=\"result_list__body_inner\" class=\"table-responsive\">
                    <table id=\"result_list__list\" class=\"table table-bordered table-striped\">
                        <colgroup>
                            <col width=\"50%\">
                            <col>
                        </colgroup>
                        <tr id=\"result_list__list_header\">
                            <th id=\"result_list__header_id\">ID</th>
                            <th id=\"result_list__header_name\">Name</th>
                            ";
            // line 92
            echo "                        </tr>
                        ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form2"] ?? null), "data", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 94
                echo "                        <tr id=\"result_list__item--";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "vars", array()), "name", array()), "html", null, true);
                echo "\">
                            <td id=\"result_list__id--";
                // line 95
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "vars", array()), "name", array()), "html", null, true);
                echo "\">
                                ";
                // line 96
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["data"], "id", array()), 'widget');
                echo "
                                ";
                // line 97
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["data"], "id", array()), 'errors');
                echo "
                            </td>
                            <td id=\"result_list__name--";
                // line 99
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "vars", array()), "name", array()), "html", null, true);
                echo "\">
                                ";
                // line 100
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["data"], "name", array()), 'widget');
                echo "
                                ";
                // line 101
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["data"], "name", array()), 'errors');
                echo "
                            </td>
                            ";
                // line 108
                echo "                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "                    </table>
                </div>
            </div><!-- /.box-body -->
        </div>

        <div class=\"col-md-3\" id=\"aside_column\">
            <div id=\"common_box\" class=\"col_inner\">
                <div id=\"common_button_box\" class=\"box no-header\">
                    <div id=\"common_button_box__body\" class=\"box-body\">
                        <div id=\"common_button_box__insert_button\"  class=\"row text-center\">
                            <div class=\"col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0\">
                                <button class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">登録</button>
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div><!-- /.col --> 
</form>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__f6f211a6d2e1d2f7e678e298e37abf909f4c707afe5fc648101efef8bce00f9b";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 110,  194 => 108,  189 => 101,  185 => 100,  181 => 99,  176 => 97,  172 => 96,  168 => 95,  163 => 94,  159 => 93,  156 => 92,  132 => 70,  128 => 69,  124 => 68,  121 => 67,  119 => 66,  110 => 59,  104 => 58,  98 => 55,  94 => 54,  90 => 53,  87 => 52,  84 => 51,  80 => 50,  70 => 43,  66 => 42,  54 => 33,  48 => 31,  45 => 30,  39 => 28,  33 => 27,  29 => 23,  27 => 25,  11 => 23,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__f6f211a6d2e1d2f7e678e298e37abf909f4c707afe5fc648101efef8bce00f9b", "");
    }
}
