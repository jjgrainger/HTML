<?php

namespace HTML;

use HTML\Traits\HasAttributes;
use HTML\Traits\HasContent;
use HTML\Traits\HasChildren;
use HTML\Traits\HasClosingTag;

class Element
{
    use HasAttributes,
        HasContent,
        HasChildren,
        HasClosingTag;

    /**
     * Tag name.
     *
     * @var string
     */
    private $tag;

    /**
     * Constructor.
     *
     * @param string $tag The Element tag.
     * @param array  $attributes The attributes array.
     * @param string $content The content string.
     */
    public function __construct(string $tag = 'div', $attributes = [], $content = '')
    {
        $this->setTag($tag);
        $this->setAttributes($attributes);
        $this->setContent($content);
    }

    /**
     * Set the HTML Element tag name.
     *
     * @param string $tag The tag name.
     *
     * @return Element
     */
    public function setTag(string $tag)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get the HTML Element tag name.
     *
     * @return string
     */
    public function getTag()
    {
        return trim($this->tag);
    }

    /**
     * Render the HTML element.
     *
     * @return string
     */
    public function render()
    {
        // Start the HTML element tag.
        $html = sprintf('<%1$s>', $this->getTag());

        // Add attributes.
        if ($this->hasAttributes()) {
            $html = sprintf('<%1$s %2$s>', $this->tag, $this->renderAttributes());
        }

        // Add contents.
        if ($this->hasContent()) {
            $html .= $this->renderContent();
        }

        // Render children.
        if ($this->hasChildren()) {
            $html .= $this->renderChildren();
        }

        // Close the HTML element tag.
        if ($this->hasClosingTag()) {
            $html .= sprintf('</%1$s>', $this->getTag());
        }

        return $html;
    }

    /**
     * Render the element HTML when the objected is echoed.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->render();
    }
}
