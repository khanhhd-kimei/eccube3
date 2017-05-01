<?php

/*
 * This file is part of the SendLogReport
 *
 * Copyright (C) 2016 Cule Inc.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\SendLogReport\Controller;

use Eccube\Application;
use Plugin\SendLogReport\Entity\SendLogReportConfig;
use Symfony\Component\HttpFoundation\Request;

class ConfigController
{

    /**
     * SendLogReport用設定画面
     *
     * @param Application $app
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(Application $app, Request $request)
    {

        $SendLogReportConfig = $app['sendlogreport.repository.send_log_report_config']->get();

        if (!$SendLogReportConfig) {
            $SendLogReportConfig = new SendLogReportConfig();
        }

        $form = $app['form.factory']->createBuilder('sendlogreport_config', $SendLogReportConfig)->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $SendLogReportConfig = $form->getData();

            $app['sendlogreport.repository.send_log_report_config']->save($SendLogReportConfig);

            $app->addSuccess('更新しました', 'admin');
        }

        return $app->render('SendLogReport/Resource/template/admin/config.twig', array(
            'form' => $form->createView(),
        ));
    }

}
