<?php
namespace Exception;

class Exception extends \Exception
{
    /**
     * Assert that $isPositive is not false.
     *
     * @param boolean $isPositive
     * @param string $message
     * @throws static
     */
    public static function assert($isPositive, $message)
    {
        if (!$isPositive) {
            if (func_num_args() > 2) {
                $args = array_slice(func_get_args(), 2);
                array_unshift($args, $message);
                $message = call_user_func_array('sprintf', $args);
            }

            throw new static($message);
        }
    }
}