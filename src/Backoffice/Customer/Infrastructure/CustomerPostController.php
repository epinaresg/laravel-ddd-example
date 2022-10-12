<?php

namespace Src\Backoffice\Customer\Infrastructure;

use Illuminate\Http\JsonResponse;
use Src\Backoffice\Customer\Application\CustomerCreateUseCase;
use Src\Backoffice\Customer\Infrastructure\Repositories\EloquentCustomerRepository;

final class CustomerPostController
{
    private $repository;

    public function __construct(EloquentCustomerRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke()
    {
        $customerAccountCreate = new CustomerCreateUseCase($this->repository);

        $customerAccountCreate->__invoke(
            //request()->user()->account,
            request()->email,
            request()->first_name,
            request()->last_name,
            request()->password,
            request()->business_name,
            request()->business_number,
            request()->business_address,
            request()->business_phone_code,
            request()->business_phone_number,
            request()->business_email,
            request()->contact_first_name,
            request()->contact_last_name,
            request()->contact_phone_code,
            request()->contact_phone_number,
            request()->contact_email,
        );

        return response()->json([], JsonResponse::HTTP_CREATED);
    }
}
