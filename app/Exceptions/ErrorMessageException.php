<?php

namespace App\Exceptions;

use Exception;

class ErrorMessageException extends Exception
{
    protected $jsonResponse = false;

    public function __construct($message, $code = 0, $jsonResponse = false)
    {
        parent::__construct($message, $code);
        $this->jsonResponse = $jsonResponse;
    }

    public function render($request)
    {
        if ($this->jsonResponse) {
            return response()->json(['error' => $this->getMessage()], $this->code);
        }

        return response()->view('errors.error', ['message' => $this->getMessage()], $this->code);
    }
}
