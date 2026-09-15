<?php

namespace Alban\LaravelCollectiveSpatieHtmlParser;

use Illuminate\Support\Facades\Facade;

/**
 * IDE helper for form adapter methods exposed through the Form facade.
 *
 * @see \Collective\Html\HtmlBuilder
 * @method static mixed checkbox($name, $value = 1, $checked = null, $options = [])
 * @method static mixed open(array $options = [])
 * @method static mixed label($name, $value = null, $options = [], $escape_html = true)
 * @method static mixed text($name, $value = null, $options = [])
 * @method static mixed password($name, $options = [])
 * @method static mixed select($name, $list = [], $selected = null, array $selectAttributes = [], array $optionsAttributes = [], array $optgroupsAttributes = [])
 * @method static mixed radio($name, $value = null, $checked = null, $options = [])
 * @method static mixed submit($value = null, $options = [])
 * @method static mixed close()
 * @method static mixed input($type, $name, $value = null, $options = [])
 * @method static mixed search($name, $value = null, $options = [])
 * @method static mixed model($model, array $options = [])
 * @method static mixed hidden($name, $value = null, $options = [])
 * @method static mixed email($name, $value = null, $options = [])
 * @method static mixed tel($name, $value = null, $options = [])
 * @method static mixed number($name, $value = null, $options = [])
 * @method static mixed date($name, $value = null, $options = [])
 * @method static mixed datetime($name, $value = null, $options = [])
 * @method static mixed datetimeLocal($name, $value = null, $options = [])
 * @method static mixed time($name, $value = null, $options = [])
 * @method static mixed url($name, $value = null, $options = [])
 * @method static mixed file($name, $options = [])
 * @method static mixed textarea($name, $value = null, $options = [])
 * @method static mixed reset($value, $attributes = [])
 * @method static mixed image($url, $name = null, $attributes = [])
 * @method static mixed color($name, $value = null, $options = [])
 * @method static mixed button($value = null, $options = [])
 */
class FormFacade extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'form';
    }
}
