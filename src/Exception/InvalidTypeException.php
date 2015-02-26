<?php
namespace Exception;

class InvalidTypeException extends Exception
{
    /**
     * Assert that $value is traversable
     *
     * @param array|\Traversable $value
     * @throws Exception
     */
    public static function assertIsTraversable($value)
    {
        static::assert(
            is_array($value) || $value instanceof \Traversable,
            'Given value "%s" is not traversable',
            is_object($value) ? get_class($value) : gettype($value)
        );
    }
}