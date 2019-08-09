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
                'radio_group' => 'form-check-input',
                'radio_group_label' => 'form-check',
                'radio_group_label_wrapper' => 'form-check-label',
                'summary' => '',
                'button' => 'btn btn-primary',
                'select' => 'form-control',
                'textarea' => 'form-control',
            ],
            'validation_classes' => [
                'none' => [
                    'input' => '',
                    'select' => '',
                    'textarea' => '',
                    'group_errors' => 'hidden',
                    'group_help_text' => '',
                ],
                'valid' => [
                    'label' => '',
                    'input' => 'is-valid',
                    'select' => 'is-valid',
                    'textarea' => 'is-valid',
                    'group_errors' => 'valid-feedback',
                    'group_help_text' => 'valid-feedback',
                ],
                'invalid' => [
                    'label' => '',
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
