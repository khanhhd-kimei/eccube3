<?php

/* __string_template__aa4861a3f7e139334f318f9c85f9a6cc4764bcdf6ba43ad821185e9347b31ae2 */
class __TwigTemplate_d90abe74620df680c329104258be024edf3329ec7b3b28dad87b4c093f7d1a67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__aa4861a3f7e139334f318f9c85f9a6cc4764bcdf6ba43ad821185e9347b31ae2", 22);
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
        // line 24
        $context["menus"] = array(0 => "setting", 1 => "system", 2 => "security");
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
        echo "セキュリティ管理";
    }

    // line 31
    public function block_main($context, array $blocks = array())
    {
        // line 32
        echo "<div class=\"row\" id=\"aside_wrap\">
    <form method=\"post\" action=\"";
        // line 33
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_setting_system_security");
        echo "\">
    ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "_token", array()), 'widget');
        echo "
        <div  id=\"security_wrap\" class=\"col-md-9\">
            <div id=\"security_box\" class=\"box\">
                <div id=\"security_box__header\" class=\"box-header\">
                    <h3 class=\"box-title\">セキュリティ機能設定</h3>
                </div><!-- /.box-header -->
                <div id=\"security_box__body\" class=\"box-body form-horizontal\">
                        <div id=\"security_dir_box\" class=\"form-group\">
                            <label class=\"col-sm-3 col-lg-2 control-label\">ディレクトリ名</label>
                            <div id=\"security_box__route_dir\" class=\"col-sm-3 col-lg-3\">
                                ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "admin_route_dir", array()), 'widget');
        echo "
                                ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "admin_route_dir", array()), 'errors');
        echo "
                            </div>
                        </div>
                        <div id=\"security_ip_box\" class=\"form-group\">
                            <label class=\"col-sm-3 col-lg-2 control-label\">IP制限</label>
                            <div id=\"security_box__allow_host\" class=\"col-sm-9 col-lg-10\">
                                ";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "admin_allow_host", array()), 'widget', array("attr" => array("rows" => "7", "aria-describedby" => "helpBlock")));
        echo "
                                ";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "admin_allow_host", array()), 'errors');
        echo "
                                <span id=\"helpBlock\" class=\"help-block\">※管理機能へのアクセスを特定のIPアドレスからの接続のみに制限します。
                                    アクセスを許可するIPアドレスを1行づつ入力してください。何も入力しない場合は全てを許可します。</span>
                            </div>
                        </div>
                </div><!-- /.box-body --> 
            </div><!-- /.box -->
            <div id=\"site_security_box\" class=\"box\">
                <div id=\"site_security_box__header\" class=\"box-header\">
                    <h3 class=\"box-title\">サイトセキュリティ設定</h3>
                </div><!-- /.box-header -->
                <div id=\"site_security_box__body\" class=\"box-body form-horizontal\">
                    <div id=\"site_security_box__force_ssl\" class=\"form-group\">
                        <label class=\"col-sm-3 col-lg-2 form-inline\">SSL制限</label>
                        <div class=\"col-sm-9 col-lg-10\">
                            ";
        // line 67
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "secure", array())) {
            // line 68
            echo "                                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "force_ssl", array()), 'widget');
            echo "
                                ";
            // line 69
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "force_ssl", array()), 'errors');
            echo "
                            ";
        } else {
            // line 71
            echo "                                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "force_ssl", array()), 'widget', array("attr" => array("disabled" => "disabled")));
            echo "
                                <p class=\"text-danger\">httpsからの接続でなければSSL制限を設定できません。</p>
                            ";
        }
        // line 74
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.col -->
        <div class=\"extra-form\">
            ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "getIterator", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 81
            echo "                ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 82
                echo "                    ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'label');
                echo "
                    ";
                // line 83
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'widget');
                echo "
                    ";
                // line 84
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'errors');
                echo "
                ";
            }
            // line 86
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "        </div>
        <div class=\"col-md-3\" id=\"aside_column\">
            <div id=\"common_box\" class=\"col_inner\">
                <div id=\"common_button_box\" class=\"box no-header\">
                    <div id=\"common_button_box__body\" class=\"box-body\">
                        <div id=\"common_button_box__edit_button\" class=\"row text-center\">
                            <div class=\"col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0\">
                                <button class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">設定</button>
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

    public function getTemplateName()
    {
        return "__string_template__aa4861a3f7e139334f318f9c85f9a6cc4764bcdf6ba43ad821185e9347b31ae2";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 87,  153 => 86,  148 => 84,  144 => 83,  139 => 82,  136 => 81,  132 => 80,  124 => 74,  117 => 71,  112 => 69,  107 => 68,  105 => 67,  87 => 52,  83 => 51,  74 => 45,  70 => 44,  57 => 34,  53 => 33,  50 => 32,  47 => 31,  41 => 27,  35 => 26,  31 => 22,  29 => 29,  27 => 24,  11 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__aa4861a3f7e139334f318f9c85f9a6cc4764bcdf6ba43ad821185e9347b31ae2", "");
    }
}
