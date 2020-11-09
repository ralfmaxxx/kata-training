<?php

declare(strict_types=1);

namespace Generator\Kata\File;

final class File implements FileInterface
{
    private string $path;
    private string $content;

    public function __construct(string $path)
    {
        $this->path = $path;
    }

    public function setContent(string $content): FileInterface
    {
        $this->content = $content;

        return $this;
    }

    public function save(): bool
    {
        return (bool) file_put_contents($this->path, $this->content);
    }
}
