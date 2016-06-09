<?php

namespace %namespace%;

use PhpSpec\ObjectBehavior;

/**
 * @mixin \%subject%
 */
class %name% extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('%subject%');
    }
}
