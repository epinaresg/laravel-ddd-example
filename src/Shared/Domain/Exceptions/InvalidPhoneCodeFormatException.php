<?php

namespace Src\Shared\Domain\Exceptions;

use Illuminate\Http\JsonResponse;

class InvalidPhoneCodeFormatException extends \DomainException
{
    public function __construct()
    {
        parent::__construct(__('api.invalid_phone_code_format'), JsonResponse::HTTP_UNPROCESSABLE_ENTITY);
    }
}
