<?php

namespace Generator\Kata\Training\Generator\SieveOfErathostenes;

use Generator\Kata\Training\Generator\AbstractTrainingGenerator;
use Generator\Kata\Training\Generator\TrainingGeneratorInterface;

class SieveOfErathostenesGenerator extends AbstractTrainingGenerator implements TrainingGeneratorInterface
{
    const GENERATOR_NAME = 'Sieve Of Erathostenes';

    public function getName(): string
    {
        return self::GENERATOR_NAME;
    }

    protected function getTrainingFilePath(): string
    {
        return __FILE__;
    }
}
