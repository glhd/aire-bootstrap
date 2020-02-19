<?php

namespace Galahad\AireBootstrap\Tests;

class BootstrapMarkupTest extends TestCase
{
    public function test_a_basic_input(): void
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

    public function test_an_ungrouped_checkbox(): void
    {
        $html = $this->aire()->form()
            ->checkbox('demo', 'Demo checkbox')
            ->id('foo-box')
            ->withoutGroup();

        $this->assertSelectorDoesNotExist($html,'.form-group');
        $this->assertSelectorAttribute($html, 'input.custom-control-input', 'name', 'demo');
        $this->assertSelectorAttribute($html, 'label.custom-control-label', 'for', 'foo-box');
        $this->assertSelectorContainsText($html, 'label.custom-control-label', 'Demo checkbox');
    }

    public function test_a_select_form(): void
    {
        $html = $this->aire()->form()
            ->select(['FooBar' => 'foo-bar-value'], 'foo_form_name', 'Select Foo Label')
            ->id('foo-select');

        $this->assertSelectorExists($html, 'select.form-control');
        $this->assertSelectorAttribute($html, 'select.form-control', 'name', 'foo_form_name');
        $this->assertSelectorAttribute($html, 'label', 'for', 'foo-select');
        $this->assertSelectorContainsText($html, 'label', 'Select Foo Label');
    }

    public function test_text_area_form(): void
    {
        $html = $this->aire()->form()
            ->textArea('textarea_body', 'Enter Longtext')
            ->id('foo-text-area');

        $this->assertSelectorExists($html, 'textarea.form-control');
        $this->assertSelectorAttribute($html, 'textarea.form-control', 'name', 'textarea_body');
        $this->assertSelectorAttribute($html, 'label', 'for', 'foo-text-area');
        $this->assertSelectorContainsText($html, 'label', 'Enter Longtext');
    }

    public function test_submit_button_html()
    {
        $html = $this->aire()->form()
            ->submit('Submit Awesome')
            ->id('foo-submit-button');

        $this->assertSelectorAttribute($html, 'button', 'type', 'submit');
        $this->assertSelectorAttribute($html, 'button', 'class', 'btn btn-primary ');
        $this->assertSelectorAttribute($html, 'button', 'id', 'foo-submit-button');
        $this->assertSelectorContainsText($html, 'button', 'Submit Awesome');
    }

    public function test_radio_group_form() : void
    {
        $html = $this->aire()->form()
            ->radioGroup(['radio-1'=>'Radio 1','radio-2'=>'Radio 2'],'radio_selector','Foo Radio Selector');

        $this->assertSelectorContainsText($html, 'div.form-group > label', 'Foo Radio Selector');
        $this->assertSelectorAttribute($html,'div.custom-control.custom-radio > input.custom-control-input','value', 'radio-1');
        $this->assertSelectorAttribute($html,'div.custom-control.custom-radio + div.custom-control.custom-radio > input.custom-control-input','value', 'radio-2');
    }

    public function test_when_no_label_given_a_label_is_not_generated() : void
    {
        $html = $this->aire()
            ->form()
            ->input('text-input');

        $this->assertSelectorDoesNotExist($html, 'label');
    }
}
