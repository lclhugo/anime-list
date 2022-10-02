<?php

namespace App\Exceptions;

use Exception;
use Throwable;

class NotFoundException extends Exception {
    
    public function __construct($message = "", $code = 0, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    // return the error page
    public function error404(): string
    {
        return $this->view('errors.404');
    }
}