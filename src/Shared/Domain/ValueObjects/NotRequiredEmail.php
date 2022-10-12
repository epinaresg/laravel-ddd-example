<?php

namespace Src\Shared\Domain\ValueObjects;

use Illuminate\Support\Facades\Validator;
use Src\Shared\Domain\Exceptions\InvalidEmailFormatException;

class NotRequiredEmail
{
    private $value;

    public function __construct(?string $email)
    {
        if (is_string($email)) {
            $this->ensureIsValid($email);
        }

        $this->value = $email;
    }

    private function ensureIsValid(string $email): void
    {
        $validator = Validator::make(['email' => $email], ['email' => 'email']);

        if ($validator->fails()) {
            throw new InvalidEmailFormatException();
        }
    }

    public function value(): ?string
    {
        return $this->value;
    }
}
