<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Default Classes
    |--------------------------------------------------------------------------
    |
    | If you would like to configure default CSS class names for certain elements,
    | you can do so here (for example, changing all <input> elements to have
    | the class .form-control for Botstrap compatibility).
    |
    */
    'default_classes' => [
        'group' => 'form-group',
        'group_prepend' => '',
        'group_append' => '',
        'group_help_text' => 'form-text text-muted',
        'group_errors' => 'invalid-feedback',
        'label' => '',
        'input' => 'form-control',
        'checkbox' => 'form-check-input',
        'checkbox_label' => 'form-check-label',
        'checkbox_wrapper' => 'form-check',
        'checkbox_group_label' => '',
        'checkbox_group_label_wrapper' => '',

        'radio_group' => 'custom-control-input',
        'radio_group_label' => 'custom-control-label',
        'radio_group_label_wrapper' => 'custom-control custom-radio',

        'summary' => '',
        'button' => 'btn btn-primary',
        'select' => 'form-control',
        'textarea' => 'form-control',
    ],

    /*
    |--------------------------------------------------------------------------
    | Validation Classes
    |--------------------------------------------------------------------------
    |
    | A grouped element can optionally have a validation state set. This can
    | be not validated, invalid, or valid. You can configure these class names
    | on an element-by-element basis here.
    |
    */
    'validation_classes' => [

        'none' => [
            'input' => 'no-yet-validated',
            'radio' => 'no-yet-validated',
            'select' => 'no-yet-validated',
            'textarea' => 'no-yet-validated',
            'group_errors' => 'hidden',
            'group_help_text' => 'no-yet-validated',
        ],

        'valid' => [
            'label' => 'is-valid',
            'checkbox' => 'is-valid',
            'radio' => 'is-valid',
            'radio-group' => 'is-valid',
            'input' => 'is-valid',
            'select' => 'is-valid',
            'textarea' => 'is-valid',
            'group_errors' => 'valid-feedback',
            'group_help_text' => 'valid-feedback',
        ],
        'invalid' => [
            'label' => 'is-invalid',
            'checkbox' => 'is-invalid',
            'radio-group' => 'is-invalid',
            'radio' => 'is-invalid',
            'input' => 'is-invalid',
            'select' => 'is-invalid',
            'textarea' => 'is-invalid',
            'group_errors' => 'invalid-feedback',
            'group_help_text' => 'invalid-feedback',
        ],
    ],

];
