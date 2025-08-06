<?php

namespace Devium\Escapers;

interface EscaperInterface
{
    public function escape(string $content): string;
}
