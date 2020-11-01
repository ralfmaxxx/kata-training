<?php

declare(strict_types=1);

namespace Generator\Kata\Training\Generator\StringCalculator;

use Generator\Kata\Training\Generator\AbstractTrainingGenerator;
use Generator\Kata\Training\Generator\TrainingGeneratorInterface;

final class StringCalculatorGenerator extends AbstractTrainingGenerator implements TrainingGeneratorInterface
{
    private const GENERATOR_NAME = 'String Calculator';

    public function getName(): string
    {
       return self::GENERATOR_NAME;
    }

    protected function getTrainingFilePath(): string
    {
        return __FILE__;
    }
}
