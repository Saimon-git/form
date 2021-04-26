# Saimondev03 Form
![](https://github.com/Saimon-git/form/workflows/run-tests/badge.svg)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/saimondev03/form.svg?style=flat-square)](https://packagist.org/packages/saimondev03/form)
[![Quality Score](https://img.shields.io/scrutinizer/g/saimondev03/form.svg?style=flat-square)](https://scrutinizer-ci.com/g/saimondev03/form)
[![Total Downloads](https://img.shields.io/packagist/dt/saimondev03/form.svg?style=flat-square)](https://packagist.org/packages/saimondev03/form)

Advanced form generation for Laravel.

## Installation

You can install the package via composer:

```bash
composer require saimondev03/form
```

## Usage

You can use `<x-field />` to create your new form field

You can customize the form field by passing attributes such as `name, id, class, type, etc.`

## Component rendering

To render the component, you can use a Blade component tag inside one of your Blade templates. 
Blade component tags begin with the string x- followed by the component name:
```
<x-form>
    <x-field />
</x-form>

<x-form>
    <x-field name="name" type="text" class="clasname" required />
</x-form>
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Security

If you find any security issues, please email us at simonmontoya19@gmail.com.

## Credits

- [Simon Montoya.](https://github.com/Saimon-git)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
