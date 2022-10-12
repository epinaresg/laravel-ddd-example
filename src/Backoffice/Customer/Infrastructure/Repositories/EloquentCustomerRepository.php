<?php

namespace Src\Backoffice\Customer\Infrastructure\Repositories;

use App\Models\Customer;
use Src\Backoffice\Customer\Domain\Contracts\CustomerRepositoryContract;
use Src\Backoffice\Customer\Domain\CustomerEntity;
use Src\Backoffice\Customer\Domain\Exceptions\CustomerEmailAreRegisteredException;

final class EloquentCustomerRepository implements CustomerRepositoryContract
{
    public function __construct()
    {
        $this->eloquentCustomerModel = new Customer();
    }

    public function save(CustomerEntity $customerEntity): void
    {
        if ($this->searchByCustomerIdAndAccountId($customerEntity->email()->value())) {
            throw new CustomerEmailAreRegisteredException();
        }

        $data = [
            'email' => $customerEntity->email()->value(),

            'first_name' => $customerEntity->firstName()->value(),
            'last_name'  => $customerEntity->lastName()->value(),
            'password' => $customerEntity->password()->value(),

            'business_name'  => $customerEntity->businessName()->value(),
            'business_number' => $customerEntity->businessNumber()->value(),
            'business_address'  => $customerEntity->businessAddress()->value(),
            'business_phone_code'  => $customerEntity->businessPhoneCode()->value(),
            'business_phone_number'  => $customerEntity->businessPhoneNumber()->value(),
            'business_email' => $customerEntity->businessEmail()->value(),

            'contact_first_name'  => $customerEntity->contactFirstName()->value(),
            'contact_last_name' => $customerEntity->contactLastName()->value(),
            'contact_phone_code' => $customerEntity->contactPhoneCode()->value(),
            'contact_phone_number' => $customerEntity->contactPhoneNumber()->value(),
            'contact_email'  => $customerEntity->contactEmail()->value(),

        ];

        $this->eloquentCustomerModel->firstOrCreate($data);
    }

    private function searchByCustomerIdAndAccountId(string $email): ?Customer
    {
        return $this->eloquentCustomerModel->where('email', $email)->first();
    }
}
