<?php

include_once 'vendor/autoload.php';

use Generator\Kata\Command\GenerateTrainingCommand;
use Generator\Kata\Training\SimpleTrainingGenerator;
use Symfony\Component\Console\Application;

$application = new Application();
$application->add(
    new GenerateTrainingCommand(
        new SimpleTrainingGenerator()
    )
);

$application->run();
