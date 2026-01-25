<?php

namespace App\Exceptions;

use Exception;

class UserNotFoundException extends ApiExceptions
{
    protected $message = "Usuario nao encontrado";
    protected $code = 404;

    public function __construct() {
        parent::__construct($this->message,$this->code);
    }
}
