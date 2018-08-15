<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Exception;

class Fail extends Controller
{
    /**
     * Throw a test exception.
     *
     * @return Response
     */
    public function __invoke()
    {
        throw new Exception('This is a test exception raised from crywolf-laravel.');
    }
}
