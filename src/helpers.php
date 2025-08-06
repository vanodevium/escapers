<?php

use Devium\Escapers\Telegram\Html;
use Devium\Escapers\Telegram\Markdown;

if (! function_exists('escape_telegram_html')) {
    function escape_telegram_html(string $content): string
    {
        return (new Html)->escape($content);
    }
}

if (! function_exists('escape_telegram_markdown')) {
    function escape_telegram_markdown(string $content): string
    {
        return (new Markdown)->escape($content);
    }
}
