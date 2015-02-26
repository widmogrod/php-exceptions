<?php
namespace spec\Exception;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * @mixin \Exception\Exception
 */
class ExceptionSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('Exception\Exception');
    }

    public function it_should_throw_exception_if_not_positive()
    {
        $this->shouldThrow('Exception\Exception')
            ->during('assert', [false, 'My message']);
    }

    public function it_should_not_throw_exception_if_positive()
    {
        $this->shouldNotThrow('Exception\Exception')
            ->during('assert', [true, 'My message']);
    }
}
