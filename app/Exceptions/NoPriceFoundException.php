<?php

namespace App\Exceptions;

class NoPriceFoundException extends \Exception
{
    // Redefine the exception so message isn't optional
    public function __construct($message, $code = 0, \Throwable $previous = null)
    {
        // make sure everything is assigned properly
        parent::__construct($message, $code, $previous);
    }
}
