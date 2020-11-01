<?php

declare(strict_types=1);

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;

class FeatureContext implements Context, SnippetAcceptingContext
{
    public function __construct()
    {
    }
}
