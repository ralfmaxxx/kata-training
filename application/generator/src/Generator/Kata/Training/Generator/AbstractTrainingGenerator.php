<?php

declare(strict_types=1);

namespace Generator\Kata\Training\Generator;

use Generator\Kata\File\FileInterface;
use Generator\Kata\Training\Dictionary\StandardTrainingFileGetterTrait;
use Symfony\Component\Console\Output\OutputInterface;

abstract class AbstractTrainingGenerator implements TrainingGeneratorInterface
{
    use StandardTrainingFileGetterTrait;

    public function generate(FileInterface $file, OutputInterface $output): void
    {
        $fileWasCreated = $file
            ->setContent(
                $this->getTrainingFileContent($this->getTrainingFilePath())
            )
            ->save();

        if (!$fileWasCreated) {
            $output->writeln(sprintf('<error>Kata "%s" was not generated</error>', $this->getName()));

            return;
        }

        $output->writeln(sprintf('<info>Kata "%s" generated</info>', $this->getName()));
        $output->writeln(sprintf('<info>%s</info>', self::GENERATOR_MESSAGE));
    }

    abstract protected function getTrainingFilePath(): string;
}
