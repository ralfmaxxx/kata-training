<?php

declare(strict_types=1);

namespace Generator\Kata\Training\Generator\ImageGallery;

use Generator\Kata\Training\Generator\AbstractTrainingGenerator;
use Generator\Kata\Training\Generator\TrainingGeneratorInterface;

final class ImageGalleryGenerator extends AbstractTrainingGenerator implements TrainingGeneratorInterface
{
    private const GENERATOR_NAME = 'Image gallery';

    public function getName(): string
    {
        return self::GENERATOR_NAME;
    }

    protected function getTrainingFilePath(): string
    {
        return __FILE__;
    }
}
