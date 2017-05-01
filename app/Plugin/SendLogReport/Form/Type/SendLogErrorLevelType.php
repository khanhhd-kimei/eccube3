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

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SendLogErrorLevelType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'label' => 'エラーレベル',
            'choices' => array(
                '600' => 'EMERGENCY',
                '500' => 'ALERT',
                '450' => 'CRITICAL',
                '400' => 'ERROR',
                '300' => 'WARNING',
                '250' => 'NOTICE',
                '200' => 'INFO',
            ),
            'empty_value' => 'form.empty_value',
        ));
    }

    public function getParent()
    {
        return 'choice';
    }

    public function getName()
    {
        return 'sendlog_error_level';
    }
}