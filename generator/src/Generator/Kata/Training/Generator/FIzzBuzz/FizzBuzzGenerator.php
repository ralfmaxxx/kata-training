<?php

namespace Generator\Kata\Training\Generator\FizzBuzz;

use Generator\Kata\Training\Dictionary\StandardTrainingFileGetterTrait;
use Generator\Kata\File\FileInterface;
use Generator\Kata\Training\Generator\TrainingGeneratorInterface;
use Symfony\Component\Console\Output\OutputInterface;

class FizzBuzzGenerator implements TrainingGeneratorInterface
{
    use StandardTrainingFileGetterTrait;

    const GENERATOR_NAME = 'Fizz Buzz Game';

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
