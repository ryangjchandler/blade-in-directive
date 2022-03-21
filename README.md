# A tidy conditional Blade directive for checking if something is in an array.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ryangjchandler/blade-in-directive.svg?style=flat-square)](https://packagist.org/packages/ryangjchandler/blade-in-directive)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/ryangjchandler/blade-in-directive/run-tests?label=tests)](https://github.com/ryangjchandler/blade-in-directive/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/ryangjchandler/blade-in-directive/Check%20&%20fix%20styling?label=code%20style)](https://github.com/ryangjchandler/blade-in-directive/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/ryangjchandler/blade-in-directive.svg?style=flat-square)](https://packagist.org/packages/ryangjchandler/blade-in-directive)

This package provides a small `@in` directive that allows you to simplify `in_array` checks inside of your Blade views.

## Installation

You can install the package via Composer:

```bash
composer require ryangjchandler/blade-in-directive
```

## Usage

You can use the `@in` directive in the same way as the `@if` directive.

```blade
@in('foo', ['foo', 'bar'])
    Hey, I found it.
@endin
```

Behind the scenes, it's being simplified to an `if (in_array('foo', ['foo', 'bar']))` statement.

You can also do strict checks by providing a third `bool` argument to the directive.

```blade
@in('1', [1, 2], true)
    This never gets rendered. Strings aren't integers.
@endif
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Ryan Chandler](https://github.com/ryangjchandler)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
