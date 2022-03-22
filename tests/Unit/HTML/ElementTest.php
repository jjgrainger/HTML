
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
}
