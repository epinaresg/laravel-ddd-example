<?php

namespace Src\Shared\Domain\ValueObjects;

use Illuminate\Support\Facades\Validator;
use Src\Shared\Domain\Exceptions\InvalidPhoneCodeFormatException;

class NotRequiredPhoneCode
{
    private $value;

    public function __construct(?string $phoneCode)
    {
        if (is_string($phoneCode)) {
            $this->ensureIsValid($phoneCode);
        }

        $this->value = $phoneCode;
    }

    private function ensureIsValid(string $phoneCode): void
    {
        $validator = Validator::make(['phone_code' => $phoneCode], ['phone_code' => 'regex:/^\+[0-9-]+$/s']);

        if ($validator->fails()) {
            throw new InvalidPhoneCodeFormatException();
        }
    }

    public function value(): ?string
    {
        return $this->value;
    }
}
