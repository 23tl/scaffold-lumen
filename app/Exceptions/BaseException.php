<?php

namespace App\Exceptions;

use Exception;


class BaseException extends Exception
{
    public const ERRORS = [
        'message' => '程序发生异常',
        'code' => 10000
    ];

    public function __construct()
    {
        parent::__construct(static::ERRORS['message'], static::ERRORS['code'], null);
    }
}
