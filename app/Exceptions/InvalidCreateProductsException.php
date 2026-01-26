<?php

namespace App\Exceptions;

use Exception;

class InvalidCreateProductsException extends ApiExceptions
{
    protected $message = "falha ao criar produto";
    protected $code = 400;

    public function __construct() {
        parent::__construct($this->message, $this->code);
    }
}
