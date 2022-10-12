<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Src\Backoffice\Customer\Infrastructure\CustomerPostController as InfrastructureCustomerPostController;

final class CustomerPostController extends Controller
{
    private $controller;

    public function __construct(InfrastructureCustomerPostController $controller)
    {
        $this->controller = $controller;
    }
    public function __invoke()
    {
        $this->controller->__invoke();

        return response()->json([], JsonResponse::HTTP_CREATED);
    }
}
