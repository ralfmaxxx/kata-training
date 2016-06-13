<?php

namespace Generator\Kata\File;

class File implements FileInterface
{
    /**
     * @var string
     */
    protected $path;

    /**
     * @var string
     */
    protected $content;

    public function __construct(string $path)
    {
        $this->path = $path;
    }

    public function setContent(string $content): FileInterface
    {
        $this->content = $content;

        return $this;
    }

    public function save()
    {
        return file_put_contents($this->path, $this->content);
    }
}
