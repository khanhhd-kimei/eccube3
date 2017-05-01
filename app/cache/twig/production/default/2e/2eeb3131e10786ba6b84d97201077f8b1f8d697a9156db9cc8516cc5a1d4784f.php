<?php

/* __string_template__b6dcddf33aa9b20e86eec5c8be2771cb609ab3a2be83d5203a9c56bf588246a5 */
class __TwigTemplate_712b4af604b48101644a39ed6cd5106c6d31068ea47508d91f11849b45138873 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__b6dcddf33aa9b20e86eec5c8be2771cb609ab3a2be83d5203a9c56bf588246a5", 22);
        $this->blocks = array(
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
        $context["body_class"] = "registration_page";
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_main($context, array $blocks = array())
    {
        // line 27
        echo "    <h1 class=\"page-heading\">新規会員登録（完了）</h1>
    <div id=\"complete_box\" class=\"container-fluid\">
        <div id=\"deliveradd_input\" class=\"row\">
            <div id=\"complete_box__body\" class=\"col-sm-10 col-sm-offset-1\">
                <div id=\"complete_box__message\" class=\"complete_message\">
                    <h2 class=\"heading01\">会員登録ありがとうございます</h2>
                    <p id=\"complete_box__attention\">
                        現在<span class=\"attention\">仮会員</span>の状態です。<br />
                        ご入力いただいたメールアドレス宛てに、ご連絡が届いておりますので、<br />本会員登録になった上でお買い物をお楽しみください。<br />
                        今後ともご愛顧賜りますようよろしくお願い申し上げます。
                    </p>
                </div>
                <div id=\"complete_box__footer\" class=\"row no-padding\">
                    <div id=\"complete_box__button_menu\" class=\"btn_group col-sm-offset-4 col-sm-4\">
                        <p id=\"complete_box__top_button\">
                            <a href=\"";
        // line 42
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("index");
        echo "\" class=\"btn btn-info btn-block\">トップページへ</a>
                        </p>
                    </div>
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__b6dcddf33aa9b20e86eec5c8be2771cb609ab3a2be83d5203a9c56bf588246a5";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 42,  34 => 27,  31 => 26,  27 => 22,  25 => 24,  11 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__b6dcddf33aa9b20e86eec5c8be2771cb609ab3a2be83d5203a9c56bf588246a5", "");
    }
}
