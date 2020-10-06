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
        $field['error'] = 'Empty input';
        return false;
    } else {
        return true;
    }
}

/**
 *  validate password match
 *
 * @param array $form_values
 * @param array $form
 * @param array $params
 * @return bool
 */
function validate_fields_match(array $form_values, array &$form, array $params): bool
{
    $values = [];
    foreach ($params as $param) {
        $values[] = $form_values[$param];
    }
    if (count(array_unique($values)) === 1) {
        return true;
    } else {
        $form['error'] = 'Password don\'t match';
        return false;
    }

}


/**
 * is numeric input error message
 *
 * @param $field_value
 * @param $field
 * @return bool or null
 */
function validate_field_is_number(string $field_value, array &$field)
{
    if (is_numeric($field_value)) {
        return true;
    } else {
        $field['error'] = 'value must be numbers';
        return false;
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
        $field['value'] = '';
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
 *
 * @param string $field_value
 * @return bool or null
 */
function validate_field_string_gap(string $field_value): ?bool
{
    if (count(explode(' ', trim($field_value))) > 1) {
        return true;
    }
}

function validate_field_input_length(string $field_value, array &$field, array $params): bool
{
    if ((strlen($field_value) < $params['min']) || (strlen($field_value) > $params['max'])) {
        $field['error'] = strtr('length must be from @from to @to', [
            '@from' => $params['min'],
            '@to' => $params['max']
        ]);
        return false;
    } else {
        return true;
    }
}


