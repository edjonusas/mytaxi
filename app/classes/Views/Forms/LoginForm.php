<?php

namespace App\Views\Forms;

use Core\Views\Form;

class LoginForm extends Form
{

    public function __construct()
    {

        $form = [
            'attr' => [
                'method' => 'POST',
                'id' => 'login'
            ],
            'fields' => [
                'user_name' => [
                    'label' => 'User Name',
                    'type' => 'text',
                    'value' => '',
                    'validators' =>
                        [
                            'validate_field_not_empty',
                            'validate_field_input_length' =>
                                [
                                    'min' => 3,
                                    'max' => 16
                                ]
                        ],
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Enter Your User Name'
                        ]
                    ]
                ],
                'password' => [
                    'label' => 'Password',
                    'type' => 'password',
                    'value' => '',
                    'validators' =>
                        [
                            'validate_field_not_empty',
                        ],
                ],
            ],
            'buttons' => [
                'login' => [
                    'title' => 'Login',
                ],
            ],
        ];

        parent::__construct($form);
    }

}