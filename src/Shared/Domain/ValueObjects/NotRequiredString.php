<?php

namespace Src\Shared\Domain\ValueObjects;

class NotRequiredString
{
    private $value;

    public function __construct(?string $string)
    {
        $this->value = $string;
    }

    public function value(): ?string
    {
        return $this->value;
    }
}
