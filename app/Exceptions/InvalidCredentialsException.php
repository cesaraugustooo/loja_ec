<?php

namespace App\Exceptions;

use Exception;

class InvalidCredentialsException extends ApiExceptions
{
    protected $message = "Credenciais invalidas";
    protected $code = 401;

    public function __construct() {
        parent::__construct($this->message,$this->code);
    }
}
