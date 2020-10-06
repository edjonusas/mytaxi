<?php

use App\App;
use Core\Views\Form;


/**
 * is user exists in DB_FILE
 *
 * @param string $field_value
 * @param array $field
 * @return bool
 */
function validate_user_unique(string $field_value, array &$field): bool
{

    $user = ['user_name' => $field_value];
    if (App::$db->getRowsWhere('users', $user)) {
        $field['error'] = "User $field_value already registered";
        return false;
    }

    return true;
}

function is_logged_in(): bool
{
    if (isset($_SESSION['user_name']) && isset($_SESSION['password'])) {
        if (App::$db->getRowsWhere('users', ['user_name' => $_SESSION['user_name'], 'password' => $_SESSION['password']])) {
            return true;
        }
    }

    return false;
}

function is_negative_balance(string $field_value, array &$field): bool
{
    $submit = new Form();
    $submit->getSubmitAction();
    if ($submit->getSubmitAction() === 'remove' || $submit->getSubmitAction() === 'bid') {

        $user = App::$db->getRowWhere('accounts', ['user_name' => App::$session->getUser()['user_name']]);

        if ($user['money'] < $field_value) {
            $field['error'] = "Not enough money";
            return false;
        }
    }

    return true;
}


