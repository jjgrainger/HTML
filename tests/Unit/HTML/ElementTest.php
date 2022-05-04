
<?php

use HTML\Element;
use PHPUnit\Framework\TestCase;

class ElementTest extends TestCase
{
    public function test_element_can_be_instantiated()
    {
        $element = new Element();

        $this->assertInstanceOf(Element::class, $element);
    }

    public function test_element_can_set_tag()
    {
        $element = new Element();

        $element->setTag('a');

        $this->assertEquals($element->getTag(), 'a');
    }

    public function test_element_can_render()
    {
        $element = new Element();

        $this->assertEquals($element->render(), '<div></div>');
    }
}
