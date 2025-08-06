# Stand With Ukraine 🇺🇦

[![Stand With Ukraine](https://raw.githubusercontent.com/vshymanskyy/StandWithUkraine/main/banner-direct-single.svg)](https://vshymanskyy.github.io/StandWithUkraine/)

# Devium/Escapers

[![Tests status](https://img.shields.io/github/actions/workflow/status/vanodevium/escapers/ci.yaml?v1.0.0&style=flat-square&label=tests)](https://github.com/vanodevium/escapers)
[![Latest Version](https://img.shields.io/packagist/v/devium/escapers?v1.0.0&style=flat-square&label=stable)](https://packagist.org/packages/devium/escapers)
[![Downloads](https://img.shields.io/packagist/dt/devium/escapers?v1.0.0&style=flat-square)](https://packagist.org/packages/devium/escapers)
[![License](https://img.shields.io/packagist/l/devium/escapers?v1.0.0&style=flat-square)](https://packagist.org/packages/devium/escapers)

## Overview

Simple but useful escapers for daily tasks

## Installation

You can install this library via composer:

```shell
composer require devium/escapers
```

## Usage

Telegram\Html:

```php
$content = 'abc < 123 > !@# &';

dump((new \Devium\Escapers\Telegram\Html())->escape($content)); // => 'abc &lt; 123 &gt; !@# &amp;'

// or use global helper
dump(escape_telegram_html($content)); // => 'abc &lt; 123 &gt; !@# &amp;'
```

Telegram\Markdown:

```php
$content = '* *** \* 😃 *** *';

dump((new \Devium\Escapers\Telegram\Markdown())->escape($content)); // => '\* \*\*\* \* 😃 \*\*\* \*'

// or use global helper
dump(escape_telegram_markdown($content)); // => '\* \*\*\* \* 😃 \*\*\* \*'
```

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request

## License

**devium/escapers** is open-sourced software licensed under the [MIT license](./LICENSE.md).

[Vano Devium](https://github.com/vanodevium/)

---

Made with ❤️ in Ukraine
