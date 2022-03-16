<?php

namespace HTML\Traits;

use HTML\Element;

Trait HasChildren
{
    /**
     * the children array.
     * 
     * @var array
     */
    private $children = [];

    /**
     * Set the children array.
     * 
     * @param array An array of children.
     * 
     * @return Element
     */
    public function setChildren(array $children)
    {
        $this->children = $children;

        return $this;
    }

    /**
     * Set a child.
     * 
     * @param string $key   the child key.
     * @param string $value the child value.
     * 
     * @return Element
     */
    public function addChild(Element $child)
    {
        $this->children[] = $child;

        return $this;
    }

    /**
     * Get the children array.
     * 
     * @return array
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Check if there are children set.
     * 
     * @return boolean
     */
    public function hasChildren()
    {
        return !empty($this->children);
    }

    /**
     * Return the children HTML to render in HTML element.
     * 
     * @return string
     */
    public function renderChildren()
    {
        $html = '';

        if ($this->haschildren()) {
            foreach ($this->children as $child) {
                $html .= $child->render();
            }
        }

        return trim($html);
    }
}