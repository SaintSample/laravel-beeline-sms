<?php

namespace Illuminate\Testing\Constraints;

use PHPUnit\Framework\Constraint\Constraint;
use PHPUnit\Runner\Version;

if (str_starts_with(Version::series(), '10')) {
    class NotSoftDeletedInDatabase extends Constraint
    {
        use Concerns\NotSoftDeletedInDatabase;
    }
} else {
    readonly class NotSoftDeletedInDatabase extends Constraint
    {
        use Concerns\NotSoftDeletedInDatabase;
    }
}