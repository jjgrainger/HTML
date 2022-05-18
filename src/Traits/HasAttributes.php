<?php

namespace HTML\Traits;

trait HasAttributes
{
    /**
     * The attributes array.
     *
     * @var array
     */
    private $attributes = [];

    /**
     * Set the attributes array.
     *
     * @param array An array of attributes.
     *
     * @return Element
     */
    public function setAttributes(array $attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * Set an attribute.
     *
     * @param string $key   The attribute key.
     * @param string $value The attribute value.
     *
     * @return Element
     */
    public function setAttribute(string $key, string $value)
    {
        $this->attributes[$key] = $value;

        return $this;
    }

    /**
     * Appends value to an attribute, without overwriting what exists.
     *
     * @param string $key       The attribute key.
     * @param string $value     The attribute value.
     * @param string $separator The separator to use.
     */
    public function appendAttribute(string $key, string $value, string $separator = ' ')
    {
        // If the attribute is not already set, just set it.
        if (!$this->hasAttributes($key)) {
            $this->setAttribute($key, $value);
        } else {
            // Otherwise append the attribute using the separator.
            $this->attributes[$key] .= $separator . $value;
        }

        return $this;
    }

    /**
     * Get the attributes array.
     *
     * @return array
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Get an attribute.
     *
     * @param string $key The attribute key.
     *
     * @return string|null
     */
    public function getAttribute($key)
    {
        return ($this->hasAttribute($key)) ? $this->attributes[$key] : null;
    }

    /**
     * Check if there are attributes set.
     *
     * @return boolean
     */
    public function hasAttributes()
    {
        return !empty($this->attributes);
    }

    /**
     * Check if an attribute is set.
     *
     * @param string $key The attribute key to check.
     *
     * @return boolean
     */
    public function hasAttribute(string $key)
    {
        return isset($this->attributes[$key]);
    }

    /**
     * Remove all attributes from the element.
     *
     * @return Element
     */
    public function removeAttributes()
    {
        $this->attributes = [];

        return $this;
    }

    /**
     * Remove an attribute from the element.
     *
     * @param string $key The attribute key.
     *
     * @return Element
     */
    public function removeAttribute(string $key)
    {
        unset($this->attributes[$key]);

        return $this;
    }

    /**
     * Return the attribute string to render in HTML element.
     *
     * @return string
     */
    public function renderAttributes()
    {
        $html = '';

        if ($this->hasAttributes()) {
            foreach ($this->attributes as $key => $value) {
                $html .= "{$key}=\"{$value}\" ";
            }
        }

        return trim($html);
    }
}
