<?php

/*
 * This file is part of the SendLogReport
 *
 * Copyright (C) 2016 Cule Inc.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\SendLogReport\ServiceProvider;

use Eccube\Common\Constant;
use Plugin\SendLogReport\Form\Type\SendLogErrorLevelType;
use Plugin\SendLogReport\Form\Type\SendLogReportConfigType;
use Silex\Application as BaseApplication;
use Silex\ServiceProviderInterface;

class SendLogReportServiceProvider implements ServiceProviderInterface
{

    public function register(BaseApplication $app)
    {
        // 管理画面定義
        $admin = $app['controllers_factory'];
        // 強制SSL
        if ($app['config']['force_ssl'] == Constant::ENABLED) {
            $admin->requireHttps();
        }

        // プラグイン用設定画面
        $admin->match('/plugin/SendLogReport/config', 'Plugin\SendLogReport\Controller\ConfigController::index')->bind('plugin_SendLogReport_config');

        $app->mount('/'.trim($app['config']['admin_route'], '/').'/', $admin);

        // Form
        $app['form.types'] = $app->share($app->extend('form.types', function ($types) use ($app) {
            $types[] = new SendLogErrorLevelType();
            $types[] = new SendLogReportConfigType($app);

            return $types;
        }));

        // Repository
        $app['sendlogreport.repository.send_log_report_config'] = $app->share(function () use ($app) {
            $SendLogReportConfigRepository = $app['orm.em']->getRepository('Plugin\SendLogReport\Entity\SendLogReportConfig');
            $SendLogReportConfigRepository->setApplication($app);

            return $SendLogReportConfigRepository;
        });

    }

    public function boot(BaseApplication $app)
    {
    }

}
