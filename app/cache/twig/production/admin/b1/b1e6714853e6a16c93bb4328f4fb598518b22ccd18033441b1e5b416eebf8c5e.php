<?php

/* __string_template__e4ff3e5eed19d1788fbbfc7fcc884ccbaaee4db069bf5ffa06e4447a8462e9c7 */
class __TwigTemplate_00b81f68f6fb2856ed56c3b570ef7c174dfa59bea49ef2e99e54cd634acb882e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 23
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__e4ff3e5eed19d1788fbbfc7fcc884ccbaaee4db069bf5ffa06e4447a8462e9c7", 23);
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
        $context["menus"] = array(0 => "store", 1 => "plugin", 2 => "plugin_handler");
        // line 23
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_title($context, array $blocks = array())
    {
        echo "オーナーズストア";
    }

    // line 28
    public function block_sub_title($context, array $blocks = array())
    {
        echo "高度な設定";
    }

    // line 30
    public function block_main($context, array $blocks = array())
    {
        // line 31
        echo "

    ";
        // line 33
        if ((twig_length_filter($this->env, ($context["handlersPerEvent"] ?? null)) > 0)) {
            // line 34
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["handlersPerEvent"] ?? null));
            foreach ($context['_seq'] as $context["event"] => $context["handlersPerType"]) {
                // line 35
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["handlersPerType"]);
                foreach ($context['_seq'] as $context["type"] => $context["handlers"]) {
                    // line 36
                    echo "                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"box\">
                            <div class=\"box-header with-arrow\">
                                ";
                    // line 40
                    echo twig_escape_filter($this->env, $context["event"], "html", null, true);
                    echo " / ";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "
                            </div><!-- /.box-header -->
                            <div class=\"box-body\">
                                <div class=\"table_list\">
                                    <div class=\"table-responsive with-border\">
                                        <table class=\"table table-striped\">
                                            <thead>
                                            <tr>
                                                <th>プラグイン名</th>
                                                <th>ハンドラ名</th>
                                                <th>優先度</th>
                                                <th>操作</th>
                                            </tr>
                                            </thead>
                                            ";
                    // line 54
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["handlers"]);
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
                    foreach ($context['_seq'] as $context["_key"] => $context["handler"]) {
                        // line 55
                        echo "                                                <tbody>
                                                    <tr>
                                                        <td class=\"member_id\">
                                                            ";
                        // line 58
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["handler"], "plugin", array()), "name", array()), "html", null, true);
                        echo "
                                                        </td>
                                                        <td class=\"member_name\">
                                                            ";
                        // line 61
                        echo twig_escape_filter($this->env, $this->getAttribute($context["handler"], "handler", array()), "html", null, true);
                        echo "
                                                        </td>
                                                        <td class=\"member_name\">
                                                            ";
                        // line 64
                        echo twig_escape_filter($this->env, $this->getAttribute($context["handler"], "priority", array()), "html", null, true);
                        echo "
                                                        </td>
                                                        <td class=\"icon_edit\">
                                                            <div class=\"dropdown\">
                                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\"><svg class=\"cb cb-ellipsis-h\"> <use xlink:href=\"#cb-ellipsis-h\" /></svg></a>
                                                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                                                    ";
                        // line 70
                        if ((true != $this->getAttribute($context["loop"], "first", array()))) {
                            // line 71
                            echo "                                                                        <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_store_plugin_handler_up", array("handlerId" => $this->getAttribute($context["handler"], "id", array()))), "html", null, true);
                            echo "\">上へ</a>
                                                                    ";
                        }
                        // line 73
                        echo "                                                                    ";
                        if ((true != $this->getAttribute($context["loop"], "last", array()))) {
                            // line 74
                            echo "                                                                        <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_store_plugin_handler_down", array("handlerId" => $this->getAttribute($context["handler"], "id", array()))), "html", null, true);
                            echo "\">下へ</a>
                                                                    ";
                        }
                        // line 76
                        echo "                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['handler'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 82
                    echo "                                        </table>
                                    </div>
                                </div>
                            </div><!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['type'], $context['handlers'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 92
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['event'], $context['handlersPerType'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "    ";
        } else {
            // line 94
            echo "        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"box\">
                    <div class=\"box-header with-arrow\">
                        プラグインハンドラー管理
                    </div><!-- /.box-header -->
                    <div class=\"box-header with-arrow\">
                        <h3 class=\"box-title\">検索条件に該当するデータがありませんでした。</h3>
                    </div><!-- /.box-header -->
                </div>
            </div>
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__e4ff3e5eed19d1788fbbfc7fcc884ccbaaee4db069bf5ffa06e4447a8462e9c7";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 94,  189 => 93,  183 => 92,  168 => 82,  149 => 76,  143 => 74,  140 => 73,  134 => 71,  132 => 70,  123 => 64,  117 => 61,  111 => 58,  106 => 55,  89 => 54,  70 => 40,  64 => 36,  59 => 35,  54 => 34,  52 => 33,  48 => 31,  45 => 30,  39 => 28,  33 => 27,  29 => 23,  27 => 25,  11 => 23,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__e4ff3e5eed19d1788fbbfc7fcc884ccbaaee4db069bf5ffa06e4447a8462e9c7", "");
    }
}
