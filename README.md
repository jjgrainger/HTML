# HTML v0.1.0

[![tests](https://github.com/jjgrainger/html/actions/workflows/tests.yml/badge.svg)](https://github.com/jjgrainger/html/actions/workflows/tests.yml) [![codecov](https://codecov.io/gh/jjgrainger/HTML/branch/main/graph/badge.svg?token=BNU2P7LPRN)](https://codecov.io/gh/jjgrainger/HTML) [![Latest Stable Version](https://flat.badgen.net/github/release/jjgrainger/html/stable)](https://packagist.org/packages/jjgrainger/html) [![Total Downloads](https://flat.badgen.net/packagist/dt/jjgrainger/html)](https://packagist.org/packages/jjgrainger/html) [![License](https://flat.badgen.net/github/license/jjgrainger/html)](https://packagist.org/packages/jjgrainger/html)

> Generate HTML markup with PHP objects

## Requirements

* PHP >= 7.2
* [Composer](https://getcomposer.org/)

## Installation

```
$ composer require jjgrainger/html
```

## Usage

The `Element` class can be used to generate any type of HTML markup.

```php
use HTML\Element;

// Creat a link element.
$link = new Element('a');

// Set the href attribute.
$link->setAttribute('href', 'https://google.com');

// Set the class attribute.
$link->setAttribute('class', 'text-link');

// Append attribute values, in this case adding a 'active' class to the element.
$link->appendAttribute('class', 'active');

// Set the content for the
$link->setContent('Hello World!');

// Outputs HTML
echo $link;
```

The above will output the following.

```html
<a href="https://google.com" class="text-link active">Hellow World!</a>
```

## Notes

* The library is still in active development and not intended for production use.
* Licensed under the [MIT License](https://github.com/jjgrainger/html/blob/master/LICENSE)
* Maintained under the [Semantic Versioning Guide](https://semver.org)

## Author

**Joe Grainger**

* [https://jjgrainger.co.uk](https://jjgrainger.co.uk)
* [https://twitter.com/jjgrainger](https://twitter.com/jjgrainger)
