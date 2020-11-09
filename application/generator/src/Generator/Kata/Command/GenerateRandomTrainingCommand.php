<?php

declare(strict_types=1);

namespace Generator\Kata\Command;

use Generator\Kata\File\File;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GenerateRandomTrainingCommand extends GenerateTrainingCommand
{
    protected const COMMAND_NAME = 'kata:training:random';
    protected const COMMAND_DESCRIPTION = 'Generates random kata training';

    protected function execute(InputInterface $input, OutputInterface $output): void
    {
        $kataIndex = rand(0, count($this->trainingGenerators) - 1);

        $this->trainingGenerators[$kataIndex]->generate(new File(self::KATA_FILE_PATH), $output);
    }
}
