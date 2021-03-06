<?php

namespace App\Domain\Core\Exceptions;

use Illuminate\Http\Response;

class UnauthorizeException extends Exception
{
    /**
     * UnauthorizeException constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->message = config('constants.ERROR_MESSAGE.UNAUTHORIZED');
        $this->code = Response::HTTP_UNAUTHORIZED;
    }
}