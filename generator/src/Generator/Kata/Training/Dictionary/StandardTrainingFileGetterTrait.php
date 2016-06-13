<?php

namespace Generator\Kata\Training\Dictionary;

trait StandardTrainingFileGetterTrait
{
    protected function getTrainingFileContent(string $filePath): string
    {
        $filePath = dirname($filePath) . DIRECTORY_SEPARATOR . self::GENERATOR_FILE_NAME;

        return file_get_contents($filePath);
    }
}
