<?php

return [
	/*
	|--------------------------------------------------------------------------
	| Default Classes
	|--------------------------------------------------------------------------
	|
	| If you would like to configure default CSS class names for certain elements,
	| you can do so here (for example, changing all <input> elements to have
	| the class .form-control for Bootstrap compatibility).
	|
	*/
	'default_classes' => [
		'group' => 'form-group',
		'group_prepend' => '',
		'group_append' => '',
		'group_help_text' => 'form-text text-muted',
		'group_errors' => '',
		'label' => '',
		'input' => 'form-control',
		'checkbox' => 'form-check-input',
		'checkbox_label' => 'form-check-label',
		'checkbox_wrapper' => 'form-check',
		'checkbox_group_label' => '',
		'checkbox_group_label_wrapper' => '',
        'radio_group' => 'form-check-input',
		'radio_group_label' => 'form-check',
		'radio_group_label_wrapper' => 'form-check-label',
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

		/*
		|--------------------------------------------------------------------------
		| Not Validated
		|--------------------------------------------------------------------------
		|
		| These classes will be applied to elements that have not been validated.
		|
		*/
		'none' => [
			'input' => '',
			'select' => '',
			'textarea' => '',
			'group_errors' => '',
			'group_help_text' => '',
		],

		/*
		|--------------------------------------------------------------------------
		| Valid
		|--------------------------------------------------------------------------
		|
		| These classes will be applied to elements that have passed validation.
		|
		*/
		'valid' => [
			'label' => '',
			'input' => '',
			'select' => '',
			'textarea' => '',
			'group_errors' => '',
			'group_help_text' => '',
		],

		/*
		|--------------------------------------------------------------------------
		| Invalid
		|--------------------------------------------------------------------------
		|
		| These classes will be applied to elements that failed validation.
		|
		*/
		'invalid' => [
			'label' => '',
			'input' => '',
			'select' => '',
			'textarea' => '',
			'group_help_text' => '',
		],
	],

];
