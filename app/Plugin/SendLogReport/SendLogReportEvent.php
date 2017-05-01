<?php

/*
 * This file is part of the SendLogReport
 *
 * Copyright (C) 2016 Cule Inc.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\SendLogReport;

use Eccube\Application;
use Monolog\Handler\SlackHandler;
use Monolog\Handler\SwiftMailerHandler;
use Monolog\Logger;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;

class SendLogReportEvent
{

    /** @var  \Eccube\Application $app */
    private $app;

    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    public function onAppRequest(GetResponseEvent $event)
    {

        /** @var \Plugin\SendLogReport\Entity\SendLogReportConfig $SendLogReportConfig */
        $SendLogReportConfig = $this->app['sendlogreport.repository.send_log_report_config']->get();

        if (!$SendLogReportConfig) {
            return;
        }

        // monologを利用しているキーに設定
        $monologKeys = array();
        $notlogKeys = $SendLogReportConfig->getLogSelect();
        foreach ($this->app->keys() as $key) {
            if ($this->app[$key] instanceof Logger) {
                if (!in_array($key, $notlogKeys, true)) {
                    $monologKeys[] = $key;
                }
            }
        }

        $isSlack = $SendLogReportConfig->getIsSlack();
        if ($isSlack) {
            $token = $SendLogReportConfig->getToken();
            $channel = $SendLogReportConfig->getChannel();
            if ($token && $channel) {
                foreach ($monologKeys as $key) {
                    $this->app[$key]->pushHandler(
                        new SlackHandler($token,
                            $channel,
                            $SendLogReportConfig->getUsername(),
                            true,
                            null,
                            $SendLogReportConfig->getSlackErrorLevel())
                    );
                }
            }
        }

        $isMail = $SendLogReportConfig->getIsMail();

        if ($isMail) {

            $from = $SendLogReportConfig->getMailFrom();
            $mailTo = array_filter(array(
                $SendLogReportConfig->getMailTo1(),
                $SendLogReportConfig->getMailTo2(),
                $SendLogReportConfig->getMailTo3(),
                $SendLogReportConfig->getMailTo4(),
                $SendLogReportConfig->getMailTo5(),
            ), 'strlen');

            if ($from && count($mailTo) > 0) {
                foreach ($monologKeys as $key) {
                    $this->app[$key]->pushHandler(
                        new SwiftMailerHandler($this->app['mailer'], function () use ($SendLogReportConfig, $from, $mailTo) {
                            return \Swift_Message::newInstance()
                                ->setSubject($SendLogReportConfig->getSubject())
                                ->setFrom($from)
                                ->setTo($mailTo)
                                ->setBody($SendLogReportConfig->getMessage());
                        },
                            $SendLogReportConfig->getMailErrorLevel())
                    );
                }
            }
        }
    }

}
