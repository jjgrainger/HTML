<?php

use HTML\Element;
use PHPUnit\Framework\TestCase;

class HasClosingTagTest extends TestCase
{
    public function test_can_element_has_closing_tag()
    {
        $element = new Element();

        $this->assertEquals($element->render(), '<div></div>');
    }

    public function test_can_element_has_no_closing_tag()
    {
        $element = new Element('img');

        $this->assertEquals($element->render(), '<img>');
    }
}
