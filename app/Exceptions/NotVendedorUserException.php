<?php

namespace App\Exceptions;

use Exception;

class NotVendedorUserException extends ApiExceptions
{
    public $message = "O usuario nao é um vendedor.";
    public $code = 401;
    
    public function __construct() {
        parent::__construct($this->message, $this->code);
    }
}
