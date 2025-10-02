<?php

namespace Kendeck\Shortkode\Interfaces;

interface Shortkode
{
    public function getShortcode(): string;

    public function shortcodeConfig(): array;
}
