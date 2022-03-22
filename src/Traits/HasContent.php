<?php

namespace HTML\Traits;

trait HasContent
{
    /**
     * The contents string.
     *
     * @var string
     */
    private $content = '';

    /**
     * Set the content.
     *
     * @param string The content string.
     *
     * @return Element
     */
    public function setContent(string $content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get the content.
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Check if the content is set.
     *
     * @return boolean
     */
    public function hasContent()
    {
        return !empty($this->content);
    }

    /**
     * Appends content to the existing content.
     *
     * @param string $content   The content to append.
     * @param string $separator The separator to use.
     *
     * @return Element
     */
    public function appendContent(string $content, string $separator = ' ')
    {
        if (!$this->hasContent()) {
            $this->setContent($content);
        } else {
            $this->content .= $separator . $content;
        }

        return $this;
    }

    /**
     * Return the rendered content for the HTML element.
     *
     * @return string
     */
    public function renderContent()
    {
        return trim($this->content);
    }
}
