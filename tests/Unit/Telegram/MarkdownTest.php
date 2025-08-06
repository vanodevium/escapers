<?php

use Devium\Escapers\Telegram\Markdown;

it('can escape Markdown content', function () {
    $escaper = new Markdown;

    $content = '* *** \* 😃 *** *';
    $escaped = '\* \*\*\* \* 😃 \*\*\* \*';

    expect($escaper->escape($content))
        ->toEqual($escaped)
        ->and(escape_telegram_markdown($content))->toEqual($escaped)
        ->and($escaper->escape(str_repeat($content, 2)))->toEqual(str_repeat($escaped, 2))
        ->and(escape_telegram_markdown(str_repeat($content, 2)))->toEqual(str_repeat($escaped, 2));
});
