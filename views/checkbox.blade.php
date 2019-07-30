<?php /** @var \Galahad\Aire\Elements\Attributes\Collection $attributes */ ?>

<div {{ $attributes->wrapper }}>
	<input {{ $attributes }} />
	
	<label {{ $attributes->label }}>
		{{ $label_text }}
	</label>
</div>
