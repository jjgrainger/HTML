
<?php

use HTML\Element;
use PHPUnit\Framework\TestCase;

class HasAttributesTest extends TestCase
{
    public function test_can_set_attributes()
    {
        $element = new Element();

        $attributes = [
            'class' => 'container',
        ];

        $element->setAttributes($attributes);

        $this->assertEquals($element->getAttributes(), $attributes);
    }

    public function test_can_set_attribute()
    {
        $element = new Element();

        $attributes = [
            'class' => 'container',
        ];

        $element->setAttributes($attributes);

        $element->setAttribute('id', 'main');

        $attributes['id'] = 'main';

        $this->assertEquals($element->getAttributes(), $attributes);
    }

    public function test_can_append_attribute()
    {
        $element = new Element();

        $attributes = [
            'class' => 'container',
        ];

        $element->setAttributes($attributes);

        $element->appendAttribute('class', 'active');

        $attributes['class'] .= ' active';

        $this->assertEquals($element->getAttributes(), $attributes);
    }

    public function test_can_append_attributes_when_empty()
    {
        $element = new Element();


        $element->appendAttribute('class', 'active');

        $this->assertEquals($element->getAttributes(), ['class' => 'active']);
    }

    public function test_can_get_attributes()
    {
        $element = new Element();

        $attributes = [
            'class' => 'container',
        ];

        $element->setAttributes($attributes);

        $this->assertEquals($element->getAttributes(), $attributes);
    }

    public function test_can_get_attribute()
    {
        $element = new Element();

        $attributes = [
            'class' => 'container',
        ];

        $element->setAttributes($attributes);

        $this->assertEquals($element->getAttribute('class'), 'container');
    }

    public function test_has_attributes()
    {
        $element = new Element();

        $empty = $element->hasAttributes();

        $attributes = [
            'class' => 'container',
        ];

        $element->setAttributes($attributes);

        $this->assertTrue($element->hasAttributes());
        $this->assertFalse($empty);
    }

    public function test_has_attribute_by_key()
    {
        $element = new Element();

        $attributes = [
            'class' => 'container',
        ];

        $element->setAttributes($attributes);

        $this->assertTrue($element->hasAttribute('class'));
        $this->assertFalse($element->hasAttribute('id'));
    }

    public function test_can_remove_attributes()
    {
        $element = new Element();

        $attributes = [
            'class' => 'container',
        ];

        $element->setAttributes($attributes);

        $this->assertTrue($element->hasAttributes());

        $element->removeAttributes();

        $this->assertFalse($element->hasAttributes());
        $this->assertEquals($element->getAttributes(), []);
    }

    public function test_can_remove_attribute_by_key()
    {
        $element = new Element();

        $attributes = [
            'class' => 'container',
            'id' => 'main',
        ];

        $element->setAttributes($attributes);

        $element->removeAttribute('id');

        $this->assertFalse($element->hasAttribute('id'));
        $this->assertEquals($element->getAttributes(), ['class' => 'container']);
    }

    public function test_can_render_attributes()
    {
        $element = new Element();

        $attributes = [
            'class' => 'container',
            'id' => 'main',
        ];

        $element->setAttributes($attributes);

        $this->assertEquals($element->renderAttributes(), 'class="container" id="main"');
    }
}


