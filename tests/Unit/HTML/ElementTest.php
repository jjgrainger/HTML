
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

    public function test_element_can_render_with_attributes()
    {
        $element = new Element();

        $element->setAttributes([
            'id' => 'main',
            'class' => 'content',
        ]);

        $this->assertEquals($element->render(), '<div id="main" class="content"></div>');
    }

    public function test_element_can_render_with_content()
    {
        $element = new Element('p');

        $element->setContent('Hello World!');

        $this->assertEquals($element->render(), '<p>Hello World!</p>');
    }

    public function test_element_can_render_with_children()
    {
        $element = new Element('ol');

        $element->addChild((new Element('li'))->setContent('List item 1'));
        $element->addChild((new Element('li'))->setContent('List item 2'));

        $this->assertEquals($element->render(), '<ol><li>List item 1</li><li>List item 2</li></ol>');
    }

    public function test_can_echo_to_string()
    {
        $element = new Element();

        $this->assertEquals($element, '<div></div>');
    }
}
