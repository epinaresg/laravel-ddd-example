<?php

namespace Src\Backoffice\Customer\Domain\Contracts;

use Src\Backoffice\Customer\Domain\CustomerEntity;

interface CustomerRepositoryContract
{
    public function save(CustomerEntity $customerAccount): void;
}
