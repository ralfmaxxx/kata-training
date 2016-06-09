<?php

namespace Generator\Kata\Training;

use Symfony\Component\Console\Output\OutputInterface;

class SimpleTrainingGenerator implements TrainingGeneratorInterface
{
    public function generate(OutputInterface $output)
    {
        $output->writeln('<info>Nothing to generate</info>');
    }
}
