<?php

namespace Alban\LaravelCollectiveSpatieHtmlParser;

use Alban\LaravelCollectiveSpatieHtmlParser\Traits\AttributesUtils;
use Spatie\Html\Elements\Element;

class FormAdapter
{
    use AttributesUtils;

    private static $components = [];

    public static function component($name, $view, $attributes = [])
    {
        static::$components[$name] = compact('view', 'attributes');
    }

    public function checkbox($name, $value = 1, $checked = null, $options = [])
    {
        $element = html()->checkbox($name, $checked, $value);

        return $this->mergeOptions($element, $options);
    }

    public function open(array $options = [])
    {
        $method = array_get($options, 'method', 'POST');
        $route = array_get($options, 'route', '');
        $files = array_get($options, 'files', false);

        unset($options['method'], $options['route'], $options['files']);

        $form = html();

        if (is_array($route)) {
            $action = array_shift($route);
            $form = $form->form($method, route($action, $route));
        } else {
            $form = $form->form($method, $route);
        }

        if ($files) {
            $form->acceptsFiles();
        }

        return $this->mergeOptions($form, $options)->open();
    }

    public function label($name, $value = null, $options = [], $escape_html = true)
    {
        $element = html()->label($value, $name);

        return $this->mergeOptions($element, $options);
    }

    public function text($name, $value = null, $options = [])
    {
        $element = html()->text($name, $value);

        return $this->mergeOptions($element, $options);
    }

    public function password($name, $options = [])
    {
        $element = html()->password($name);

        return $this->mergeOptions($element, $options);
    }

    public function select(
        $name,
        $list = [],
        $selected = null,
        array $selectAttributes = [],
        array $optionsAttributes = [],
        array $optgroupsAttributes = []
    ) {
        $element = html()->select($name, $list, $selected);

        return $this->mergeOptions($element, $selectAttributes);
    }

    public function radio($name, $value = null, $checked = null, $options = [])
    {
        $element = html()->radio($name, $checked, $value);

        return $this->mergeOptions($element, $options);
    }

    public function submit($value = null, $options = [])
    {
        $element = html()->submit($value);

        return $this->mergeOptions($element, $options);
    }

    public function close()
    {
        html()->endModel();

        return html()->form()->close();
    }

    public function input($type, $name, $value = null, $options = [])
    {
        $element = html()->input($type, $name, $value);

        return $this->mergeOptions($element, $options);
    }

    public function search($name, $value = null, $options = [])
    {
        return $this->input('search', $name, $value, $options);
    }

    public function model($model, array $options = [])
    {
        html()->model($model);

        return $this->open($options);
    }

    public function hidden($name, $value = null, $options = [])
    {
        $element = html()->hidden($name, $value);

        return $this->mergeOptions($element, $options);
    }

    public function email($name, $value = null, $options = [])
    {
        $element = html()->email($name, $value);

        return $this->mergeOptions($element, $options);
    }

    public function tel($name, $value = null, $options = [])
    {
        $element = html()->tel($name, $value);

        return $this->mergeOptions($element, $options);
    }

    public function number($name, $value = null, $options = [])
    {
        return $this->input('number', $name, $value, $options);
    }

    public function date($name, $value = null, $options = [])
    {
        $element = html()->date($name, $value);

        return $this->mergeOptions($element, $options);
    }

    public function datetime($name, $value = null, $options = [])
    {
        return $this->input('datetime', $name, $value, $options);
    }

    public function datetimeLocal($name, $value = null, $options = [])
    {
        return $this->input('datetime-local', $name, $value, $options);
    }

    public function time($name, $value = null, $options = [])
    {
        $element = html()->time($name, $value);

        return $this->mergeOptions($element, $options);
    }

    public function url($name, $value = null, $options = [])
    {
        return $this->input('url', $name, $value, $options);
    }

    public function file($name, $options = [])
    {
        $element = html()->file($name);

        return $this->mergeOptions($element, $options);
    }

    public function textarea($name, $value = null, $options = [])
    {
        $element = html()->textarea($name, $value);

        return $this->mergeOptions($element, $options);
    }

    public function reset($value, $attributes = [])
    {
        $element = html()->reset($value);

        return $this->mergeOptions($element, $attributes);
    }

    public function image($url, $name = null, $attributes = [])
    {
        $element = html()->img($url, $name);

        return $this->mergeOptions($element, $attributes);
    }

    public function color($name, $value = null, $options = [])
    {
        return $this->input('color', $name, $value, $options);
    }

    public function button($value = null, $options = [])
    {
        $element = html()->button($value);

        return $this->mergeOptions($element, $options);
    }

    public function __call($method, $args)
    {
        if (array_key_exists($method, static::$components)) {
            $component = static::$components[$method];

            $attributes = array_combine($component['attributes'], $args);

            return Element::withTag('span')->html(view($component['view'], $attributes)->render());
        }
    }
}