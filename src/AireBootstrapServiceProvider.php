<?php

namespace Galahad\AireBootstrap;

use Galahad\Aire\Elements\Checkbox;
use Galahad\Aire\Elements\CheckboxGroup;
use Galahad\Aire\Support\Facades\Aire;
use Illuminate\Support\ServiceProvider;

class AireBootstrapServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(dirname(__DIR__).'/views', 'aire-bootstrap');
        
        Aire::setTheme('aire-bootstrap', null, [
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
        ]);
        
        Checkbox::registerElementMutator(function(Checkbox $checkbox) {
            $checkbox->group->addClass('form-check');
        });
        
        CheckboxGroup::registerElementMutator(function(CheckboxGroup $checkbox_group) {
            $checkbox_group->group->addClass('form-check');
        });
    }
}
