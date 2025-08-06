<?php

namespace Devium\Escapers\Telegram;

use Devium\Escapers\Escaper;

class Html extends Escaper
{
    public function __construct()
    {
        parent::__construct([
            '<' => '&lt;',
            '>' => '&gt;',
            '&' => '&amp;',
        ]);
    }
}
