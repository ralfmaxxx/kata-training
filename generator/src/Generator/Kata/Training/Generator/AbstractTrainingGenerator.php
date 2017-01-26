<?php

namespace Generator\Kata\Training\Generator;

use Generator\Kata\File\FileInterface;
use Generator\Kata\Training\Dictionary\StandardTrainingFileGetterTrait;
use Symfony\Component\Console\Output\OutputInterface;

abstract class AbstractTrainingGenerator implements TrainingGeneratorInterface
{
    use StandardTrainingFileGetterTrait;

    public function generate(FileInterface $file, OutputInterface $output)
    {
        $file
            ->setContent(
                $this->getTrainingFileContent($this->getTrainingFilePath())
            )
            ->save();

        $output->writeln(sprintf('<info>Kata "%s" generated</info>', $this->getName()));
        $output->writeln(sprintf('<info>%s</info>', static::GENERATOR_MESSAGE));
    }

    abstract protected function getTrainingFilePath(): string;
}
