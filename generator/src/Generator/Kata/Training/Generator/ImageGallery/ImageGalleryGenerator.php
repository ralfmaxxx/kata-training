<?php

namespace Generator\Kata\Training\Generator\ImageGallery;

use Generator\Kata\Training\Generator\AbstractTrainingGenerator;
use Generator\Kata\Training\Generator\TrainingGeneratorInterface;

class ImageGalleryGenerator extends AbstractTrainingGenerator implements TrainingGeneratorInterface
{
    const GENERATOR_NAME = 'Image gallery';

    public function getName(): string
    {
        return self::GENERATOR_NAME;
    }

    protected function getTrainingFilePath(): string
    {
        return __FILE__;
    }
}