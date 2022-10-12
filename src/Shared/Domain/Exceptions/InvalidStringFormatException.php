<?php

namespace Src\Shared\Domain\Exceptions;

use Illuminate\Http\JsonResponse;

class InvalidEmailFormatException extends \DomainException
{
    public function __construct()
    {
        parent::__construct(__('api.invalid_email_format'), JsonResponse::HTTP_UNPROCESSABLE_ENTITY);
    }
}
