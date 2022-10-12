<?php

namespace Src\Shared\Domain\ValueObjects;

use Illuminate\Support\Facades\Validator;
use Src\Shared\Domain\Exceptions\InvalidEmailFormatException;

class RequiredString
{
    private $value;

    public function __construct(string $string)
    {
        $this->ensureIsValid($string);
        $this->value = $string;
    }

    private function ensureIsValid(string $string): void
    {
        $validator = Validator::make(['string' => $string], ['string' => 'required|string']);

        if ($validator->fails()) {
            throw new InvalidEmailFormatException();
        }
    }

    public function value(): string
    {
        return $this->value;
    }
}
