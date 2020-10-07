<?php

namespace App\Views\Forms;

use Core\Views\Form;

class FeedbackForm extends Form
{

    public function __construct()
    {

        $form = [
            'attr' => [
                'method' => 'POST',
                'id' => 'feedback-form'
            ],
            'fields' => [
                'text' => [
                    'label' => 'Jūsų atsiliepimas',
                    'type' => 'textarea',
                    'value' => '',
                    'validators' =>
                        [
                            'validate_field_not_empty',
                            'validate_field_max_input_length' =>
                                [
                                    'max' => 500
                                ],
                        ],
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Atsiliepimo vieta'
                        ]
                    ]
                ],
            ],
            'buttons' => [
                'send' => [
                    'title' => 'Siųsti',
                ],
            ],
            'validators' => [
            ],
        ];

        parent::__construct($form);
    }
}