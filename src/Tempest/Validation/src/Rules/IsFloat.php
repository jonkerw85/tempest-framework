<?php

declare(strict_types=1);

namespace Tempest\Validation\Rules;

use Attribute;
use Tempest\Validation\Rule;

#[Attribute]
final readonly class IsFloat implements Rule
{
    public function __construct(
        private bool $orNull = false,
    ) {
    }

    public function isValid(mixed $value): bool
    {
        if ($this->orNull && $value === null) {
            return true;
        }

        return is_float($value);
    }

    public function message(): string
    {
        return 'Value should be a float';
    }
}
