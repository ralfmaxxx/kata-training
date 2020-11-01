<?php

declare(strict_types=1);

namespace Generator\Kata\File;

interface FileInterface
{
    public function setContent(string $content): self;
    public function save(): bool;
}
