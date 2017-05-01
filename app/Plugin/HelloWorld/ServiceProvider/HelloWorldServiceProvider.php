<?php

namespace Plugin\HelloWorld\ServiceProvider;

use Silex\Application as BaseApplication;
use Silex\ServiceProviderInterface;
use Eccube\Common\Constant;


// include log functions (for 3.0.0 - 3.0.11)
require_once __DIR__.'/../log.php';

/**
 * Class HelloWorldServiceProvider
 */
class HelloWorldServiceProvider implements ServiceProviderInterface {
    /**
     * register.
     *
     * @param BaseApplication $app
     */
    public function register(BaseApplication $app) {
        // 管理画面定義
        $admin = $app['controllers_factory'];
        // 強制SSL
        if ($app['config']['force_ssl'] == Constant::ENABLED) {
            $admin->requireHttps();
        }

        $app->mount('/'.trim($app['config']['admin_route'], '/').'/', $admin);

        // Serviceの定義
        $app['salesreport.service.sales_report'] = $app->share(function () use ($app) {
            return new SalesReportService($app);
        });

        // initialize logger (for 3.0.0 - 3.0.8)
        if (!method_exists('Eccube\Application', 'getInstance')) {
            eccube_log_init($app);
        }

        // サブナビの拡張
        $app['config'] = $app->share($app->extend('config', function ($config) {
            $nav = array(
                'id' => 'admin_plugin_helloworld',
                'name' => 'Hello World',
                'has_child' => 'true',
                'icon' => 'cb-chart',
                'child' => array(
                    array(
                        'id' => 'admin_plugin_helloword_test',
                        'url' => 'admin_plugin_helloword_test',
                        'name' => 'Test',
                    ),
                ),
            );

            $config['nav'][] = $nav;

            return $config;
    }

    /**
     * boot.
     *
     * @param BaseApplication $app
     */
    public function boot(BaseApplication $app)
    {
    }
}