<?php

use HTML\Element;
use PHPUnit\Framework\TestCase;

class HasContentTest extends TestCase
{
    public function test_can_set_content()
    {
        $element = new Element();

        $element->setContent('Hello World!');

        $this->assertEquals($element->getContent(), 'Hello World!');
    }

    public function test_can_get_content()
    {
        $element = new Element();

        $element->setContent('Hello World!');

        $this->assertEquals($element->getContent(), 'Hello World!');
    }

    public function test_has_content()
    {
        $element = new Element();

        $this->assertFalse($element->hasContent());

        $element->setContent('Hello World!');

        $this->assertTrue($element->hasContent());
    }

    public function test_can_append_content()
    {
        $element = new Element();

        $element->setContent('Hello World!');

        $element->appendContent('Goodbye!');

        $this->assertEquals($element->getContent(), 'Hello World! Goodbye!');
    }

    public function test_can_append_content_with_separator()
    {
        $element = new Element();

        $element->setContent('Hello World!');

        $element->appendContent('Goodbye!', '<br>');

        $this->assertEquals($element->getContent(), 'Hello World!<br>Goodbye!');
    }

    public function test_can_append_content_when_empty()
    {
        $element = new Element();

        $element->appendContent('Goodbye!');

        $this->assertEquals($element->getContent(), 'Goodbye!');
    }

    public function test_can_render_content()
    {
        $element = new Element();

        $element->setContent('Hello World!');

        $this->assertEquals($element->renderContent(), 'Hello World!');
    }

    public function test_can_render_trimmed_content()
    {
        $element = new Element();

        $element->setContent('        Hello World!       ');

        $this->assertEquals($element->renderContent(), 'Hello World!');
    }
}
