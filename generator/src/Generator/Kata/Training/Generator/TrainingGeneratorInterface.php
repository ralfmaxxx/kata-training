<?php
namespace Generator\Kata\Training\Generator;

use Generator\Kata\File\FileInterface;
use Symfony\Component\Console\Output\OutputInterface;

interface TrainingGeneratorInterface
{
    const GENERATOR_FILE_NAME = 'KATA.md';

    const GENERATOR_MESSAGE = 'Check '. self::GENERATOR_FILE_NAME .' file for instructions';

    public function generate(FileInterface $file, OutputInterface $output);

    public function getName(): string;
}
