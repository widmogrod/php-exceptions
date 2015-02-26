<?php
namespace spec\Exception;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * @mixin \Exception\InvalidTypeException
 */
class InvalidTypeExceptionSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('Exception\InvalidTypeException');
    }

    public function it_should_not_throw_exception_if_array()
    {
        $this->shouldNotThrow('Exception\InvalidTypeException')
            ->during('assertIsTraversable', [[]]);
    }

    public function it_should_not_throw_exception_if_traversable()
    {
        $this->shouldNotThrow('Exception\InvalidTypeException')
            ->during('assertIsTraversable', [new \ArrayIterator()]);
    }

    public function it_should_throw_exception_if_not_array_or_traversable()
    {
        $this->shouldThrow('Exception\InvalidTypeException')
            ->during('assertIsTraversable', [1]);
    }

}
