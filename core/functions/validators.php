<?php

/**
 * empty input error message
 *
 * @param $field_value
 * @param $field
 * @return bool or null
 */
function validate_field_not_empty(string $field_value, array &$field)
{
    if ($field_value === '') {
        $field['error'] = 'Palikote tusčią laukelį';
        return false;
    } else {
        return true;
    }
}

/**
 * validate if number is in range
 *
 * @param string $field_value
 * @param array $field
 * @param array $params
 * @return bool
 */
function validate_field_range(string $field_value, array &$field, array $params): bool
{

    if (($field_value < $params['min']) || ($field_value > $params['max'])) {
        $field['error'] = strtr('value must be from @from to @to', [
            '@from' => $params['min'],
            '@to' => $params['max']
        ]);
        return false;
    } else {
        return true;
    }
}

function validate_field_from(string $field_value, array &$field, array $params): bool
{
    if (($field_value < $params['min'])) {
        $field['error'] = strtr('value must be from @from', [
            '@from' => $params['min']
        ]);

        return false;
    } else {
        return true;
    }
}

/**
 * validate selector value
 *
 * @param string $field_value
 * @param array $field
 * @return bool
 */
function validate_selector_value(string $field_value, array &$field): bool
{
    foreach ($field['option'] as $value => $title) {
        if ($value === $field_value) {
            return true;
        }
    }

    return false;
}

/**
 * validate no gap
 *
 * @param string $field_value
 * @return bool or null
 */
function validate_input_no_gap(string $field_value, array &$field): ?bool
{
    if (count(explode(' ', trim($field_value))) === 1) {
        return true;
    } else {
        $field['error'] = 'Privalo būti vienas žodis';
        return false;
    }
}

/**
 * validate input symbol count
 *
 * @param string $field_value
 * @param array $field
 * @param array $params
 * @return bool
 */
function validate_field_input_length(string $field_value, array &$field, array $params): bool
{
    if ((strlen($field_value) < $params['min']) || (strlen($field_value) > $params['max'])) {
        $field['error'] = strtr('Naudokite nuo @from iki @to simbolių', [
            '@from' => $params['min'],
            '@to' => $params['max']
        ]);
        return false;
    } else {
        return true;
    }
}

/**
 * @param string $field_value
 * @param array $field
 * @param array $params
 * @return bool
 */
function validate_field_max_input_length(string $field_value, array &$field, array $params): bool
{
    if (strlen($field_value) > $params['max']) {
        $field['error'] = strtr('Maksimalus simbolių skaičius @to', [
            '@to' => $params['max']
        ]);
        return false;
    } else {
        return true;
    }
}


/**
 * validate if input has no int
 *
 * @param string $field_value
 * @param array $field
 * @return bool
 */
function validate_no_numbers(string $field_value, array &$field)
{
    if (!ctype_digit($field_value)) {
        return true;
    }
    $field['error'] = 'negali būti skaičių';
    return false;
}


