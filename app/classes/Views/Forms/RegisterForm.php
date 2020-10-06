<?php

namespace App\Views\Forms;

use Core\Views\Form;

class RegisterForm extends Form
{

    public function __construct()
    {
        $form = [
            'attr' => [
                'method' => 'POST',
                'id' => 'register'
            ],
            'fields' => [
                'first_name' => [
                    'label' => 'Vardas*',
                    'type' => 'text',
                    'value' => '',
                    'validators' =>
                        [
                            'validate_field_not_empty',
                            'validate_field_input_length' =>
                                [
                                    'min' => 3,
                                    'max' => 20
                                ],
                        ],
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Įveskite savo vardą'
                        ]
                    ]
                ],
                'last_name' => [
                    'label' => 'Pavardė*',
                    'type' => 'text',
                    'value' => '',
                    'validators' =>
                        [
                            'validate_field_not_empty',
                            'validate_field_input_length' =>
                                [
                                    'min' => 3,
                                    'max' => 30
                                ],
                        ],
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Įveskite savo pavardę'
                        ]
                    ]
                ],
                'email' => [
                    'label' => 'El. Paštas*',
                    'type' => 'text',
                    'value' => '',
                    'validators' =>
                        [
                            'validate_field_not_empty',
                            'validate_field_input_length' =>
                                [
                                    'min' => 5,
                                    'max' => 30
                                ],
                            'validate_user_unique',
                        ],
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Įveskite savo el. paštą'
                        ]
                    ]
                ],
                'password' => [
                    'label' => 'Slaptažodis*',
                    'type' => 'password',
                    'validators' =>
                        [
                            'validate_field_not_empty',
                            'validate_field_input_length' =>
                                [
                                    'min' => 8,
                                    'max' => 30
                                ],
                        ],
                ],
                'phone' => [
                    'label' => 'Tel. numeris',
                    'type' => 'text',
                    'extra' => [
                        'attr' => [
                            'placeholder' => '+370 **** ****'
                        ]
                    ],
                    'validators' =>
                        [
                            'validate_field_not_empty',
                        ],
                ],
            ],
            'buttons' => [
                'register' => [
                    'title' => 'Registruotis',
                ],
            ],
            'validators' => [
                'validate_fields_match' => [
                    'password',
                    'password_repeat'
                ],
            ],
        ];

        parent::__construct($form);
    }
}