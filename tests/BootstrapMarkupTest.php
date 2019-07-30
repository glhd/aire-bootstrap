<?php

namespace Galahad\AireBootstrap\Tests;

class BootstrapMarkupTest extends TestCase
{
	public function test_a_basic_input() : void
	{
		$html = $this->aire()->form()
			->input('foo', 'Example Input')
			->id('my-foo')
			->helpText('Demo help text.');
		
		$this->assertSelectorExists($html, 'div.form-group');
		$this->assertSelectorAttribute($html, 'div.form-group > label', 'for', 'my-foo');
		$this->assertSelectorExists($html, 'div.form-group > input.form-control');
		$this->assertSelectorContainsText($html, 'div.form-group > small.form-text.text-muted', 'Demo help text.');
	}
	
	public function test_an_ungrouped_checkbox() : void
	{
		$html = $this->aire()->form()
			->checkbox('demo', 'Demo checkbox')
			->id('foo-box')
			->withoutGroup();
		
		$this->assertSelectorExists($html, 'div.form-check');
		$this->assertSelectorAttribute($html, 'div.form-check > input.form-check-input', 'name', 'demo');
		$this->assertSelectorAttribute($html, 'div.form-check > label.form-check-label', 'for', 'foo-box');
		$this->assertSelectorContainsText($html, 'div.form-check > label.form-check-label', 'Demo checkbox');
	}
}
