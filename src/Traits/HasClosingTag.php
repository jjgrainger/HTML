<?php

namespace HTML\Traits;

trait HasClosingTag
{
    /**
     * The following void elements have no closing tags.
     *
     * @var array
     */
    private $voidElements = [
        'area',
        'base',
        'br',
        'col',
        'command',
        'embed',
        'hr',
        'img',
        'input',
        'keygen',
        'link',
        'meta',
        'param',
        'source',
        'track',
        'wbr',
    ];

    /**
     * Determine if the Element has a closing tag.
     *
     * @return boolean
     */
    public function hasClosingTag()
    {
        return ! in_array($this->tag, $this->voidElements);
    }
}
