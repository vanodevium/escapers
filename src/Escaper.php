<?php

namespace Devium\Escapers;

class Escaper implements EscaperInterface
{
    public function __construct(protected array $dictionary = []) {}

    public function escape(string $content): string
    {
        return strtr($content, $this->dictionary);
    }
}
