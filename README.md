# PHP Exceptions [![Build Status](https://travis-ci.org/widmogrod/php-exceptions.svg)](https://travis-ci.org/widmogrod/php-exceptions)
## Introduction

How many times you throw exceptions in your code? and how many of them are repeating?

This library collects general use cases and provide nice ::assert API.

Use it, don't waste your development time for custom exceptions, use one of our exceptions classes.

## Usage

Tired of writing `is_array($value) || $value instanceof \Traversable`?
Use predefined assertions and save your time, like so:

```
use Exception\InvalidTypeException;

function thatCanCantBeViolated($arrayOrTraversable) {
    InvalidTypeException::assertIsTraversable($arrayOrTraversable);
    // do your regular work
}

```

## Installation

```
composer require widmogrod/php-exceptions
```

## Development

This repository fallows [semantic versioning concept](http://semver.org/). 
If you want to contribute, just fallow [GitHub workflow](https://guides.github.com/introduction/flow/) and open pull request. 

## Testing

Quality assurance is brought to you by [PHPSpec](http://www.phpspec.net/)

```
composer test
```
