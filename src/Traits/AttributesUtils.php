<?php

namespace Alban\LaravelCollectiveSpatieHtmlParser\Traits;

trait AttributesUtils
{
    public function mergeOptions($element, $options = [])
    {
        $newElement = $element;

        if (isset($options['class'])) {
            $newElement = $newElement->addClass($options['class']);
            unset($options['class']);
        }

        foreach ($options as $key => $value) {
            if (!$value) {
                continue;
            }

            if (is_numeric($key)) {
                $newElement = $newElement->attribute($value, '');
                continue;
            }

            $newElement = $newElement->attribute($key, $value);
        }
        return $newElement;
    }
}
