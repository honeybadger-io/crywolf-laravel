<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Exceptions\CrywolfException;

class Fail extends Controller
{
    /**
     * Throw a test exception.
     *
     * @return Response
     */
    public function __invoke()
    {
        throw CrywolfException::testException();
    }
}
