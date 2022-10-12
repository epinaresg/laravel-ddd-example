<?php

namespace Src\Shared\Domain\ValueObjects;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Src\Shared\Domain\Exceptions\InvalidPasswordMinLengthException;

class NotRequiredPassword
{
    private $value;

    public function __construct(?string $password)
    {
        if (is_string($password)) {
            $this->ensureHasMinLength($password);
            $password = Hash::make($password);
        }

        $this->value = $password;
    }

    private function ensureHasMinLength(string $password): void
    {
        $validator = Validator::make(['password' => $password], ['password' => 'min:8']);

        if ($validator->fails()) {
            throw new InvalidPasswordMinLengthException();
        }
    }

    public function value(): ?string
    {
        return $this->value;
    }
}
