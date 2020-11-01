<?php

declare(strict_types=1);

namespace Generator\Kata\Training\Generator\FizzBuzz;

use Generator\Kata\Training\Generator\AbstractTrainingGenerator;
use Generator\Kata\Training\Generator\TrainingGeneratorInterface;

final class FizzBuzzGenerator extends AbstractTrainingGenerator implements TrainingGeneratorInterface
{
    private const GENERATOR_NAME = 'Fizz Buzz Game';

    public function getName(): string
    {
        return self::GENERATOR_NAME;
    }

    protected function getTrainingFilePath(): string
    {
        return __FILE__;
    }
}
