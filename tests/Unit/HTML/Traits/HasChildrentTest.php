<?php

use HTML\Element;
use PHPUnit\Framework\TestCase;

class HasChildrenTest extends TestCase
{
    public function test_can_set_children()
    {
        $element = new Element();

        $children = [
            new Element(),
        ];

        $element->setChildren($children);

        $this->assertEquals($element->getChildren(), $children);
    }

    public function test_can_add_children()
    {
        $element = new Element();

        $child = new Element();

        $element->addChild($child);

        $this->assertEquals($element->getChildren(), [$child]);
    }

    public function test_can_get_children()
    {
        $element = new Element();

        $children = [
            new Element(),
            new Element(),
            new Element(),
        ];

        $element->setChildren($children);

        $this->assertEquals($element->getChildren(), $children);
    }

    public function test_has_children()
    {
        $element = new Element();

        $this->assertFalse($element->hasChildren());

        $element->addChild(new Element());

        $this->assertTrue($element->hasChildren());
    }

    public function test_can_render_children()
    {
        $element = new Element();

        $children = [
            (new Element('li'))->setContent('List item 1'),
            (new Element('li'))->setContent('List item 2'),
        ];

        $element->setChildren($children);

        $this->assertEquals($element->renderChildren(), '<li>List item 1</li><li>List item 2</li>');
    }
}
