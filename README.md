# Very short description of the package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/obspackage/optisolvalidationpackage.svg?style=flat-square)](https://packagist.org/packages/obspackage/optisolvalidationpackage)
[![Build Status](https://img.shields.io/travis/obspackage/optisolvalidationpackage/master.svg?style=flat-square)](https://travis-ci.org/obspackage/optisolvalidationpackage)
[![Quality Score](https://img.shields.io/scrutinizer/g/obspackage/optisolvalidationpackage.svg?style=flat-square)](https://scrutinizer-ci.com/g/obspackage/optisolvalidationpackage)
[![Total Downloads](https://img.shields.io/packagist/dt/obspackage/optisolvalidationpackage.svg?style=flat-square)](https://packagist.org/packages/obspackage/optisolvalidationpackage)

## Installation

You can install the package via composer:

```bash
composer require obspackage/optisolvalidationpackage
```


## Getting Started
This package contains multiple validations


1. Validate email with DNS records
2. Validation of empty field in dynamic row form fields

## Usage
Basic examples for multiple validation

``` php
//declare in controller/model or wherever you want to use
use Obspackage\Optisolvalidationpackage\Validpackage;


 // for email validation

$validation = new Validpackage();
$validation->emailvalidate("example@example.com"); //returns array of data which contains $response['status'] - true/false, $response['message'] - valid email, invalid email format, DNS not available.

//for dynamic row validation

$validation = new Validpackage();
$response = $validation->rowvalidation($request->rowname); //returns array of data which contains $response['status'] - true/false, $response['data'] - empty fields
```



### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email karthigasobs@gmail.com instead of using the issue tracker.

## Credits

- [[Optisol business solutions](https://github.com/karthiga9892)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

.