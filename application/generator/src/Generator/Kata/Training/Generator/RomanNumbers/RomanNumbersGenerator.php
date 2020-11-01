<?php

declare(strict_types=1);

namespace Generator\Kata\Training\Generator\RomanNumbers;

use Generator\Kata\Training\Generator\AbstractTrainingGenerator;
use Generator\Kata\Training\Generator\TrainingGeneratorInterface;

class RomanNumbersGenerator extends AbstractTrainingGenerator implements TrainingGeneratorInterface
{
    private const GENERATOR_NAME = 'Roman Numbers';

    public function getName(): string
    {
        return self::GENERATOR_NAME;
    }

    protected function getTrainingFilePath(): string
    {
        return __FILE__;
    }
}
