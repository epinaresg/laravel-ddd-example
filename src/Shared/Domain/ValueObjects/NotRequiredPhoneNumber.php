<?php

namespace Src\Shared\Domain\ValueObjects;

use Illuminate\Support\Facades\Validator;
use Src\Shared\Domain\Exceptions\InvalidPhoneNumberFormatException;

class NotRequiredPhoneNumber
{
    private $value;

    public function __construct(?string $phoneNumber)
    {
        if (is_string($phoneNumber)) {
            $this->ensureIsValid($phoneNumber);
        }

        $this->value = $phoneNumber;
    }

    private function ensureIsValid(string $phoneNumber): void
    {
        $validator = Validator::make(['phone_code' => $phoneNumber], ['phone_code' => 'numeric']);

        if ($validator->fails()) {
            throw new InvalidPhoneNumberFormatException();
        }
    }

    public function value(): ?string
    {
        return $this->value;
    }
}
