<?php

namespace Generator\Kata\Command;

use Generator\Kata\Training\TrainingGeneratorInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GenerateTrainingCommand extends Command
{
    const COMMAND_NAME = 'kata:training:generate';

    const COMMAND_DESCRIPTION = 'Generates kata training';

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
            ->setDescription(self::COMMAND_DESCRIPTION);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        !isset($this->trainingGenerators[0]) ?: $this->trainingGenerators[0]->generate($output);
    }
}
