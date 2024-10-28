# Laravel Collective to Spatie Laravel HTML Adapter

This package serves as an adapter to help projects that depend on the obsolete `laravel-collective/html` library. It provides an interface that uses the same syntax as the `Form` class of `laravel-collective/html` to create HTML elements. Under the hood, it utilizes the `spatie/laravel-html` library, which is actively maintained, to generate the HTML elements. This allows projects to update to newer Laravel versions without changing the HTML creation syntax.

## Features
- Zero configuration needed, works out of the box.
- Uses the same syntax as `laravel-collective/html`.
- Leverages the actively maintained `spatie/laravel-html` library.

## Available Methods
The following methods can be used and are located in the `src/FormAdapter` directory:

- `checkbox($name, $value = 1, $checked = null, $options = [])`
- `open(array $options = [])`
- `label($name, $value = null, $options = [], $escape_html = true)`
- `text($name, $value = null, $options = [])`
- `password($name, $options = [])`
- `select($name, $list = [], $selected = null, array $selectAttributes = [], array $optionsAttributes = [], array $optgroupsAttributes = [])`
- `radio($name, $value = null, $checked = null, $options = [])`
- `submit($value = null, $options = [])`
- `close()`
- `input($type, $name, $value = null, $options = [])`
- `search($name, $value = null, $options = [])`
- `model($model, array $options = [])`
- `hidden($name, $value = null, $options = [])`
- `email($name, $value = null, $options = [])`
- `tel($name, $value = null, $options = [])`
- `number($name, $value = null, $options = [])`
- `date($name, $value = null, $options = [])`
- `datetime($name, $value = null, $options = [])`
- `datetimeLocal($name, $value = null, $options = [])`
- `time($name, $value = null, $options = [])`
- `url($name, $value = null, $options = [])`
- `file($name, $options = [])`
- `textarea($name, $value = null, $options = [])`
- `reset($value, $attributes = [])`
- `image($url, $name = null, $attributes = [])`
- `color($name, $value = null, $options = [])`
- `button($value = null, $options = [])`

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

This package is open-sourced software licensed under the (MIT license)[https://opensource.org/licenses/MIT].
