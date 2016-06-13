<?php

namespace Generator\Kata\Command;

use Generator\Kata\File\File;
use Generator\Kata\Training\Generator\TrainingGeneratorInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GenerateTrainingCommand extends Command
{
    const COMMAND_NAME = 'kata:training:generate';
    const COMMAND_DESCRIPTION = 'Generates kata training';

    const KATA_FILE_NAME = 'KATA.md';
    const KATA_FILE_PATH =
        __DIR__ . DIRECTORY_SEPARATOR .
        '..' . DIRECTORY_SEPARATOR .
        '..' . DIRECTORY_SEPARATOR .
        '..' . DIRECTORY_SEPARATOR .
        '..' . DIRECTORY_SEPARATOR .
        '..' . DIRECTORY_SEPARATOR .
        self::KATA_FILE_NAME;

    const ARGUMENT_GENERATOR = 'generator_name';
    const ARGUMENT_GENERATOR_DESC = 'generator name';

    const AVAILABLE_TRAININGS_MESSAGE = 'Available trainings:';

    /**
     * @var TrainingGeneratorInterface[]
     */
    protected $trainingGenerators = [];

    public function __construct(TrainingGeneratorInterface ...$trainingGenerators)
    {
        $this->trainingGenerators = $trainingGenerators;
        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setName(self::COMMAND_NAME)
            ->setDescription(self::COMMAND_DESCRIPTION)
            ->addArgument(
                self::ARGUMENT_GENERATOR,
                null,
                self::ARGUMENT_GENERATOR_DESC,
                null
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        if ($generator = $this->findByGeneratorName($input)) {
            $generator->generate(
                new File(self::KATA_FILE_PATH),
                $output
            );
        } else {
            $this->listAllGenerators($output);
        }
    }

    /**
     * @param InputInterface $input
     *
     * @return TrainingGeneratorInterface|null
     */
    protected function findByGeneratorName(InputInterface $input)
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

    protected function listAllGenerators(OutputInterface $output)
    {
        $output->writeln(self::AVAILABLE_TRAININGS_MESSAGE);

        foreach ($this->trainingGenerators as $trainingGenerator) {
            $output->writeln('<info>'. $trainingGenerator->getName() . '</info>');
        }
    }
}
