<?php /** @var \Galahad\Aire\Elements\Attributes\Collection $attributes */ ?>

<div {{ $attributes }}>
    {{ $label }}

    @if($prepend || $append)
        <div class="input-group">
            @if($prepend)
                <div {{ $attributes->prepend }}>
                    <div class="input-group-text">
                        {{ $prepend }}
                    </div>
                </div>
            @endif

            {{ $element }}

            @if($append)
                <div {{ $attributes->append }}>
                    <div class="input-group-text">
                        {{ $append }}
                    </div>
                </div>
            @endif
        </div>
    @else
        {{ $element }}
    @endif

    @isset($help_text)
        <small {{ $attributes->help_text }}>
            {{ $help_text }}
        </small>
    @endisset

    <div {{ $attributes->errors }}>
        @each($error_view, $errors, 'error')
    </div>

</div>
