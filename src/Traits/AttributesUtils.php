<?php

namespace Alban\LaravelCollectiveSpatieHtmlParser\Traits;

trait AttributesUtils
{
    public function mergeOptions($element, $options = [])
    {
        return $element->attributes($options);
    }
}
