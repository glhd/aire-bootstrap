<?php

namespace Galahad\AireBootstrap;

use Galahad\Aire\Elements\Attributes\ClassNames;
use Galahad\Aire\Elements\Checkbox;
use Galahad\Aire\Elements\Input;
use Galahad\Aire\Support\Facades\Aire;
use Illuminate\Support\ServiceProvider;

class AireBootstrapServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(dirname(__DIR__) . '/views', 'aire-bootstrap');

        Aire::setTheme('aire-bootstrap', null, [
            'default_classes' => [
                'group' => 'form-group',
                'group_input_group' => 'input-group',
                'group_prepend' => 'input-group-prepend',
                'group_append' => 'input-group-append',
                'group_help_text' => 'form-text text-muted',
                'group_errors' => 'd-none',
                'label' => '',
                'input' => 'form-control',
                'checkbox' => 'custom-control-input',
                'checkbox_label' => 'custom-control-label',
                'checkbox_wrapper' => 'custom-control custom-checkbox',

                'checkbox_group' => 'custom-control-input',
                'checkbox_group_label' => 'custom-control-label',
                'checkbox_group_label_wrapper' => 'custom-control custom-checkbox',

                'radio_group' => 'custom-control-input',
                'radio_group_label' => 'custom-control-label',
                'radio_group_label_wrapper' => 'custom-control custom-radio',
                'summary' => '',
                'button' => 'btn btn-primary',
                'select' => 'form-control',
                'textarea' => 'form-control',
            ],
            'validation_classes' => [
                'valid' => [
                    'label' => 'is-valid',
                    'checkbox' => 'is-valid',
                    'radio' => 'is-valid',
                    'checkbox-group' => 'is-valid',
                    'radio-group' => 'is-valid',
                    'input' => 'is-valid',
                    'select' => 'is-valid',
                    'textarea' => 'is-valid',
                    'errors' => 'valid-feedback',
                    'group_help_text' => 'valid-feedback',
                ],
                'invalid' => [
                    'label' => 'is-invalid',
                    'checkbox' => 'is-invalid',
                    'checkbox-group' => 'is-invalid',
                    'radio-group' => 'is-invalid',
                    'radio' => 'is-invalid',
                    'input' => 'is-invalid',
                    'select' => 'is-invalid',
                    'textarea' => 'is-invalid',
                    'errors' => 'invalid-feedback d-block',
                    'group_help_text' => 'invalid-feedback d-block',
                ],
            ],
        ]);

        Checkbox::registerElementMutator(function (Checkbox $checkbox) {
            $checkbox->group->addClass('custom-control custom-checkbox');
        });

        Input::registerElementMutator(function (Input $input) {
            $input->attributes->registerMutator('class', function (ClassNames $classNames) use ($input) {
                if (in_array($input->getViewData('variant'), ['sm', 'small'])) {
                    $classNames->add('form-control-sm');
                }

                if (in_array($input->getViewData('variant'), ['lg', 'large'])) {
                    $classNames->add('form-control-lg');
                }

                return $classNames;
            });

            $input->group->attributes->input_group->registerMutator('class', function (ClassNames $classNames) use ($input) {

                if ($input->attributes->primary()->class->has('form-control-sm')) {
                    $classNames->add('input-group-sm');
                }

                if ($input->attributes->primary()->class->has('form-control-lg')) {
                    $classNames->add('input-group-lg');
                }

                if (in_array($input->getViewData('variant'), ['sm', 'small'])) {
                    $classNames->add('input-group-sm');
                }

                if (in_array($input->getViewData('variant'), ['lg', 'large'])) {
                    $classNames->add('input-group-lg');
                }


                return $classNames;
            });

            $input->attributes->registerMutator('class', function (ClassNames $classNames) use ($input) {

                if ('range' === $input->attributes->get('type')) {
                    $classNames
                        ->remove('form-control')
                        ->add('form-control-range');
                }

                return $classNames;
            });
        });

    }
}
