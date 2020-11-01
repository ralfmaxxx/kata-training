<?php

declare(strict_types=1);

namespace Generator\Kata\Command;

use Generator\Kata\File\File;
use Generator\Kata\Training\Generator\TrainingGeneratorInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GenerateTrainingCommand extends Command
{
    protected const COMMAND_NAME = 'kata:training:generate';
    protected const COMMAND_DESCRIPTION = 'Generates kata training';

    private const KATA_FILE_NAME = 'KATA.md';
    protected const KATA_FILE_PATH =
        __DIR__ . DIRECTORY_SEPARATOR .
        '..' . DIRECTORY_SEPARATOR .
        '..' . DIRECTORY_SEPARATOR .
        '..' . DIRECTORY_SEPARATOR .
        '..' . DIRECTORY_SEPARATOR .
        '..' . DIRECTORY_SEPARATOR .
        self::KATA_FILE_NAME;

    private const ARGUMENT_GENERATOR = 'generator_name';
    private const ARGUMENT_GENERATOR_DESC = 'generator name';

    private const AVAILABLE_TRAININGS_MESSAGE = 'Available trainings:';

    /**
     * @var TrainingGeneratorInterface[]
     */
    protected array $trainingGenerators = [];

    public function __construct(TrainingGeneratorInterface ...$trainingGenerators)
    {
        $this->trainingGenerators = $trainingGenerators;

        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->setName(static::COMMAND_NAME)
            ->setDescription(static::COMMAND_DESCRIPTION)
            ->addArgument(
                self::ARGUMENT_GENERATOR,
                null,
                self::ARGUMENT_GENERATOR_DESC,
                null
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output): void
    {
        if ($generator = $this->findByGeneratorName($input)) {
            $generator->generate(
                new File(self::KATA_FILE_PATH),
                $output
            );

            return;
        }

        $this->listAllGenerators($output);
    }

    protected function findByGeneratorName(InputInterface $input): ?TrainingGeneratorInterface
    {
        if ($generatorName = $input->getArgument(self::ARGUMENT_GENERATOR)) {
            foreach ($this->trainingGenerators as $trainingGenerator) {
                if ($trainingGenerator->getName() == $generatorName) {
                    return $trainingGenerator;
                }
            }
        }

        return null;
    }

    protected function listAllGenerators(OutputInterface $output): void
    {
        $output->writeln(self::AVAILABLE_TRAININGS_MESSAGE);

        foreach ($this->trainingGenerators as $trainingGenerator) {
            $output->writeln('<info>'. $trainingGenerator->getName() . '</info>');
        }
    }
}
