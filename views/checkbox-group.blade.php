<?php /** @var \Galahad\Aire\Elements\Attributes\Collection $attributes */ ?>
<?php /** @var \Galahad\Aire\Support\OptionsCollection $options */ ?>

<div {{ $attributes->wrapper }}>

    @isset($prepend_empty_option)
        <div {{ $attributes->label_wrapper }}>
            <input
                {{ $attributes->except('id', 'value', 'checked') }}
                value="{{ $prepend_empty_option->value }}"
                {{ $attributes->isValue($prepend_empty_option->value) ? 'checked' : '' }}
                id="aire-checkbox-{{ \Illuminate\Support\Str::slug($attributes->get('name').'-'.$prepend_empty_option->value) }}">
            />
            <lable {{ $attributes->label }}
                   id="aire-checkbox-{{ \Illuminate\Support\Str::slug($attributes->get('name').'-'.$prepend_empty_option->value) }}">
                {{ $prepend_empty_option->label }}
            </lable>
        </div>
    @endisset

    @foreach($options->getOptions() as $option_value => $option_label)

        <div {{ $attributes->label_wrapper }}>
            <input
                {{ $attributes->except('id', 'value', 'checked') }}
                value="{{ $option_value }}"
                {{ $attributes->isValue($option_value) ? 'checked' : '' }}
                id="aire-checkbox-{{ \Illuminate\Support\Str::slug($attributes->get('name').'-'.$option_value) }}"
            />
            <label {{ $attributes->label }}
                   for="aire-checkbox-{{ \Illuminate\Support\Str::slug($attributes->get('name').'-'.$option_value) }}">
                {{ $option_label }}
            </label>
        </div>

    @endforeach
</div>
