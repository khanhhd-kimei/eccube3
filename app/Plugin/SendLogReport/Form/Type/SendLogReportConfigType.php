<?php

/*
 * This file is part of the SendLogReport
 *
 * Copyright (C) 2016 Cule Inc.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\SendLogReport\Form\Type;

use Monolog\Logger;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Validator\RecursiveValidator;

class SendLogReportConfigType extends AbstractType
{
    protected $app;

    public function __construct($app)
    {
        $this->app = $app;
    }


    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $monologKeys = array();
        foreach ($this->app->keys() as $key) {
            if ($this->app[$key] instanceof Logger) {
                $monologKeys[$key] = $key;
            }
        }

        $builder
            ->add('is_slack', 'checkbox', array(
                'label' => 'Slack通知有効/無効',
                'required' => false,
            ))
            ->add('token', 'text', array(
                'label' => 'Slackトークン',
                'required' => false,
                'constraints' => array(
                    new Assert\Length(array(
                        'max' => '200'
                    )),
                ),
            ))
            ->add('channel', 'text', array(
                'label' => 'Slackチャンネル',
                'required' => false,
                'constraints' => array(
                    new Assert\Length(array(
                        'max' => '50'
                    )),
                ),
            ))
            ->add('username', 'text', array(
                'label' => 'Slackユーザ名',
                'required' => false,
                'constraints' => array(
                    new Assert\Length(array(
                        'max' => '50'
                    )),
                ),
            ))
            ->add('slack_error_level', 'sendlog_error_level', array(
                'label' => 'Slackエラー送信レベル',
                'expanded' => false,
                'multiple' => false,
                'required' => false,
                'empty_data' => null,
                'constraints' => array(
                    new Assert\Regex(array(
                        'pattern' => "/^\d+$/u",
                        'message' => 'form.type.numeric.invalid'
                    )),
                ),
            ))
            ->add('is_mail', 'checkbox', array(
                'label' => 'メール通知有効/無効',
                'required' => false,
            ))
            ->add('subject', 'text', array(
                'label' => '件名',
                'required' => false,
                'constraints' => array(
                    new Assert\Length(array(
                        'max' => '100'
                    )),
                ),
            ))
            ->add('mail_from', 'text', array(
                'label' => '送信元メールアドレス',
                'required' => false,
                'constraints' => array(
                    new Assert\Email(array('strict' => true)),
                    new Assert\Length(array(
                        'max' => '100'
                    )),
                ),
            ))
            ->add('mail_to1', 'text', array(
                'label' => '送信先メールアドレス1',
                'required' => false,
                'constraints' => array(
                    new Assert\Email(array('strict' => true)),
                    new Assert\Length(array(
                        'max' => '100'
                    )),
                ),
            ))
            ->add('mail_to2', 'text', array(
                'label' => '送信先メールアドレス2',
                'required' => false,
                'constraints' => array(
                    new Assert\Email(array('strict' => true)),
                    new Assert\Length(array(
                        'max' => '100'
                    )),
                ),
            ))
            ->add('mail_to3', 'text', array(
                'label' => '送信先メールアドレス3',
                'required' => false,
                'constraints' => array(
                    new Assert\Email(array('strict' => true)),
                    new Assert\Length(array(
                        'max' => '100'
                    )),
                ),
            ))
            ->add('mail_to4', 'text', array(
                'label' => '送信先メールアドレス4',
                'required' => false,
                'constraints' => array(
                    new Assert\Email(array('strict' => true)),
                    new Assert\Length(array(
                        'max' => '100'
                    )),
                ),
            ))
            ->add('mail_to5', 'text', array(
                'label' => '送信先メールアドレス5',
                'required' => false,
                'constraints' => array(
                    new Assert\Email(array('strict' => true)),
                    new Assert\Length(array(
                        'max' => '100'
                    )),
                ),
            ))
            ->add('message', 'textarea', array(
                'label' => 'メッセージ',
                'required' => false,
                'constraints' => array(
                    new Assert\Length(array(
                        'max' => '500'
                    )),
                ),
            ))
            ->add('mail_error_level', 'sendlog_error_level', array(
                'label' => 'メールエラー送信レベル',
                'expanded' => false,
                'multiple' => false,
                'required' => false,
                'empty_data' => null,
                'constraints' => array(
                    new Assert\Regex(array(
                        'pattern' => "/^\d+$/u",
                        'message' => 'form.type.numeric.invalid'
                    )),
                ),
            ))
            ->add('log_select', 'choice', array(
                'label' => 'ログ通知除外対象',
                'choices' => $monologKeys,
                'expanded' => true,
                'multiple' => true,
                'required' => false,
                'empty_data' => null,
            ))

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Plugin\SendLogReport\Entity\SendLogReportConfig',
        ));
    }

    public function getName()
    {
        return 'sendlogreport_config';
    }

}
