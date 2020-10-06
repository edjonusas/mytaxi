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
                'email' => [
                    'label' => 'El. Paštas',
                    'type' => 'email',
                    'value' => '',
                    'validators' =>
                        [
                            'validate_field_not_empty',
                            'validate_field_email',
                            'validate_email_exist',
                        ],
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Įveskite savo el. paštą'
                        ]
                    ]
                ],
                'password' => [
                    'label' => 'Slaptažodis',
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
                    'title' => 'Prisijungti',
                ],
            ],
            'validators' => [
                'validate_password_correct' => [
                    'email',
                    'password'
                ],
            ],
        ];

        parent::__construct($form);
    }

}