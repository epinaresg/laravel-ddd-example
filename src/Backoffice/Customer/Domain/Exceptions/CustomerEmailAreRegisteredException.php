<?php

namespace Src\Backoffice\Customer\Domain\Exceptions;

use Illuminate\Http\JsonResponse;

class CustomerEmailAreRegisteredException extends \DomainException
{
    public function __construct()
    {
        parent::__construct(__('api.customer_email_are_registered'), JsonResponse::HTTP_UNPROCESSABLE_ENTITY);
    }
}
