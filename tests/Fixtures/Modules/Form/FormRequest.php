<?php

declare(strict_types=1);

namespace Tests\Tempest\Fixtures\Modules\Form;

use Tempest\Router\IsRequest;
use Tempest\Router\Request;
use Tempest\Validation\Rules\Between;
use Tempest\Validation\Rules\NotEmpty;

final class FormRequest implements Request
{
    use IsRequest;

    #[NotEmpty]
    public string $name;

    #[Between(min: 10, max: 15)]
    public int $number;
}
