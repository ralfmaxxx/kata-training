<?php

declare(strict_types=1);

namespace %namespace%;

use PhpSpec\ObjectBehavior;
use %subject%;

/**
 * @mixin %subject_class%
 */
class %name% extends ObjectBehavior
{
    function it_is_initializable(): void
    {
        $this->shouldHaveType(%subject_class%::class);
    }
}
