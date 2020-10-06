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
                    'label' => 'Vardas *',
                    'type' => 'text',
                    'value' => '',
                    'validators' =>
                        [
                            'validate_field_not_empty',
                            'validate_field_max_input_length' =>
                                [
                                    'max' => 40
                                ],
                        ],
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Įveskite savo vardą'
                        ]
                    ]
                ],
                'last_name' => [
                    'label' => 'Pavardė *',
                    'type' => 'text',
                    'value' => '',
                    'validators' =>
                        [
                            'validate_field_not_empty',
                            'validate_field_max_input_length' =>
                                [
                                    'max' => 40
                                ],
                        ],
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Įveskite savo pavardę'
                        ]
                    ]
                ],
                'email' => [
                    'label' => 'El. Paštas *',
                    'type' => 'email',
                    'value' => '',
                    'validators' =>
                        [
                            'validate_field_not_empty',
                            'validate_field_email',
                            'validate_email_unique',
                        ],
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Įveskite savo el. paštą'
                        ]
                    ]
                ],
                'password' => [
                    'label' => 'Slaptažodis *',
                    'type' => 'password',
                    'validators' =>
                        [
                            'validate_field_not_empty',
                            'validate_input_no_gap',
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
                            'validate_field_max_input_length' =>
                                [
                                    'max' => 20
                                ],
                        ],
                ],
                'address' => [
                    'label' => 'Namų adresas',
                    'type' => 'text',
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Vilnius, Vilniaus g. 11 - 11'
                        ]
                    ],
                    'validators' =>
                        [
                            'validate_field_max_input_length' =>
                                [
                                    'max' => 60
                                ],
                        ],
                ],
            ],
            'buttons' => [
                'register' => [
                    'title' => 'Registruotis',
                ],
            ],
        ];

        parent::__construct($form);
    }
}