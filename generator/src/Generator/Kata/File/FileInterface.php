<?php
namespace Generator\Kata\File;

interface FileInterface
{
    public function setContent(string $content): self;

    public function save();
}
