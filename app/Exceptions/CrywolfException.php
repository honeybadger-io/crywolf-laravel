<?php

namespace App\Exceptions;

use Exception;
use Honeybadger\Contracts\Reporter;

class CrywolfException extends Exception
{
    protected $honeybadgerResponse;

    public static function testException()
    {
        return new static('This is a test exception raised from crywolf-laravel.');
    }

    public function report()
    {
        $this->honeybadgerResponse = app(Reporter::class)
             ->notify($this, request());
    }

    public function render()
    {
        return redirect()
            ->back()
            ->with('success', $this->successMessage());
    }

    private function successMessage()
    {
        return sprintf(
            'Exception sent! <a href="https://app.honeybadger.io/notice/%1$s">https://app.honeybadger.io/notice/%1$s</a>', 
            $this->honeybadgerResponse['id']
        );
    }
}
