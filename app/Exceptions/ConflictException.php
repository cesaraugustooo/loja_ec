<?php

namespace App\Exceptions;

class ConflictException extends ApiExceptions
{
    public function __construct(string $message = "Conflito de dados", int $code = 409)
    {
        parent::__construct($message, $code);
    }
}
