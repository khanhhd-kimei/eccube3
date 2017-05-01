<?php

/* __string_template__05712a11ca51ccaf270295a3e047eaca388474194e4d1f13ed5965e989d903de */
class __TwigTemplate_e1ef8ca135f4d7adaa995bfcbb521d2be179fe9513a0cb1421cc52c56993edec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__05712a11ca51ccaf270295a3e047eaca388474194e4d1f13ed5965e989d903de", 22);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sub_title' => array($this, 'block_sub_title'),
            'javascript' => array($this, 'block_javascript'),
            'main' => array($this, 'block_main'),
            '__internal_fcaca3df9b3283227405167e9d0af5cd8b0da7c40ba9b1d293582d6293c43e11' => array($this, 'block___internal_fcaca3df9b3283227405167e9d0af5cd8b0da7c40ba9b1d293582d6293c43e11'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 24
        $context["menus"] = array(0 => "setting", 1 => "system", 2 => "authority");
        // line 29
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = array())
    {
        echo "システム設定";
    }

    // line 27
    public function block_sub_title($context, array $blocks = array())
    {
        echo "権限管理";
    }

    // line 31
    public function block_javascript($context, array $blocks = array())
    {
        // line 32
        echo "<script>
\$(function() {

    var \$collectionHolder = \$('#table-authority');
    var index = \$collectionHolder.find('.input-deny-url').length;

    \$('.add').click(function() {
        var prototype = \$collectionHolder.data('prototype');
        index++;
        var newForm = prototype.replace(/__name__/g, index);
        var \$lastRow = \$('#table-authority tbody > tr:last')
        \$lastRow.after(newForm);
    });

    \$(document).on('click', '.delete', function() {
        \$(this).parent('td').parent('tr').remove();
        var idx = \$collectionHolder.find('.input-deny-url').length;
        if (idx == 0) {
            var prototype = \$collectionHolder.data('prototype');
            var newForm = prototype.replace(/__name__/g, idx);
            var \$lastRow = \$('#table-authority tbody')
            \$lastRow.append(newForm);
        }
    });

});
</script>
";
    }

    // line 61
    public function block_main($context, array $blocks = array())
    {
        // line 62
        echo "<div class=\"row\" id=\"aside_wrap\">
    <form name=\"form1\" method=\"post\" action=\"";
        // line 63
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_setting_system_authority");
        echo "\">
    ";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "_token", array()), 'widget');
        echo "
        <div id=\"authority_wrap\" class=\"col-md-9\">
            <div id=\"authority_list_box\" class=\"box\">
                <div id=\"authority_list_box__header\" class=\"box-header\">
                    <h3 class=\"box-title\">権限設定</h3>
                    <div style=\"margin-left: 10px;\">
                        <p>";
        // line 70
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "baseUrl", array()) . "/") . $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "admin_route", array())), "html", null, true);
        echo "以降からのURLを拒否URLに入力してください。</p>
                        <p>拒否URL以降がアクセス拒否されます。(URLは前方一致)</p>
                        <p>例) /setting <span class=\"text-danger\">※「/」を必ず記入してください</span></p>
                    </div>
                </div><!-- /.box-header -->
                <div id=\"authority_list_box__body\" class=\"box-body\">
                    <div id=\"authority_list\" class=\"table_list form-inlne\">
                        <div id=\"authority_list__body\" class=\"table-responsive\">
                            <table id=\"table-authority\" class=\"table table-striped table-condensed with-border\"
                                    data-prototype=\"";
        // line 79
        echo twig_escape_filter($this->env,         $this->renderBlock("__internal_fcaca3df9b3283227405167e9d0af5cd8b0da7c40ba9b1d293582d6293c43e11", $context, $blocks));
        echo "\">
                                <thead>
                                    <tr id=\"authority_list__header\">
                                        <th id=\"authority_list__header_role\" style=\"width: 210px;\">権限</th>
                                        <th id=\"authority_list__header_deny_url\">拒否URL</th>
                                        <th id=\"authority_list__header_delete_button\" style=\"width: 80px;\"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["form"], "AuthorityRoles", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["form"]) {
            // line 89
            echo "                                    <tr id=\"authority_list__item--";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\">
                                        <td id=\"authority_list__role--";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\">
                                            ";
            // line 91
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["form"], "Authority", array()), 'widget', array("attr" => array("class" => "input-authority")));
            echo "
                                            ";
            // line 92
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["form"], "Authority", array()), 'errors');
            echo "
                                        </td>
                                        <td id=\"authority_list__deny_url--";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\">
                                            ";
            // line 95
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["form"], "deny_url", array()), 'widget', array("attr" => array("class" => "input-deny-url")));
            echo "
                                            ";
            // line 96
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["form"], "deny_url", array()), 'errors');
            echo "
                                        </td>
                                        <td id=\"authority_list__delete_button--";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"text-center\">
                                            <button type=\"button\" class=\"btn btn-default delete\">削除</button>
                                        </td>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                    <p id=\"authority_box__add_button\">
                        <button type=\"button\" class=\"btn btn-default add\">行追加</button>
                    </p>
                    <div class=\"extra-form clearfix\">
                        ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "getIterator", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 112
            echo "                            ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 113
                echo "                                <div class=\"form-group\">
                                    ";
                // line 114
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'label');
                echo "
                                    ";
                // line 115
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'widget');
                echo "
                                    ";
                // line 116
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'errors');
                echo "
                                </div>
                            ";
            }
            // line 119
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "                    </div>
                </div>
            </div>
        </div><!-- /.col -->

        <div class=\"col-md-3\" id=\"aside_column\">
            <div id=\"common_box\" class=\"col_inner\">
                <div id=\"common_button_box\" class=\"box no-header\">
                    <div id=\"common_button_box__body\" class=\"box-body\">
                        <div id=\"common_button_box__insert_button\" class=\"row text-center\">
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

    // line 79
    public function block___internal_fcaca3df9b3283227405167e9d0af5cd8b0da7c40ba9b1d293582d6293c43e11($context, array $blocks = array())
    {
        echo twig_include($this->env, $context, "Setting/System/authority_prototype.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "AuthorityRoles", array()), "vars", array()), "prototype", array())));
    }

    public function getTemplateName()
    {
        return "__string_template__05712a11ca51ccaf270295a3e047eaca388474194e4d1f13ed5965e989d903de";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 79,  233 => 120,  227 => 119,  221 => 116,  217 => 115,  213 => 114,  210 => 113,  207 => 112,  203 => 111,  193 => 103,  174 => 98,  169 => 96,  165 => 95,  161 => 94,  156 => 92,  152 => 91,  148 => 90,  143 => 89,  126 => 88,  114 => 79,  102 => 70,  93 => 64,  89 => 63,  86 => 62,  83 => 61,  52 => 32,  49 => 31,  43 => 27,  37 => 26,  33 => 22,  31 => 29,  29 => 24,  11 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__05712a11ca51ccaf270295a3e047eaca388474194e4d1f13ed5965e989d903de", "");
    }
}
