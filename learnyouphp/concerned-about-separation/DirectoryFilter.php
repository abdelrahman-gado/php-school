<?php

class DirectoryFilter
{
    private string $directory;
    private string $extension;

    public function __construct($directory, $extension)
    {
        $this->directory = $directory;
        $this->extension = $extension;
    }

    public function filter()
    {
        foreach (new DirectoryIterator($this->directory) as $fileInfo) {
            if ($fileInfo->getExtension() === $this->extension) {
                echo $fileInfo . "\n";
            }
        }
    }
}