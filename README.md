# Simon Client

[![Circle CI](https://circleci.com/gh/Simon/simon-php.svg?style=svg)](https://circleci.com/gh/Simon/simon-php)

## Requirements

PHP 5.4 and later.


## Composer

You can install the bindings via [Composer](http://getcomposer.org/). Run the following command:

```bash
composer require simon-payments/simon-php
```

To use the bindings, use Composer's [autoload](https://getcomposer.org/doc/00-intro.md#autoloading):

```php
require_once('vendor/autoload.php');
```

## Getting Started

```php
require('/path/to/Simon/Settings.php');
require('/path/to/Simon/Bootstrap.php');

use \Simon\Settings;
use \Simon\Bootstrap;

Settings::configure([
    "root_url" => "https://api-staging.simonpayments.com",
    "username" => 'US6UjNRgFDxXY24GqPKajTtk',
    "password" => '04b5f38a-bae6-4d31-9267-c77a5620a26c'
]);

Bootstrap::init();
```

See the [tests](https://github.com/Simon/simon-php/tree/master/tests) for more details.

### Running tests

`./vendor/bin/phpunit`

See `circle.yml` for more details.

