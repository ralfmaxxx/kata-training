<?php

declare(strict_types=1);

namespace Generator\Kata\Training\Generator;

use Generator\Kata\File\FileInterface;
use Symfony\Component\Console\Output\OutputInterface;

interface TrainingGeneratorInterface
{
    public const GENERATOR_FILE_NAME = 'KATA.md';
    public const GENERATOR_MESSAGE = 'Check '. self::GENERATOR_FILE_NAME .' file for instructions';

    public function generate(FileInterface $file, OutputInterface $output): void;

    public function getName(): string;
}
