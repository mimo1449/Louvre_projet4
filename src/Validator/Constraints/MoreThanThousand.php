<?php

namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
* @Annotation
*/
class MoreThanThousand extends Constraint
{
    public function getTargets()
    {
        return self::CLASS_CONSTRAINT;
    }
}