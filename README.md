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
| `checkbox` | `($name, $value = 1, $checked = null, $options = [])` | Checkbox input. |
| `open` | `(array $options = [])` | Opens a `<form>` tag. |
| `label` | `($name, $value = null, $options = [], $escape_html = true)` | Label element. |
| `text` | `($name, $value = null, $options = [])` | Text input. |
| `password` | `($name, $options = [])` | Password input. |
| `select` | `($name, $list = [], $selected = null, array $selectAttributes = [], array $optionsAttributes = [], array $optgroupsAttributes = [])` | Select input. |
| `radio` | `($name, $value = null, $checked = null, $options = [])` | Radio input. |
| `submit` | `($value = null, $options = [])` | Submit button. |
| `close` | `()` | Closes the form (`</form>`). |
| `input` | `($type, $name, $value = null, $options = [])` | Generic input by type. |
| `search` | `($name, $value = null, $options = [])` | Search input. |
| `model` | `($model, array $options = [])` | Binds model and opens form. |
| `hidden` | `($name, $value = null, $options = [])` | Hidden input. |
| `email` | `($name, $value = null, $options = [])` | Email input. |
| `tel` | `($name, $value = null, $options = [])` | Telephone input. |
| `number` | `($name, $value = null, $options = [])` | Number input. |
| `date` | `($name, $value = null, $options = [])` | Date input. |
| `datetime` | `($name, $value = null, $options = [])` | Datetime input. |
| `datetimeLocal` | `($name, $value = null, $options = [])` | Datetime-local input. |
| `time` | `($name, $value = null, $options = [])` | Time input. |
| `url` | `($name, $value = null, $options = [])` | URL input. |
| `file` | `($name, $options = [])` | File input. |
| `textarea` | `($name, $value = null, $options = [])` | Textarea element. |
| `reset` | `($value, $attributes = [])` | Reset button. |
| `image` | `($url, $name = null, $attributes = [])` | Image element (`<img>`). |
| `color` | `($name, $value = null, $options = [])` | Color input. |
| `button` | `($value = null, $options = [])` | Generic button element. |

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
