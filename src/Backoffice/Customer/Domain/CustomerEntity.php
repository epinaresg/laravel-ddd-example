<?php

namespace Src\Backoffice\Customer\Domain;

use App\Models\Account;
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

final class CustomerEntity
{
    //private $account;
    private $email;
    private $firstName;
    private $lastName;
    private $password;
    private $businessName;
    private $businessNumber;
    private $businessAddress;
    private $businessPhoneCode;
    private $businessPhoneNumber;
    private $businessEmail;
    private $contactFirstName;
    private $contactLastName;
    private $contactPhoneCode;
    private $contactPhoneNumber;
    private $contactEmail;

    public function __construct(
        //Account $account,
        CustomerEmail $email,
        CustomerFirstName $firstName,
        CustomerLastName $lastName,
        CustomerPassword $password,
        ?CustomerBusinessName $businessName,
        ?CustomerBusinessNumber $businessNumber,
        ?CustomerBusinessAddress $businessAddress,
        ?CustomerBusinessPhoneCode $businessPhoneCode,
        ?CustomerBusinessPhoneNumber $businessPhoneNumber,
        ?CustomerBusinessEmail $businessEmail,
        ?CustomerContactFirstName $contactFirstName,
        ?CustomerContactLastName $contactLastName,
        ?CustomerContactPhoneCode $contactPhoneCode,
        ?CustomerContactPhoneNumber $contactPhoneNumber,
        ?CustomerContactEmail $contactEmail
    ) {
        //$this->account = $account;
        $this->email = $email;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->password = $password;
        $this->businessName = $businessName;
        $this->businessNumber = $businessNumber;
        $this->businessAddress = $businessAddress;
        $this->businessPhoneCode = $businessPhoneCode;
        $this->businessPhoneNumber = $businessPhoneNumber;
        $this->businessEmail = $businessEmail;
        $this->contactFirstName = $contactFirstName;
        $this->contactLastName = $contactLastName;
        $this->contactPhoneCode = $contactPhoneCode;
        $this->contactPhoneNumber = $contactPhoneNumber;
        $this->contactEmail = $contactEmail;
    }

    public function account(): Account
    {
        return $this->account;
    }

    public function email(): CustomerEmail
    {
        return $this->email;
    }

    public function firstName(): CustomerFirstName
    {
        return $this->firstName;
    }

    public function lastName(): CustomerLastName
    {
        return $this->lastName;
    }

    public function password(): CustomerPassword
    {
        return $this->password;
    }

    public function businessName(): ?CustomerBusinessName
    {
        return $this->businessName;
    }

    public function businessNumber(): ?CustomerBusinessNumber
    {
        return $this->businessNumber;
    }

    public function businessAddress(): ?CustomerBusinessAddress
    {
        return $this->businessAddress;
    }

    public function businessPhoneCode(): ?CustomerBusinessPhoneCode
    {
        return $this->businessPhoneCode;
    }

    public function businessPhoneNumber(): ?CustomerBusinessPhoneNumber
    {
        return $this->businessPhoneNumber;
    }

    public function businessEmail(): ?CustomerBusinessEmail
    {
        return $this->businessEmail;
    }

    public function contactFirstName(): ?CustomerContactFirstName
    {
        return $this->contactFirstName;
    }

    public function contactLastName(): ?CustomerContactLastName
    {
        return $this->contactLastName;
    }

    public function contactPhoneCode(): ?CustomerContactPhoneCode
    {
        return $this->contactPhoneCode;
    }

    public function contactPhoneNumber(): ?CustomerContactPhoneNumber
    {
        return $this->contactPhoneNumber;
    }

    public function contactEmail(): ?CustomerContactEmail
    {
        return $this->contactEmail;
    }
}
