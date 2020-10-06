<?php

use App\App;


/**
 * is user exists in DB_FILE
 *
 * @param string $field_value
 * @param array $field
 * @return bool
 */
function validate_email_unique(string $field_value, array &$field): bool
{

    $email = ['email' => $field_value];
    if (App::$db->getRowsWhere('users', $email)) {
        $field['error'] = "el. paštas $field_value jau užregistruotas";
        return false;
    }

    return true;
}

/**
 * email exist in db
 *
 * @param string $field_value
 * @param array $field
 * @return bool
 */
function validate_email_exist(string $field_value, array &$field): bool
{
    $user = App::$db->getRowWhere('users', ['email' => $field_value]);

    if ($user) {
        return true;
    } else {
        $field['error'] = 'Tokio vartotojo nėra';
        return false;
    }
}

/**
 * correct password
 *
 * @param array $form_values
 * @param array $form
 * @return bool
 */
function validate_password_correct(array $form_values, array &$form): bool
{
    $user = App::$db->getRowWhere('users', ['email' => $form_values['email']]);
    var_dump($form_values);
    if ($user) {
        if ($user['password'] === $form_values['password']) {
            return true;
        } else {
            $form['error'] = 'Neteisingas slaptažodis';
            return false;
        }
    }
}

/**
 * is email input
 *
 * @param string $field_value
 * @param array $field
 * @return bool
 */
function validate_field_email(string $field_value, array &$field)
{
    if (filter_var($field_value, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        $field['error'] = "El. pašto adrese yra klaida";
    }
}
