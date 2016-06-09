<?php
namespace Generator\Kata\Training;

use Symfony\Component\Console\Output\OutputInterface;

interface TrainingGeneratorInterface
{
    public function generate(OutputInterface $output);
}
