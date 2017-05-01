<?php

/* __string_template__9d59501babd23478a8c25fff8ca37b003136d218bde53e01bfbacfd90ca44546 */
class __TwigTemplate_ca39953e8e311142d8e03d20f3f2e34f7a1c0392b73e050f82f7e369db3d1981 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__9d59501babd23478a8c25fff8ca37b003136d218bde53e01bfbacfd90ca44546", 22);
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
        $context["menus"] = array(0 => "store", 1 => "plugin", 2 => "plugin_list");
        // line 29
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = array())
    {
        echo "オーナーズストア";
    }

    // line 27
    public function block_sub_title($context, array $blocks = array())
    {
        echo "プラグインのアップロード";
    }

    // line 31
    public function block_main($context, array $blocks = array())
    {
        // line 32
        echo "<div class=\"row\" id=\"aside_wrap\">
    <form id=\"upload-form\" class=\"form-inline\" method=\"post\" action=\"";
        // line 33
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_store_plugin_install");
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'enctype');
        echo ">
    <div class=\"col-md-9\">
       ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "_token", array()), 'widget');
        echo "
       <div class=\"box\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">新規プラグインアップロード</h3>
            </div><!-- /.box-header -->
            <div class=\"box-body\">
                <div class=\"form-group\">
                    <label class=\"col-sm-5 control-label\">プラグイン<br>(zip、tar、tar.gz形式)</label>
                    <div class=\"col-sm-7\">
                        ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "plugin_archive", array()), 'widget', array("attr" => array("accept" => "application/zip,application/x-tar,application/x-gzip")));
        echo "
                        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 46
            echo "                            <div class=\"errormsg text-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["error"], "message", array())), "html", null, true);
            echo "</div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                    </div>
                </div>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div><!-- /.col -->
    <div class=\"col-md-3\" id=\"aside_column\">
        <div id=\"common_box\" class=\"col_inner\">
            <div class=\"box no-header\">
                <div class=\"box-body\">
                    <div class=\"row text-center\">
                        <div class=\"col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0\">
                            <button class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">アップロード</button>
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
        return "__string_template__9d59501babd23478a8c25fff8ca37b003136d218bde53e01bfbacfd90ca44546";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 48,  80 => 46,  76 => 45,  72 => 44,  60 => 35,  53 => 33,  50 => 32,  47 => 31,  41 => 27,  35 => 26,  31 => 22,  29 => 29,  27 => 24,  11 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__9d59501babd23478a8c25fff8ca37b003136d218bde53e01bfbacfd90ca44546", "");
    }
}
