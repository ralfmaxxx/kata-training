<?php

namespace Generator\Kata\Training\Generator\FizzBuzz;

use Generator\Kata\Training\Generator\AbstractTrainingGenerator;
use Generator\Kata\Training\Generator\TrainingGeneratorInterface;

class FizzBuzzGenerator extends AbstractTrainingGenerator implements TrainingGeneratorInterface
{
    const GENERATOR_NAME = 'Fizz Buzz Game';

    public function getName(): string
    {
        return self::GENERATOR_NAME;
    }

    protected function getTrainingFilePath(): string
    {
        return __FILE__;
    }
}
