<?php

namespace Generator\Kata\Training\Generator\RomanNumbers;

use Generator\Kata\Training\Dictionary\StandardTrainingFileGetterTrait;
use Generator\Kata\File\FileInterface;
use Generator\Kata\Training\Generator\TrainingGeneratorInterface;
use Symfony\Component\Console\Output\OutputInterface;

class RomanNumbersGenerator implements TrainingGeneratorInterface
{
    use StandardTrainingFileGetterTrait;

    const GENERATOR_NAME = 'Roman Numbers';

    public function generate(FileInterface $file, OutputInterface $output)
    {
        $file
            ->setContent(
                $this->getTrainingFileContent(__FILE__)
            )
            ->save();

        $output->writeln(sprintf('<info>%s</info>', self::GENERATOR_MESSAGE));
    }

    public function getName(): string
    {
        return self::GENERATOR_NAME;
    }
}
