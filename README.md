# Laravel Collective to Spatie Laravel HTML Adapter

This package serves as an adapter to help projects that depend on the obsolete `laravel-collective/html` library. It provides an interface that uses the same syntax as the `Form` class of `laravel-collective/html` to create HTML elements. Under the hood, it utilizes the `spatie/laravel-html` library, which is actively maintained, to generate the HTML elements. This allows projects to update to newer Laravel versions without changing the HTML creation syntax.

## Features
- Zero configuration needed, works out of the box.
- Uses the same syntax as `laravel-collective/html`.
- Leverages the actively maintained `spatie/laravel-html` library.

## Available Methods
The following methods are available in the `src/FormAdapter.php` class.

> Notes:
> - `$options` / `$attributes` are HTML attributes for the generated element.
> - In `open()` and `model()`, `$options` can include: `method`, `route`, `url`, `files`, plus extra form attributes.
> - In `select()`, `multiple` inside `$selectAttributes` enables a multiple select.

| Method | Parameters | Description |
|---|---|---|
| `checkbox` | `($name, $value = 1, $checked = null, $options = [])` | Creates a checkbox where `$name` is the field name, `$value` is submitted when checked, `$checked` sets initial state, and `$options` adds HTML attributes. |
| `open` | `(array $options = [])` | Opens a `<form>`; `$options['method']` sets HTTP method (default `POST`), `$options['route']` sets action via Laravel `route()`, `$options['url']` sets direct action URL, `$options['files'] = true` enables multipart upload, remaining options become form attributes. |
| `label` | `($name, $value = null, $options = [], $escape_html = true)` | Creates a `<label>` for `$name` with text `$value`; `$options` adds attributes (`class`, `id`, etc.). `$escape_html` is kept for API compatibility. |
| `text` | `($name, $value = null, $options = [])` | Creates a text input with field `$name`, default `$value`, and extra attributes in `$options`. |
| `password` | `($name, $options = [])` | Creates a password input for `$name`; `$options` adds attributes (for example `class`, `autocomplete`). |
| `select` | `($name, $list = [], $selected = null, array $selectAttributes = [], array $optionsAttributes = [], array $optgroupsAttributes = [])` | Creates a select for `$name` from `$list`, preselects `$selected`, applies attributes from `$selectAttributes`; include `multiple` there for multi-select. `optionsAttributes` and `optgroupsAttributes` are accepted for compatibility. |
| `radio` | `($name, $value = null, $checked = null, $options = [])` | Creates a radio input with group `$name`, option `$value`, optional `$checked` state, and HTML attributes in `$options`. |
| `submit` | `($value = null, $options = [])` | Creates a submit button with label/value `$value` and attributes in `$options`. |
| `close` | `()` | Closes the current form (`</form>`) and ends model binding context if active. |
| `input` | `($type, $name, $value = null, $options = [])` | Generic input builder where `$type` is the input type (`text`, `url`, `number`, etc.), `$name` is the field name, `$value` is default value, and `$options` are attributes. |
| `search` | `($name, $value = null, $options = [])` | Shortcut for `input('search', ...)`; same parameter behavior as `input()`. |
| `model` | `($model, array $options = [])` | Starts model binding with `$model` and opens a form using the same `$options` keys as `open()` (`method`, `route`, `url`, `files`, plus extra attributes). |
| `hidden` | `($name, $value = null, $options = [])` | Creates a hidden input with `$name`, optional `$value`, and attributes in `$options`. |
| `email` | `($name, $value = null, $options = [])` | Creates an email input with field `$name`, optional `$value`, and attributes in `$options`. |
| `tel` | `($name, $value = null, $options = [])` | Creates a telephone input with field `$name`, optional `$value`, and attributes in `$options`. |
| `number` | `($name, $value = null, $options = [])` | Creates a number input; use `$options` for numeric attributes such as `min`, `max`, and `step`. |
| `date` | `($name, $value = null, $options = [])` | Creates a date input; `$value` should match date input format and `$options` adds attributes. |
| `datetime` | `($name, $value = null, $options = [])` | Creates a datetime input (`type="datetime"` in this adapter) with `$name`, `$value`, and `$options`. |
| `datetimeLocal` | `($name, $value = null, $options = [])` | Creates a local datetime input (`type="datetime-local"`) with `$name`, `$value`, and `$options`. |
| `time` | `($name, $value = null, $options = [])` | Creates a time input with field `$name`, optional `$value`, and attributes in `$options`. |
| `url` | `($name, $value = null, $options = [])` | Creates a URL input with field `$name`, optional `$value`, and attributes in `$options` (for example `placeholder`, `required`). |
| `file` | `($name, $options = [])` | Creates a file input; `$name` is the field and `$options` sets attributes such as `accept` and `multiple`. |
| `textarea` | `($name, $value = null, $options = [])` | Creates a textarea with field `$name`, content `$value`, and attributes in `$options` (`rows`, `cols`, `class`, etc.). |
| `reset` | `($value, $attributes = [])` | Creates a reset button with visible `$value` and HTML attributes in `$attributes`. |
| `image` | `($url, $name = null, $attributes = [])` | Creates an image element where `$url` is source, `$name` maps to alt/name context, and `$attributes` adds extra HTML attributes. |
| `color` | `($name, $value = null, $options = [])` | Creates a color input with field `$name`, default color `$value`, and extra attributes in `$options`. |
| `button` | `($value = null, $options = [])` | Creates a generic `<button>` with content/value `$value` and attributes in `$options` (`type`, `class`, etc.). |

## Installation

To install the package, use composer:

```sh
composer require alban/laravel-collective-spatie-html-parser
```

## Usage

The methods listed above can be used in the same way as you would use the Form class from laravel-collective. Here is an example in a Blade template:

```php
{{-- Using the FormAdapter class in a Blade template --}}
{!! Form::text('relationship', $item->client->agent_relationship, ['required', 'class' => 'form-control input-sm']) !!}
```

For more examples, please refer to the source code in the `src/FormAdapter.php` class file.

## License

This package is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Contributing

You are welcome to contribute to this project. Please refer to the [contributing guidelines](CONTRIBUTING.md) for more information.
