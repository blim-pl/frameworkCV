# About

Quick application to generate CV in PDF form for personal use. 
Application uses very simple framework to resolve http requests. 
I decided to use laravel in the nearest future so this app is abandoned now.

* PHP >= 7.1

## Installation

1. Use composer to install requirements 
2. Create new local configuration

### Vendors

Run composer in root directory

```text
$ composer update
```

### Framework

Create local configuration (views, static data to modules). 
Use config-example.php file.

```text
cp ./common/config-example.php ./common/config.php
```

# Testing

The PHPUnit version to be used is the one installed as a dev- dependency via composer:

```text
$ cd tests
$ ../vendor/bin/phpunit
```

PHPUnit configuration file (phpunit.xml) is placed in:

```text
$  ./tests/phpunit.xml
```


