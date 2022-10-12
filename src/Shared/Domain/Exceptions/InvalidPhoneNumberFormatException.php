<?php

namespace Src\Shared\Domain\Exceptions;

use Illuminate\Http\JsonResponse;

class InvalidPhoneNumberFormatException extends \DomainException
{
    public function __construct()
    {
        parent::__construct(__('api.invalid_phone_number_format'), JsonResponse::HTTP_UNPROCESSABLE_ENTITY);
    }
}
