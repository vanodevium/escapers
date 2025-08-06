<?php

use Devium\Escapers\Telegram\Html;

it('can escape HTML content', function () {
    $escaper = new Html;

    $content = 'abc < 123 > !@# &';
    $escaped = 'abc &lt; 123 &gt; !@# &amp;';

    expect($escaper->escape($content))
        ->toEqual($escaped)
        ->and(escape_telegram_html($content))->toEqual($escaped)
        ->and($escaper->escape(str_repeat($content, 2)))->toEqual(str_repeat($escaped, 2))
        ->and(escape_telegram_html(str_repeat($content, 2)))->toEqual(str_repeat($escaped, 2));

});
