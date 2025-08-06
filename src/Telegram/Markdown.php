<?php

namespace Devium\Escapers\Telegram;

use Devium\Escapers\Escaper;

class Markdown extends Escaper
{
    public function __construct()
    {
        parent::__construct([
            '_' => '\\_',
            '*' => '\\*',
            '[' => '\\[',
            ']' => '\\]',
            '(' => '\\(',
            ')' => '\\)',
            '~' => '\\~',
            '`' => '\\`',
            '>' => '\\>',
            '#' => '\\#',
            '+' => '\\+',
            '-' => '\\-',
            '=' => '\\=',
            '|' => '\\|',
            '{' => '\\{',
            '}' => '\\}',
            '.' => '\\.',
            '!' => '\\!',
        ]);
    }

    public function escape(string $content): string
    {
        $length = strlen($content);
        $replaced = '';

        for ($i = 0; $i < $length; $i++) {
            if ($i > 0 && $content[$i - 1] === '\\') {
                $replaced .= $content[$i];

                continue;
            }

            $replaced .= strtr($content[$i], $this->dictionary);
        }

        return $replaced;
    }
}
