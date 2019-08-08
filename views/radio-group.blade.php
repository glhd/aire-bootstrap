<?php /** @var \Galahad\Aire\Elements\Attributes\Collection $attributes */ ?>
<?php /** @var \Galahad\Aire\Support\OptionsCollection $options */ ?>

<div {{ $attributes->wrapper }}>

	@isset($prepend_empty_option)
		<div {{ $attributes->label }}>
			<input
					{{ $attributes->except('id', 'value', 'checked') }}
					value="{{ $prepend_empty_option->value }}"
					{{ $attributes->isValue($prepend_empty_option->value) ? 'checked' : '' }}
			/>
			<label {{ $attributes->label_wrapper }}>
				{{ $prepend_empty_option->label }}
			</label>
		</div>
	@endisset

	@foreach($options->getOptions() as $option_value => $option_label)

		<div {{ $attributes->label }}>
			<input
				{{ $attributes->except('id', 'value', 'checked') }}
				value="{{ $option_value }}"
				{{ $attributes->isValue($option_value) ? 'checked' : '' }}
			/>
			<label {{ $attributes->label_wrapper }}>
				{{ $option_label }}
			</label>
		</div>

	@endforeach
</div>
