<?php

namespace spec\TheCoalition\Models;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class UserSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('TheCoalition\Models\User');
    }
}
