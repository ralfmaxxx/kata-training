<?php

declare(strict_types=1);

namespace Generator\Kata\Training\Generator\CampaignStatistics;

use Generator\Kata\Training\Generator\AbstractTrainingGenerator;
use Generator\Kata\Training\Generator\TrainingGeneratorInterface;

final class CampaignStatisticsGenerator extends AbstractTrainingGenerator implements TrainingGeneratorInterface
{
    private const GENERATOR_NAME = 'Campaign statistics';

    public function getName(): string
    {
        return self::GENERATOR_NAME;
    }

    protected function getTrainingFilePath(): string
    {
        return __FILE__;
    }
}
