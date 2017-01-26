<?php

namespace Generator\Kata\Training\Generator\CampaignStatistics;

use Generator\Kata\Training\Generator\AbstractTrainingGenerator;
use Generator\Kata\Training\Generator\TrainingGeneratorInterface;

class CampaignStatisticsGenerator extends AbstractTrainingGenerator implements TrainingGeneratorInterface
{
    const GENERATOR_NAME = 'Campaign statistics';

    public function getName(): string
    {
        return self::GENERATOR_NAME;
    }

    protected function getTrainingFilePath(): string
    {
        return __FILE__;
    }
}
