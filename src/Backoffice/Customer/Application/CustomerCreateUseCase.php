<?php

namespace Src\Backoffice\Customer\Application;

use App\Models\Account;
use Src\Backoffice\Customer\Domain\Contracts\CustomerRepositoryContract;
use Src\Backoffice\Customer\Domain\CustomerEntity;
use Src\Backoffice\Customer\Domain\ValueObjects\CustomerBusinessAddress;
use Src\Backoffice\Customer\Domain\ValueObjects\CustomerBusinessEmail;
use Src\Backoffice\Customer\Domain\ValueObjects\CustomerBusinessName;
use Src\Backoffice\Customer\Domain\ValueObjects\CustomerBusinessNumber;
use Src\Backoffice\Customer\Domain\ValueObjects\CustomerBusinessPhoneCode;
use Src\Backoffice\Customer\Domain\ValueObjects\CustomerBusinessPhoneNumber;
use Src\Backoffice\Customer\Domain\ValueObjects\CustomerContactEmail;
use Src\Backoffice\Customer\Domain\ValueObjects\CustomerContactFirstName;
use Src\Backoffice\Customer\Domain\ValueObjects\CustomerContactLastName;
use Src\Backoffice\Customer\Domain\ValueObjects\CustomerContactPhoneCode;
use Src\Backoffice\Customer\Domain\ValueObjects\CustomerContactPhoneNumber;
use Src\Backoffice\Customer\Domain\ValueObjects\CustomerEmail;
use Src\Backoffice\Customer\Domain\ValueObjects\CustomerFirstName;
use Src\Backoffice\Customer\Domain\ValueObjects\CustomerLastName;
use Src\Backoffice\Customer\Domain\ValueObjects\CustomerPassword;

final class CustomerCreateUseCase
{
    private $repository;

    public function __construct(CustomerRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(
        //Account $account,
        string $email,
        string $firstName,
        string $lastName,
        ?string $password,
        ?string $businessName,
        ?string $businessNumber,
        ?string $businessAddress,
        ?string $businessPhoneCode,
        ?string $businessPhoneNumber,
        ?string $businessEmail,
        ?string $contactFirstName,
        ?string $contactLastName,
        ?string $contactPhoneCode,
        ?string $contactPhoneNumber,
        ?string $contactEmail
    ): void {
        $customerAccount = new CustomerEntity(
            //$account,
            new CustomerEmail($email),
            new CustomerFirstName($firstName),
            new CustomerLastName($lastName),
            new CustomerPassword($password),
            new CustomerBusinessName($businessName),
            new CustomerBusinessNumber($businessNumber),
            new CustomerBusinessAddress($businessAddress),
            new CustomerBusinessPhoneCode($businessPhoneCode),
            new CustomerBusinessPhoneNumber($businessPhoneNumber),
            new CustomerBusinessEmail($businessEmail),
            new CustomerContactFirstName($contactFirstName),
            new CustomerContactLastName($contactLastName),
            new CustomerContactPhoneCode($contactPhoneCode),
            new CustomerContactPhoneNumber($contactPhoneNumber),
            new CustomerContactEmail($contactEmail)
        );

        $this->repository->save($customerAccount);
    }
}
