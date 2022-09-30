<?php

namespace App\Exceptions;

use Exception;
use Throwable;

class NotFoundException extends Exception {

    public function __construct($message = "", $code = 0, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function error404(): string
    {
        ob_start();
        require VIEWS . 'errors/404.php';
        return ob_get_clean();
    }
}
