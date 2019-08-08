<?php /** @var \Galahad\Aire\Elements\Attributes\Collection $attributes */ ?>

<div {{ $attributes }}>
    {{ $label }}

    {{ $element }}

    @isset($help_text)
        <small {{ $attributes->help_text }}>
            {{ $help_text }}
        </small>
    @endisset

    <div {{ $attributes->errors }}>
        @each($error_view, $errors, 'error')
    </div>

</div>
